<?php
class Admin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->library('encryption');

        $this->load->model('crud_model');

        $this->table = 'admin';
    }

    public function validate_admin($username, $password=NULL)
    {
        $select = '*';
        $specific_filter = array('username' => $username);
        if ($password != NULL)
        {
            $encrypted_password = $this->operations->encrypt_password($password);
            $specific_filter['password'] = $encrypted_password;
        }

        $result = $this->crud_model->read($this->table, $select, $specific_filter);
        if (!empty($result)) {
            $admin_data = array(
                'username' => $username,
                'is_admin' => true
            );
            $this->session->set_userdata($admin_data);
            return true;
        } else {
            return false;
        }
    }

}