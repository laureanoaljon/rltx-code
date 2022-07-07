<?php

class Sourcesofincome extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('rbincome');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '1997';
        $year_end = '2017';
        $column_index = 2;
        
        $temp_array = array();
        
        // Rice Farming Present
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['rice_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '1');
        $data['rice_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '0');
        $data['rice_rainfed'] = $temp_array;
        $temp_array = array();
        
        // Rice Farming Yearly        
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['rice_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['rice_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['rice_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['rice_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
        
        // Vegetable Farming
        $column_index = 3;
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['veg_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['veg_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['veg_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['veg_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
        
        // Self-Employed
        $column_index = 4;
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['self_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['self_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['self_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['self_all_provincial'] = json_encode($temp_array);
        $temp_array = array();

        // Livestock
        $column_index = 5;
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['live_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['live_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['live_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['live_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
    
        // Salary
        $column_index = 6;
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['salary_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['salary_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['salary_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['salary_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
        
        // Other Source
        $column_index = 7;
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['other_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['other_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['other_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['other_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
        
        $this->load->view('sourcesofincome_index', $data);
    }
    
}

?>