<?php

class Farmsize extends CI_Controller {

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
        $column_index = 1;
        
        $temp_array = array();
        
        // Owned Present
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['avefarm_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '1');
        $data['avefarm_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '0');
        $data['avefarm_rainfed'] = $temp_array;
        $temp_array = array();
        
        $column_index = 7;
        
        // 1.00 or less        
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['one_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['one_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['one_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['one_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 8;
        
        // 1 - 2       
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['two_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['two_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['two_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['two_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
        
        // 2 - 3
        $column_index = 9;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['three_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['three_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['three_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['three_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
        
        // 3 or more
        $column_index = 10;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['more_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['more_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['more_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_start, '2', $year_end);
        $data['more_all_provincial'] = json_encode($temp_array);
        $temp_array = array();
        
        $this->load->view('farmsize_index', $data);
    }
    
}

?>