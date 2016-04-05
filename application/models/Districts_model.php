<?php
class Districts_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function get_projects_summary()
    {
        $this->db->select('district, status, command_area');
        $this->db->from('project');
        $query = $this->db->get();
        $all_projects = $query->result_array();

        $districts_list = $this->get_districts_list();
        $districts_dict = array();
        for($i=0; $i<count($districts_list); $i++)
        {
            $districts_dict[$districts_list[$i]] = array(
                's_no' => $i+1,
                'district' => $districts_list[$i],
                'total_projects' => 0,
                'cultivable_command_area' => 0,
                'total_irrigated_area' => 0
            );
        }

        $status_list = $this->get_status_list();
        $status_dict = array();
        for($i=0; $i<count($status_list); $i++)
        {
            $status_dict[$status_list[$i]] = 0;
        }

        for($i=0; $i<count($all_projects); $i++)
        {
            $district = $all_projects[$i]['district'];
            $command_area = $all_projects[$i]['command_area'];
            $status = $all_projects[$i]['status'];
            $districts_dict[$district]['total_projects'] += 1;
            $districts_dict[$district]['cultivable_command_area'] += $command_area;
            $districts_dict[$district]['total_irrigated_area'] += $command_area;

            $status_dict[$status] += 1;
        }

        return array(
            'districts_summary' => $districts_dict,
            'status_summary' => $status_dict
        );
    }

    public function get_projects($district_filter=NULL, $status_filter=NULL, $name_filter=NULL)
    {
        $this->db->select('name, status, command_area, population, id, latitude, longitude, district');
        $this->db->from('project');
        if($district_filter != NULL && $district_filter != 'all')
        {
            $this->db->where('district', $district_filter);
        }
        if($status_filter != NULL && $status_filter != 'all')
        {
            $this->db->where('status', $status_filter);
        }
        if($name_filter != NULL && trim($name_filter) != '')
        {
            $this->db->like('name', $name_filter);
        }
        $query = $this->db->get();
        $filtered_projects = $query->result_array();

        return $filtered_projects;
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

    public function get_project_details($project_id)
    {
        $this->db->select('*');
        $this->db->from('project');
        $this->db->where('id', $project_id);
        $query = $this->db->get();
        $details = $query->result_array();

        return $details[0];
    }

    public function get_status_list()
    {
        $status_list = array(
            'Construction Completed',
            'Under Construction',
            'Pipeline Project'
        );

        return $status_list;
    }

    public function set_project()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'vdc' => $this->input->post('vdc'),
            'district' => $this->input->post('district'),
            'latitude' => $this->input->post('latitude'),
            'longitude' => $this->input->post('longitude'),
            'command_area' => $this->input->post('command_area'),
            'source_name' => $this->input->post('source_name'),
            'source_type' => $this->input->post('source_type'),
            'main_canal_length' => $this->input->post('main_canal_length'),
            'design_discharge_intake' => $this->input->post('design_discharge_intake'),
            'population' => $this->input->post('population'),
            'household' => $this->input->post('household'),
            'total_project_cost' => $this->input->post('total_project_cost'),
            'cost_per_ha' => $this->input->post('cost_per_ha'),
            'eirr' => $this->input->post('eirr'),
            'status' => $this->input->post('status'),
        );

        return $this->db->insert('project', $data);
    }
}