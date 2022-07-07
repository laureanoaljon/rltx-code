<?php

class Farmdetails extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
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
        
        $temp_array = array();
        
        // Farm Size        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['avefarm_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['avefarm_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['owner_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['owner_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['owner_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['amort_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['amort_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['amort_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 5;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['lessee_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['lessee_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['lessee_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 6;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['tenant_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['tenant_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['tenant_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 7;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['others_all'] = $temp_array;
        $temp_array = array();
                        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['others_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['others_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 8;

        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['one_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 9;

        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['two_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 10;

        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['three_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 11;

        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['four_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('farmdetails_index', $data);
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
        
        // 404 if location is not available
        if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_farm'))){
            show_404();
        }
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Farm Size                
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['avefarm_all'] = $temp_array;
        $fsize_latest = $temp_array['value'];
        $temp_array = array();
            
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end_alt  , '2');
        $fsize_prev =  $temp_array['value'];
        $fsize_caret = $this->etc->get_proper_caret($fsize_latest, $fsize_prev);
        $data['fsize_caret'] = $fsize_caret;
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['avefarm_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['owner_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['owner_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['owner_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['amort_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['amort_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['amort_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 5;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['lessee_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['lessee_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['lessee_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 6;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['tenant_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['tenant_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['tenant_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 7;
        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_end, '2');
        $data['others_all'] = $temp_array;
        $temp_array = array();
                        
        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['others_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->farmprofile->get_farm_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['others_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 8;

        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['one_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 9;

        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['two_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 10;

        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['three_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 11;

        $temp_array = $this->farmprofile->get_farm($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['four_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('farmdetails_pr_index', $data);
    }
    
}

?>