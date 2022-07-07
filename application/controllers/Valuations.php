<?php

class Valuations extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('valuation');
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
        
        // Palay valuation
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_end);
        $data['latest_palay_valuation'] = $temp_array;
        $pv_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_end_alt);
        $pv_prev = $temp_array['value'];
        $pv_caret = $this->etc->get_proper_caret($pv_latest, $pv_prev);
        $data['pv_caret'] = $pv_caret;
        
        // Agri valuation
        $temp_array = $this->valuation->get_agriculture_valuation($location_code, $location_type, $year_end);
        $data['latest_agri_valuation'] = $temp_array;
        $agri_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_agriculture_valuation($location_code, $location_type, $year_end_alt);
        $agri_prev = $temp_array['value'];
        $agri_caret = $this->etc->get_proper_caret($agri_latest, $agri_prev);
        $data['agri_caret'] = $agri_caret;
            
        // GDP valuation
        $temp_array = $this->valuation->get_gdp_valuation($location_code, $location_type, $year_end);
        $data['latest_gdp_valuation'] = $temp_array;
        $temp_array = array();
        
        // Agri share
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_end);
        $share_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['latest_palay_agri_share'] = $temp_array;
        $data['latest_nonpalay_agri_share'] = 100 - $data['latest_palay_agri_share']['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_end_alt);
        $share_prev = $temp_array['value'];
        $share_caret = $this->etc->get_proper_caret($share_latest, $share_prev);
        $data['share_caret'] = $share_caret;
        
        // GDP share
        $temp_array = $this->valuation->get_palay_share_to_gdp($location_code, $location_type, $year_end);
        $temp_array['value'] = number_format($temp_array['value'], 1);
        $data['latest_palay_gdp_share'] = $temp_array;
        $temp_array = array();
        
        // Palay valuation, yearly
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_start, $year_end);
	foreach ($temp_array as &$active_array){
            $active_array['value'] = $active_array['value'] / 1000;
        }
        $data['palay_valuation_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Agriculture valuation, yearly
        $temp_array = $this->valuation->get_agriculture_valuation($location_code, $location_type, $year_start, $year_end);
	foreach ($temp_array as &$active_array){
            $active_array['value'] = $active_array['value'] / 1000;
        }
        $data['agri_valuation_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Agri share, yearly
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0);
        } 
        $data['agri_valuation_share'] = json_encode($temp_array);
        $temp_array = array();
        
        // GDP share, yearly        
        $temp_array = $this->valuation->get_palay_share_to_gdp($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0);
        } 
        $data['total_valuation_share'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('valuations_index', $data);
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
        $year_end = '2020';
        $year_end_alt = '2019';
        
        $data['year_start'] = $year_start;
        
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
        // get_production_total($location_code = null, $location_type = NULL,  $year_start = NULL, $year_end = NULL, $ecosystem = NULL)
        
        // Palay valuation
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_end);
        $data['latest_palay_valuation'] = $temp_array;
        $pv_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_end_alt);
        $pv_prev = $temp_array['value'];
        $pv_caret = $this->etc->get_proper_caret($pv_latest, $pv_prev);
        $data['pv_caret'] = $pv_caret;
        
        // Agri valuation
        $temp_array = $this->valuation->get_agriculture_valuation($location_code, $location_type, $year_end);
        $data['latest_agri_valuation'] = $temp_array;
        $agri_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_agriculture_valuation($location_code, $location_type, $year_end_alt);
        $agri_prev = $temp_array['value'];
        $agri_caret = $this->etc->get_proper_caret($agri_latest, $agri_prev);
        $data['agri_caret'] = $agri_caret;
        
        // Agri share
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_end);
        $share_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['latest_palay_agri_share'] = $temp_array;
        $data['latest_nonpalay_agri_share'] = 100 - $data['latest_palay_agri_share']['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_end_alt);
        $share_prev = $temp_array['value'];
        $share_caret = $this->etc->get_proper_caret($share_latest, $share_prev);
        $data['share_caret'] = $share_caret;
        
        // GDP valuation
        $temp_array = $this->valuation->get_gdp_valuation($location_code, $location_type, $year_end);
        $data['latest_gdp_valuation'] = $temp_array;
        $temp_array = array();
        
        // GDP share
        $temp_array = $this->valuation->get_palay_share_to_gdp($location_code, $location_type, $year_end);
        $temp_array['value'] = number_format($temp_array['value'], 1);
        $data['latest_palay_gdp_share'] = $temp_array;
        $temp_array = array();
        
        // Palay valuation, yearly
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_start, $year_end);
	foreach ($temp_array as &$active_array){
            $active_array['value'] = $active_array['value'] / 1000;
        }
        $data['palay_valuation_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Agriculture valuation, yearly
        $temp_array = $this->valuation->get_agriculture_valuation($location_code, $location_type, $year_start, $year_end);
	foreach ($temp_array as &$active_array){
            $active_array['value'] = $active_array['value'] / 1000;
        }
        $data['agri_valuation_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Agri share, yearly
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0);
        } 
        $data['agri_valuation_share'] = json_encode($temp_array);
        $temp_array = array();
        
        // GDP share, yearly        
        $temp_array = $this->valuation->get_palay_share_to_gdp($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0);
        } 
        $data['total_valuation_share'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('valuations_r_index', $data);
    }
    
}

?>