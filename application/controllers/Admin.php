<?php
class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->library("session");

        $this->load->model('admin_model');
        $this->load->library("message");
        $this->load->library("operations");
    }

    public function login()
    {
        if ($this->session->userdata('is_admin') == TRUE)
        {
            redirect('districts');
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
            if ($this->form_validation->run('admin') === TRUE)
            {
                $username = $this->input->post('username', '', '');
                $password = $this->input->post('password', '', '');
                $validate_status = $this->admin_model->validate_admin($username, $password);
                if ($validate_status)
                {
                    $this->message->success($this, 'Admin successfully logged in.');
                    redirect('districts');
                }
                else
                {
                    $this->message->error($this, 'Invalid login credentials.');
                }
            }

        }

        $this->operations->header($this);
        $this->load->view('admin/login');
        $this->load->view('templates/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }

}