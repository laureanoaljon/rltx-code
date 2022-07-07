<?php

class Account extends CI_Model {
    
    function get_total_supply($location_code, $location_type,  $year_start, $year_end = NULL, $order = NULL, $limit = NULL){
        
        $this->db->select('l.locName AS location_name, s.year AS year,  COALESCE("s"."SUBeginningStocks", 0) + COALESCE("s"."SUProduction", 0) + COALESCE("s"."SUImports", 0) AS value');
        $this->db->from('kpi_sua s');
        $this->db->join('ids_location l', 's.locCode = l.locCode AND s.locType = l.locType');
        $this->db->where('s.locCode', $location_code);
        $this->db->where('s.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('s.year >=', $year_start);
            $this->db->where('s.year <=', $year_end);
        }
        else {
            $this->db->where('s.year', $year_start);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if(isset($year_end)){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
        
    }
    
    function get_total_utilize($location_code, $location_type,  $year_start, $year_end = NULL, $order = NULL, $limit = NULL){
        
        $this->db->select('l.locName AS location_name, s.year AS year, (COALESCE("s"."UTExports", 0) + COALESCE("s"."UTSeeds", 0) + COALESCE("s"."UTFeedsWaste", 0) + COALESCE("s"."UTProcessing", 0)) + ((COALESCE("s"."SUBeginningStocks", 0) + COALESCE("s"."SUProduction", 0) + COALESCE("s"."SUImports", 0)) - (COALESCE("s"."UTExports", 0) + COALESCE("s"."UTSeeds", 0) + COALESCE("s"."UTFeedsWaste", 0) + COALESCE("s"."UTProcessing", 0) + COALESCE("s"."UTEndingStocks", 0))) as value');
        $this->db->from('kpi_sua s');
        $this->db->join('ids_location l', 's.locCode = l.locCode AND s.locType = l.locType');
        $this->db->where('s.locCode', $location_code);
        $this->db->where('s.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('s.year >=', $year_start);
            $this->db->where('s.year <=', $year_end);
        }
        else {
            $this->db->where('s.year', $year_start);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if(isset($year_end)){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
        
    }
    
    function get_supply_sources($location_code, $location_type,  $year_start, $year_end = NULL, $order = NULL, $limit = NULL){
        
        $this->db->select('l.locName AS location_name, s.year AS year, s.SUBeginningStocks, s.SUProduction, s.SUImports');
        $this->db->from('kpi_sua s');
        $this->db->join('ids_location l', 's.locCode = l.locCode AND s.locType = l.locType');
        $this->db->where('s.locCode', $location_code);
        $this->db->where('s.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('s.year >=', $year_start);
            $this->db->where('s.year <=', $year_end);
        }
        else {
            $this->db->where('s.year', $year_start);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if(isset($year_end)){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
        
    }
    
    function get_util_sources($location_code, $location_type,  $year_start, $year_end = NULL, $order = NULL, $limit = NULL){
        
        $this->db->select('l.locName AS location_name, s.year AS year, s.UTExports, s.UTSeeds, s.UTFeedsWaste, s.UTProcessing, s.UTEndingStocks, (COALESCE("s"."SUBeginningStocks", 0) + COALESCE("s"."SUProduction", 0) + COALESCE("s"."SUImports", 0)) - (COALESCE("s"."UTExports", 0) + COALESCE("s"."UTSeeds", 0) + COALESCE("s"."UTFeedsWaste", 0) + COALESCE("s"."UTProcessing", 0) + COALESCE("s"."UTEndingStocks", 0)) AS UTTotalNet');
        $this->db->from('kpi_sua s');
        $this->db->join('ids_location l', 's.locCode = l.locCode AND s.locType = l.locType');
        $this->db->where('s.locCode', $location_code);
        $this->db->where('s.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('s.year >=', $year_start);
            $this->db->where('s.year <=', $year_end);
        }
        else {
            $this->db->where('s.year', $year_start);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if(isset($year_end)){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
        
    }
    
    function get_per_capita($location_code, $location_type,  $year_start, $year_end = NULL, $order = NULL, $limit = NULL){
        
        $this->db->select('l.locName AS location_name, s.year AS year, s.UTPerCapitaKg As KgPerYear, s.UTPerCapitaGram As GmPerDay');
        $this->db->from('kpi_sua s');
        $this->db->join('ids_location l', 's.locCode = l.locCode AND s.locType = l.locType');
        $this->db->where('s.locCode', $location_code);
        $this->db->where('s.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('s.year >=', $year_start);
            $this->db->where('s.year <=', $year_end);
        }
        else {
            $this->db->where('s.year', $year_start);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if(isset($year_end)){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
        
    }
    
    function get_fnri_per_capita($location_code, $location_type,  $year_start, $year_end = NULL, $order = NULL, $limit = NULL){
        
        $this->db->select('l.locName AS location_name, c.year AS year, c.PerCapitaKg As KgPerYear, c.PerCapitaGram As GmPerDay');
        $this->db->from('kpi_percapita c');
        $this->db->join('ids_location l', 'c.locCode = l.locCode AND c.locType = l.locType');
        $this->db->where('c.locCode', $location_code);
        $this->db->where('c.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('c.year >=', $year_start);
            $this->db->where('c.year <=', $year_end);
        }
        else {
            $this->db->where('c.year', $year_start);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if(isset($year_end)){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
        
    }
    
    function get_population ($location_code, $location_type,  $year_start, $year_end = NULL, $order = NULL, $limit = NULL){
        
        $this->db->select('l.locName AS location_name, p.year AS year, p.population AS value');
        $this->db->from('kpi_pop p');
        $this->db->join('ids_location l', 'p.locCode = l.locCode AND p.locType = l.locType');
        $this->db->where('p.locCode', $location_code);
        $this->db->where('p.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('p.year >=', $year_start);
            $this->db->where('p.year <=', $year_end);
        }
        else {
            $this->db->where('p.year', $year_start);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if(isset($year_end)){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
        
    }

}

?>
