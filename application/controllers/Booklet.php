<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Booklet extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('etc');
        $this->load->model('production');
        $this->load->model('harvestarea');
        $this->load->model('estyield');
        $this->load->model('valuation');
        $this->load->model('income');
        $this->load->model('account');
        $this->load->model('location');
        $this->load->model('stock');
        $this->load->model('ycost');

        $this->load->model('rbincome');
        $this->load->model('socio');
        $this->load->model('farmprofile');

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
    }
    
    ///////////////// MAIN /////////////////////////////////////////////////////////////////////////////////////////////////

    function index() {
        ///// RICE SECTOR /////////////////
        
        $this->load->helper('html');
        $this->load->helper('url');
        
        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2000';
        $year_end = '2020';
        $year_end_alt = '2019';
        $source_table = 'kpi_pay';
        
        // WITH NEW DATA
        $year_end_new = '2021';
        
        $temp_array = array();
        
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        $temp_array = array();
        
        // Production all
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end_new, '2');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $prod_latest = $temp_array['value'];
        $data['production_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $prod_prev = $temp_array['value'];
        $prod_caret = $this->etc->get_proper_caret($prod_latest, $prod_prev);
        $data['prod_caret'] = $prod_caret;
        
        // Harvest all
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_new, '2');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_latest = $temp_array['value'];
        $data['harvestarea_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_prev = $temp_array['value'];
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret'] = $area_caret;
        
        // Yield all
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_new, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['estyield_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret'] = $yield_caret;
        
        // Valuation all
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_end_new);
        $data['latest_palay_valuation'] = $temp_array;
        $valuation_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_end);
        $valuation_prev = $temp_array['value'];
        $valuation_caret = $this->etc->get_proper_caret($valuation_latest, $valuation_prev);
        $data['valuation_caret'] = $valuation_caret;
        $temp_array = array();
        
        // Total Supply All
        $temp_array = $this->account->get_total_supply($location_code, $location_type, $year_end);
        $data['supply'] = $temp_array;
        $supply_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->account->get_total_supply($location_code, $location_type, $year_end_alt);
        $supply_prev = $temp_array['value'];
        $supply_caret = $this->etc->get_proper_caret($supply_latest, $supply_prev);
        $data['supply_caret'] = $supply_caret;
        
        // Total Utilization All
        $temp_array = $this->account->get_total_utilize($location_code, $location_type, $year_end);
        $data['util'] = $temp_array;
        $util_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->account->get_total_utilize($location_code, $location_type, $year_end_alt);
        $util_prev = $temp_array['value'];
        $util_latest = $this->etc->get_proper_caret($util_latest, $util_prev);
        $data['util_caret'] = $util_latest;
        
        // Supply Sources
        $temp_array = $this->account->get_supply_sources($location_code, $location_type, $year_end);
        $data['supply_sources_values'] = $temp_array;
        $imports_latest = $temp_array['SUImports'];
        $temp_array = array();
        
        $temp_array = $this->account->get_supply_sources($location_code, $location_type, $year_end_alt);
        $imports_prev = $temp_array['SUImports'];
        $imports_caret = $this->etc->get_proper_caret($imports_latest, $imports_prev);
        $data['imports_caret'] = $imports_caret;
        
        // Utiltization Accounts
        $temp_array = $this->account->get_util_sources($location_code, $location_type, $year_end);
        $data['util_accounts_values'] = $temp_array;
        $temp_array = array();
        
        // Rice Consumption
        $temp_array = $this->account->get_fnri_per_capita($location_code, $location_type, '2016');
        $data['actual_per_capita_values'] = $temp_array;
        $kg_latest = $temp_array['KgPerYear'];
        $gram_latest = $temp_array['GmPerDay'];
        
        $temp_array = $this->account->get_fnri_per_capita($location_code, $location_type, '2012');
        $kg_prev = $temp_array['KgPerYear'];
        $gram_prev = $temp_array['GmPerDay'];
        $kg_caret = $this->etc->get_proper_caret($kg_latest, $kg_prev);
        $data['kg_caret'] = $kg_caret;
        $gram_caret = $this->etc->get_proper_caret($gram_latest, $gram_prev);
        $data['gram_caret'] = $gram_caret;
        
        // Agri share
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_end_new);
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['latest_palay_agri_share'] = $temp_array;
        $temp_array = array();
        
        // Gross returns
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_end);
        $data['gross_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $gross_latest = $temp_array['value'];
        $data['gross_returns'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_end_alt);
        $temp_array['value'] = number_format($temp_array['value']);
        $gross_prev = $temp_array['value'];
        $gross_caret = $this->etc->get_proper_caret($gross_latest, $gross_prev);
        $data['gross_caret'] = $gross_caret;
        
        // Net Returns
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_end);
        $data['net_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $net_latest = $data['net_returns_int'];
        $data['net_returns'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_end_alt);
        $net_prev = number_format($temp_array['value'], 0, '.', '');
        $net_caret = $this->etc->get_proper_caret($net_latest, $net_prev);
        $data['net_caret'] = $net_caret;
        
        // Yield Alt
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $yield_all_int = number_format($temp_array['value'] * 1000, 0, '.', '');

        // Total Costs
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end);
        $total_cost = $temp_array['value'];
        $unit_cost = $temp_array['value'] / $yield_all_int;
        $data['total_costs_main'] = number_format($total_cost, 0);
        $data['total_costs_int'] = number_format($unit_cost, 2, '.', '');
        $cost_latest = $temp_array['value'];
        $unit_latest = $data['total_costs_int'];
        $temp_array = array();
        
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end_alt);
        $unit_cost = $temp_array['value'] / $yield_all_int;
        $cost_prev = $temp_array['value'];
        $unit_prev = number_format($unit_cost, 2, '.', '');
        $cost_caret = $this->etc->get_proper_caret($cost_latest, $cost_prev);
        $data['cost_caret'] = $cost_caret;
        $unit_caret = $this->etc->get_proper_caret($unit_latest, $unit_prev);
        $data['unit_caret'] = $unit_caret;
        
        // Farmgate Price
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end_new);
        $fg_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['farmgate'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end);
        $fg_prev = $temp_array['value'];
        $fg_caret = $this->etc->get_proper_caret($fg_latest, $fg_prev);
        $data['fg_caret'] = $fg_caret;
        
        // Wholesale Price
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end_new);
        $wr_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['wholesale'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end);
        $wr_prev = $temp_array['value'];
        $wr_caret = $this->etc->get_proper_caret($wr_latest, $wr_prev);
        $data['wg_caret'] = $wr_caret;
        
        // Wholesale Price - SP
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end_new);
        $ws_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['wholesale_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end);
        $ws_prev = $temp_array['value'];
        $ws_caret = $this->etc->get_proper_caret($ws_latest, $ws_prev);
        $data['ws_caret'] = $ws_caret;
        
        // Retail Price
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end_new);
        $rg_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['retail'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end);
        $rg_prev = $temp_array['value'];
        $rg_caret = $this->etc->get_proper_caret($rg_latest, $rg_prev);
        $data['rg_caret'] = $rg_caret;
        
        // Retail Price - SP
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end_new);
        $rs_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['retail_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end);
        $rs_prev = $temp_array['value'];
        $rs_caret = $this->etc->get_proper_caret($rs_latest, $rs_prev);
        $data['rs_caret'] = $rs_caret;
        
        // Top provincial production
        $temp_array = $this->production->get_production_totals(null, '2', $year_end_new, null, '2', 'DESC', 10);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'] / 1000000, 2);
        } 
        $data['provincial_production_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top provincial yield
        $temp_array = $this->estyield->get_yield_avgs(null, '2', $year_end_new, null, '2', 'DESC', 10);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['provincial_yield_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Stocks
        // Houeshold Stock
        $temp_array = $this->stock->get_stocks($location_code, $location_type, 1, 2);
        $h_latest = $temp_array[0]['value']   * 1000;
        $temp_array[0]['value'] =  number_format($temp_array[0]['value'] / 1000, 2);
        $data['household'] = $temp_array;
        
        $h_prev = $temp_array[1]['value']  * 1000;
        $h_caret = $this->etc->get_proper_caret($h_latest, $h_prev);
        $data['h_caret'] = $h_caret;
        $temp_array = array();
        
        // Commercial Stock
        $temp_array = $this->stock->get_stocks($location_code, $location_type, 2, 2);
        $c_latest = $temp_array[0]['value'];
        $temp_array[0]['value'] =  number_format($temp_array[0]['value'] / 1000, 2);
        $data['commercial'] = $temp_array;
        
        $c_prev = $temp_array[1]['value'];
        $c_caret = $this->etc->get_proper_caret($c_latest, $c_prev);
        $data['c_caret'] = $c_caret;
        $temp_array = array();
        
        // NFA Stock
        $temp_array = $this->stock->get_stocks($location_code, $location_type, 3, 2);
        $n_latest = $temp_array[0]['value'];
        $temp_array[0]['value'] =  number_format($temp_array[0]['value'] / 1000, 2);
        $data['nfa'] = $temp_array;
        
        $n_prev = $temp_array[1]['value'];
        $n_caret = $this->etc->get_proper_caret($n_latest, $n_prev);
        $data['n_caret'] = $n_caret;
        $temp_array = array();


        ////// PRODUCTIONS //////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';

        // 404 if location is not available
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        $source_table = 'kpi_pay';
        
        // Total production
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $prod_latest = $temp_array['value'];
        $data['total_production_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end_alt, '2');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $prod_prev = $temp_array['value'];
        $prod_caret = $this->etc->get_proper_caret($prod_latest, $prod_prev);
        $data['prod_caret'] = $prod_caret;
        
        // Total production, irrigated
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end, '1');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $prod_latest = $temp_array['value'];
        $data['total_production_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end_alt, '1');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $prod_prev = $temp_array['value'];
        $prod_caret = $this->etc->get_proper_caret($prod_latest, $prod_prev);
        $data['prod_caret_irrig'] = $prod_caret;
        
        // Total production, rainfed
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end, '0');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $prod_latest = $temp_array['value'];
        $data['total_production_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end_alt, '0');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $prod_prev = $temp_array['value'];
        $prod_caret = $this->etc->get_proper_caret($prod_latest, $prod_prev);
        $data['prod_caret_rain'] = $prod_caret;
        
        // Total production, yearly
        $temp_array = $this->production->get_production_totals($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'] / 1000000, 2);
        } 
        $data['ph_production_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->production->get_production_totals($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'] / 1000000, 2);
        } 
        $data['ph_production_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->production->get_production_totals($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'] / 1000000, 2);
        } 
        $data['ph_production_rainfed'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top provincial production
        $temp_array = $this->production->get_production_totals(null, '2', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['provincial_production_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->production->get_production_totals_geocodes(null, '2', $year_end, null, '2', 'DESC');
        $data['provincial_production_geocoded'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top regional
        $temp_array = $this->production->get_production_totals_regions(null, '1', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['regional_production_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->production->get_production_totals_geocodes_regions(null, '1', $year_end, null, '2', 'DESC');
        $data['regional_production_geocoded'] = json_encode($temp_array);
        $temp_array = array();

        ///// HARVEST AREAS ////////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';

        $source_table = 'kpi_pay';

        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        // get_production_total($location_code = null, $location_type = NULL,  $year_start = NULL, $year_end = NULL, $ecosystem = NULL)
        
        // Total production
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_latest = $temp_array['value'];
        $data['total_area_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '2');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_prev = $temp_array['value'];
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret'] = $area_caret;
        
        // Total production, irrigated
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '1');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_latest = $temp_array['value'];
        $data['total_area_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '1');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_prev = $temp_array['value'];
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret_irrig'] = $area_caret;
        
        
        // Total production, rainfed
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '0');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_latest = $temp_array['value'];
        $data['total_area_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '0');
        $temp_array['value'] = number_format($temp_array['value'] / 1000000, 2);
        $area_prev = $temp_array['value'];
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret_rain'] = $area_caret;
        
        // Total production, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'] / 1000000, 2);
        } 
        $data['ph_area_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'] / 1000000, 2);
        } 
        $data['ph_area_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'] / 1000000, 2);
        } 
        $data['ph_area_rainfed'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top provincial production
        $temp_array = $this->harvestarea->get_harvestarea_totals(null, '2', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['provincial_area_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top provincial production geocodes
        $temp_array = $this->harvestarea->get_harvestarea_totals_geocodes(null, '2', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['provincial_area_geo'] = json_encode($temp_array);
        $temp_array = array();
            
        // Top regional
        $temp_array = $this->harvestarea->get_harvestarea_totals_regions(null, '1', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['regional_area_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_totals_geocodes_regions(null, '1', $year_end, null, '2', 'DESC');
        $data['regional_area_geo'] = json_encode($temp_array);
        $temp_array = array();

        /////// EST YIELD //////////////////////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();

        // Yield average
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_all_m'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret'] = $yield_caret;
        
        // Yield average, irrigated
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '1');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '1');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret_irrig'] = $yield_caret;
        
        // Yield average, rainfed
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '0');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '0');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret_rain'] = $yield_caret;
        
        // Total production, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_rainfed'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top provincial production
        $temp_array = $this->estyield->get_yield_avgs(null, '2', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['provincial_yield_all'] = json_encode($temp_array);
        $temp_array = array();
             
        $temp_array = $this->estyield->get_yield_avgs_geocodes(null, '2', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['provincial_yield_geo'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top regional
        $temp_array = $this->estyield->get_yield_avgs_regions(null, '1', $year_end, null, '2', 'DESC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['regional_yield_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avgs_geocodes_regions(null, '1', $year_end, null, '2', 'DESC');
        $data['regional_yield_geocoded'] = json_encode($temp_array);
        $temp_array = array();

        ////// SUPPLIES ///////////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2000';
        $year_end = '2020';
        $year_end_alt = '2019';
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();

        // Total Supply Yearly
        $temp_array = $this->account->get_total_supply($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$inner_array) {
            foreach ($inner_array as $key => &$value) {
                if($key != "year") {
                    $value = number_format($value / 1000, 2);
                }
            }
        }
        $data['total_supply_s'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total Utilization Yearly
        $temp_array = $this->account->get_total_utilize($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$inner_array) {
            foreach ($inner_array as $key => &$value) {
                if($key != "year") {
                    $value = number_format($value / 1000, 2);
                }
            }
        }
        $data['total_utilization_s'] = json_encode($temp_array);
        $temp_array = array();
        
        // Supply Sources
        $temp_array = $this->account->get_supply_sources($location_code, $location_type, $year_end);
        $data['supply_sources_values'] = $temp_array;
        $data['supply_sources'] = json_encode($temp_array);
        $temp_array = array();
        
        // Utiltization Accounts
        $temp_array = $this->account->get_util_sources($location_code, $location_type, $year_end);
        $data['util_accounts_values'] = $temp_array;
        $data['util_accounts'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total Supply
        $temp_array = $this->account->get_total_supply($location_code, $location_type, $year_end);
        $sup_latest = $temp_array['value'];
        $data['supply'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->account->get_total_supply($location_code, $location_type, $year_end_alt);
        $sup_prev = $temp_array['value'];
        $sup_caret = $this->etc->get_proper_caret($sup_latest, $sup_prev);
        $data['sup_caret'] = $sup_caret;
        
        // Total Utilization
        $temp_array = $this->account->get_total_utilize($location_code, $location_type, $year_end);
        $util_latest = $temp_array['value'];
        $data['util'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->account->get_total_utilize($location_code, $location_type, $year_end_alt);
        $util_prev = $temp_array['value'];
        $util_caret = $this->etc->get_proper_caret($util_latest, $util_prev);
        $data['util_caret'] = $util_caret;
        
        // Supply Sources Yearly
        $temp_array = $this->account->get_supply_sources($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$inner_array) {
            foreach ($inner_array as &$value) {
                $value = number_format($value / 1000, 2);
            }
        }
        $data['supply_sources_yearly_s'] = json_encode($temp_array);
        $temp_array = array();
        
        // Utiltization Accounts Yearly
        $temp_array = $this->account->get_util_sources($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$inner_array) {
            foreach ($inner_array as &$value) {
                $value = number_format($value / 1000, 2);
            }
        }
        $data['util_accounts_yearly_s'] = json_encode($temp_array);
        $temp_array = array();

        /////// CONSUMPTION /////////

        $location_code = '999';
        $location_type = '2';
        $year_start = '2000';
        $year_end = '2020';      
        $temp_array = array();
        
        $source_table = 'kpi_pay';

        // Total Supply Yearly
        $temp_array = $this->account->get_total_supply($location_code, $location_type, $year_start, $year_end);
        $data['total_supply'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total Utilization Yearly
        $temp_array = $this->account->get_total_utilize($location_code, $location_type, $year_start, $year_end);
        $data['total_utilization'] = json_encode($temp_array);
        $temp_array = array();
        
        // Supply Sources
        $temp_array = $this->account->get_supply_sources($location_code, $location_type, $year_end);
        $data['supply_sources_values'] = $temp_array;
        $data['supply_sources'] = json_encode($temp_array);
        $temp_array = array();
        
        // Utiltization Accounts
        $temp_array = $this->account->get_util_sources($location_code, $location_type, $year_end);
        $data['util_accounts_values'] = $temp_array;
        $data['util_accounts'] = json_encode($temp_array);
        $temp_array = array();
        
        // Supply Sources Yearly
        $temp_array = $this->account->get_supply_sources($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$inner_array) {
            foreach ($inner_array as &$value) {
                $value = number_format($value / 1000, 2);
            }
        }
        $data['supply_sources_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Utiltization Accounts Yearly
        $temp_array = $this->account->get_util_sources($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$inner_array) {
            foreach ($inner_array as &$value) {
                $value = number_format($value / 1000, 2);
            }
        }
        $data['util_accounts_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Net Food Disposable (NFD) Yearly
        $temp_array = $this->account->get_per_capita($location_code, $location_type, $year_start, $year_end);
        $data['per_capita_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Rice Consumption
        $temp_array = $this->account->get_fnri_per_capita($location_code, $location_type, '2016');
        $data['actual_per_capita_values'] = $temp_array;
        
        // Rice Consumption
        $temp_array = $this->account->get_fnri_per_capita($location_code, $location_type, '2000', '2016');
        $data['actual_per_capita_yearly'] = json_encode($temp_array);
        
        // Population 
        $temp_array = $this->account->get_population($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'] / 1000000, 2);
        }
        $data['population'] = json_encode($temp_array);

        
        /////// VALUATION //////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        // get_production_total($location_code = null, $location_type = NULL,  $year_start = NULL, $year_end = NULL, $ecosystem = NULL)
        
        // Palay valuation
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_end);
        $data['latest_palay_valuation'] = $temp_array;
        $pv_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_end_alt);
        $pv_prev = $temp_array['value'];
        $pv_caret = $this->etc->get_proper_caret($pv_latest, $pv_prev);
        $data['pv_caret'] = $pv_caret;
        
        // Agri valuation
        $temp_array = $this->valuation->get_agriculture_valuation($location_code, $location_type, $year_end);
        $data['latest_agri_valuation'] = $temp_array;
        $agri_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_agriculture_valuation($location_code, $location_type, $year_end_alt);
        $agri_prev = $temp_array['value'];
        $agri_caret = $this->etc->get_proper_caret($agri_latest, $agri_prev);
        $data['agri_caret'] = $agri_caret;
            
        // GDP valuation
        $temp_array = $this->valuation->get_gdp_valuation($location_code, $location_type, $year_end);
        $data['latest_gdp_valuation'] = $temp_array;
        $temp_array = array();
        
        // Agri share
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_end);
        $share_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['latest_palay_agri_share'] = $temp_array;
        $data['latest_nonpalay_agri_share'] = 100 - $data['latest_palay_agri_share']['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_end_alt);
        $share_prev = $temp_array['value'];
        $share_caret = $this->etc->get_proper_caret($share_latest, $share_prev);
        $data['share_caret'] = $share_caret;
        
        // GDP share
        $temp_array = $this->valuation->get_palay_share_to_gdp($location_code, $location_type, $year_end);
        $temp_array['value'] = number_format($temp_array['value'], 1);
        $data['latest_palay_gdp_share'] = $temp_array;
        $temp_array = array();
        
        // Palay valuation, yearly
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_start, $year_end);
	    foreach ($temp_array as &$active_array){
            $active_array['value'] = $active_array['value'] / 1000;
        }
        $data['palay_valuation_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Agriculture valuation, yearly
        $temp_array = $this->valuation->get_agriculture_valuation($location_code, $location_type, $year_start, $year_end);
	    foreach ($temp_array as &$active_array){
            $active_array['value'] = $active_array['value'] / 1000;
        }
        $data['agri_valuation_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Agri share, yearly
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0);
        } 
        $data['agri_valuation_share'] = json_encode($temp_array);
        $temp_array = array();
        
        // GDP share, yearly        
        $temp_array = $this->valuation->get_palay_share_to_gdp($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0);
        } 
        $data['total_valuation_share'] = json_encode($temp_array);
        $temp_array = array();


        //// INCOMES ///////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2000';
        $year_end = '2020';
        $year_end_alt = '2019';
        $cpi_type = '3';
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Net Returns
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_end);
        $net_latest = $temp_array['value'];
        $data['net_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['net_returns'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_end_alt);
        $net_prev = $temp_array['value'];
        $net_caret = $this->etc->get_proper_caret($net_latest, $net_prev);
        $data['net_caret'] = $net_caret;
        
        // Total Costs
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end);
        $cost_latest = $temp_array['value'];
        $data['total_costs_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['total_costs'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end_alt);
        $cost_prev = $temp_array['value'];
        $cost_caret = $this->etc->get_proper_caret($cost_latest, $cost_prev);
        $data['cost_caret'] = $cost_caret;
        
        // Total Costs Regional
        $temp_array = $this->income->get_costs_net(NULL, '1', '2', $year_end, NULL, 'ASC');
        foreach ($temp_array as &$active_array){
            $active_array['costs'] = number_format($active_array['costs'], 0, '.', '');
            $active_array['net'] = number_format($active_array['net'], 0, '.', '');
        }
        $data['regional_costs_all'] = json_encode($temp_array);
        $temp_array = array();
        
         // Gross returns
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_end);
        $gross_latest = $temp_array['value'];
        $data['gross_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['gross_returns'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_end_alt);
        $gross_prev = $temp_array['value'];
        $gross_caret = $this->etc->get_proper_caret($gross_latest, $gross_prev);
        $data['gross_caret'] = $gross_caret;
        
        // Net Income Yearly
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_net_returns'] = json_encode($temp_array);
        $temp_array = array();
        
        // Gross returns Yearly
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_gross_returns'] = json_encode($temp_array);
        $temp_array = array();
        
        // Gross returns Regional
        $temp_array = $this->income->get_gross_returns(NULL, '1', '2', $year_end, NULL, 'ASC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        }
        $data['regional_gross_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total Costs Yearly
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_total_costs'] = json_encode($temp_array);
        $temp_array = array();


        ////// IMPEXPORTS /////////

         // CONSTANT VALUES
         $location_code = '999';
         $location_type = '2';
         $year_start = '2000';
         $year_end = '2020';
         $year_end_alt = '2019';
         
         $source_table = 'kpi_pay';
         
         $temp_array = $this->etc->get_all_regions($source_table);
         $data['regions'] = $temp_array;
         $temp_array = array();
 
         $temp_array = $this->etc->get_all_provinces($source_table);
         $data['provinces'] = $temp_array;
         
         $temp_array = array();
         
         // Supply Sources
         $temp_array = $this->account->get_supply_sources($location_code, $location_type, $year_end);
         $data['supply_sources_values'] = $temp_array;
         $data['supply_sources'] = json_encode($temp_array);
         $temp_array = array();
         
         // Utiltization Accounts
         $temp_array = $this->account->get_util_sources($location_code, $location_type, $year_end);
         $data['util_accounts_values'] = $temp_array;
         $data['util_accounts'] = json_encode($temp_array);
         $temp_array = array();
         
         // Supply Sources Yearly
         $temp_array = $this->account->get_supply_sources($location_code, $location_type, $year_start, $year_end);
         $data['supply_sources_yearly'] = json_encode($temp_array);
         $temp_array = array();
         
         // Utiltization Accounts Yearly
         $temp_array = $this->account->get_util_sources($location_code, $location_type, $year_start, $year_end);
         $data['util_accounts_yearly'] = json_encode($temp_array);
         $temp_array = array();


        /////// STOCKS /////////

         // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2018';
        $year_end = '2022';
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Total Stocks
        $temp_array = $this->stock->get_stocks($location_code, $location_type, 4, 2);
        $total_latest = $temp_array[0]['value'] / 1000;
        $temp_array[0]['value'] =  number_format($temp_array[0]['value'] / 1000, 2);
        $data['total'] = $temp_array;
        
        $total_prev = $temp_array[1]['value'] / 1000;
        $total_caret = $this->etc->get_proper_caret($total_latest, $total_prev);
        $data['total_caret'] = $total_caret;
        $temp_array = array();
        
        // Houeshold Stock
        $temp_array = $this->stock->get_stocks($location_code, $location_type, 1, 2);
        $h_latest = $temp_array[0]['value']   * 1000;
        $temp_array[0]['value'] =  number_format($temp_array[0]['value'] / 1000, 2);
        $data['household'] = $temp_array;
        
        $h_prev = $temp_array[1]['value']  * 1000;
        $h_caret = $this->etc->get_proper_caret($h_latest, $h_prev);
        $data['h_caret'] = $h_caret;
        $temp_array = array();
        
        // Commercial Stock
        $temp_array = $this->stock->get_stocks($location_code, $location_type, 2, 2);
        $c_latest = $temp_array[0]['value'];
        $temp_array[0]['value'] =  number_format($temp_array[0]['value'] / 1000, 2);
        $data['commercial'] = $temp_array;
        
        $c_prev = $temp_array[1]['value'];
        $c_caret = $this->etc->get_proper_caret($c_latest, $c_prev);
        $data['c_caret'] = $c_caret;
        $temp_array = array();
        
        // NFA Stock
        $temp_array = $this->stock->get_stocks($location_code, $location_type, 3, 2);
        $n_latest = $temp_array[0]['value'];
        $temp_array[0]['value'] =  number_format($temp_array[0]['value'] / 1000, 2);
        $data['nfa'] = $temp_array;
        
        $n_prev = $temp_array[1]['value'];
        $n_caret = $this->etc->get_proper_caret($n_latest, $n_prev);
        $data['n_caret'] = $n_caret;
        $temp_array = array();
        
        // Rice Stock Total All
        
        $temp_array = $this->stock->get_stocks($location_code, $location_type, 4, null, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = $active_array['value'] * 1000;
        }
        $data['total_all'] = json_encode($temp_array);
        $temp_array = array();


        ////// PRICES //////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        $cpi_type = '3';
        
        $temp_array = array();
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        // Farmgate Price
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $farm_latest = $temp_array['value'];
        $data['farmgate'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $farm_prev = $temp_array['value'];
        $farm_caret = $this->etc->get_proper_caret($farm_latest, $farm_prev);
        $data['farm_caret'] = $farm_caret;
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_start, $year_end);
        $data['farmgate_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        // Farmgate Semestral
        $temp_array = $this->income->get_farmgate_prices_series($location_code, $location_type, $year_end, '2', 20);
        $data['farmgate_prices_sem'] = json_encode($temp_array);
        $temp_array = array();
        
        // Farmgate Monthly
        $temp_array = $this->income->get_farmgate_prices_series($location_code, $location_type, $year_end, '3', 20);
        $data['farmgate_prices_month'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices_real($location_code, $location_type, $cpi_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        }
        $data['farmgate_prices_real'] = json_encode($temp_array);
        $temp_array = array();
        
        // Wholesale Price
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whr_latest = $temp_array['value'];
        $data['wholesale'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whr_prev = $temp_array['value'];
        $whr_caret = $this->etc->get_proper_caret($whr_latest, $whr_prev);
        $data['whr_caret'] = $whr_caret;
                
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whw_latest = $temp_array['value'];
        $data['wholesale_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whw_prev = $temp_array['value'];
        $whw_caret = $this->etc->get_proper_caret($whw_latest, $whw_prev);
        $data['whw_caret'] = $whw_caret;
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_start, $year_end);
        $data['wholesale_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        // Wholesale Semestral
        $temp_array = $this->income->get_wholesale_prices_series($location_code, $location_type, $year_end, '2', 20);
        $data['wholesale_prices_sem'] = json_encode($temp_array);
        $temp_array = array();
        
        // Wholesale Monthly
        $temp_array = $this->income->get_wholesale_prices_series($location_code, $location_type, $year_end, '3', 20);
        $data['wholesale_prices_month'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_start, $year_end);
        $data['wholesale_sp_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        //Wholesale SP Semestral
        $temp_array = $this->income->get_wholesale_sp_prices_series($location_code, $location_type, $year_end, '2', 20);
        $data['wholesale_sp_prices_sem'] = json_encode($temp_array);
        $temp_array = array();
        
        // Wholesale SP Monthly
        $temp_array = $this->income->get_wholesale_sp_prices_series($location_code, $location_type, $year_end, '3', 20);
        $data['wholesale_sp_prices_month'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail Price
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhw_latest = $temp_array['value'];
        $data['retail'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhw_prev = $temp_array['value'];
        $rhw_caret = $this->etc->get_proper_caret($rhw_latest, $rhw_prev);
        $data['rhw_caret'] = $rhw_caret;
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhr_latest = $temp_array['value'];
        $data['retail_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhr_prev = $temp_array['value'];
        $rhr_caret = $this->etc->get_proper_caret($rhr_latest, $rhr_prev);
        $data['rhr_caret'] = $rhr_caret;
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_start, $year_end);
        $data['retail_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail Semestral
        $temp_array = $this->income->get_retail_prices_series($location_code, $location_type, $year_end, '2', 20);
        $data['retail_prices_sem'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail Monthly
        $temp_array = $this->income->get_retail_prices_series($location_code, $location_type, $year_end, '3', 20);
        $data['retail_prices_month'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_start, $year_end);
        $data['retail_sp_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail SP Semestral
        $temp_array = $this->income->get_retail_sp_prices_series($location_code, $location_type, $year_end, '2', 20);
        $data['retail_sp_prices_sem'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail Monthly
        $temp_array = $this->income->get_retail_sp_prices_series($location_code, $location_type, $year_end, '3', 20);
        $data['retail_sp_prices_month'] = json_encode($temp_array);
        $temp_array = array();


        ////// YIELD COST ///////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '2000';
        $year_end = '2019';
        $year_end_upd = '2020';
        $yield = 0;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Yield average
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_upd, '2');
        $yield_latest = $temp_array['value'];
        $data['yield_all_int'] = number_format($temp_array['value'] * 1000, 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $data['yield_all'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $yield_prev = $temp_array['value'];
        $data['yield_all_int_prev'] = number_format($temp_array['value'] * 1000, 0, '.', '');
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret'] = $yield_caret;
        
        // Total production, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end_upd, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
            $active_array['value_int'] = number_format($active_array['value'] * 1000, 0, '.', '');
        } 
        $data['ph_yield_all_int'] = $temp_array;
        $data['ph_yield_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total Costs
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end_upd);
        $unit_cost = $temp_array['value']/ $data['yield_all_int'];
        $unit_latest = $unit_cost;
        $data['total_costs_int'] = number_format($unit_cost, 2, '.', '');
        $temp_array = array();
        
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end);
        $unit_cost = $temp_array['value']/ $data['yield_all_int_prev'];
        $unit_prev = $unit_cost;
        $unit_caret = $this->etc->get_proper_caret($unit_latest, $unit_prev);
        $data['unit_caret'] = $unit_caret;
        
        // Total Costs Yearly
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_start, $year_end);
        for ($i = 0; $i < count($temp_array); $i++) {
            $temp_array[$i]['value'] = number_format(($temp_array[$i]['value']/($data['ph_yield_all_int'][$i]['value'] * 1000)), 2, '.', '');
        }
        $data['yearly_total_costs_int'] = json_encode($temp_array);
        //print_r($data['yearly_total_costs_int']);
        $temp_array = array();
        
        
        // NPK Use
        $npk_array = array();
        $temp_array = $this->income->get_npk_usage(NULL, $location_type, '2', $year_end, $yield);
        for ($i = 0; $i < count($temp_array); $i++) {
            if(!is_null($temp_array[$i]['n_value'])) {
                $npk_array[$i]['location_name'] = $temp_array[$i]['location_name'];
                $npk_array[$i]['n_value'] = $temp_array[$i]['n_value'];
                $npk_array[$i]['p_value'] = $temp_array[$i]['p_value'];
                $npk_array[$i]['k_value'] = $temp_array[$i]['k_value'];
            }
        }
        $data['npk_provinces_all'] = json_encode(array_values($npk_array));
        $temp_array = array();
        
        // Cost Breakdown
        $temp_array = $this->income->get_cost_breakdown($location_code, $location_type, $year_start, '2', $year_end_upd);
        $data['yearly_ph_cost_breakdown'] = json_encode($temp_array);
        $temp_array = array();
        
        // Yield Cost Scatter Plot
        $temp_array = $this->ycost->get_yield_cost(NULL, '2', '2017', NULL, 'ASC', NULL, NULL);
        for($i = 0; $i < count($temp_array); $i++){
            $data['yieldcost_names'][$i]['location_name'] = $temp_array[$i]['location_name'];
            $data['yieldcost'][$i]['x'] = number_format($temp_array[$i]['x']/1000, 2, '.', '');
            $data['yieldcost'][$i]['y'] = $temp_array[$i]['y'];
        }
        $temp_array = array();
        $data['yieldcost_names'] = json_encode($data['yieldcost_names']);
        $data['yieldcost'] = json_encode($data['yieldcost']);

        //////// PROFILE /////////

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

        /////// MONTHLY INCOME ///////////

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

        //////// SOCIAL //////////////////

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

        ///////// EDUC FARMER EXP //////////

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

        ///////// ORG TRAINING //////////

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

        //////// FARM PRACTICES //////////

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
        $data['trans_all_fp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['trans_ds'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
                
        // Direct Seeding Total
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end, '2');
        $data['direct_all_fp'] = $temp_array;
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
        $data['average_all_fp'] = $temp_array;
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
        $data['fert_all_m'] = json_encode($temp_array);
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

        //////// SEEDING RATE ////////////

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
        
        // Transplanting Rate
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['trans_all_sr'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['trans_yearly_sr'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['trans_provincial_sr'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
                
        // Direct Seeding Rate
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['direct_all_sr'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['direct_yearly_sr'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['direct_provincial_sr'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
        $data['average_all_sr'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_start, '2', $year_end);
        $data['average_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->crop->get_seedrate_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['average_provincial_sr'] = $temp_array;
        $temp_array = array();

        /////// CROPEST /////////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '1996';
        $year_end = '2016';
        $year_end_alt = '2017';
        $column_index = 1;
        
        $temp_array = array();
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
         // Transplanting
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end, '2');
        $data['trans_all_cp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['trans_ds'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['trans_yearly_cp'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['trans_provincial_cp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
        $data['trans_ds_provincial'] = $temp_array;
        $temp_array = array();
                
        $column_index = 2;
                
        // Direct Seeding Total
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end, '2');
        $data['direct_all_cp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['direct_ds'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['direct_yearly_cp'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['direct_provincial_cp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->crop->get_cropdata_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
        $data['direct_ds_provincial'] = $temp_array;
        $temp_array = array();

        ////////// LABOR //////////////

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

        ///////// SEED CLASS //////////

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

        //////// FERT USAGE //////////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_start = '1996';
        $year_end_prev_alt = '2011';
        $year_end_prev = '2012';
        $year_end = '2016';
        $year_end_alt = '2017';
        $column_index = 1;
        
        $source_table = 'kpi_pay';

        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Nitrogen
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['n_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['n_ds'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['n_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['n_provincial'] = $temp_array;
        $temp_array = array();
                                
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
        $data['n_ds_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 2;
        
        // Phosphorus
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['p_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['p_ds'] = $temp_array;
        $temp_array = array();
        
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['p_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['p_provincial'] = $temp_array;
        $temp_array = array();

                
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
        $data['p_ds_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 3;
        
        // Potassium
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['k_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['k_ds'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
        $data['k_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['k_provincial'] = $temp_array;
        $temp_array = array();
        
                
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
        $data['k_ds_provincial'] = $temp_array;
        $temp_array = array();
        
        $column_index = 4;
                
        // Average
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
        $data['average_all_fu'] = $temp_array;
        $temp_array = array();
        
        // Average
        $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
        $data['average_ds'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
        $data['average_provincial_fu'] = $temp_array;
        $temp_array = array();

        ////////// VARIETIES //////////////////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_end = '2017';
        $column_index = 1;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Top 10 Varieties
        $temp_array = $this->variety->get_var_top($location_code, $location_type, $year_end, '2');
        $data['var_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->variety->get_var_top_prri($location_code, $location_type, $year_end, '2');
        $data['var_prri'] = json_encode($temp_array);
        $temp_array = array();
        
        // function get_pests_top_prov($location_code = NULL, $location_type, $year_start, $ecosystem, $year_end = NULL, $limit = NULL){            
        $temp_array = $this->variety->get_var_top_prov(NULL, $location_type, $year_end, '2', $year_end, 3);
        $data['var_provincial'] = $temp_array;
        $temp_array = array();

        ///////// ADOPTION RATE //////////

        $location_code = '999';
        $location_type = '2';
        $year_end = '2016';
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Land Preparation
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 2);
        $data['adopt_landprep'] = json_encode($temp_array);
        $temp_array = array();
        
        // Crop Establishment
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 3);
        $data['adopt_cropest'] = json_encode($temp_array);
        $temp_array = array();
        
        // Nutrient Management
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 4);
        $data['adopt_nutrient'] = json_encode($temp_array);
        $temp_array = array();
        
        // Water Management
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 5);
        $data['adopt_water'] = json_encode($temp_array);
        $temp_array = array();
        
        // Pest Management
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 6);
        $data['adopt_pest'] = json_encode($temp_array);
        $temp_array = array();
        
         // Harvest Management
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 7);
        $data['adopt_harvest'] = json_encode($temp_array);
        $temp_array = array();
        
        // Others
        $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 8, 7);
        $data['adopt_others'] = json_encode($temp_array);
        $temp_array = array();

        ////////// FERTILIZER APP /////////////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_end = '2017';
        $column_index = 1;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Top 5 fertilizers
        $temp_array = $this->fertapplied->get_fert_top($location_code, $location_type, $year_end, '2');
        $data['fert_all_fa'] = json_encode($temp_array);
        $temp_array = array();
        
        // function get_pests_top_prov($location_code = NULL, $location_type, $year_start, $ecosystem, $year_end = NULL, $limit = NULL){            
        $temp_array = $this->fertapplied->get_fert_top_prov(NULL, $location_type, $year_end, '2', $year_end, 3);
        $data['fert_provincial_fa'] = $temp_array;
        $temp_array = array();

        //////// PESTICIDES //////////////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_end = '2017';
        $column_index = 1;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Top 10 Pest
        $temp_array = $this->pest->get_pests_top($location_code, $location_type, $year_end, '2', 5);
        $data['pest_array'] = $temp_array;
        $data['pest_all_mp'] = json_encode($temp_array);
        $temp_array = array();
        
        // function get_pests_top_prov($location_code = NULL, $location_type, $year_start, $ecosystem, $year_end = NULL, $limit = NULL){            
        $temp_array = $this->pest->get_pests_top_prov(NULL, $location_type, $year_end, '2', $year_end, 1);
        $data['pest_provincial'] = $temp_array;
        $temp_array = array();

        ///////// MACHINE SOURCE //////////

        // CONSTANT VALUES
        $location_code = '999';
        $location_type = '2';
        $year_end = '2017';
        $column_index = 1;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Top 5 fertilizers
        $temp_array = $this->machine->get_machine_top($location_code, $location_type, $year_end, '2', 5);
        $data['fert_all_ms'] = json_encode($temp_array);
        $temp_array = array();
        
        // function get_pests_top_prov($location_code = NULL, $location_type, $year_start, $ecosystem, $year_end = NULL, $limit = NULL){            
        $temp_array = $this->machine->get_machine_top_prov(NULL, $location_type, $year_end, '2', $year_end, 3);
        $data['fert_provincial_ms'] = $temp_array;
        $temp_array = array();
        
        $this->load->view('booklet_main', $data);
    }

    //////////////// FOR REGION /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function region(){
        $this->load->helper('html');
        $this->load->helper('url');
        $source_table = 'kpi_pay';
        
        ///// MAIN - REGION ///////

        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '1';
        $year_start = '2000';
        $year_end = '2020';
        $year_end_alt = '2019';
        $year_end_prev = '2018';
        
         // WITH NEW DATA
        $year_end_new = '2021';
        
        
        $data['id'] = $location_code;
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        $temp_array = array();
        
        
        // 404 if location is not available
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        // Production all
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end_new, '2');
        $prod_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $data['production_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end, '2');
        $prod_prev = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $prod_caret = $this->etc->get_proper_caret($prod_latest, $prod_prev);
        $data['prod_caret'] = $prod_caret;
        
        // Harvest all
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_new, '2');
        $area_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['harvestarea_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '2');
        $area_prev = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret'] = $area_caret;
        
        // Yield all
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_new, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['estyield_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret'] = $yield_caret;
        
        // Yield Alt
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '2');
        $yield_all_int = number_format($temp_array['value'] * 1000, 0, '.', '');
        
        // Valuation all
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_end);
        $data['latest_palay_valuation'] = $temp_array;
        $valuation_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_end_alt);
        $valuation_prev = $temp_array['value'];
        $valuation_caret = $this->etc->get_proper_caret($valuation_latest, $valuation_prev);
        $data['valuation_caret'] = $valuation_caret;
        $temp_array = array();
        
        // Agri share
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_end);
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['latest_palay_agri_share'] = $temp_array;
        $temp_array = array();
        
        // Gross returns
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_end);
        $data['gross_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $gross_latest = $temp_array['value'];
        $data['gross_returns'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_end_alt);
        $temp_array['value'] = number_format($temp_array['value']);
        $gross_prev = $temp_array['value'];
        $gross_caret = $this->etc->get_proper_caret($gross_latest, $gross_prev);
        $data['gross_caret'] = $gross_caret;
        
        // Net Returns
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_end);
        $data['net_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $net_latest = $data['net_returns_int'];
        $data['net_returns'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_end_alt);
        $net_prev = number_format($temp_array['value'], 0, '.', '');
        $net_caret = $this->etc->get_proper_caret($net_latest, $net_prev);
        $data['net_caret'] = $net_caret;
        
        // Total Costs
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end);
        $total_cost = $temp_array['value'];
        $unit_cost = $temp_array['value'] / $yield_all_int;
        $data['total_costs_regional'] = number_format($total_cost, 0);
        $data['total_costs_int'] = number_format($unit_cost, 2, '.', '');
        $cost_latest = $temp_array['value'];
        $unit_latest = $data['total_costs_int'];
        $temp_array = array();
        
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end_alt);
        $unit_cost = $temp_array['value'] / $yield_all_int;
        $cost_prev = $temp_array['value'];
        $unit_prev = number_format($unit_cost, 2, '.', '');
        $cost_caret = $this->etc->get_proper_caret($cost_latest, $cost_prev);
        $data['cost_caret'] = $cost_caret;
        $unit_caret = $this->etc->get_proper_caret($unit_latest, $unit_prev);
        $data['unit_caret'] = $unit_caret;
        
        // Farmgate Price
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end_new);
        $fg_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['farmgate'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end);
        $fg_prev = $temp_array['value'];
        $fg_caret = $this->etc->get_proper_caret($fg_latest, $fg_prev);
        $data['fg_caret'] = $fg_caret;
        
        // Wholesale Price
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end_new);
        $wr_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['wholesale'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end);
        $wr_prev = $temp_array['value'];
        $wr_caret = $this->etc->get_proper_caret($wr_latest, $wr_prev);
        $data['wg_caret'] = $wr_caret;
        
        // Wholesale Price - SP
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end_new);
        $ws_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['wholesale_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end);
        $ws_prev = $temp_array['value'];
        $ws_caret = $this->etc->get_proper_caret($ws_latest, $ws_prev);
        $data['ws_caret'] = $ws_caret;
        
        // Retail Price
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end);
        $rg_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['retail'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end_alt);
        $rg_prev = $temp_array['value'];
        $rg_caret = $this->etc->get_proper_caret($rg_latest, $rg_prev);
        $data['rg_caret'] = $rg_caret;
        
        // Retail Price - SP
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end);
        $rs_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['retail_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end_alt);
        $rs_prev = $temp_array['value'];
        $rs_caret = $this->etc->get_proper_caret($rs_latest, $rs_prev);
        $data['rs_caret'] = $rs_caret;
        
        // Top provincial production
        $temp_array = $this->production->get_production_totals(null, '2', '2020', null, '2', 'DESC', 10);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'] / 1000000, 2);
        } 
        $data['provincial_production_all'] = json_encode($temp_array);
        $temp_array = array();

        ////// PRODUCTIONS - REGION ///////

        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '1';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        
        $data['id'] = $location_code;
        
        $this->load->helper('html');
        $this->load->helper('url');
        
        // 404 if location is not available
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Total production
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end, '2');
        $prod_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $data['total_production_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end_alt, '2');
        $prod_prev = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        
        $prod_caret = $this->etc->get_proper_caret($prod_latest, $prod_prev);
        $data['prod_caret'] = $prod_caret;
        
        // Total production, irrigated
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end, '1');
        $prod_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $data['total_production_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end_alt, '1');
        $prod_prev = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $prod_caret = $this->etc->get_proper_caret($prod_latest, $prod_prev);
        $data['prod_caret_irrig'] = $prod_caret;
        
        // Total production, rainfed
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end, '0');
        $prod_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $data['total_production_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end_alt, '0');
        $prod_prev = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $prod_caret = $this->etc->get_proper_caret($prod_latest, $prod_prev);
        $data['prod_caret_rain'] = $prod_caret;
        
        // Total production, yearly
        $temp_array = $this->production->get_production_totals($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_production_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->production->get_production_totals($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_production_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->production->get_production_totals($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_production_rainfed'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top provincial production
        $temp_array = $this->production->get_production_totals(null, '1', $year_end, null, '2', 'DESC', null, $location_code);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['provincial_production_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->production->get_production_totals_geocodes(null, '1', $year_end, null, '2', 'DESC', null, $location_code);

        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['provincial_production_geocoded'] = json_encode($temp_array);
        $temp_array = array();

        
        ////// HARVEST AREA - REGION //////////

        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '1';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        
        $source_table = 'kpi_pay';

        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $data['id'] = $location_code;
        
        $temp_array = array();
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        // get_production_total($location_code = null, $location_type = NULL,  $year_start = NULL, $year_end = NULL, $ecosystem = NULL)
        
        // Total production
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '2');
        $area_latest = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['total_area_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '2');
        $area_prev = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret'] = $area_caret;
        
        // Total production, irrigated
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '1');
        $area_latest = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['total_area_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '1');
        $area_prev = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret_irrig'] = $area_caret;
        
        // Total production, rainfed
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '0');
        $area_latest = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['total_area_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '0');
        $area_prev = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret_rain'] = $area_caret;
        
        // Total production, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_area_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_area_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_area_rainfed'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top provincial production
        $temp_array = $this->harvestarea->get_harvestarea_totals(null, '1', $year_end, null, '2', 'DESC', null, $location_code);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['provincial_area_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_totals_geocodes(null, '1', $year_end, null, '2', 'DESC', null, $location_code);

        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['provincial_area_geocoded'] = json_encode($temp_array);
        $temp_array = array();


        /////// EST YIELD - REGION //////////

        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '1';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        
        $data['id'] = $location_code;
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        $source_table = 'kpi_pay';

        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;

        $temp_array = array();
        
        // Yield average
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret'] = $yield_caret;
        
        // Yield average, irrigated
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '1');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '1');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret_irrig'] = $yield_caret;
        
        // Yield average, rainfed
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '0');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '0');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret_rain'] = $yield_caret;
        
        // Total production, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_rainfed'] = json_encode($temp_array);
        $temp_array = array();
        
        // Top provincial production
        $temp_array = $this->estyield->get_yield_avgs(null, '1', $year_end, null, '2', 'DESC', null, $location_code);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['provincial_yield_all'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avgs_geocodes(null, '1', $year_end, null, '2', 'DESC', null, $location_code);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['provincial_yield_geo'] = json_encode($temp_array);
        $temp_array = array();


        ///// VALUATIONS - REGION ///////

        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '1';
        switch ($location_code) {
            case "4":
            case "9":
            case "11":
            case "12":
            case "17": $year_start = '2002'; break;
            default: $year_start = '2000'; break;
        }
        $year_end = '2020';
        $year_end_alt = '2019';
        
        $data['year_start'] = $year_start;
        
        $data['id'] = $location_code;
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        // get_production_total($location_code = null, $location_type = NULL,  $year_start = NULL, $year_end = NULL, $ecosystem = NULL)
        
        // Palay valuation
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_end);
        $data['latest_palay_valuation'] = $temp_array;
        $pv_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_end_alt);
        $pv_prev = $temp_array['value'];
        $pv_caret = $this->etc->get_proper_caret($pv_latest, $pv_prev);
        $data['pv_caret'] = $pv_caret;
        
        // Agri valuation
        $temp_array = $this->valuation->get_agriculture_valuation($location_code, $location_type, $year_end);
        $data['latest_agri_valuation'] = $temp_array;
        $agri_latest = $temp_array['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_agriculture_valuation($location_code, $location_type, $year_end_alt);
        $agri_prev = $temp_array['value'];
        $agri_caret = $this->etc->get_proper_caret($agri_latest, $agri_prev);
        $data['agri_caret'] = $agri_caret;
        
        // Agri share
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_end);
        $share_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['latest_palay_agri_share'] = $temp_array;
        $data['latest_nonpalay_agri_share'] = 100 - $data['latest_palay_agri_share']['value'];
        $temp_array = array();
        
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_end_alt);
        $share_prev = $temp_array['value'];
        $share_caret = $this->etc->get_proper_caret($share_latest, $share_prev);
        $data['share_caret'] = $share_caret;
        
        // GDP valuation
        $temp_array = $this->valuation->get_gdp_valuation($location_code, $location_type, $year_end);
        $data['latest_gdp_valuation'] = $temp_array;
        $temp_array = array();
        
        // GDP share
        $temp_array = $this->valuation->get_palay_share_to_gdp($location_code, $location_type, $year_end);
        $temp_array['value'] = number_format($temp_array['value'], 1);
        $data['latest_palay_gdp_share'] = $temp_array;
        $temp_array = array();
        
        // Palay valuation, yearly
        $temp_array = $this->valuation->get_palay_valuation($location_code, $location_type, $year_start, $year_end);
	    foreach ($temp_array as &$active_array){
            $active_array['value'] = $active_array['value'] / 1000;
        }
        $data['palay_valuation_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Agriculture valuation, yearly
        $temp_array = $this->valuation->get_agriculture_valuation($location_code, $location_type, $year_start, $year_end);
	    foreach ($temp_array as &$active_array){
            $active_array['value'] = $active_array['value'] / 1000;
        }
        $data['agri_valuation_yearly'] = json_encode($temp_array);
        $temp_array = array();
        
        // Agri share, yearly
        $temp_array = $this->valuation->get_palay_share_to_agri($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0);
        } 
        $data['agri_valuation_share'] = json_encode($temp_array);
        $temp_array = array();
        
        // GDP share, yearly        
        $temp_array = $this->valuation->get_palay_share_to_gdp($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0);
        } 
        $data['total_valuation_share'] = json_encode($temp_array);
        $temp_array = array();


        /////// YIELD COST - REGION ///////

        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '1';
        $year_start = '2000';
        $year_end = '2019';
        $year_end_upd = '2020';
        $yield = 0;
        
        $data['id'] = $location_code;
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Yield average
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_upd, '2');
        $yield_latest = $temp_array['value'];
        $data['yield_all_int'] = number_format($temp_array['value'] * 1000, 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $data['yield_all'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $yield_prev = $temp_array['value'];
        $data['yield_all_int_prev'] = number_format($temp_array['value'] * 1000, 0, '.', '');
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret'] = $yield_caret;
        
        // Total Costs
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end_upd);
        $unit_cost = $temp_array['value']/ $data['yield_all_int'];
        $unit_latest = $unit_cost;
        $data['total_costs_int'] = number_format($unit_cost, 2, '.', '');
        $temp_array = array();
        
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end);
        $unit_cost = $temp_array['value']/ $data['yield_all_int_prev'];
        $unit_prev = $unit_cost;
        $unit_caret = $this->etc->get_proper_caret($unit_latest, $unit_prev);
        $data['unit_caret'] = $unit_caret;
        
        // NPK Use    
        $npk_array = array();
        $temp_array = $this->income->get_npk_usage(NULL, '2', '2', $year_end, $yield, null, $location_code);
        for ($i = 0; $i < count($temp_array); $i++) {
            if(!is_null($temp_array[$i]['n_value'])) {
                $npk_array[$i]['location_name'] = $temp_array[$i]['location_name'];
                $npk_array[$i]['n_value'] = $temp_array[$i]['n_value'];
                $npk_array[$i]['p_value'] = $temp_array[$i]['p_value'];
                $npk_array[$i]['k_value'] = $temp_array[$i]['k_value'];
            }
        }
        $data['npk_provinces_all'] = json_encode(array_values($npk_array));
        $temp_array = array();
        
        // Cost Breakdown
        $temp_array = $this->income->get_cost_breakdown($location_code, $location_type, $year_start, '2', $year_end_upd);
        $data['yearly_ph_cost_breakdown'] = json_encode($temp_array);
        $temp_array = array();
        
        // Yield Cost Scatter Plot
        $temp_array = $this->ycost->get_yield_cost(NULL, '2', '2017', NULL, 'ASC', NULL, $location_code);
        for($i = 0; $i < count($temp_array); $i++){
            $data['yieldcost_names'][$i]['location_name'] = $temp_array[$i]['location_name'];
            $data['yieldcost'][$i]['x'] = number_format($temp_array[$i]['x']/1000, 2, '.', '');
            $data['yieldcost'][$i]['y'] = $temp_array[$i]['y'];
        }
        $temp_array = array();
        $data['yieldcost_names'] = json_encode($data['yieldcost_names']);
        $data['yieldcost'] = json_encode($data['yieldcost']);

        
        ////// INCOMES - REGION /////////

        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '1';
        switch ($location_code) {
            case "4":
            case "9":
            case "11":
            case "12":
            case "17": $year_start = '2002'; break;
            default: $year_start = '2000'; break;
        }
        $data['year_start'] = $year_start;
        
        $year_end = '2020';
        $year_end_alt = '2019';
        
        $data['id'] = $location_code;
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Net Returns
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_end);
        $net_latest = $temp_array['value'];
        $data['net_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['net_returns'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_end_alt);
        $net_prev = $temp_array['value'];
        $net_caret = $this->etc->get_proper_caret($net_latest, $net_prev);
        $data['net_caret'] = $net_caret;
        
        // Total Costs
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end);
        $cost_latest = $temp_array['value'];
        $data['total_costs_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['total_costs'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_end_alt);
        $cost_prev = $temp_array['value'];
        $cost_caret = $this->etc->get_proper_caret($cost_latest, $cost_prev);
        $data['cost_caret'] = $cost_caret;
        
        // Total Costs Regional
        $temp_array = $this->income->get_costs_net(NULL, '1', '2', $year_end, NULL, 'ASC');
        foreach ($temp_array as &$active_array){
            $active_array['costs'] = number_format($active_array['costs'], 0, '.', '');
            $active_array['net'] = number_format($active_array['net'], 0, '.', '');
        }
        $data['regional_costs_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Gross returns
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_end);
        $gross_latest = $temp_array['value'];
        $data['gross_returns_int'] = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value']);
        $data['gross_returns'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_end_alt);
        $gross_prev = $temp_array['value'];
        $gross_caret = $this->etc->get_proper_caret($gross_latest, $gross_prev);
        $data['gross_caret'] = $gross_caret;
        
        // Net Income Yearly
        $temp_array = $this->income->get_net_returns($location_code, $location_type, '2', $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_net_returns'] = json_encode($temp_array);
        $temp_array = array();
        
        // Gross returns Yearly
        $temp_array = $this->income->get_gross_returns($location_code, $location_type, '2', $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_gross_returns'] = json_encode($temp_array);
        $temp_array = array();
        
        // Gross returns Regional
        $temp_array = $this->income->get_gross_returns(NULL, '1', '2', $year_end, NULL, 'ASC');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        }
        $data['regional_gross_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total Costs Yearly
        $temp_array = $this->income->get_total_costs($location_code, $location_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2, '.', '');
        }
        $data['yearly_total_costs'] = json_encode($temp_array);
        $temp_array = array();

        ///// PRICES -REGION //////

        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '1';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        $cpi_type = '3';
        
        $data['id'] = $location_code;
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        $temp_array = array();
        
        // Farmgate Price
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $farm_latest = $temp_array['value'];
        $data['farmgate'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $farm_prev = $temp_array['value'];
        $farm_caret = $this->etc->get_proper_caret($farm_latest, $farm_prev);
        $data['farm_caret'] = $farm_caret;
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_start, $year_end);
        $data['farmgate_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices_real($location_code, $location_type, $cpi_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        }
        $data['farmgate_prices_real'] = json_encode($temp_array);
        $temp_array = array();
        
        // Wholesale Price
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whr_latest = $temp_array['value'];
        $data['wholesale'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whr_prev = $temp_array['value'];
        $whr_caret = $this->etc->get_proper_caret($whr_latest, $whr_prev);
        $data['whr_caret'] = $whr_caret;
                
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whw_latest = $temp_array['value'];
        $data['wholesale_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whw_prev = $temp_array['value'];
        $whw_caret = $this->etc->get_proper_caret($whw_latest, $whw_prev);
        $data['whw_caret'] = $whw_caret;
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_start, $year_end);
        $data['wholesale_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_start, $year_end);
        $data['wholesale_sp_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail Price
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhw_latest = $temp_array['value'];
        $data['retail'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhw_prev = $temp_array['value'];
        $rhw_caret = $this->etc->get_proper_caret($rhw_latest, $rhw_prev);
        $data['rhw_caret'] = $rhw_caret;
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhr_latest = $temp_array['value'];
        $data['retail_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhr_prev = $temp_array['value'];
        $rhr_caret = $this->etc->get_proper_caret($rhr_latest, $rhr_prev);
        $data['rhr_caret'] = $rhr_caret;
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_start, $year_end);
        $data['retail_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_start, $year_end);
        $data['retail_sp_prices'] = json_encode($temp_array);
        $temp_array = array();

        
        // Farmgate Inflated Prices
        $temp_array = $this->income->get_farmgate_prices_real($location_code, $location_type, $cpi_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['farmgate_prices_real'] = json_encode($temp_array);
        $temp_array = array();
        
        $this->load->view('booklet_region', $data);
    }

    //////// FOR PROVINCE //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function province(){
        $this->load->helper('html');
        $this->load->helper('url');
        
        ////// MAIN - PROVINCE //////

        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        $source_table = 'kpi_pay';
        
        $data['id'] = $location_code;
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        $temp_array = array();
        
        
        // 404 if location is not available
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        // Production all
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end, '2');
        $prod_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $data['production_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end_alt, '2');
        $prod_prev = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $prod_caret = $this->etc->get_proper_caret($prod_latest, $prod_prev);
        $data['prod_caret'] = $prod_caret;
        
        // Harvest all
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '2');
        $area_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['harvestarea_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '2');
        $area_prev = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret'] = $area_caret;
        
        // Yield all
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['estyield_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret'] = $yield_caret;
        
        // Farmgate Price
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end);
        $fg_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['farmgate'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end_alt);
        $fg_prev = $temp_array['value'];
        $fg_caret = $this->etc->get_proper_caret($fg_latest, $fg_prev);
        $data['fg_caret'] = $fg_caret;
        
        // Wholesale Price
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end);
        $wr_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['wholesale'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end_alt);
        $wr_prev = $temp_array['value'];
        $wr_caret = $this->etc->get_proper_caret($wr_latest, $wr_prev);
        $data['wg_caret'] = $wr_caret;
        
        // Wholesale Price - SP
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end);
        $ws_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['wholesale_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end_alt);
        $ws_prev = $temp_array['value'];
        $ws_caret = $this->etc->get_proper_caret($ws_latest, $ws_prev);
        $data['ws_caret'] = $ws_caret;
        
        // Retail Price
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end);
        $rg_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['retail'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end_alt);
        $rg_prev = $temp_array['value'];
        $rg_caret = $this->etc->get_proper_caret($rg_latest, $rg_prev);
        $data['rg_caret'] = $rg_caret;
        
        // Retail Price - SP
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end);
        $rs_latest = $temp_array['value'];
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $data['retail_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end_alt);
        $rs_prev = $temp_array['value'];
        $rs_caret = $this->etc->get_proper_caret($rs_latest, $rs_prev);
        $data['rs_caret'] = $rs_caret;

        ////// PRODUCTION - PROVINCE //////

        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        
        $data['id'] = $location_code;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Total production
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end, '2');
        $prod_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $data['total_production_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end_alt, '2');
        $prod_prev = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        
        $prod_caret = $this->etc->get_proper_caret($prod_latest, $prod_prev);
        $data['prod_caret'] = $prod_caret;
        
        // Total production, irrigated
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end, '1');
        $prod_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $data['total_production_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end_alt, '1');
        $prod_prev = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $prod_caret = $this->etc->get_proper_caret($prod_latest, $prod_prev);
        $data['prod_caret_irrig'] = $prod_caret;
        
        // Total production, rainfed
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end, '0');
        $prod_latest = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $data['total_production_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->production->get_production_total($location_code, $location_type, $year_end_alt, '0');
        $prod_prev = $temp_array['value'];
        $temp_array['value'] = number_format($temp_array['value']);
        $prod_caret = $this->etc->get_proper_caret($prod_latest, $prod_prev);
        $data['prod_caret_rain'] = $prod_caret;
        
        // Total production, yearly
        $temp_array = $this->production->get_production_totals($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_production_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->production->get_production_totals($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_production_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->production->get_production_totals($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_production_rainfed'] = json_encode($temp_array);
        $temp_array = array();


        ///// HARVEST AREA - PROVINCE //////

        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        
        $data['id'] = $location_code;
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
            
        $temp_array = array();
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        // Total production
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '2');
        $area_latest = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['total_area_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '2');
        $area_prev = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret'] = $area_caret;
        
        // Total production, irrigated
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '1');
        $area_latest = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['total_area_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '1');
        $area_prev = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret_irrig'] = $area_caret;
        
        // Total production, rainfed
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end, '0');
        $area_latest = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $data['total_area_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->harvestarea->get_harvestarea_total($location_code, $location_type, $year_end_alt, '0');
        $area_prev = number_format($temp_array['value'], 0, '.', '');
        $temp_array['value'] = number_format($temp_array['value'], 0);
        $area_caret = $this->etc->get_proper_caret($area_latest, $area_prev);
        $data['area_caret_rain'] = $area_caret;
        
        // Total production, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_area_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_area_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->harvestarea->get_harvestarea_totals($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 0, '.', '');
        } 
        $data['ph_area_rainfed'] = json_encode($temp_array);
        $temp_array = array();


        ///// EST YIELD - PROVINCE ///////

        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        
        $data['id'] = $location_code;
        
        if(!($this->etc->is_location_exists($location_code, $location_type, 'kpi_pay'))){
            show_404();
        }
        
        $source_table = 'kpi_pay';
        
        $temp_array = $this->etc->get_all_regions($source_table);
        $data['regions'] = $temp_array;
        $temp_array = array();

        $temp_array = $this->etc->get_all_provinces($source_table);
        $data['provinces'] = $temp_array;
        
        $temp_array = array();
        
        // Yield average
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_all'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '2');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret'] = $yield_caret;
        
        // Yield average, irrigated
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '1');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_irrigated'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '1');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret_irrig'] = $yield_caret;
        
        // Yield average, rainfed
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end, '0');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_latest = $temp_array['value'];
        $data['yield_rainfed'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->estyield->get_yield_avg($location_code, $location_type, $year_end_alt, '0');
        $temp_array['value'] = number_format($temp_array['value'], 2);
        $yield_prev = $temp_array['value'];
        $yield_caret = $this->etc->get_proper_caret($yield_latest, $yield_prev);
        $data['yield_caret_rain'] = $yield_caret;
        
        // Total production, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '2');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_all'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, irrigated, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '1');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_irrigated'] = json_encode($temp_array);
        $temp_array = array();
        
        // Total production, rainfed, yearly
        $temp_array = $this->estyield->get_yield_avgs($location_code, $location_type, $year_start, $year_end, '0');
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        } 
        $data['ph_yield_rainfed'] = json_encode($temp_array);
        $temp_array = array();

        ///// PRICES - PROVINCE /////

        // CONSTANT VALUES
        $location_code = $this->uri->segment('3');
        $location_type = '2';
        $year_start = '2001';
        $year_end = '2021';
        $year_end_alt = '2020';
        $cpi_type = '3';
        
        $data['id'] = $location_code;
        
        $temp_array = array();
        
       // Farmgate Price
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $farm_latest = $temp_array['value'];
        $data['farmgate'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $farm_prev = $temp_array['value'];
        $farm_caret = $this->etc->get_proper_caret($farm_latest, $farm_prev);
        $data['farm_caret'] = $farm_caret;
        
        $temp_array = $this->income->get_farmgate_prices($location_code, $location_type, $year_start, $year_end);
        $data['farmgate_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_farmgate_prices_real($location_code, $location_type, $cpi_type, $year_start, $year_end);
        foreach ($temp_array as &$active_array){
            $active_array['value'] = number_format($active_array['value'], 2);
        }
        $data['farmgate_prices_real'] = json_encode($temp_array);
        $temp_array = array();
        
        // Wholesale Price
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whr_latest = $temp_array['value'];
        $data['wholesale'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whr_prev = $temp_array['value'];
        $whr_caret = $this->etc->get_proper_caret($whr_latest, $whr_prev);
        $data['whr_caret'] = $whr_caret;
                
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whw_latest = $temp_array['value'];
        $data['wholesale_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $whw_prev = $temp_array['value'];
        $whw_caret = $this->etc->get_proper_caret($whw_latest, $whw_prev);
        $data['whw_caret'] = $whw_caret;
        
        $temp_array = $this->income->get_wholesale_prices($location_code, $location_type, $year_start, $year_end);
        $data['wholesale_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_wholesale_sp_prices($location_code, $location_type, $year_start, $year_end);
        $data['wholesale_sp_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        // Retail Price
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhw_latest = $temp_array['value'];
        $data['retail'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhw_prev = $temp_array['value'];
        $rhw_caret = $this->etc->get_proper_caret($rhw_latest, $rhw_prev);
        $data['rhw_caret'] = $rhw_caret;
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhr_latest = $temp_array['value'];
        $data['retail_sp'] = $temp_array;
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_end_alt);
        $temp_array['value'] =  number_format($temp_array['value'], 2);
        $rhr_prev = $temp_array['value'];
        $rhr_caret = $this->etc->get_proper_caret($rhr_latest, $rhr_prev);
        $data['rhr_caret'] = $rhr_caret;
        
        $temp_array = $this->income->get_retail_prices($location_code, $location_type, $year_start, $year_end);
        $data['retail_prices'] = json_encode($temp_array);
        $temp_array = array();
        
        $temp_array = $this->income->get_retail_sp_prices($location_code, $location_type, $year_start, $year_end);
        $data['retail_sp_prices'] = json_encode($temp_array);
        $temp_array = array();

        $location_ids = array('2', '3', '5', '6', '81', '77', '12', '13', '14', '15', '17', '19', '23', '24', '25', '28', '30', '31', '32', '34', '36', '37', '38', '45', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '63', '65', '69', '60', '72', '73', '83'); 
        
        if (in_array($this->uri->segment('3'), $location_ids)) {
        
            ////// PROFILE - PROVINCE ///////
            
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

            /////// MONTHLY INCOME - PROVINCE ////////////

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

            ///////// SOCIAL - PROVINCE ////////

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

            //////// FARM DETAILS - PROVINCE ///////////

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

            ///////// HOUSEHOLD SIZE INCOME - PROVINCE ///////////

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

            ////////// EDUC FARM EXP - PROVINCE /////////////////
        
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

            /////// ORG TRAINING - PROVINCE /////////

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

            ////// FARM PRACTICES - PROVINCE //////

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
            $data['trans_all_pr_fp'] = $temp_array;
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
            $data['direct_all_pr_fp'] = $temp_array;
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
            $data['average_all_pr_fp'] = $temp_array;
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
            $data['fert_all_pr'] = json_encode($temp_array);
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

            /////// SEEDING RATE - PROVINCE /////////

            // CONSTANT VALUES
            $location_code = $this->uri->segment('3');
            $location_type = '2';
            $year_start = '1996';
            $year_end_prev_alt = '2011';
            $year_end_prev = '2012';
            $year_end = '2016';
            $year_end_alt = '2017';
                    
            $column_index = 1;
            
            $data['id'] = $location_code;
            
            $source_table = 'kpi_pay';
            
            $temp_array = $this->etc->get_all_regions($source_table);
            $data['regions'] = $temp_array;
            $temp_array = array();

            $temp_array = $this->etc->get_all_provinces($source_table);
            $data['provinces'] = $temp_array;
            
            $temp_array = array();
            
            if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_cropest'))){
                show_404();
            }
            
            // Transplanting Rate
            $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
            $transr_prev = $temp_array['value'];
            $temp_array = array();
            
            $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
            $data['trans_all_pr_sr'] = $temp_array;
            $transr_latest = $temp_array['value'];
            $temp_array = array();
            $data['transr_caret'] = $this->etc->get_proper_caret($transr_latest, $transr_prev);
            
            $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_start, '2', $year_end);
            $data['trans_yearly_pr_sr'] = json_encode($temp_array);
            $temp_array = array();
            
            $temp_array = $this->crop->get_seedrate_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
            $data['trans_provincial_pr_sr'] = $temp_array;
            $temp_array = array();
            
            $column_index = 2;
                    
            // Direct Seeding Rate
            $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
            $directr_prev = $temp_array['value'];
            $temp_array = array();
                    
            $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
            $data['direct_all_pr_sr'] = $temp_array;
            $directr_latest = $temp_array['value'];
            $data['directr_caret'] = $this->etc->get_proper_caret($directr_latest, $directr_prev);
            $temp_array = array();
            
            $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_start, '2', $year_end);
            $data['direct_yearly_pr_sr'] = json_encode($temp_array);
            $temp_array = array();
            
            $temp_array = $this->crop->get_seedrate_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
            $data['direct_provincial_pr_sr'] = $temp_array;
            $temp_array = array();
            
            $column_index = 3;
            
            $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
            $aver_prev = $temp_array['value'];
            
            $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_end, '2');
            $data['average_all_pr_sr'] = $temp_array;
            $aver_latest = $temp_array['value'];
            $data['aver_caret'] = $this->etc->get_proper_caret($aver_latest, $aver_prev);
            $temp_array = array();
            
            
            $temp_array = $this->crop->get_seedrate($location_code, $location_type, $column_index, $year_start, '2', $year_end);
            $data['average_yearly'] = json_encode($temp_array);
            $temp_array = array();
            
            $temp_array = $this->crop->get_seedrate_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
            $data['average_provincial_pr_sr'] = $temp_array;
            $temp_array = array();

            ///////// CROPEST - PROVINCE //////////

            // CONSTANT VALUES
            $location_code = $this->uri->segment('3');
            $location_type = '2';
            $year_start = '1996';
            $year_end_prev_alt = '2011';
            $year_end_prev = '2012';
            $year_end = '2016';
            $year_end_alt = '2017';
            $column_index = 1;
            
            $data['id'] = $location_code;
            
            $temp_array = array();
            
            // 404 if location is not available
            if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_cropest'))){
                show_404();
            }
            
            $source_table = 'kpi_pay';
            
            $temp_array = $this->etc->get_all_regions($source_table);
            $data['regions'] = $temp_array;
            $temp_array = array();

            $temp_array = $this->etc->get_all_provinces($source_table);
            $data['provinces'] = $temp_array;

            // Transplanting
            $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_prev, '2');
            $trans_prev = $temp_array['value'];
            
            $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end, '2');
            $data['trans_all_pr_cp'] = $temp_array;
            $trans = $temp_array['value'];
            $temp_array = array();
            
            $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_alt, '2');
            $data['trans_ds'] = $temp_array;
            $trans_latest = $temp_array['value'];
            $temp_array = array();
            
            $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
            $data['trans_yearly_pr_cp'] = json_encode($temp_array);
            $temp_array = array();
            
            $data['trans_caret'] = $this->etc->get_proper_caret($trans, $trans_prev);
            $data['trans_ds_caret'] = $this->etc->get_proper_caret($trans_latest, $trans);
            
            
            $column_index = 2;
            
            $column_index = 2;
            
            // Direct Seeding
            $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_prev, '2');
            $direct_prev = $temp_array['value'];
                    
            $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end, '2');
            $data['direct_all_pr_cp'] = $temp_array;
            $direct = $temp_array['value'];
            $temp_array = array();
            
            $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_end_alt, '2');
            $data['direct_ds'] = $temp_array;
            $direct_latest = $temp_array['value'];
            $temp_array = array();
            
            $temp_array = $this->crop->get_cropdata($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
            $data['direct_yearly_pr_cp'] = json_encode($temp_array);
            $temp_array = array();
            
            $data['direct_caret'] = $this->etc->get_proper_caret($direct, $direct_prev);
            $data['direct_ds_caret'] = $this->etc->get_proper_caret($direct_latest, $direct);

            //////// LABOR - PROVINCE ///////

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

            ///////// SEED CLASS - PROVINCE ////////

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

            //////// FERT USAGE - PROVINCE /////////

            // CONSTANT VALUES
            $location_code = $this->uri->segment('3');
            $location_type = '2';
            $year_start = '1996';
            $year_end_prev_alt = '2011';
            $year_end_prev = '2012';
            $year_end = '2016';
            $year_end_alt = '2017';
            $column_index = 1;
            
            $data['id'] = $location_code;
            
            $source_table = 'kpi_pay';
            
            $temp_array = $this->etc->get_all_regions($source_table);
            $data['regions'] = $temp_array;
            $temp_array = array();

            $temp_array = $this->etc->get_all_provinces($source_table);
            $data['provinces'] = $temp_array;
            
            $temp_array = array();
            
            if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_fertilizer'))){
                show_404();
            }
            
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
            
            $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
            $data['n_yearly'] = json_encode($temp_array);
            $temp_array = array();

            $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
            $data['n_provincial'] = $temp_array;
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
            $p_ds = $temp_array['value'];
            $data['p_ds_caret'] = $this->etc->get_proper_caret($p_ds, $p_latest);
            
            $data['p_caret'] = $this->etc->get_proper_caret($p_latest, $p_prev);
            $temp_array = array();
            
            $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
            $data['p_yearly'] = json_encode($temp_array);
            $temp_array = array();
            
            $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
            $data['p_provincial'] = $temp_array;
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
            
            $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_start, '2', $year_end_alt);
            $data['k_yearly'] = json_encode($temp_array);
            $temp_array = array();
            
            $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end);
            $data['k_provincial'] = $temp_array;
            $temp_array = array();
            
            $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
            $data['k_ds_provincial'] = $temp_array;
            $temp_array = array();
            
            $column_index = 4;
                    
            // Average
            $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_prev_alt, '2');
            $fert_prev = $temp_array['value'];
            
            $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end, '2');
            $data['average_all_pr_fu'] = $temp_array;
            $fert_latest = $temp_array['value'];
            
            $temp_array = $this->fertilizer->get_fertusage($location_code, $location_type, $column_index, $year_end_alt, '2');
            $data['average_ds'] = $temp_array;
            $fert_ds = $temp_array['value'];
            $data['fert_ds_caret'] = $this->etc->get_proper_caret($fert_ds, $fert_latest);
            
            $data['fert_caret'] = $this->etc->get_proper_caret($fert_latest, $fert_prev);
            $temp_array = array();
            
            $temp_array = $this->fertilizer->get_fertusage_prov(NULL, $location_type, $column_index, $year_end, '2', $year_end_alt);
            $data['average_provincial_pr_fu'] = $temp_array;
            $temp_array = array();

            ////// VARIETIES - PROVINCE ////////

            // CONSTANT VALUES
            $location_code = $this->uri->segment('3');
            $location_type = '2';
            $year_end = '2017';
            $column_index = 1;
            
            $source_table = 'kpi_pay';
            
            $temp_array = $this->etc->get_all_regions($source_table);
            $data['regions'] = $temp_array;
            $temp_array = array();

            $temp_array = $this->etc->get_all_provinces($source_table);
            $data['provinces'] = $temp_array;
            
            $temp_array = array();
            
            $data['id'] = $location_code;
            
            if(!($this->etc->is_location_exists($location_code, $location_type, 'rb_variety'))){
                show_404();
            }
            
            // Top 10 Varieties
            $temp_array = $this->variety->get_var_top($location_code, $location_type, $year_end, '2');
            $data['var'] = $temp_array[0];
            $data['var_all'] = json_encode($temp_array);
            $temp_array = array();
            
            $temp_array = $this->variety->get_var_top_prri($location_code, $location_type, $year_end, '2');
            $data['var_prri'] = json_encode($temp_array);
            $temp_array = array();
            
            
            // function get_pests_top_prov($location_code = NULL, $location_type, $year_start, $ecosystem, $year_end = NULL, $limit = NULL){            
            $temp_array = $this->variety->get_var_top_prov(NULL, $location_type, $year_end, '2', $year_end, 3);
            $data['var_provincial'] = $temp_array;
            $temp_array = array();

            /////// ADOPTION RATE - PROVINCE ///////

            // CONSTANT VALUES
            $location_code = $this->uri->segment('3');
            $location_type = '2';
            $year_end = '2016';
            
            $data['id'] = $location_code;
            
            $source_table = 'kpi_pay';
            
            $temp_array = $this->etc->get_all_regions($source_table);
            $data['regions'] = $temp_array;
            $temp_array = array();
            
            $temp_array = $this->etc->get_all_provinces($source_table);
            $data['provinces'] = $temp_array;
            
            $temp_array = array();
            
            // Land Preparation
            $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 2);
            $data['adopt_landprep_ar'] = $temp_array;
            $data['adopt_landprep'] = json_encode($temp_array);
            $temp_array = array();
            
            // Crop Establishment
            $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 3);
            $data['adopt_cropest'] = json_encode($temp_array);
            $temp_array = array();
            
            // Nutrient Management
            $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 4);
            $data['adopt_nutrient'] = json_encode($temp_array);
            $temp_array = array();
            
            // Water Management
            $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 5);
            $data['adopt_water'] = json_encode($temp_array);
            $temp_array = array();
            
            // Pest Management
            $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 6);
            $data['adopt_pest'] = json_encode($temp_array);
            $temp_array = array();
            
            // Harvest Management
            $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 7);
            $data['adopt_harvest'] = json_encode($temp_array);
            $temp_array = array();
            
            // Others
            $temp_array = $this->machine->get_adopted_top($location_code, $location_type, $year_end, '2', 8, 7);
            $data['adopt_others'] = json_encode($temp_array);
            $temp_array = array();

            /////// FERTILIZER APP - PROVINCE ///////

            // CONSTANT VALUES
            $location_code = $this->uri->segment('3');
            $location_type = '2';
            $year_end = '2017';
            $column_index = 1;
            
            $data['id'] = $location_code;
            
            $source_table = 'kpi_pay';
            
            $temp_array = $this->etc->get_all_regions($source_table);
            $data['regions'] = $temp_array;
            $temp_array = array();

            $temp_array = $this->etc->get_all_provinces($source_table);
            $data['provinces'] = $temp_array;
            
            $temp_array = array();
            
            // Top 5 Fertilizers
            $temp_array = $this->fertapplied->get_fert_top($location_code, $location_type, $year_end, '2');
            $data['fert'] = $temp_array[0];
            $data['fert_all_pr_fa'] = json_encode($temp_array);
            $temp_array = array();
            
            // function get_pests_top_prov($location_code = NULL, $location_type, $year_start, $ecosystem, $year_end = NULL, $limit = NULL){            
            $temp_array = $this->fertapplied->get_fert_top_prov(NULL, $location_type, $year_end, '2', $year_end, 3);
            $data['fert_provincial_pr_fa'] = $temp_array;
            $temp_array = array();

            ////// PESTICIDES - PROVINCE ////////

            // CONSTANT VALUES
            $location_code = $this->uri->segment('3');
            $location_type = '2';
            $year_end = '2017';
            $column_index = 1;
            
            $data['id'] = $location_code;
            
            $source_table = 'kpi_pay';
            
            $temp_array = $this->etc->get_all_regions($source_table);
            $data['regions'] = $temp_array;
            $temp_array = array();

            $temp_array = $this->etc->get_all_provinces($source_table);
            $data['provinces'] = $temp_array;
            
            $temp_array = array();
            
            // Top 10 Pest
            $temp_array = $this->pest->get_pests_top($location_code, $location_type, $year_end, '2', 5);
            $data['pest'] = $temp_array[0];
            $data['pest_all_pp'] = json_encode($temp_array);
            $temp_array = array();

            /////// MACHINE SOURCE - PROVINCE ////////

            // CONSTANT VALUES
            $location_code = $this->uri->segment('3');
            $location_type = '2';
            $year_end = '2017';
            $column_index = 1;
            
            $data['id'] = $location_code;
            
            $source_table = 'kpi_pay';
            
            $temp_array = $this->etc->get_all_regions($source_table);
            $data['regions'] = $temp_array;
            $temp_array = array();

            $temp_array = $this->etc->get_all_provinces($source_table);
            $data['provinces'] = $temp_array;
            
            $temp_array = array();
            
            // Top 5 fertilizers
            $temp_array = $this->machine->get_machine_top($location_code, $location_type, $year_end, '2', 5);
            $data['fert'] = $temp_array[0];
            $data['fert_all_pr_ms'] = json_encode($temp_array);
            $temp_array = array();
        }
        // END OF CHECKING OF LOCATIONS

        $this->load->view('booklet_province', $data);
    }

    function downloadPdf(){
        require_once(APPPATH.'helpers/tcpdf/tcpdf.php');
        // create new PDF document
        $pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Nicola Asuni');
        $pdf->SetTitle('TCPDF Example 002');
        $pdf->SetSubject('TCPDF Tutorial');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        // ---------------------------------------------------------

        //Close and output PDF document
        $pdf->Output('example_002.pdf', 'I');


    }
}

?>