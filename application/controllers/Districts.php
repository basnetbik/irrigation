<?php
class Districts extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('districts_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $summary = $this->districts_model->get_projects_summary();
        $data['status'] = $summary['status_summary'];
        $data['districts'] = $summary['districts_summary'];

        $this->load->view('templates/header');
        $this->load->view('districts', $data);
        $this->load->view('templates/footer');
    }

    public function projects($district)
    {
        $this->load->helper('form');

        $data['districts'] = $this->districts_model->get_districts_list();
        $data['status_list'] = $this->districts_model->get_status_list();

        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $district_filter = $this->input->post('district');
            $status_filter = $this->input->post('status');
            $name_filter = $this->input->post('name');
            $data['projects'] = $this->districts_model->get_projects($district_filter, $status_filter, $name_filter);
            $data['district'] = $district_filter;
            $data['status'] = $status_filter;
            $data['name'] = $name_filter;
        }
        else
        {
            $data['projects'] = $this->districts_model->get_projects($district);
            $data['district'] = $district;
            $data['status'] = 'all';
            $data['name'] = '';
        }

        $this->load->view('templates/header');
        $this->load->view('project/filter', $data);
        $this->load->view('project/list', $data);
        $this->load->view('templates/footer');
    }

    public function details($project_id)
    {
        $this->load->helper('form');

        $data['details'] = $this->districts_model->get_project_details($project_id);
        $data['districts'] = $this->districts_model->get_districts_list();
        $data['status_list'] = $this->districts_model->get_status_list();
        $data['district'] = $data['details']['district'];
        $data['status'] = 'all';
        $data['name'] = '';

        $this->load->view('templates/header');
        $this->load->view('project/filter', $data);
        $this->load->view('project/details', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['districts'] = $this->districts_model->get_districts_list();
        $data['status'] = $this->districts_model->get_status_list();
        $data['success'] = '';

        if ($this->input->server('REQUEST_METHOD') == 'POST')
        {
            $this->form_validation->set_error_delimiters('<div class="error" style="color: red;">', '</div>');

            $this->form_validation->set_rules('name', 'Name of the Project', 'required');
            $this->form_validation->set_rules('command_area', 'Command Area', 'integer');
            $this->form_validation->set_rules('main_canal_length', 'Main Canal Length', 'integer');
            $this->form_validation->set_rules('population', 'Population', 'integer');
            $this->form_validation->set_rules('household', 'Household', 'integer');
            $this->form_validation->set_rules('total_project_cost', 'Total Project Cost', 'integer');
            $this->form_validation->set_rules('cost_per_ha', 'Cost per Ha', 'integer');
            $this->form_validation->set_rules('eirr', 'EIRR', 'integer');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('project/add', $data);
                $this->load->view('templates/footer');

            }
            else
            {
                $this->districts_model->set_project();
                $this->load->view('templates/header');
                $this->load->view('success/add_project');
                $this->load->view('templates/footer');
            }
        }
        else
        {
            $this->load->view('templates/header');
            $this->load->view('project/add', $data);
            $this->load->view('templates/footer');
        }
    }

}