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
            $that->load->view('admin/header', $data);

            return true;
        }

        return false;
    }

    public function admin_required($is_admin)
    {
        if (!$is_admin)
        {
            redirect('');
        }
    }

    public function encrypt_password($password, $key="5b22ebe0804144a79c94bca1231d782f"){

        $rotations = 3;
        $salt = hash('sha256', "0b6210457aa544eaba2c317c3230c0cf" . strtolower($key));

        $hash = $salt . $password;

        for ( $i = 0; $i < $rotations; $i ++ ) {
            $hash = hash('sha256', $hash);
        }

        return $salt . $hash;
    }
}
