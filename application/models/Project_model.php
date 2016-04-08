<?php
class Project_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('district_model');
        $this->load->model('crud_model');

        $this->table = 'project';
    }

    public function get_projects_summary()
    {
        $select = 'district, status, command_area';
        $all_projects = $this->crud_model->read($this->table, $select);

        $districts_list = $this->district_model->get_districts_list();
        $districts_dict = array();
        for ($i=0; $i<count($districts_list); $i++) {
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
        for($i=0; $i<count($status_list); $i++) {
            $status_dict[$status_list[$i]] = 0;
        }

        for($i=0; $i<count($all_projects); $i++) {
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
        $select = 'name, status, command_area, population, id, latitude, longitude, district';
        $specific_filter = array();
        $similar_filter = array();

        if ($district_filter != NULL && $district_filter != 'all') {
            $specific_filter['district'] = $district_filter;
        }

        if ($status_filter != NULL && $status_filter != 'all') {
            $specific_filter['status'] = $status_filter;
        }

        if ($name_filter != NULL && trim($name_filter) != '') {
            $similar_filter['name'] = $name_filter;
        }

        $filtered_projects = $this->crud_model->read($this->table, $select, $specific_filter, $similar_filter);
        return $filtered_projects;
    }

    public function get_project_details($project_id)
    {
        $select = '*';
        $specific_filter = array('id' => $project_id);

        $details = $this->crud_model->read($this->table, $select, $specific_filter);

        if (empty($details)) {
            return False;
        } else {
            return $details[0];
        }
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

    public function project_data()
    {
        $data = array(
            'name' => $this->input->post('name', '', ''),
            'vdc' => $this->input->post('vdc', '', ''),
            'district' => $this->input->post('district', '', ''),
            'latitude' => $this->input->post('latitude', '', ''),
            'longitude' => $this->input->post('longitude', '', ''),
            'command_area' => $this->input->post('command_area', '', 0),
            'source_name' => $this->input->post('source_name', '', ''),
            'source_type' => $this->input->post('source_type', '', ''),
            'main_canal_length' => $this->input->post('main_canal_length', '', 0),
            'design_discharge_intake' => $this->input->post('design_discharge_intake', '', ''),
            'population' => $this->input->post('population', '', 0),
            'household' => $this->input->post('household', '', 0),
            'total_project_cost' => $this->input->post('total_project_cost', '', 0),
            'cost_per_ha' => $this->input->post('cost_per_ha', '', 0),
            'eirr' => $this->input->post('eirr', '', 0),
            'status' => $this->input->post('status', '', ''),
        );

        return $data;
    }

    public function new_project()
    {
        $data = array(
            'name' => '',
            'vdc' => '',
            'district' => '',
            'latitude' => '',
            'longitude' => '',
            'command_area' => 0,
            'source_name' => '',
            'source_type' => '',
            'main_canal_length' => 0,
            'design_discharge_intake' => '',
            'population' => 0,
            'household' => 0,
            'total_project_cost' => 0,
            'cost_per_ha' => 0,
            'eirr' => 0,
            'status' => '',
        );

        return $data;
    }

    public function set_project()
    {
        $data = $this->project_data();
        $this->crud_model->create($this->table, $data);
    }

    public function update_project($id)
    {
        $data = $this->project_data();
        $specific_filter = array('id' => $id);
        $this->crud_model->update($this->table, $specific_filter, $data);
    }

    public function delete_project($id)
    {
        $this->crud_model->delete($this->table, $id);
    }

}