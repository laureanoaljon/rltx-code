<?php

class Cropcalendar extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('cropsched');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_end = '2016';
        $column_index = 1;
        
        $temp_array = array();
        
        // Plant 1
        $temp_array = $this->cropsched->get_sched($location_code, $location_type, $column_index, $year_end, '2', NULL, true, true);
        $data['plt1_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_yearly($location_code, $location_type, $column_index, $year_end, '2', $year_end);
        $data['plt1_yearly'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end, false);
        $data['plt1_provincial'] = $temp_array;
        $temp_array = array();
        
        // Plant 2
        $column_index = 2;
        $temp_array = $this->cropsched->get_sched_yearly($location_code, $location_type, $column_index, $year_end, '2', $year_end);
        $data['plt2_yearly'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end, false);
        $data['plt2_provincial'] = $temp_array;
        $temp_array = array();
        
        // Plant 3
        $column_index = 3;
        $temp_array = $this->cropsched->get_sched($location_code, $location_type, $column_index, $year_end, '2', NULL, true, true);
        $data['plt3_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_yearly($location_code, $location_type, $column_index, $year_end, '2', $year_end);
        $data['plt3_yearly'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end, false);
        $data['plt3_provincial'] = $temp_array;
        $temp_array = array();
        
        // Harv 1
        $column_index = 4;
        $temp_array = $this->cropsched->get_sched($location_code, $location_type, $column_index, $year_end, '2', NULL, true, true);
        $data['hlt1_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_yearly($location_code, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hlt1_yearly'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end, false);
        $data['hlt1_provincial'] = $temp_array;
        $temp_array = array();
        
        // Harv 2
        
        $column_index = 5;
        
        $temp_array = $this->cropsched->get_sched_yearly($location_code, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hlt2_yearly'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end, false);
        $data['hlt2_provincial'] = $temp_array;
        $temp_array = array();
        
        // Harv 3
        $column_index = 6;
        $temp_array = $this->cropsched->get_sched($location_code, $location_type, $column_index, $year_end, '2', NULL, true, true);
        $data['hlt3_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_yearly($location_code, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hlt3_yearly'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end, false);
        $data['hlt3_provincial'] = $temp_array;
        $temp_array = array();
        
                
        $this->load->view('cropcalendar_index', $data);
    }
    
    function province() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '1996';
        $year_end = '2016';
        
        $temp_array = array();
        
        $data['id'] = $location_code;
        
        $column_index = 1;
        
        // Plant 1
        $temp_array = $this->cropsched->get_sched($location_code, $location_type, $column_index, $year_end, '2', NULL, true, true);
        $data['plt1_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_yearly($location_code, $location_type, $column_index, $year_end, '2', $year_end);
        $data['plt1_yearly'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end, false);
        $data['plt1_provincial'] = $temp_array;
        $temp_array = array();
        
        // Plant 2
        $column_index = 2;
        $temp_array = $this->cropsched->get_sched_yearly($location_code, $location_type, $column_index, $year_end, '2', $year_end);
        $data['plt2_yearly'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end, false);
        $data['plt2_provincial'] = $temp_array;
        $temp_array = array();
        
        // Plant 3
        $column_index = 3;
        $temp_array = $this->cropsched->get_sched($location_code, $location_type, $column_index, $year_end, '2', NULL, true, true);
        $data['plt3_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_yearly($location_code, $location_type, $column_index, $year_end, '2', $year_end);
        $data['plt3_yearly'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end, false);
        $data['plt3_provincial'] = $temp_array;
        $temp_array = array();
        
        // Harv 1
        $column_index = 4;
        $temp_array = $this->cropsched->get_sched($location_code, $location_type, $column_index, $year_end, '2', NULL, true, true);
        $data['hlt1_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_yearly($location_code, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hlt1_yearly'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end, false);
        $data['hlt1_provincial'] = $temp_array;
        $temp_array = array();
        
        // Harv 2
        
        $column_index = 5;
        
        $temp_array = $this->cropsched->get_sched_yearly($location_code, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hlt2_yearly'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end, false);
        $data['hlt2_provincial'] = $temp_array;
        $temp_array = array();
        
        // Harv 3
        $column_index = 6;
        $temp_array = $this->cropsched->get_sched($location_code, $location_type, $column_index, $year_end, '2', NULL, true, true);
        $data['hlt3_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_yearly($location_code, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hlt3_yearly'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->cropsched->get_sched_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end, false);
        $data['hlt3_provincial'] = $temp_array;
        $temp_array = array();
        
                
        $this->load->view('cropcalendar_pr_index', $data);
    }
    
}

?>