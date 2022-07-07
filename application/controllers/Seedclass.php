<?php

class Seedclass extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('seedusage');
        $this->load->model('location');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '1996';
        $year_end = '2017';
        $year_end_alt = '2016';
        
        $column_index = 1;
        
         $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Hybrid
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['hy_all_ws'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['hy_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['hy_yearly'] = json_encode($temp_array);
        $temp_array = array();
    
        $column_index = 2;
        
        // High Quality Inbred
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['hq_all_ws'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['hq_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['hq_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 3;
        
        // Good Seeds
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['gs_all_ws'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['gs_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $gs_yearly_array = $temp_array;
        $data['gs_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 4;
                
        // Farmers Seeds
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['fs_all_ws'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['fs_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $fs_yearly_array = $temp_array;
        $data['fs_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        foreach (array_keys($gs_yearly_array + $fs_yearly_array) as $key) {
            $gf_yearly_array[$key] = $gs_yearly_array[$key]+ $fs_yearly_array[$key];
            $gf_yearly_array[$key]['value'] = $gs_yearly_array[$key]['value'] + $fs_yearly_array[$key]['value'];
        }
        $data['gf_yearly'] = json_encode($gf_yearly_array);
        
        $year_end = '2016';
        $column_index = 1;
        $temp_array = $this->seedusage->get_seedusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hy_provincial_ws'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
        $temp_array = $this->seedusage->get_seedusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hq_provincial_ws'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        $temp_array = $this->seedusage->get_seedusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['gs_provincial_ws'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
        $temp_array = $this->seedusage->get_seedusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['fs_provincial_ws'] = $temp_array;
        $temp_array = array();
        
        $column_index = 1;
        $temp_array = $this->seedusage->get_seedusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hy_provincial'] = $temp_array;
        $temp_array = array();
        
        $year_end = '2017';
        $column_index = 2;
        $temp_array = $this->seedusage->get_seedusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hq_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        $temp_array = $this->seedusage->get_seedusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['gs_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
        $temp_array = $this->seedusage->get_seedusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['fs_provincial'] = $temp_array;
        $temp_array = array();

                $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('seedclass_index', $data);
    }
    
    function province() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '1996';
        $year_end_prev = '2012';
        $year_end = '2017';
        $year_end_alt = '2016';
        $column_index = 1;
        
        $data['id'] = $location_code;
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_seedclass'))){
            show_404();
        }
        
         $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Hybrid
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_prev, '2');
        $hybrid_prev = $temp_array['value'];
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['hy_all_ws'] = $temp_array;
        $hybrid = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['hy_all'] = $temp_array;
        $hybrid_latest = $temp_array['value'];
        $temp_array = array();
        
        $data['hy_caret'] = $this->etc->get_proper_caret($hybrid, $hybrid_prev);
        $data['hy_ds_caret'] = $this->etc->get_proper_caret($hybrid_latest, $hybrid);
                
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['hy_yearly'] = json_encode($temp_array);
        $temp_array = array();
    
        $column_index = 2;
        
        // High Quality Inbred
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_prev, '2');
        $hq_prev = $temp_array['value'];
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['hq_all_ws'] = $temp_array;
        $hq = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['hq_all'] = $temp_array;
        $hq_latest = $temp_array['value'];
        $temp_array = array();
        
        $data['hq_caret'] = $this->etc->get_proper_caret($hq, $hq_prev);
        $data['hq_ds_caret'] = $this->etc->get_proper_caret($hq_latest, $hq);
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['hq_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 3;
        
        // Good Seeds
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_prev, '2');
        $gs_prev = $temp_array['value'];
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['gs_all_ws'] = $temp_array;
        $gs = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['gs_all'] = $temp_array;
        $gs_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $gs_yearly_array = $temp_array;
        $data['gs_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 4;
                
        // Farmers Seeds
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_prev, '2');
        $fs_prev = $temp_array['value'];
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['fs_all_ws'] = $temp_array;
        $fs = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['fs_all'] = $temp_array;
        $fs_latest = $temp_array['value'];
        $temp_array = array();
        
        $data['ls_caret'] = $this->etc->get_proper_caret($gs + $fs, $gs_prev + $fs_prev);
        $data['ls_ds_caret'] = $this->etc->get_proper_caret($gs_latest + $fs_latest, $gs + $fs);
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $fs_yearly_array = $temp_array;
        $data['fs_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        foreach (array_keys($gs_yearly_array + $fs_yearly_array) as $key) {
            $gf_yearly_array[$key] = $gs_yearly_array[$key]+ $fs_yearly_array[$key];
            $gf_yearly_array[$key]['value'] = $gs_yearly_array[$key]['value'] + $fs_yearly_array[$key]['value'];
        }
        $data['gf_yearly'] = json_encode($gf_yearly_array);
                
        $year_end = '2016';
        $column_index = 1;
        $temp_array = $this->seedusage->get_seedusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hy_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
        $temp_array = $this->seedusage->get_seedusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['hq_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        $temp_array = $this->seedusage->get_seedusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['gs_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
        $temp_array = $this->seedusage->get_seedusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['fs_provincial'] = $temp_array;
        $temp_array = array();
         
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('seedclass_pr_index', $data);
    }
    
}

?>