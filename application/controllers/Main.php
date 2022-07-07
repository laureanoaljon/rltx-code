<?php

class Main extends CI_Controller {

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
    }
    
    function index() {
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
        $data['total_costs'] = number_format($total_cost, 0);
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
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('main_index', $data);
    }
    
    function region(){
        $this->load->helper('html');
        $this->load->helper('url');
        $source_table = 'kpi_pay';
        
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
        $data['total_costs'] = number_format($total_cost, 0);
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
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('region_index', $data);
    }
    
    function province(){
        $this->load->helper('html');
        $this->load->helper('url');
        
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
        
        $data['footer'] = $this->load->view('footer', $data, true);
        $this->load->view('province_index', $data);
    }
    
}

?>