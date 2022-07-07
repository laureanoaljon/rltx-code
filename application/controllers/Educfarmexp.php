<?php

class Educfarmexp extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('socio');
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
        $column_index = 8;
        
        $temp_array = array();
        
        $source_table = 'kpi_pay';

        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $column_index = 13;
        // Formal Education
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['educ_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['educ_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['educ_provincial'] = $temp_array;
        $temp_array = array();
        
        // Formal Education Categories
        
        $column_index = 14;
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['educ_noed'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 15;
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['educ_elem'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 16;
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['educ_hs'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 17;
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['educ_col'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 18;
        // Farm Experience
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['fexp_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['fexp_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['fexp_provincial'] = $temp_array;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('educfarmexp_index', $data);
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
        $column_index = 8;
        
        $data['id'] = $location_code;
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_socio'))){
            show_404();
        }
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        $column_index = 13;
        // Formal Education
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['educ_all'] = $temp_array;
        $feduc_latest = $temp_array['value'];
        $temp_array = array();
            
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end_alt, '2');
        $feduc_prev =  $temp_array['value'];
        $feduc_caret = $this->etc->get_proper_caret($feduc_latest, $feduc_prev);
        $data['feduc_caret'] = $feduc_caret;    
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['educ_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['educ_provincial'] = $temp_array;
        $temp_array = array();
        
        // Formal Education Categories
        
        $column_index = 14;
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['educ_noed'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 15;
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['educ_elem'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 16;
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['educ_hs'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 17;
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['educ_col'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 18;
        // Farm Experience
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['fexp_all'] = $temp_array;
        $fexp_latest = $temp_array['value'];
        $temp_array = array();
            
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end_alt, '2');
        $fexp_prev =  $temp_array['value'];
        $fexp_caret = $this->etc->get_proper_caret($fexp_latest, $fexp_prev);
        $data['fexp_caret'] = $fexp_caret;
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['fexp_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['fexp_provincial'] = $temp_array;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('educfarmexp_pr_index', $data);
    }
    
}

?>