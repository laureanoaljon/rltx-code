<?php

class Varieties extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('variety');
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
        
        // Top 10 Varieties
        $temp_array = $this->variety->get_var_top($location_code, $location_type, $year_end, '2');
        $data['var_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->variety->get_var_top_prri($location_code, $location_type, $year_end, '2');
        $data['var_prri'] = json_encode($temp_array);
        $temp_array = array();
        
        
        // function get_pests_top_prov($location_code = NULL, $location_type, $year_start, $ecosystem, $year_end = NULL, $limit = NULL){            
        $temp_array = $this->variety->get_var_top_prov(NULL, $location_type, $year_end, '2', $year_end, 3);
        $data['var_provincial'] = $temp_array;
        $temp_array = array();

        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('varieties_index', $data);
    }
    
    function province() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
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
        
        $data['id'] = $location_code;
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_variety'))){
            show_404();
        }
        
        // Top 10 Varieties
        $temp_array = $this->variety->get_var_top($location_code, $location_type, $year_end, '2');
        $data['var'] = $temp_array[0];
        $data['var_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->variety->get_var_top_prri($location_code, $location_type, $year_end, '2');
        $data['var_prri'] = json_encode($temp_array);
        $temp_array = array();
        
        
        // function get_pests_top_prov($location_code = NULL, $location_type, $year_start, $ecosystem, $year_end = NULL, $limit = NULL){            
        $temp_array = $this->variety->get_var_top_prov(NULL, $location_type, $year_end, '2', $year_end, 3);
        $data['var_provincial'] = $temp_array;
        $temp_array = array();

        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('varieties_pr_index', $data);
    }
    
}

?>