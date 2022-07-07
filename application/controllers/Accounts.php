<?php

class Accounts extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('account');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2000';
        $year_end = '2019';
        
        $temp_array = array();

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
        
        // Total Supply
        $temp_array = $this->account->get_total_supply($location_code, $location_type, $year_end);
        $temp_array['value'] = number_format($temp_array['value']);
        $data['supply'] = $temp_array;
        $temp_array = array();
        
        // Total Utilization
        $temp_array = $this->account->get_total_utilize($location_code, $location_type, $year_end);
        $temp_array['value'] = number_format($temp_array['value']);
        $data['util'] = $temp_array;
        $temp_array = array();
        
        // Supply Sources Yearly
        $temp_array = $this->account->get_supply_sources($location_code, $location_type, $year_start, $year_end);
        $data['supply_sources_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Utiltization Accounts Yearly
        $temp_array = $this->account->get_util_sources($location_code, $location_type, $year_start, $year_end);
        $data['util_accounts_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Net Food Disposable (NFD)
        $temp_array = $this->account->get_per_capita($location_code, $location_type, $year_end);
        $data['per_capita_values'] = $temp_array;
        $data['per_capita'] = json_encode($temp_array);
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
        
        $this->load->view('accounts_index', $data);
    }
    
}

?>