<?php

class Supplies extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('account');
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

        // Total Supply Yearly
        $temp_array = $this->account->get_total_supply($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$inner_array) {
            foreach ($inner_array as $key => &$value) {
                if($key != "year") {
                    $value = number_format($value / 1000, 2);
                }
            }
        }
        $data['total_supply'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total Utilization Yearly
        $temp_array = $this->account->get_total_utilize($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$inner_array) {
            foreach ($inner_array as $key => &$value) {
                if($key != "year") {
                    $value = number_format($value / 1000, 2);
                }
            }
        }
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
        $sup_latest = $temp_array['value'];
        $data['supply'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->account->get_total_supply($location_code, $location_type, $year_end_alt);
        $sup_prev = $temp_array['value'];
        $sup_caret = $this->etc->get_proper_caret($sup_latest, $sup_prev);
        $data['sup_caret'] = $sup_caret;
        
        // Total Utilization
        $temp_array = $this->account->get_total_utilize($location_code, $location_type, $year_end);
        $util_latest = $temp_array['value'];
        $data['util'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->account->get_total_utilize($location_code, $location_type, $year_end_alt);
        $util_prev = $temp_array['value'];
        $util_caret = $this->etc->get_proper_caret($util_latest, $util_prev);
        $data['util_caret'] = $util_caret;
        
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
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('supplies_index', $data);
    }
    
}

?>