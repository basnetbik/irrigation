<?php
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url_helper');
        $this->load->library("operations");
    }


    public function index()
    {
        $this->operations->header($this);
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

}