<?php

class Schooling extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('socio');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '1997';
        $year_end = '2017';
        $column_index = 8;
        
        $temp_array = array();
        
        // Age Present
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['mean_age_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '1');
        $data['mean_age_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '0');
        $data['mean_age_rainfed'] = $temp_array;
        $temp_array = array();

        // Age Yearly
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['mean_age_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['mean_age_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['mean_age_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_start, NULL, $year_end);
        $data['mean_age_provincial'] = $temp_array;
        $temp_array = array();
        
        $this->load->view('schooling_index', $data);
    }
    
}

?>