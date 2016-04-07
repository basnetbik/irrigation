<?php
class District_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get_district_details($district)
    {
        $this->db->select('*');
        $this->db->from('district');
        $this->db->where('district', $district);

        $query = $this->db->get();
        $details = $query->result_array();

        if( empty( $details ) )
        {
            return array('district' => '', 'url' => '');
        }
        return $details[0];
    }

    public function update_district($district)
    {
        $data = array(
            'url' => $this->input->post('url')
        );

        $this->db->where('district', $district);
        $this->db->update('district', $data);
    }

    public function get_districts_list()
    {
        $list = array(
            'Bhaktapur',
            'Dhading',
            'Lalitpur',
            'Kathmandu',
            'Kavrepalanchok',
            'Nuwakot',
            'Rasuwa',
            'Sindhupalchok',
            'Bara',
            'Chitwan',
            'Makwanpur',
            'Parsa',
            'Rautahat',
            'Dhanusa',
            'Dolakha',
            'Mahottari',
            'Ramechhap',
            'Sarlahi',
            'Sindhuli'
        );
        return $list;
    }

}