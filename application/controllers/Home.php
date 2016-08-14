<?php
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->model('project_model');
        
        $this->load->library("operations");
    }


    public function index()
    {
        $summary = $this->project_model->get_projects_summary();
        $data['status'] = $summary['status_summary'];
        $data['districts'] = $summary['districts_summary'];

        $this->operations->header($this);
        $this->load->view('index', $data);
        $this->load->view('templates/footer');


    }

}