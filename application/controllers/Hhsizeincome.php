<?php

class Hhsizeincome extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('socio');
        $this->load->model('rbincome');
        $this->load->model('farmprofile');
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
        $column_index = 19;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Household Size     
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['hhsize_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['hhsize_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hhsize_provincial'] = $temp_array;
        $temp_array = array();
            
        $column_index = 2;
        
        // Source of Income
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['rice_inc_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['rice_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['rice_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        
        // Source of Income
        $temp_array = $this->rbincome->get_incomesource_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['rice_incs_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_incomesource_rb_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['ricesource_provincial'] = $temp_array;
        $temp_array = array();
                
        $column_index = 3;
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['non_inc_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['non_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['non_provincial'] = $temp_array;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('hhsizeincome_index', $data);
    }
    
    function province() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '1996';
        $year_end = '2016';
        $year_end_alt = '2011';
        $column_index = 19;
        
        $data['id'] = $location_code;
        
        $temp_array = array();
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_income'))){
            show_404();
        }
        
        // Household Size     
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['hhsize_all'] = $temp_array;
        $hhsize_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end_alt, '2');
        $hhsize_prev =  $temp_array['value'];
        $hhsize_caret = $this->etc->get_proper_caret($hhsize_latest, $hhsize_prev);
        $data['hhsize_caret'] = $hhsize_caret;
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['hhsize_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hhsize_provincial'] = $temp_array;
        $temp_array = array();
            
        $column_index = 2;
        
        // Source of Income
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['rice_inc_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['rice_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['rice_provincial'] = $temp_array;
        $temp_array = array();
        
         
        $column_index = 3;
        
        // Source of Income
        $temp_array = $this->rbincome->get_incomesource_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['rice_incs_all'] = $temp_array;
        $temp_array = array();
        
                
        $column_index = 3;
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['non_inc_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['non_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['non_provincial'] = $temp_array;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('hhsizeincome_pr_index', $data);
    }
    
}

?>