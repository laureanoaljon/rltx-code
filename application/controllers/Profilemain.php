<?php

class Profilemain extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('rbincome');
        $this->load->model('socio');
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
        $column_index = 1;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $source_table = 'rb_socio';
        
        $temp_array = array();
            
        $temp_array = $this->etc->get_all_provinces($source_table, $year_start);
        $data['provinces'] = $temp_array;
        $temp_array = array();
        
        // Monthly Income
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['monthly_income_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
        // Poverty Threshold
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['poverty_all'] = $temp_array;
        $temp_array = array();
        
        // Poverty Threshold
        $temp_array = $this->rbincome->get_povertythreshold_rb($location_code, $location_type, '2015');
        $temp_array['value'] = ($temp_array['value'] / 12) * 5;
        $data['poverty_threshold_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
        // Age
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['mean_age_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 7;
        // Sex Male
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['male_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 8;
        // Sex Female
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['female_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 9;
        // Civil Status Single
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['s_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 10;
        // Civil Status Married
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['m_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 11;
        // Civil Status Widow
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['w_all'] = $temp_array;
        $temp_array = array();
                
        $column_index = 12;
        // Civil Status Separated
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['se_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 1;
        // Farm Size        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['avefarm_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['owner_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['amort_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 5;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['lessee_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 6;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['tenant_all'] = $temp_array;
        $temp_array = array();
            
        $column_index = 7;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['others_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 13;
        // Formal Education
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['educ_all'] = $temp_array;
        $temp_array = array();
           
        $column_index = 18;
        // Farm Experience
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['fexp_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 19;
                
        // Household Size     
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['hhsize_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
        
        // Source of Income
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['rice_inc_all'] = $temp_array;
        $temp_array = array();
                        
        $column_index = 3;
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['non_inc_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 20;
        // Org Membership
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['org_all'] = $temp_array;
        $data['non_all']['value'] = $data['org_all']['value'] - 100;
        
        $column_index = 21;
        // Training Attendance
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['tra_all'] = $temp_array;
        $data['trn_all']['value'] = $data['tra_all']['value'] - 100;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('profilemain_index', $data);
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
        
        $source_table = 'rb_socio';
        
        $temp_array = array();
            
        $temp_array = $this->etc->get_all_provinces($source_table, $year_start);
        $data['provinces'] = $temp_array;
        $temp_array = array();
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_socio'))){
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
        
        $column_index = 2;
        // Age
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['mean_age_all'] = $temp_array;
        $age_latest = $temp_array['value'];
        $temp_array = array();
            
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end_alt, '2');
        $age_prev =  $temp_array['value'];
        $age_caret = $this->etc->get_proper_caret($age_latest, $age_prev);
        $data['age_caret'] = $age_caret;
        
        $column_index = 7;
        // Sex Male
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['male_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 8;
        // Sex Female
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['female_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 9;
        // Civil Status Single
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['s_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 10;
        // Civil Status Married
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['m_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 11;
        // Civil Status Widow
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['w_all'] = $temp_array;
        $temp_array = array();
                
        $column_index = 12;
        // Civil Status Separated
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['se_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 1;
        // Farm Size        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['avefarm_all'] = $temp_array;
        $fsize_latest = $temp_array['value'];
        $temp_array = array();
            
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end_alt  , '2');
        $fsize_prev =  $temp_array['value'];
        $fsize_caret = $this->etc->get_proper_caret($fsize_latest, $fsize_prev);
        $data['fsize_caret'] = $fsize_caret;
        
        $column_index = 3;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['owner_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['amort_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 5;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['lessee_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 6;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['tenant_all'] = $temp_array;
        $temp_array = array();
            
        $column_index = 7;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['others_all'] = $temp_array;
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
        
        $column_index = 19;
                
        // Household Size     
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['hhsize_all'] = $temp_array;
        $hhsize_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end_alt, '2');
        $hhsize_prev =  $temp_array['value'];
        $hhsize_caret = $this->etc->get_proper_caret($hhsize_latest, $hhsize_prev);
        $data['hhsize_caret'] = $hhsize_caret;
        
        $column_index = 2;
        
        // Source of Income
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['rice_inc_all'] = $temp_array;
        $temp_array = array();
                        
        $column_index = 3;
        
        $temp_array = $this->rbincome->get_income_rb($location_code, $location_type, $column_index, $year_end, '2');
        $data['non_inc_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 20;
        // Org Membership
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['org_all'] = $temp_array;
        $data['non_all']['value'] = $data['org_all']['value'] - 100;
        
        $column_index = 21;
        // Training Attendance
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['tra_all'] = $temp_array;
        $data['trn_all']['value'] = $data['tra_all']['value'] - 100;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('profilemain_pr_index', $data);
    }
    
}

?>