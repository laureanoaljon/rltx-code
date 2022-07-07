<?php

class Social extends CI_Controller {

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
        $year_end_alt = '2011';
        
         $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
                
        $temp_array = array();
        
        $column_index = 2;
        // Age
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['mean_age_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end_alt, '2');
        $age_caret = $this->etc->get_proper_caret($data['mean_age_all']['value'], $temp_array['value']);
        $data['age_caret'] = $age_caret;
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['mean_age_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        // Age One
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['aon_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 4;
        // Age Two
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['atw_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 5;
        // Age Three
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['ath_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 6;
        // Age Four
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['afo_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 7;
        // Sex Male
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['male_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['male_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['male_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 8;
        // Sex Female
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['female_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['female_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['female_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 9;
        // Civil Status Single
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['s_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['s_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['s_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 10;
        // Civil Status Married
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['m_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['m_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['m_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 11;
        // Civil Status Widow
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['w_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['w_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['w_provincial'] = $temp_array;
        $temp_array = array();
                
        $column_index = 12;
        // Civil Status Separated
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['se_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['se_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['se_provincial'] = $temp_array;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('social_index', $data);
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
        
        $column_index = 2;
        // Age
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['mean_age_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end_alt, '2');
        $age_caret = $this->etc->get_proper_caret($data['mean_age_all']['value'], $temp_array['value']);
        $data['age_caret'] = $age_caret;
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['mean_age_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        // Age One
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['aon_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 4;
        // Age Two
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['atw_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 5;
        // Age Three
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['ath_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 6;
        // Age Four
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['afo_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 7;
        // Sex Male
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['male_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['male_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['male_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 8;
        // Sex Female
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['female_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['female_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['female_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 9;
        // Civil Status Single
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['s_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['s_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['s_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 10;
        // Civil Status Married
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['m_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['m_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['m_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 11;
        // Civil Status Widow
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['w_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['w_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['w_provincial'] = $temp_array;
        $temp_array = array();
                
        $column_index = 12;
        // Civil Status Separated
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['se_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['se_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['se_provincial'] = $temp_array;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('social_pr_index', $data);
    }
    
}

?>