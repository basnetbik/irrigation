<?php
class District extends CI_Controller {

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
            if ($this->form_validation->run('district') === FALSE)
            {
                $this->load->view('district/update', $data);
            }
            else
            {
                $config = array(
                    'file_name' => $district,
                    'upload_path' => "./static/images/uploads/",
                    'allowed_types' => "gif|jpg|png|jpeg|pdf",
                    'overwrite' => TRUE,
                    'max_size' => "204800000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                    'max_height' => "30000",
                    'max_width' => "60000"
                );
                $this->load->library('upload', $config);

                $msg = '';
                if($this->upload->do_upload('image'))
                {
                    $data = array('upload_data' => $this->upload->data());
                }
                else
                {
                    $error = array('error' => $this->upload->display_errors());
                    $msg .= $error['error'];
                }

                $this->district_model->update_district($district);
                $msg .= 'District successfully updated.';
                $this->message->success($this, $msg);
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