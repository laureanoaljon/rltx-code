<?php

class Tenurialstatus extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('farmprofile');
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
        
        // Owned Present
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['owned_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '1');
        $data['owned_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '0');
        $data['owned_rainfed'] = $temp_array;
        $temp_array = array();
        
        // Owned Yearly        
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['owned_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['owned_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['owned_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['owned_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 3;
        
        // Amort Yearly        
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['amort_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['amort_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['amort_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['amort_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
        
        // Lessee Yearly
        $column_index = 4;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['lessee_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['lessee_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['lessee_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['lessee_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
        
        // Tenant
        $column_index = 5;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['ten_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['ten_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['ten_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['ten_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
    
        // Other Source
        $column_index = 6;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['other_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['other_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['other_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['other_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
        
        $this->load->view('tenurialstatus_index', $data);
    }
    
}

?>