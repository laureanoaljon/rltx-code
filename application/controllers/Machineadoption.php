<?php

class Machineadoption extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('machine');
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
        
        // Riding-type Handtractor    
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['rt_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['rt_provincial'] = $temp_array;
        $temp_array = array();
        
        // Floating tiller
        $column_index = 2;
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['ft_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['ft_provincial'] = $temp_array;
        $temp_array = array();
        
        // Microtiller
        $column_index = 3;
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['mt_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['mt_provincial'] = $temp_array;
        $temp_array = array();
        
        // Drumseeder
        $column_index = 4;
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['ds_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['ds_provincial'] = $temp_array;
        $temp_array = array();
        
        // Transplanter
        $column_index = 5;
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['tp_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['tp_provincial'] = $temp_array;
        $temp_array = array();
                
        // Reaper
        $column_index = 6;
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['re_yearly'] = json_encode($temp_array);
        $temp_array = array(); 
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['re_provincial'] = $temp_array;
        $temp_array = array();
        
        // Combine harvester
        $column_index = 7;
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['ch_yearly'] = json_encode($temp_array);
        $temp_array = array(); 
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['ch_provincial'] = $temp_array;
        $temp_array = array();
                
        $this->load->view('machineadoption_index', $data);
    }
    
    function province() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_end = '2016';
        $column_index = 1;
        
        $temp_array = array();
        
        $data['id'] = $location_code;
        
        // Riding-type Handtractor    
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['rt_only'] = $temp_array[0];
        $data['rt_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['rt_provincial'] = $temp_array;
        $temp_array = array();
        
        // Floating tiller
        $column_index = 2;
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['ft_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['ft_provincial'] = $temp_array;
        $temp_array = array();
        
        // Microtiller
        $column_index = 3;
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['mt_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['mt_provincial'] = $temp_array;
        $temp_array = array();
        
        // Drumseeder
        $column_index = 4;
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['ds_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['ds_provincial'] = $temp_array;
        $temp_array = array();
        
        // Transplanter
        $column_index = 5;
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['tp_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['tp_provincial'] = $temp_array;
        $temp_array = array();
                
        // Reaper
        $column_index = 6;
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['re_yearly'] = json_encode($temp_array);
        $temp_array = array(); 
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['re_provincial'] = $temp_array;
        $temp_array = array();
        
        // Combine harvester
        $column_index = 7;
        $temp_array = $this->machine->get_machine($location_code, $location_type, $column_index, $year_end, $year_end);
        $data['ch_yearly'] = json_encode($temp_array);
        $temp_array = array(); 
        
        $temp_array = $this->machine->get_machine_prov(NULL, $location_type, $column_index, $year_end, $year_end);
        $data['ch_provincial'] = $temp_array;
        $temp_array = array();
                
        $this->load->view('machineadoption_pr_index', $data);
    }
    
}

?>