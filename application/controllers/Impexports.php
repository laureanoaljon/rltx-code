<?php

class Impexports extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('account');
        $this->load->model('etc');
        $this->load->model('location');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2000';
        $year_end = '2020';
        $year_end_alt = '2019';
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Supply Sources
        $temp_array = $this->account->get_supply_sources($location_code, $location_type, $year_end);
        $data['supply_sources_values'] = $temp_array;
        $data['supply_sources'] = json_encode($temp_array);
        $temp_array = array();
        
        // Utiltization Accounts
        $temp_array = $this->account->get_util_sources($location_code, $location_type, $year_end);
        $data['util_accounts_values'] = $temp_array;
        $data['util_accounts'] = json_encode($temp_array);
        $temp_array = array();
        
        // Supply Sources Yearly
        $temp_array = $this->account->get_supply_sources($location_code, $location_type, $year_start, $year_end);
        $data['supply_sources_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Utiltization Accounts Yearly
        $temp_array = $this->account->get_util_sources($location_code, $location_type, $year_start, $year_end);
        $data['util_accounts_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('impexports_index', $data);
    }
    
}

?>