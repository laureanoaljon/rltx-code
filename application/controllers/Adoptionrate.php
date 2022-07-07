<?php

class adoptionrate extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('machine');
        $this->load->model('etc');
        $this->load->model('location');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        $location_code = '999';
        $location_type = '2';
        $year_end = '2016';
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Land Preparation
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 2);
        $data['adopt_landprep'] = json_encode($temp_array);
        $temp_array = array();
        
        // Crop Establishment
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 3);
        $data['adopt_cropest'] = json_encode($temp_array);
        $temp_array = array();
        
        // Nutrient Management
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 4);
        $data['adopt_nutrient'] = json_encode($temp_array);
        $temp_array = array();
        
        // Water Management
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 5);
        $data['adopt_water'] = json_encode($temp_array);
        $temp_array = array();
        
        // Pest Management
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 6);
        $data['adopt_pest'] = json_encode($temp_array);
        $temp_array = array();
        
         // Harvest Management
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 7);
        $data['adopt_harvest'] = json_encode($temp_array);
        $temp_array = array();
        
        // Others
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 8, 7);
        $data['adopt_others'] = json_encode($temp_array);
        $temp_array = array();
                
        $data['footer'] = $this->load->view('footer', $data, true);        
        $this->load->view('machineadoption_index', $data);
    }
    
    function province() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_end = '2016';
        
        $data['id'] = $location_code;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Land Preparation
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 2);
        $data['adopt_landprep_ar'] = $temp_array;
        $data['adopt_landprep'] = json_encode($temp_array);
        $temp_array = array();
        
        // Crop Establishment
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 3);
        $data['adopt_cropest'] = json_encode($temp_array);
        $temp_array = array();
        
        // Nutrient Management
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 4);
        $data['adopt_nutrient'] = json_encode($temp_array);
        $temp_array = array();
        
        // Water Management
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 5);
        $data['adopt_water'] = json_encode($temp_array);
        $temp_array = array();
        
        // Pest Management
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 6);
        $data['adopt_pest'] = json_encode($temp_array);
        $temp_array = array();
        
         // Harvest Management
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 7);
        $data['adopt_harvest'] = json_encode($temp_array);
        $temp_array = array();
        
        // Others
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 8, 7);
        $data['adopt_others'] = json_encode($temp_array);
        $temp_array = array();

        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('machineadoption_pr_index', $data);
    }
    
}

?>