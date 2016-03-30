<?php
class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('admin_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/footer');
    }

}