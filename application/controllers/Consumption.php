<?php

class Consumption extends CI_Controller {

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
        $temp_array = array();
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;

        // Total Supply Yearly
        $temp_array = $this->account->get_total_supply($location_code, $location_type, $year_start, $year_end);
        $data['total_supply'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total Utilization Yearly
        $temp_array = $this->account->get_total_utilize($location_code, $location_type, $year_start, $year_end);
        $data['total_utilization'] = json_encode($temp_array);
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
        foreach ($temp_array as &$inner_array) {
            foreach ($inner_array as &$value) {
                $value = number_format($value / 1000, 2);
            }
        }
        $data['supply_sources_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Utiltization Accounts Yearly
        $temp_array = $this->account->get_util_sources($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$inner_array) {
            foreach ($inner_array as &$value) {
                $value = number_format($value / 1000, 2);
            }
        }
        $data['util_accounts_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Net Food Disposable (NFD) Yearly
        $temp_array = $this->account->get_per_capita($location_code, $location_type, $year_start, $year_end);
        $data['per_capita_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Rice Consumption
        $temp_array = $this->account->get_fnri_per_capita($location_code, $location_type, '2016');
        $data['actual_per_capita_values'] = $temp_array;
        
        // Rice Consumption
        $temp_array = $this->account->get_fnri_per_capita($location_code, $location_type, '2000', '2016');
        $data['actual_per_capita_yearly'] = json_encode($temp_array);
        
        // Population 
        $temp_array = $this->account->get_population($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'] / 1000000, 2);
        }
        $data['population'] = json_encode($temp_array);
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('consumption_index', $data);
    }
    
}

?>
