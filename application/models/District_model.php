<?php
class District_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('crud_model');

        $this->table = 'district';
    }

    public function get_district_details($district)
    {
        $select = '*';
        $specific_filter = array('district' => $district);
        $details = $this->crud_model->read($this->table, $select, $specific_filter);

        if (empty( $details )) {
            return False;
        } else {
            return $details[0];
        }
    }

    public function update_district($district)
    {
        $data = array('url' => $this->input->post('url', '', ''));
        $specific_filter = array('district' => $district);
        $this->crud_model->update($this->table, $specific_filter, $data);
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