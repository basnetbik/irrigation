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
        $data['districts'] = $this->districts_model->get_districts();
        $data['status'] = [
            "completed" => 35,
            "under_construction" => 70,
            "surveyed" => 50,
            "proposed" => 15,
        ];

        $this->load->view('templates/header');
        $this->load->view('districts', $data);
        $this->load->view('templates/footer');
    }

    public function projects($district)
    {
        $data['district'] = $district;
        $data['projects'] = $this->districts_model->get_projects($district);
        $data['districts'] = $this->districts_model->get_districts_list();

        $this->load->view('templates/header');
        $this->load->view('filter', $data);
        $this->load->view('list', $data);
        $this->load->view('templates/footer');
    }

    public function details($project)
    {
        $data['project'] = $project;
        $data['details'] = $this->districts_model->get_project_details($project);
        $data['districts'] = $this->districts_model->get_districts_list();

        $this->load->view('templates/header');
        $this->load->view('filter', $data);
        $this->load->view('details', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['districts'] = $this->districts_model->get_districts_list();

        $this->load->view('templates/header');
        $this->load->view('add', $data);
        $this->load->view('templates/footer');
    }

}