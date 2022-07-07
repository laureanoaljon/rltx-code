<?php

class Seedingrate extends CI_Controller {

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
        $column_index = 1;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Transplanting Rate
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['trans_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['trans_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['trans_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
                
        // Direct Seeding Rate
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['direct_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['direct_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['direct_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['average_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['average_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['average_provincial'] = $temp_array;
        $temp_array = array();

        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('seedingrate_index', $data);
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
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_cropest'))){
            show_404();
        }
        
        // Transplanting Rate
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $transr_prev = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['trans_all'] = $temp_array;
        $transr_latest = $temp_array['value'];
        $temp_array = array();
        $data['transr_caret'] = $this->etc->get_proper_caret($transr_latest, $transr_prev);
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['trans_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['trans_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
                
        // Direct Seeding Rate
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $directr_prev = $temp_array['value'];
        $temp_array = array();
                
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['direct_all'] = $temp_array;
        $directr_latest = $temp_array['value'];
        $data['directr_caret'] = $this->etc->get_proper_caret($directr_latest, $directr_prev);
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['direct_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['direct_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $aver_prev = $temp_array['value'];
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['average_all'] = $temp_array;
        $aver_latest = $temp_array['value'];
        $data['aver_caret'] = $this->etc->get_proper_caret($aver_latest, $aver_prev);
        $temp_array = array();
        
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['average_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['average_provincial'] = $temp_array;
        $temp_array = array();

        $data['footer'] = $this->load->view('footer', $data, true);        
        $this->load->view('seedingrate_pr_index', $data);
    }
    
}

?>