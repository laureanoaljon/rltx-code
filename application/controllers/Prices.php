<?php

class Prices extends CI_Controller {

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
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        $cpi_type = '3';
        
        $temp_array = array();
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        // Farmgate Price
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $farm_latest = $temp_array['value'];
        $data['farmgate'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $farm_prev = $temp_array['value'];
        $farm_caret = $this->etc->get_proper_caret($farm_latest, $farm_prev);
        $data['farm_caret'] = $farm_caret;
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_start, $year_end);
        $data['farmgate_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        // Farmgate Semestral
        $temp_array = $this->income->get_farmgate_prices_series($location_code, $location_type, $year_end, '2', 20);
        $data['farmgate_prices_sem'] = json_encode($temp_array);
        $temp_array = array();
        
        // Farmgate Monthly
        $temp_array = $this->income->get_farmgate_prices_series($location_code, $location_type, $year_end, '3', 20);
        $data['farmgate_prices_month'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices_real($location_code, $location_type, $cpi_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        }
        $data['farmgate_prices_real'] = json_encode($temp_array);
        $temp_array = array();
        
        // Wholesale Price
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whr_latest = $temp_array['value'];
        $data['wholesale'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whr_prev = $temp_array['value'];
        $whr_caret = $this->etc->get_proper_caret($whr_latest, $whr_prev);
        $data['whr_caret'] = $whr_caret;
                
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whw_latest = $temp_array['value'];
        $data['wholesale_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whw_prev = $temp_array['value'];
        $whw_caret = $this->etc->get_proper_caret($whw_latest, $whw_prev);
        $data['whw_caret'] = $whw_caret;
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_start, $year_end);
        $data['wholesale_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        // Wholesale Semestral
        $temp_array = $this->income->get_wholesale_prices_series($location_code, $location_type, $year_end, '2', 20);
        $data['wholesale_prices_sem'] = json_encode($temp_array);
        $temp_array = array();
        
        // Wholesale Monthly
        $temp_array = $this->income->get_wholesale_prices_series($location_code, $location_type, $year_end, '3', 20);
        $data['wholesale_prices_month'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_start, $year_end);
        $data['wholesale_sp_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        //Wholesale SP Semestral
        $temp_array = $this->income->get_wholesale_sp_prices_series($location_code, $location_type, $year_end, '2', 20);
        $data['wholesale_sp_prices_sem'] = json_encode($temp_array);
        $temp_array = array();
        
        // Wholesale SP Monthly
        $temp_array = $this->income->get_wholesale_sp_prices_series($location_code, $location_type, $year_end, '3', 20);
        $data['wholesale_sp_prices_month'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail Price
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhw_latest = $temp_array['value'];
        $data['retail'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhw_prev = $temp_array['value'];
        $rhw_caret = $this->etc->get_proper_caret($rhw_latest, $rhw_prev);
        $data['rhw_caret'] = $rhw_caret;
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhr_latest = $temp_array['value'];
        $data['retail_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhr_prev = $temp_array['value'];
        $rhr_caret = $this->etc->get_proper_caret($rhr_latest, $rhr_prev);
        $data['rhr_caret'] = $rhr_caret;
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_start, $year_end);
        $data['retail_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail Semestral
        $temp_array = $this->income->get_retail_prices_series($location_code, $location_type, $year_end, '2', 20);
        $data['retail_prices_sem'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail Monthly
        $temp_array = $this->income->get_retail_prices_series($location_code, $location_type, $year_end, '3', 20);
        $data['retail_prices_month'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_start, $year_end);
        $data['retail_sp_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail SP Semestral
        $temp_array = $this->income->get_retail_sp_prices_series($location_code, $location_type, $year_end, '2', 20);
        $data['retail_sp_prices_sem'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail Monthly
        $temp_array = $this->income->get_retail_sp_prices_series($location_code, $location_type, $year_end, '3', 20);
        $data['retail_sp_prices_month'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('prices_index', $data);
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
        $cpi_type = '3';
        
        $data['id'] = $location_code;
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        $temp_array = array();
        
        // Farmgate Price
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $farm_latest = $temp_array['value'];
        $data['farmgate'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $farm_prev = $temp_array['value'];
        $farm_caret = $this->etc->get_proper_caret($farm_latest, $farm_prev);
        $data['farm_caret'] = $farm_caret;
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_start, $year_end);
        $data['farmgate_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices_real($location_code, $location_type, $cpi_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        }
        $data['farmgate_prices_real'] = json_encode($temp_array);
        $temp_array = array();
        
        // Wholesale Price
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whr_latest = $temp_array['value'];
        $data['wholesale'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whr_prev = $temp_array['value'];
        $whr_caret = $this->etc->get_proper_caret($whr_latest, $whr_prev);
        $data['whr_caret'] = $whr_caret;
                
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whw_latest = $temp_array['value'];
        $data['wholesale_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whw_prev = $temp_array['value'];
        $whw_caret = $this->etc->get_proper_caret($whw_latest, $whw_prev);
        $data['whw_caret'] = $whw_caret;
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_start, $year_end);
        $data['wholesale_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_start, $year_end);
        $data['wholesale_sp_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail Price
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhw_latest = $temp_array['value'];
        $data['retail'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhw_prev = $temp_array['value'];
        $rhw_caret = $this->etc->get_proper_caret($rhw_latest, $rhw_prev);
        $data['rhw_caret'] = $rhw_caret;
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhr_latest = $temp_array['value'];
        $data['retail_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhr_prev = $temp_array['value'];
        $rhr_caret = $this->etc->get_proper_caret($rhr_latest, $rhr_prev);
        $data['rhr_caret'] = $rhr_caret;
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_start, $year_end);
        $data['retail_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_start, $year_end);
        $data['retail_sp_prices'] = json_encode($temp_array);
        $temp_array = array();

        
        // Farmgate Inflated Prices
        $temp_array = $this->income->get_farmgate_prices_real($location_code, $location_type, $cpi_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['farmgate_prices_real'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('prices_r_index', $data);
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
        $cpi_type = '3';
        
        $data['id'] = $location_code;
        
        $temp_array = array();
        
       // Farmgate Price
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $farm_latest = $temp_array['value'];
        $data['farmgate'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $farm_prev = $temp_array['value'];
        $farm_caret = $this->etc->get_proper_caret($farm_latest, $farm_prev);
        $data['farm_caret'] = $farm_caret;
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_start, $year_end);
        $data['farmgate_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices_real($location_code, $location_type, $cpi_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        }
        $data['farmgate_prices_real'] = json_encode($temp_array);
        $temp_array = array();
        
        // Wholesale Price
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whr_latest = $temp_array['value'];
        $data['wholesale'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whr_prev = $temp_array['value'];
        $whr_caret = $this->etc->get_proper_caret($whr_latest, $whr_prev);
        $data['whr_caret'] = $whr_caret;
                
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whw_latest = $temp_array['value'];
        $data['wholesale_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whw_prev = $temp_array['value'];
        $whw_caret = $this->etc->get_proper_caret($whw_latest, $whw_prev);
        $data['whw_caret'] = $whw_caret;
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_start, $year_end);
        $data['wholesale_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_start, $year_end);
        $data['wholesale_sp_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail Price
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhw_latest = $temp_array['value'];
        $data['retail'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhw_prev = $temp_array['value'];
        $rhw_caret = $this->etc->get_proper_caret($rhw_latest, $rhw_prev);
        $data['rhw_caret'] = $rhw_caret;
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhr_latest = $temp_array['value'];
        $data['retail_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhr_prev = $temp_array['value'];
        $rhr_caret = $this->etc->get_proper_caret($rhr_latest, $rhr_prev);
        $data['rhr_caret'] = $rhr_caret;
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_start, $year_end);
        $data['retail_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_start, $year_end);
        $data['retail_sp_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('prices_pr_index', $data);
    }
    
}

?>