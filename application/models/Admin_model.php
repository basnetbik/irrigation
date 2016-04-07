<?php
class Admin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
        $this->load->library('encryption');
    }

    public function validate_admin($username, $password=NULL)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);
        if ($password != NULL)
        {
            $encrypted_password = $this->operations->encrypt_password($password);
            $this->db->where('password', $encrypted_password);
        }

        $query = $this->db->get();
        if ($query->num_rows() > 0){
            $admin_data = array(
                'username' => $username,
                'is_admin' => true
            );
            $this->session->set_userdata($admin_data);
            return true;
        }
        else
        {
            return false;
        }
    }

}