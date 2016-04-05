<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Operations
{
    public function header($that)
    {
        $that->load->library('session');
        $that->load->model('admin_model');

        $that->load->view('templates/header');

        if ($that->session->userdata('is_admin') == true && $that->admin_model->validate_admin($that->session->userdata('username'))) {
            $data['admin'] = $that->session->userdata('username');
            $that->load->view('templates/admin_header', $data);

            return true;
        }

        return false;
    }
}
