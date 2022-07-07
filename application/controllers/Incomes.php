<?php

class Incomes extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('income');
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
        $cpi_type = '3';
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Net Returns
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_end);
        $net_latest = $temp_array['value'];
        $data['net_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['net_returns'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_end_alt);
        $net_prev = $temp_array['value'];
        $net_caret = $this->etc->get_proper_caret($net_latest, $net_prev);
        $data['net_caret'] = $net_caret;
        
        // Total Costs
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end);
        $cost_latest = $temp_array['value'];
        $data['total_costs_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['total_costs'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end_alt);
        $cost_prev = $temp_array['value'];
        $cost_caret = $this->etc->get_proper_caret($cost_latest, $cost_prev);
        $data['cost_caret'] = $cost_caret;
        
        // Total Costs Regional
        $temp_array = $this->income->get_costs_net(NULL, '1', '2', $year_end, NULL, 'ASC');
        foreach ($temp_array as &$active_array){
            $active_array['costs'] = number_format($active_array['costs'], 0, '.', '');
            $active_array['net'] = number_format($active_array['net'], 0, '.', '');
        }
        $data['regional_costs_all'] = json_encode($temp_array);
        $temp_array = array();
        
         // Gross returns
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_end);
        $gross_latest = $temp_array['value'];
        $data['gross_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['gross_returns'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_end_alt);
        $gross_prev = $temp_array['value'];
        $gross_caret = $this->etc->get_proper_caret($gross_latest, $gross_prev);
        $data['gross_caret'] = $gross_caret;
        
        // Net Income Yearly
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_net_returns'] = json_encode($temp_array);
        $temp_array = array();
        
        // Gross returns Yearly
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_gross_returns'] = json_encode($temp_array);
        $temp_array = array();
        
        // Gross returns Regional
        $temp_array = $this->income->get_gross_returns(NULL, '1', '2', $year_end, NULL, 'ASC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        }
        $data['regional_gross_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total Costs Yearly
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_total_costs'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('incomes_index', $data);
    }
    
    function region() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '1';
        switch ($location_code) {
            case "4":
            case "9":
            case "11":
            case "12":
            case "17": $year_start = '2002'; break;
            default: $year_start = '2000'; break;
        }
        $data['year_start'] = $year_start;
        
        $year_end = '2020';
        $year_end_alt = '2019';
        
        $data['id'] = $location_code;
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Net Returns
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_end);
        $net_latest = $temp_array['value'];
        $data['net_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['net_returns'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_end_alt);
        $net_prev = $temp_array['value'];
        $net_caret = $this->etc->get_proper_caret($net_latest, $net_prev);
        $data['net_caret'] = $net_caret;
        
        // Total Costs
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end);
        $cost_latest = $temp_array['value'];
        $data['total_costs_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['total_costs'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end_alt);
        $cost_prev = $temp_array['value'];
        $cost_caret = $this->etc->get_proper_caret($cost_latest, $cost_prev);
        $data['cost_caret'] = $cost_caret;
        
        // Total Costs Regional
        $temp_array = $this->income->get_costs_net(NULL, '1', '2', $year_end, NULL, 'ASC');
        foreach ($temp_array as &$active_array){
            $active_array['costs'] = number_format($active_array['costs'], 0, '.', '');
            $active_array['net'] = number_format($active_array['net'], 0, '.', '');
        }
        $data['regional_costs_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Gross returns
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_end);
        $gross_latest = $temp_array['value'];
        $data['gross_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['gross_returns'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_end_alt);
        $gross_prev = $temp_array['value'];
        $gross_caret = $this->etc->get_proper_caret($gross_latest, $gross_prev);
        $data['gross_caret'] = $gross_caret;
        
        // Net Income Yearly
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_net_returns'] = json_encode($temp_array);
        $temp_array = array();
        
        // Gross returns Yearly
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_gross_returns'] = json_encode($temp_array);
        $temp_array = array();
        
        // Gross returns Regional
        $temp_array = $this->income->get_gross_returns(NULL, '1', '2', $year_end, NULL, 'ASC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        }
        $data['regional_gross_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total Costs Yearly
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_total_costs'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('incomes_r_index', $data);
    }
    
    function province() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '2000';
        $year_end = '2019';
        
        $data['id'] = $location_code;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        $temp_array = $this->location->get_region($location_code, $location_type);
        $data['region_details'] = $temp_array;
        $temp_array = array();
        
        $region_code = intval($data['region_details']['location_code']);
        
        // Net Returns
        $temp_array = $this->income->get_net_returns_provincial($location_code, $location_type, '2', $year_end);
        $data['net_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['net_returns'] = $temp_array;
        $temp_array = array();
        
        // Total Costs
        $temp_array = $this->income->get_total_costs($region_code, '1', $year_end);
        $data['total_costs_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['total_costs'] = $temp_array;
        $temp_array = array();
        
        // Gross returns
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_end);
        $data['gross_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['gross_returns'] = $temp_array;
        $temp_array = array();
        
        // Net Income Yearly
        $temp_array = $this->income->get_net_returns_provincial($location_code, $location_type, '2', $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_net_returns'] = json_encode($temp_array);
        $temp_array = array();
        
        // Gross returns Yearly
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_gross_returns'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total Costs Yearly
        $temp_array = $this->income->get_total_costs($region_code, '1', $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_total_costs'] = json_encode($temp_array);
        $temp_array = array();
                    
        $this->load->view('incomes_pr_index', $data);
    }
    
}

?>