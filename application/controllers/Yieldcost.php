<?php

class YieldCost extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('income');
        $this->load->model('estyield');
        $this->load->model('ycost');
        $this->load->model('location');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2000';
        $year_end = '2019';
        $year_end_upd = '2020';
        $yield = 0;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Yield average
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_upd, '2');
        $yield_latest = $temp_array['value'];
        $data['yield_all_int'] = number_format($temp_array['value'] * 1000, 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $data['yield_all'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $yield_prev = $temp_array['value'];
        $data['yield_all_int_prev'] = number_format($temp_array['value'] * 1000, 0, '.', '');
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret'] = $yield_caret;
        
        // Total production, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end_upd, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
            $active_array['value_int'] = number_format($active_array['value'] * 1000, 0, '.', '');
        } 
        $data['ph_yield_all_int'] = $temp_array;
        $data['ph_yield_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total Costs
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end_upd);
        $unit_cost = $temp_array['value']/ $data['yield_all_int'];
        $unit_latest = $unit_cost;
        $data['total_costs_int'] = number_format($unit_cost, 2, '.', '');
        $temp_array = array();
        
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end);
        $unit_cost = $temp_array['value']/ $data['yield_all_int_prev'];
        $unit_prev = $unit_cost;
        $unit_caret = $this->etc->get_proper_caret($unit_latest, $unit_prev);
        $data['unit_caret'] = $unit_caret;
        
        // Total Costs Yearly
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_start, $year_end);
        for ($i = 0; $i < count($temp_array); $i++) {
            $temp_array[$i]['value'] = number_format(($temp_array[$i]['value']/($data['ph_yield_all_int'][$i]['value'] * 1000)), 2, '.', '');
        }
        $data['yearly_total_costs_int'] = json_encode($temp_array);
        //print_r($data['yearly_total_costs_int']);
        $temp_array = array();
        
        
        // NPK Use
        $npk_array = array();
        $temp_array = $this->income->get_npk_usage(NULL, $location_type, '2', $year_end, $yield);
        for ($i = 0; $i < count($temp_array); $i++) {
            if(!is_null($temp_array[$i]['n_value'])) {
                $npk_array[$i]['location_name'] = $temp_array[$i]['location_name'];
                $npk_array[$i]['n_value'] = $temp_array[$i]['n_value'];
                $npk_array[$i]['p_value'] = $temp_array[$i]['p_value'];
                $npk_array[$i]['k_value'] = $temp_array[$i]['k_value'];
            }
        }
        $data['npk_provinces_all'] = json_encode(array_values($npk_array));
        $temp_array = array();
        
        // Cost Breakdown
        $temp_array = $this->income->get_cost_breakdown($location_code, $location_type, $year_start, '2', $year_end_upd);
        $data['yearly_ph_cost_breakdown'] = json_encode($temp_array);
        $temp_array = array();
        
        // Yield Cost Scatter Plot
        $temp_array = $this->ycost->get_yield_cost(NULL, '2', '2017', NULL, 'ASC', NULL, NULL);
        for($i = 0; $i < count($temp_array); $i++){
            $data['yieldcost_names'][$i]['location_name'] = $temp_array[$i]['location_name'];
            $data['yieldcost'][$i]['x'] = number_format($temp_array[$i]['x']/1000, 2, '.', '');
            $data['yieldcost'][$i]['y'] = $temp_array[$i]['y'];
        }
        $temp_array = array();
        $data['yieldcost_names'] = json_encode($data['yieldcost_names']);
        $data['yieldcost'] = json_encode($data['yieldcost']);
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('yieldcost_index', $data);
    }
    
    function region() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '1';
        $year_start = '2000';
        $year_end = '2019';
        $year_end_upd = '2020';
        $yield = 0;
        
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
        
        // Yield average
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_upd, '2');
        $yield_latest = $temp_array['value'];
        $data['yield_all_int'] = number_format($temp_array['value'] * 1000, 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $data['yield_all'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $yield_prev = $temp_array['value'];
        $data['yield_all_int_prev'] = number_format($temp_array['value'] * 1000, 0, '.', '');
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret'] = $yield_caret;
        
        // Total Costs
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end_upd);
        $unit_cost = $temp_array['value']/ $data['yield_all_int'];
        $unit_latest = $unit_cost;
        $data['total_costs_int'] = number_format($unit_cost, 2, '.', '');
        $temp_array = array();
        
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end);
        $unit_cost = $temp_array['value']/ $data['yield_all_int_prev'];
        $unit_prev = $unit_cost;
        $unit_caret = $this->etc->get_proper_caret($unit_latest, $unit_prev);
        $data['unit_caret'] = $unit_caret;
        
        // NPK Use    
        $npk_array = array();
        $temp_array = $this->income->get_npk_usage(NULL, '2', '2', $year_end, $yield, null, $location_code);
        for ($i = 0; $i < count($temp_array); $i++) {
            if(!is_null($temp_array[$i]['n_value'])) {
                $npk_array[$i]['location_name'] = $temp_array[$i]['location_name'];
                $npk_array[$i]['n_value'] = $temp_array[$i]['n_value'];
                $npk_array[$i]['p_value'] = $temp_array[$i]['p_value'];
                $npk_array[$i]['k_value'] = $temp_array[$i]['k_value'];
            }
        }
        $data['npk_provinces_all'] = json_encode(array_values($npk_array));
        $temp_array = array();
        
        // Cost Breakdown
        $temp_array = $this->income->get_cost_breakdown($location_code, $location_type, $year_start, '2', $year_end_upd);
        $data['yearly_ph_cost_breakdown'] = json_encode($temp_array);
        $temp_array = array();
        
        // Yield Cost Scatter Plot
        $temp_array = $this->ycost->get_yield_cost(NULL, '2', '2017', NULL, 'ASC', NULL, $location_code);
        for($i = 0; $i < count($temp_array); $i++){
            $data['yieldcost_names'][$i]['location_name'] = $temp_array[$i]['location_name'];
            $data['yieldcost'][$i]['x'] = number_format($temp_array[$i]['x']/1000, 2, '.', '');
            $data['yieldcost'][$i]['y'] = $temp_array[$i]['y'];
        }
        $temp_array = array();
        $data['yieldcost_names'] = json_encode($data['yieldcost_names']);
        $data['yieldcost'] = json_encode($data['yieldcost']);
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('yieldcost_r_index', $data);
    }
    
}

?>