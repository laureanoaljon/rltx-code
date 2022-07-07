<?php

class Farmpractices extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('crop');
        $this->load->model('fertilizer');
        $this->load->model('cropsched');
        $this->load->model('seedusage');
        $this->load->model('laboruse');
        $this->load->model('pest');
        $this->load->model('variety');
        $this->load->model('fertapplied');
        $this->load->model('machine');
        $this->load->model('location');
    }
    
    function index() {
        $this->load->helper('html');
        $this->load->helper('url');
    
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '1996';
        $year_start_alt = '2006';
        $year_end = '2016';
        $year_end_alt = '2017';
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
          
        $source_table = 'rb_labor';
        
        $temp_array = array();
            
        $temp_array = $this->etc->get_all_provinces($source_table, $year_start_alt);
        $data['provinces'] = $temp_array;
        $temp_array = array();
        
        $column_index = 1;
        // Transplanting
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end, '2');
        $data['trans_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['trans_ds'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
                
        // Direct Seeding Total
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end, '2');
        $data['direct_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['direct_ds'] = $temp_array;
        $temp_array = array();
        
        $column_index = 1;
        
        // Transplanting Rate
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['trans_rate'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
                
        // Direct Seeding Rate
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['direct_rate'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['average_rate'] = $temp_array;
        $temp_array = array();
        
        $column_index = 1;        
        // Nitrogen
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['n_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['n_ds'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
        
        // Phosphorus
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['p_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['p_ds'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        
        // Potassium
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['k_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['k_ds'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
                
        // Average
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['average_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 1;
        
        // Hybrid
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['hy_all_ws'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['hy_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
        
        // High Quality Inbred
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['hq_all_ws'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['hq_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        
         // Good Seeds
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['gs_all_ws'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['gs_all'] = $temp_array;
        $temp_array = array();

        $column_index = 4;
                
        // Farmers Seeds
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['fs_all_ws'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['fs_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 1;
        
        // Labor
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_end, '2');
        $data['labor_all'] = $temp_array;
        $temp_array = array();
        
        $column_index = 1;
        
        // Top 10 Varieties
        $temp_array = $this->variety->get_var_top($location_code, $location_type, $year_end_alt, '2');
        $data['var_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 1;
        
        // Top 5 Fertilizer
        $temp_array = $this->fertapplied->get_fert_top($location_code, $location_type, $year_end_alt, '2');
        $data['fert_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 1;
        
        // Top 5 Machines
        $temp_array = $this->machine->get_machine_top($location_code, $location_type, $year_end_alt, '2', 5);
        $data['machine_all'] = json_encode($temp_array);
        $temp_array = array(); 
        
        $column_index = 1;
        
        // Top 4 Pest
        $temp_array = $this->pest->get_pests_top($location_code, $location_type, $year_end_alt, '2', 1);
        $data['pest_all'] = $temp_array;
        $temp_array = array();       
        
        // Top adopted
        $temp_array = $this->machine->get_adopted_top_all($location_code, $location_type, $year_end, '2', 1);
        $data['adopt_all'] = $temp_array;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('farmpractices_index', $data);
    }
    
    function province() {
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '1996';
        $year_start_alt = '2006';
        $year_end_prev_alt = '2011';
        $year_end_prev = '2012';
        $year_end = '2016';
        $year_end_alt = '2017';
        
        $data['id'] = $location_code;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $source_table = 'rb_labor';
        
        $temp_array = array();
            
        $temp_array = $this->etc->get_all_provinces($source_table, $year_start_alt);
        $data['provinces'] = $temp_array;
        $temp_array = array();
        
        // 404 if location is not available
        if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_labor'))){
            show_404();
        }
        
        $column_index = 1;
        // Transplanting
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_prev, '2');
        $trans_prev = $temp_array['value'];
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end, '2');
        $data['trans_all'] = $temp_array;
        $trans = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['trans_ds'] = $temp_array;
        $trans_latest = $temp_array['value'];
        $temp_array = array();
        
        $data['trans_caret'] = $this->etc->get_proper_caret($trans, $trans_prev);
        $data['trans_ds_caret'] = $this->etc->get_proper_caret($trans_latest, $trans);
        
        $column_index = 2;
        
        // Direct Seeding
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_prev, '2');
        $direct_prev = $temp_array['value'];
                
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end, '2');
        $data['direct_all'] = $temp_array;
        $direct = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['direct_ds'] = $temp_array;
        $direct_latest = $temp_array['value'];
        $temp_array = array();
        
        $data['direct_caret'] = $this->etc->get_proper_caret($direct, $direct_prev);
        $data['direct_ds_caret'] = $this->etc->get_proper_caret($direct_latest, $direct);
        
        $column_index = 1;
        
        // Transplanting Rate
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $transr_prev = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['trans_rate'] = $temp_array;
        $transr_latest = $temp_array['value'];
        $temp_array = array();
        $data['transr_caret'] = $this->etc->get_proper_caret($transr_latest, $transr_prev);
        
        $column_index = 2;
        
        // Direct Seeding Rate
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $directr_prev = $temp_array['value'];
        $temp_array = array();
                
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['direct_rate'] = $temp_array;
        $directr_latest = $temp_array['value'];
        $data['directr_caret'] = $this->etc->get_proper_caret($directr_latest, $directr_prev);
        $temp_array = array();
        
        $column_index = 3;
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $aver_prev = $temp_array['value'];
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['average_rate'] = $temp_array;
        $aver_latest = $temp_array['value'];
        $data['aver_caret'] = $this->etc->get_proper_caret($aver_latest, $aver_prev);
        $temp_array = array();
        
        $column_index = 1;        
        
        // Nitrogen
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $n_prev = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['n_all'] = $temp_array;
        $n_latest = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['n_ds'] = $temp_array;
        $n_ds = $temp_array['value'];
        $data['n_ds_caret'] = $this->etc->get_proper_caret($n_ds, $n_latest);
        
        $data['n_caret'] = $this->etc->get_proper_caret($n_latest, $n_prev);
        $temp_array = array();
        
        $column_index = 2;
        
        // Phosphorus
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $p_prev = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['p_all'] = $temp_array;
        $p_latest = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['p_ds'] = $temp_array;
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['p_ds'] = $temp_array;
        $p_ds = $temp_array['value'];
        $data['p_ds_caret'] = $this->etc->get_proper_caret($p_ds, $p_latest);
        
        $data['p_caret'] = $this->etc->get_proper_caret($p_latest, $p_prev);
        $temp_array = array();
        
        $column_index = 3;
        
        // Potassium
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $k_prev = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['k_all'] = $temp_array;
        $k_latest = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['k_ds'] = $temp_array;
        $k_ds = $temp_array['value'];
        $data['k_ds_caret'] = $this->etc->get_proper_caret($k_ds, $k_latest);
        
        $data['k_caret'] = $this->etc->get_proper_caret($k_latest, $k_prev);
        $temp_array = array();
        
        $column_index = 4;
                
        // Average
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $fert_prev = $temp_array['value'];
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['average_all'] = $temp_array;
        $fert_latest = $temp_array['value'];
        $data['fert_caret'] = $this->etc->get_proper_caret($fert_latest, $fert_prev);
        $temp_array = array();
        
        $column_index = 1;
        
        // Hybrid
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_prev, '2');
        $hybrid_prev = $temp_array['value'];
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['hy_all_ws'] = $temp_array;
        $hybrid = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['hy_all'] = $temp_array;
        $hybrid_latest = $temp_array['value'];
        $temp_array = array();
        
        $data['hy_caret'] = $this->etc->get_proper_caret($hybrid, $hybrid_prev);
        $data['hy_ds_caret'] = $this->etc->get_proper_caret($hybrid_latest, $hybrid);
        
        $column_index = 2;
        
        // High Quality Inbred
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_prev, '2');
        $hq_prev = $temp_array['value'];
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['hq_all_ws'] = $temp_array;
        $hq = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['hq_all'] = $temp_array;
        $hq_latest = $temp_array['value'];
        $temp_array = array();
        
        $data['hq_caret'] = $this->etc->get_proper_caret($hq, $hq_prev);
        $data['hq_ds_caret'] = $this->etc->get_proper_caret($hq_latest, $hq);
        
        $column_index = 3;
        
         // Good Seeds
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_prev, '2');
        $gs_prev = $temp_array['value'];
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['gs_all_ws'] = $temp_array;
        $gs = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['gs_all'] = $temp_array;
        $gs_latest = $temp_array['value'];
        $temp_array = array();

        $column_index = 4;
                
        // Farmers Seeds
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_prev, '2');
        $fs_prev = $temp_array['value'];
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['fs_all_ws'] = $temp_array;
        $fs = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->seedusage->get_seedusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['fs_all'] = $temp_array;
        $fs_latest = $temp_array['value'];
        $temp_array = array();
        
        $data['ls_caret'] = $this->etc->get_proper_caret($gs + $fs, $gs_prev + $fs_prev);
        $data['ls_ds_caret'] = $this->etc->get_proper_caret($gs_latest + $fs_latest, $gs + $fs);
        
        $column_index = 1;
        
        // Labor
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
        $labor_prev = $temp_array['value'];;
        
        $temp_array = $this->laboruse->get_labor($location_code, $location_type, $column_index, $year_end, '2');
        $data['labor_all'] = $temp_array;
        $labor_latest = $temp_array['value'];
        $data['labor_caret'] = $this->etc->get_proper_caret($labor_latest, $labor_prev);
        $temp_array = array();
        
        $column_index = 1;
        
        // Top 10 Varieties
        $temp_array = $this->variety->get_var_top($location_code, $location_type, $year_end_alt, '2');
        $data['var_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 1;
        
        // Top 5 Fertilizer
        $temp_array = $this->fertapplied->get_fert_top($location_code, $location_type, $year_end_alt, '2');
        $data['fert_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $column_index = 1;
        
        // Top 5 Machines
        $temp_array = $this->machine->get_machine_top($location_code, $location_type, $year_end_alt, '2', 5);
        $data['machine_all'] = json_encode($temp_array);
        $temp_array = array(); 
        
        $column_index = 1;
        
        // Top 4 Pest
        $temp_array = $this->pest->get_pests_top($location_code, $location_type, $year_end_alt, '2', 1);
        $data['pest_all'] = $temp_array;
        $temp_array = array();       
        
        // Top adopted
        $temp_array = $this->machine->get_adopted_top_all($location_code, $location_type, $year_end, '2', 1);
        $data['adopt_all'] = $temp_array;
        $temp_array = array();
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('farmpractices_pr_index', $data);
    }

}

?>
