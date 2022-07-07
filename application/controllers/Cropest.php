<?php

class Cropest extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('crop');
        $this->load->model('location');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '1996';
        $year_end = '2016';
        $year_end_alt = '2017';
        $column_index = 1;
        
        $temp_array = array();
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
         // Transplanting
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end, '2');
        $data['trans_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['trans_ds'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['trans_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['trans_provincial'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
        $data['trans_ds_provincial'] = $temp_array;
        $temp_array = array();
                
        $column_index = 2;
                
        // Direct Seeding Total
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end, '2');
        $data['direct_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['direct_ds'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['direct_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['direct_provincial'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
        $data['direct_ds_provincial'] = $temp_array;
        $temp_array = array();
        $data['footer'] = $this->load->view('footer', $data, true);
                
        $this->load->view('cropest_index', $data);
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
        
        $temp_array = array();
        
        // 404 if location is not available
        if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_cropest'))){
            show_404();
        }
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;

        // Transplanting
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_prev, '2');
        $trans_prev = $temp_array['value'];
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end, '2');
        $data['trans_all'] = $temp_array;
        $trans = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['trans_ds'] = $temp_array;
        $trans_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['trans_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['trans_caret'] = $this->etc->get_proper_caret($trans, $trans_prev);
        $data['trans_ds_caret'] = $this->etc->get_proper_caret($trans_latest, $trans);
        
        
        $column_index = 2;
        
        $column_index = 2;
        
        // Direct Seeding
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_prev, '2');
        $direct_prev = $temp_array['value'];
                
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end, '2');
        $data['direct_all'] = $temp_array;
        $direct = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['direct_ds'] = $temp_array;
        $direct_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['direct_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['direct_caret'] = $this->etc->get_proper_caret($direct, $direct_prev);
        $data['direct_ds_caret'] = $this->etc->get_proper_caret($direct_latest, $direct);
        $data['footer'] = $this->load->view('footer', $data, true);
                
        $this->load->view('cropest_pr_index', $data);
    }
    
}

?>