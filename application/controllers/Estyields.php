<?php

class Estyields extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('estyield');
        $this->load->model('location');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Yield average
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret'] = $yield_caret;
        
        // Yield average, irrigated
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '1');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '1');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret_irrig'] = $yield_caret;
        
        // Yield average, rainfed
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '0');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '0');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret_rain'] = $yield_caret;
        
        // Total production, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_rainfed'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top provincial production
        $temp_array = $this->estyield->get_yield_avgs(null, '2', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['provincial_yield_all'] = json_encode($temp_array);
        $temp_array = array();
             
        $temp_array = $this->estyield->get_yield_avgs_geocodes(null, '2', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['provincial_yield_geo'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top regional
        $temp_array = $this->estyield->get_yield_avgs_regions(null, '1', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['regional_yield_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avgs_geocodes_regions(null, '1', $year_end, null, '2', 'DESC');
        $data['regional_yield_geocoded'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('estyields_index', $data);
    }
    
    function region() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '1';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        
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
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret'] = $yield_caret;
        
        // Yield average, irrigated
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '1');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '1');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret_irrig'] = $yield_caret;
        
        // Yield average, rainfed
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '0');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '0');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret_rain'] = $yield_caret;
        
        // Total production, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_rainfed'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top provincial production
        $temp_array = $this->estyield->get_yield_avgs(null, '1', $year_end, null, '2', 'DESC', null, $location_code);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['provincial_yield_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avgs_geocodes(null, '1', $year_end, null, '2', 'DESC', null, $location_code);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['provincial_yield_geo'] = json_encode($temp_array);
        $temp_array = array();

        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('estyields_r_index', $data);
    }
    
    function province() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        
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
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret'] = $yield_caret;
        
        // Yield average, irrigated
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '1');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '1');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret_irrig'] = $yield_caret;
        
        // Yield average, rainfed
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '0');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '0');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret_rain'] = $yield_caret;
        
        // Total production, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_rainfed'] = json_encode($temp_array);
        $temp_array = array();

        
$data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('estyields_pr_index', $data);
    }
    
}

?>