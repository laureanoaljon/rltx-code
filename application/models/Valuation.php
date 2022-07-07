<?php

class Valuation extends CI_Model {
    
    function get_palay_valuation($location_code, $location_type, $year_start, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.palayValue as value');
        $this->db->from('kpi_value k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
        }
        else {
            $this->db->where('k.year', $year_start);
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
    
    function get_agriculture_valuation($location_code, $location_type, $year_start, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.agriValue as value');
        $this->db->from('kpi_value k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
          
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
        }
        else {
            $this->db->where('k.year', $year_start);
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
    
    function get_gdp_valuation($location_code, $location_type, $year_start, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.gdpValue as value');
        $this->db->from('kpi_value k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
          
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
        }
        else {
            $this->db->where('k.year', $year_start);
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
    
    function get_palay_share_to_agri ($location_code, $location_type, $year_start, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name, k.year AS year, ("k"."palayValue"/"k"."agriValue")*100 as value');
        $this->db->from('kpi_value k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
        }
        else {
            $this->db->where('k.year', $year_start);
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
    
    function get_palay_share_to_gdp ($location_code, $location_type, $year_start, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name, k.year AS year, ("k"."palayValue"/"k"."gdpValue")*100 as value');
        $this->db->from('kpi_value k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
        }
        else {
            $this->db->where('k.year', $year_start);
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