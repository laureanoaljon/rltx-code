<?php

class Labor extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('laboruse');
        $this->load->model('location');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2006';
        $year_end = '2016';
        $column_index = 1;
        
        $source_table = 'kpi_pay';

        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;

        $temp_array = array();
        
        // Labor
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_end, '2');
        $data['labor_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_end, '1');
        $data['labor_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_end, '0');
        $data['labor_rainfed'] = $temp_array;
        $temp_array = array();
        
        // Pre- Labor     
        $column_index = 2;
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['prelabor_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['prelabor_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['prelabor_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['prelabor_provincial'] = $temp_array;
        $temp_array = array();
        
        // Harvesting and Threshing Labor
        $column_index = 3;
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['htlabor_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['htlabor_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['htlabor_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['htlabor_provincial'] = $temp_array;
        $temp_array = array();
        
        // Post-Harvest Labor
        $column_index = 4;
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['plabor_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['plabor_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['plabor_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['plabor_provincial'] = $temp_array;
        $temp_array = array();
        
        // Permanent Labor
        $column_index = 5;
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['permlabor_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['permlabor_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['permlabor_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['permlabor_provincial'] = $temp_array;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('labor_index', $data);
    }
    
    function province() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '2006';
        $year_end_prev_alt = '2011';
        $year_end = '2016';
        $column_index = 1;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        $data['id'] = $location_code;
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_labor'))){
            show_404();
        }
        
        // Labor
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $labor_prev = $temp_array['value'];
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_end, '2');
        $data['labor_all'] = $temp_array;
        $labor_latest = $temp_array['value'];
        $data['labor_caret'] = $this->etc->get_proper_caret($labor_latest, $labor_prev);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_end_prev_alt, '1');
        $labor_irrig_prev = $temp_array['value'];
                
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_end, '1');
        $data['labor_irrigated'] = $temp_array;
        $labor_irrig_latest = $temp_array['value'];
        $data['labor_irrig_caret'] = $this->etc->get_proper_caret($labor_irrig_latest, $labor_irrig_prev);
        $temp_array = array();
        
         
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_end_prev_alt, '0');
        $labor_rain_prev = $temp_array['value'];
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_end, '0');
        $data['labor_rainfed'] = $temp_array;
        $labor_rain_latest = $temp_array['value'];
        $data['labor_rain_caret'] = $this->etc->get_proper_caret($labor_rain_latest, $labor_rain_prev);
        $temp_array = array();
        
        // Pre- Labor     
        $column_index = 2;
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['prelabor_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['prelabor_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['prelabor_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['prelabor_provincial'] = $temp_array;
        $temp_array = array();
        
        // Harvesting and Threshing Labor
        $column_index = 3;
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['htlabor_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['htlabor_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['htlabor_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['htlabor_provincial'] = $temp_array;
        $temp_array = array();
        
        // Post-Harvest Labor
        $column_index = 4;
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['plabor_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['plabor_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['plabor_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['plabor_provincial'] = $temp_array;
        $temp_array = array();
        
        // Permanent Labor
        $column_index = 5;
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['permlabor_all_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '1', $year_end);
        $data['permlabor_irrigated_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_start, '0', $year_end);
        $data['permlabor_rainfed_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->laboruse->get_labor_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['permlabor_provincial'] = $temp_array;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('labor_pr_index', $data);
    }
    
}

?>