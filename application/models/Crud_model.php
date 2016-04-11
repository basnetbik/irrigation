<?php
class Crud_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function create($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function read($table, $select='*', $specific_filter=NULL, $similar_filter=NULL)
    {
        $this->db->select($select);
        $this->db->from($table);

        if($specific_filter != NULL) {
            $this->db->where($specific_filter);
        }

        if($similar_filter != NULL) {
            $this->db->like($similar_filter);
        }

        $query = $this->db->get();

        return $query->result_array();
    }

    public function update($table, $specific_filter, $data)
    {
        $this->db->where($specific_filter);
        $this->db->update($table, $data);
    }

    public function delete($table, $primary_key, $value)
    {
        $this->db->where(array( $primary_key => $value ));
        $this->db->delete($table);
    }

}