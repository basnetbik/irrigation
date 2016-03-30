<?php
class Districts_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get_districts($slug = FALSE)
    {
//        if ($slug === FALSE)
//        {
//            $query = $this->db->get('districts');
//            return $query->result_array();
//        }

//        $query = $this->db->get_where('districts', array('slug' => $slug));
//        return $query->row_array();
        $list = [
              ["s_no" => "1", "district" => "Kathmandu", "total_projects" => "fruit", "area_covered" => 1.22 ],
              ["s_no" => "2", "district" => "Column content", "total_projects" => "fruit", "area_covered" => 1.22 ],
              ["s_no" => "3", "district" => "Column content", "total_projects" => "fruit", "area_covered" => 1.22 ],
              ["s_no" => "4", "district" => "Column content", "total_projects" => "fruit", "area_covered" => 1.22 ],
              ["s_no" => "5", "district" => "Column content", "total_projects" => "fruit", "area_covered" => 1.22 ],
              ["s_no" => "6", "district" => "Column content", "total_projects" => "fruit", "area_covered" => 1.22 ],
              ["s_no" => "7", "district" => "Column content", "total_projects" => "fruit", "area_covered" => 1.22 ],
              ["s_no" => "8", "district" => "Column content", "total_projects" => "fruit", "area_covered" => 1.22 ],
            ];
        return $list;
    }

    public function get_projects($district)
    {
        $list = [
            ["s_no" => "1", "name" => "Test Project 1", "address" => "Kathmandu", "area_covered" => 1.22 ],
            ["s_no" => "2", "name" => "Test Project", "address" => "Kathmandu", "area_covered" => 1.22 ],
            ["s_no" => "3", "name" => "Test Project", "address" => "Kathmandu", "area_covered" => 1.22 ],
            ["s_no" => "4", "name" => "Test Project", "address" => "Kathmandu", "area_covered" => 1.22 ],
            ["s_no" => "5", "name" => "Test Project", "address" => "Kathmandu", "area_covered" => 1.22 ],
            ["s_no" => "6", "name" => "Test Project", "address" => "Kathmandu", "area_covered" => 1.22 ],
            ["s_no" => "7", "name" => "Test Project", "address" => "Kathmandu", "area_covered" => 1.22 ],
            ["s_no" => "8", "name" => "Test Project", "address" => "Kathmandu", "area_covered" => 1.22 ]
        ];
        return $list;
    }

    public function get_districts_list()
    {
        $list = [
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
        ];
        return $list;
    }

    public function get_project_details($project)
    {
        $details = [
            "name" => 'Narayani Irrigation Project',
            "address" => 'Bharatpur-1, Chitwan',
            "area_covered" => "43,000 Hectars",
            "location" => "34.90909,567.9787",
            "command_area" => "54 msl",
            "canal_length" => "56,000 km",
            "population_benefited" => "60,000",
            "household" => "4500"
        ];

        return $details;
    }
}