<?php

class Harvestareas extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('harvestarea');
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
        // get_production_total($location_code = null, $location_type = NULL,  $year_start = NULL, $year_end = NULL, $ecosystem = NULL)
        
        // Total production
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_latest = $temp_array['value'];
        $data['total_area_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '2');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_prev = $temp_array['value'];
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret'] = $area_caret;
        
        // Total production, irrigated
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '1');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_latest = $temp_array['value'];
        $data['total_area_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '1');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_prev = $temp_array['value'];
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret_irrig'] = $area_caret;
        
        
        // Total production, rainfed
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '0');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_latest = $temp_array['value'];
        $data['total_area_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '0');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_prev = $temp_array['value'];
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret_rain'] = $area_caret;
        
        // Total production, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'] / 1000000, 2);
        } 
        $data['ph_area_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'] / 1000000, 2);
        } 
        $data['ph_area_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'] / 1000000, 2);
        } 
        $data['ph_area_rainfed'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top provincial production
        $temp_array = $this->harvestarea->get_harvestarea_totals(null, '2', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['provincial_area_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top provincial production geocodes
        $temp_array = $this->harvestarea->get_harvestarea_totals_geocodes(null, '2', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['provincial_area_geo'] = json_encode($temp_array);
        $temp_array = array();
            
        // Top regional
        $temp_array = $this->harvestarea->get_harvestarea_totals_regions(null, '1', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['regional_area_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_totals_geocodes_regions(null, '1', $year_end, null, '2', 'DESC');
        $data['regional_area_geo'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('harvestareas_index', $data);
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
        
        $source_table = 'kpi_pay';

        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $data['id'] = $location_code;
        
        $temp_array = array();
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        // get_production_total($location_code = null, $location_type = NULL,  $year_start = NULL, $year_end = NULL, $ecosystem = NULL)
        
        // Total production
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '2');
        $area_latest = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['total_area_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '2');
        $area_prev = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret'] = $area_caret;
        
        // Total production, irrigated
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '1');
        $area_latest = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['total_area_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '1');
        $area_prev = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret_irrig'] = $area_caret;
        
        // Total production, rainfed
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '0');
        $area_latest = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['total_area_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '0');
        $area_prev = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret_rain'] = $area_caret;
        
        // Total production, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_area_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_area_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_area_rainfed'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top provincial production
        $temp_array = $this->harvestarea->get_harvestarea_totals(null, '1', $year_end, null, '2', 'DESC', null, $location_code);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['provincial_area_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_totals_geocodes(null, '1', $year_end, null, '2', 'DESC', null, $location_code);

        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['provincial_area_geocoded'] = json_encode($temp_array);
        $temp_array = array();

        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('harvestareas_r_index', $data);
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
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
            
        $temp_array = array();
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        // Total production
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '2');
        $area_latest = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['total_area_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '2');
        $area_prev = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret'] = $area_caret;
        
        // Total production, irrigated
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '1');
        $area_latest = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['total_area_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '1');
        $area_prev = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret_irrig'] = $area_caret;
        
        // Total production, rainfed
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '0');
        $area_latest = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['total_area_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '0');
        $area_prev = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret_rain'] = $area_caret;
        
        // Total production, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_area_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_area_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_area_rainfed'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('harvestareas_pr_index', $data);
        
    }
}

?>