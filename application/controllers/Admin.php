<?php
class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->library("session");
        $this->load->helper('url_helper');
        $this->load->model('admin_model');
        $this->load->library("operations");
        $this->load->library("message");
    }

    public function login()
    {
        if ($this->session->userdata('is_admin') == TRUE)
        {
            redirect('');
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['error_msg'] = '';

        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $this->form_validation->set_error_delimiters('<div class="error" style="color: red;">', '</div>');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() === TRUE)
            {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
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
        $this->load->view('admin/login', $data);
        $this->load->view('templates/footer');
    }

    public function logout()
    {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('');
    }

}