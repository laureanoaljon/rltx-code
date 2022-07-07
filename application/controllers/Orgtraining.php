<?php

class Orgtraining extends CI_Controller {

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
        
        $source_table = 'kpi_pay';

        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
                
        $temp_array = array();
            
        $column_index = 20;
        // Org Membership
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['org_all'] = $temp_array;
        $data['non_all']['value'] = $data['org_all']['value'] - 100;
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['org_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['org_provincial'] = $temp_array;
        $temp_array = array();  
        
        $column_index = 21;
        // Training Attendance
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['tra_all'] = $temp_array;
        $data['trn_all']['value'] = $data['tra_all']['value'] - 100;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['tra_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['tra_provincial'] = $temp_array;
        $temp_array = array();  
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('orgtraining_index', $data);
    }
    
    function province() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '1996';
        $year_end = '2016';
        
        $data['id'] = $location_code;
        
        $source_table = 'kpi_pay';

        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_socio'))){
            show_404();
        }
            
        $column_index = 20;
        // Org Membership
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['org_all'] = $temp_array;
        $data['non_all']['value'] = $data['org_all']['value'] - 100;
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['org_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['org_provincial'] = $temp_array;
        $temp_array = array();  
        
        $column_index = 21;
        // Training Attendance
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_end, '2');
        $data['tra_all'] = $temp_array;
        $data['trn_all']['value'] = $data['tra_all']['value'] - 100;
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['tra_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->socio->get_socio_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['tra_provincial'] = $temp_array;
        $temp_array = array();  
        
        $data['footer'] = $this->load->view('footer', $data, true);
        
        $this->load->view('orgtraining_pr_index', $data);
    }
    
}

?>