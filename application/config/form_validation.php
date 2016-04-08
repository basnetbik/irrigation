<?php

$config = array(
    'project' => array(
        array(
            'field' => 'name',
            'label' => 'Name of the Project',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'vdc',
            'label' => 'VDC/Municipality',
            'rules' => 'trim'
        ),
        array(
            'field' => 'district',
            'label' => 'District',
            'rules' => 'trim'
        ),
        array(
            'field' => 'latitude',
            'label' => 'Latitude',
            'rules' => 'trim'
        ),
        array(
            'field' => 'longitude',
            'label' => 'Longitude',
            'rules' => 'trim'
        ),
        array(
            'field' => 'command_area',
            'label' => 'Command Area',
            'rules' => 'integer',
            'errors' => array(
                'integer' => '%s must be a number.',
            ),
        ),
        array(
            'field' => 'source_name',
            'label' => 'Source Name',
            'rules' => 'trim'
        ),
        array(
            'field' => 'source_type',
            'label' => 'Source Type',
            'rules' => 'trim'
        ),
        array(
            'field' => 'main_canal_length',
            'label' => 'Main Canal Length',
            'rules' => 'integer',
        ),
        array(
            'field' => 'design_discharge_intake',
            'label' => 'Design Discharge Intake',
            'rules' => 'trim'
        ),
        array(
            'field' => 'population',
            'label' => 'Population',
            'rules' => 'integer',
        ),
        array(
            'field' => 'household',
            'label' => 'Household',
            'rules' => 'integer',
        ),
        array(
            'field' => 'total_project_cost',
            'label' => 'Total Project Cost',
            'rules' => 'integer',
        ),
        array(
            'field' => 'cost_per_ha',
            'label' => 'Cost per Ha',
            'rules' => 'integer'
        ),
        array(
            'field' => 'eirr',
            'label' => 'EIRR',
            'rules' => 'integer'
        ),
        array(
            'field' => 'status',
            'label' => 'Status',
            'rules' => 'trim'
        ),
    ),
    'admin' => array(
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required'
        )
    ),
    'district' => array(
        array(
            'field' => 'url',
            'label' => 'Map url',
            'rules' => array(
                'required',
                function($value) {
                    
                }
            )
        )
    )
);