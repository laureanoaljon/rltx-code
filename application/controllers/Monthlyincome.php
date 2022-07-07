<?php

class Monthlyincome extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('rbincome');
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
        
        // Monthly Income
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['monthly_income_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['monthly_income_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['monthly_income_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
        // Poverty Threshold
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['poverty_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['poverty_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['poverty_provincial'] = $temp_array;
        $temp_array = array();
        
        // Poverty Threshold
        $temp_array = $this->rbincome->get_povertythreshold_rb($location_code, $location_type, '2015');
        $temp_array['value'] = ($temp_array['value'] / 12) * 5;
        $data['poverty_threshold_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_povertythreshold_rb_prov(NULL, $location_type, '2015', '2015');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = ($active_array['value'] / 12) * 5;
        } 
        $data['poverty_threshold_provincial'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_povertythreshold_rb($location_code, $location_type, '1997', '2015');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = ($active_array['value'] / 12) * 5;
        } 
        $data['poverty_threshold_yearly'] = json_encode($temp_array);
        $temp_array = array();

        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('monthlyincome_index', $data);
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
        $column_index = 1;
        
        $data['id'] = $location_code;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_income'))){
            show_404();
        }
        
        // Monthly Income
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['monthly_income_all'] = $temp_array;
        $mincome_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end_alt, '2');
        $monthly_prev =  $temp_array['value'];
        $mincome_caret = $this->etc->get_proper_caret($mincome_latest, $monthly_prev);
        $data['mincome_caret'] = $mincome_caret;
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['monthly_income_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['monthly_income_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
        // Poverty Threshold
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['poverty_all'] = $temp_array;
        $ppercent_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end_alt, '2');
        $ppercent_prev =  $temp_array['value'];
        $ppercent_caret = $this->etc->get_proper_caret($ppercent_latest, $ppercent_prev);
        $data['ppercent_caret'] = $ppercent_caret;
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['poverty_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->rbincome->get_income_rb_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['poverty_provincial'] = $temp_array;
        $temp_array = array();
        
        // Poverty Threshold
        $temp_array = $this->rbincome->get_povertythreshold_rb($location_code, $location_type, '2015');
        $temp_array['value'] = ($temp_array['value'] / 12) * 5;
        $pthreshold_latest = $temp_array['value'];
        $data['poverty_threshold_all'] = $temp_array;
        $temp_array = array();  
        
        $temp_array = $this->rbincome->get_povertythreshold_rb($location_code, $location_type, '2012');
        $pthreshold_prev = ($temp_array['value'] / 12) * 5;
        $pthreshold_caret = $this->etc->get_proper_caret($pthreshold_latest, $pthreshold_prev);
        $data['pthreshold_caret'] = $pthreshold_caret;
        
        $temp_array = $this->rbincome->get_povertythreshold_rb($location_code, $location_type, '1997', '2015');
        foreach ($temp_array as &$active_array){
             $active_array['value'] = ($active_array['value'] / 12) * 5;
        } 
        $data['poverty_threshold_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('monthlyincome_pr_index', $data);
    }
    
}

?>