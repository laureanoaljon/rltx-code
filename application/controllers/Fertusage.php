<?php

class Fertusage extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('fertilizer');
        $this->load->model('location');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '1996';
        $year_end_prev_alt = '2011';
        $year_end_prev = '2012';
        $year_end = '2016';
        $year_end_alt = '2017';
        $column_index = 1;
        
        $source_table = 'kpi_pay';

        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Nitrogen
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['n_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['n_ds'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['n_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['n_provincial'] = $temp_array;
        $temp_array = array();
                                
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
        $data['n_ds_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
        
        // Phosphorus
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['p_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['p_ds'] = $temp_array;
        $temp_array = array();
        
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['p_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['p_provincial'] = $temp_array;
        $temp_array = array();

                
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
        $data['p_ds_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        
        // Potassium
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['k_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['k_ds'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['k_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['k_provincial'] = $temp_array;
        $temp_array = array();
        
                
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
        $data['k_ds_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
                
        // Average
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['average_all'] = $temp_array;
        $temp_array = array();
        
        // Average
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['average_ds'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['average_provincial'] = $temp_array;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('fertusage_index', $data);
    }
    
    function province() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '1996';
        $year_end_prev_alt = '2011';
        $year_end_prev = '2012';
        $year_end = '2016';
        $year_end_alt = '2017';
        $column_index = 1;
        
        $data['id'] = $location_code;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_fertilizer'))){
            show_404();
        }
        
        // Nitrogen
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $n_prev = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['n_all'] = $temp_array;
        $n_latest = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['n_ds'] = $temp_array;
        $n_ds = $temp_array['value'];
        
        $data['n_ds_caret'] = $this->etc->get_proper_caret($n_ds, $n_latest);
        
        $data['n_caret'] = $this->etc->get_proper_caret($n_latest, $n_prev);
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['n_yearly'] = json_encode($temp_array);
        $temp_array = array();

        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['n_provincial'] = $temp_array;
        $temp_array = array();
                
        $column_index = 2;
        
        // Phosphorus
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $p_prev = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['p_all'] = $temp_array;
        $p_latest = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['p_ds'] = $temp_array;
        $p_ds = $temp_array['value'];
        $data['p_ds_caret'] = $this->etc->get_proper_caret($p_ds, $p_latest);
        
        $data['p_caret'] = $this->etc->get_proper_caret($p_latest, $p_prev);
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['p_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['p_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        
        // Potassium
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $k_prev = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['k_all'] = $temp_array;
        $k_latest = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['k_ds'] = $temp_array;
        $k_ds = $temp_array['value'];
        $data['k_ds_caret'] = $this->etc->get_proper_caret($k_ds, $k_latest);
        
        $data['k_caret'] = $this->etc->get_proper_caret($k_latest, $k_prev);
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['k_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['k_provincial'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
        $data['k_ds_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
                
        // Average
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $fert_prev = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['average_all'] = $temp_array;
        $fert_latest = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['average_ds'] = $temp_array;
        $fert_ds = $temp_array['value'];
        $data['fert_ds_caret'] = $this->etc->get_proper_caret($fert_ds, $fert_latest);
        
        $data['fert_caret'] = $this->etc->get_proper_caret($fert_latest, $fert_prev);
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
        $data['average_provincial'] = $temp_array;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('fertusage_pr_index', $data);
    }
    
}

?>