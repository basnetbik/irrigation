<?php
class District extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url_helper');

        $this->load->model('district_model');
        $this->load->library("message");
        $this->load->library("operations");
    }

    public function update($district)
    {
        $is_admin = $this->operations->header($this);
        $this->operations->admin_required($is_admin);

        $this->load->helper('form');
        $this->load->library('form_validation');

        $details = $this->district_model->get_district_details($district);

        if (!$details) {
            $this->message->warning($this, 'Update district for non-existing district.');
            redirect('districts');
        }

        $data['details'] = $details;
        $data['district'] = $district;

        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $this->form_validation->set_error_delimiters('<div class="error" style="color: red;">', '</div>');
            $this->form_validation->set_rules('url', 'Map url', 'required');
            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('district/update', $data);

            }
            else
            {
                $this->district_model->update_district($district);
                $this->message->success($this, 'Map URL successfully updated.');
                redirect('districts');
            }
        }
        else
        {
            $this->load->view('district/update', $data);
        }

        $this->load->view('templates/footer');
    }
    
}