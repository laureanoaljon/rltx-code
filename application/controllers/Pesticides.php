<?php

class Pesticides extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('pest');
        $this->load->model('etc');
        $this->load->model('location');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_end = '2017';
        $column_index = 1;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Top 10 Pest
        $temp_array = $this->pest->get_pests_top($location_code, $location_type, $year_end, '2', 5);
        $data['pest_array'] = $temp_array;
        $data['pest_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // function get_pests_top_prov($location_code = NULL, $location_type, $year_start, $ecosystem, $year_end = NULL, $limit = NULL){            
        $temp_array = $this->pest->get_pests_top_prov(NULL, $location_type, $year_end, '2', $year_end, 1);
        $data['pest_provincial'] = $temp_array;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('pesticides_index', $data);
    }
    
    function province() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_end = '2017';
        $column_index = 1;
        
        $data['id'] = $location_code;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Top 10 Pest
        $temp_array = $this->pest->get_pests_top($location_code, $location_type, $year_end, '2', 5);
        $data['pest'] = $temp_array[0];
        $data['pest_all'] = json_encode($temp_array);
        $temp_array = array();
                
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('pesticides_pr_index', $data);
    }
    
}

?>