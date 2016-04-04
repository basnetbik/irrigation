<?php
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

}