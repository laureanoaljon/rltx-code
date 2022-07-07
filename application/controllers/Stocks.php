<?php

class Stocks extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('stock');
        $this->load->model('location');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2018';
        $year_end = '2022';
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Total Stocks
        $temp_array = $this->stock->get_stocks($location_code, $location_type, 4, 2);
        $total_latest = $temp_array[0]['value'] / 1000;
        $temp_array[0]['value'] =  number_format($temp_array[0]['value'] / 1000, 2);
        $data['total'] = $temp_array;
        
        $total_prev = $temp_array[1]['value'] / 1000;
        $total_caret = $this->etc->get_proper_caret($total_latest, $total_prev);
        $data['total_caret'] = $total_caret;
        $temp_array = array();
        
        // Houeshold Stock
        $temp_array = $this->stock->get_stocks($location_code, $location_type, 1, 2);
        $h_latest = $temp_array[0]['value']   * 1000;
        $temp_array[0]['value'] =  number_format($temp_array[0]['value'] / 1000, 2);
        $data['household'] = $temp_array;
        
        $h_prev = $temp_array[1]['value']  * 1000;
        $h_caret = $this->etc->get_proper_caret($h_latest, $h_prev);
        $data['h_caret'] = $h_caret;
        $temp_array = array();
        
        // Commercial Stock
        $temp_array = $this->stock->get_stocks($location_code, $location_type, 2, 2);
        $c_latest = $temp_array[0]['value'];
        $temp_array[0]['value'] =  number_format($temp_array[0]['value'] / 1000, 2);
        $data['commercial'] = $temp_array;
        
        $c_prev = $temp_array[1]['value'];
        $c_caret = $this->etc->get_proper_caret($c_latest, $c_prev);
        $data['c_caret'] = $c_caret;
        $temp_array = array();
        
        // NFA Stock
        $temp_array = $this->stock->get_stocks($location_code, $location_type, 3, 2);
        $n_latest = $temp_array[0]['value'];
        $temp_array[0]['value'] =  number_format($temp_array[0]['value'] / 1000, 2);
        $data['nfa'] = $temp_array;
        
        $n_prev = $temp_array[1]['value'];
        $n_caret = $this->etc->get_proper_caret($n_latest, $n_prev);
        $data['n_caret'] = $n_caret;
        $temp_array = array();
        
        // Rice Stock Total All
        
        $temp_array = $this->stock->get_stocks($location_code, $location_type, 4, null, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = $active_array['value'] * 1000;
        }
        $data['total_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('stocks_index', $data);
    }
    
}

?>