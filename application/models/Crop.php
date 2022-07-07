<?php

class Crop extends CI_Model {
    
    function get_cropdata ($location_code, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('c.year AS year');
        
        switch($column_index) {
            case 1: $this->db->select('c.transplant as value'); break;
            case 2: $this->db->select('c.direct as value'); break;
        }

        $this->db->from('rb_cropest c');
        $this->db->join('ids_location l', 'c.locCode = l.locCode AND c.locType = l.locType');
        $this->db->join('ids_ecosystem e', 'c.eco = e.eco');
        $this->db->where('c.locCode', $location_code);
        $this->db->where('c.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('c.year >=', $year_start);
            $this->db->where('c.year <=', $year_end);
            $this->db->order_by('c.year', 'ASC');
        }
        else {
            $this->db->where('c.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('c.eco', $ecosystem);
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
    
    function get_seedrate ($location_code, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('c.year AS year');
        
        switch($column_index) {
            case 1: $this->db->select('c.transSeedingRate as value'); break;
            case 2: $this->db->select('c.directSeedingRate as value'); break;
            case 3: $this->db->select('c.aveSeedingRate as value'); break;
        }

        $this->db->from('rb_seedrate c');
        $this->db->join('ids_location l', 'c.locCode = l.locCode AND c.locType = l.locType');
        $this->db->join('ids_ecosystem e', 'c.eco = e.eco');
        $this->db->where('c.locCode', $location_code);
        $this->db->where('c.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('c.year >=', $year_start);
            $this->db->where('c.year <=', $year_end);
            $this->db->order_by('c.year', 'ASC');
        }
        else {
            $this->db->where('c.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('c.eco', $ecosystem);
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
    
    function get_cropdata_prov ($location_code = NULL, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        // Subquery
        $this->db->select('locCode, locType, locName, sort');
        $this->db->from('ids_location');
        $this->db->where('locType', '1');
        $this->db->order_by('sort', 'ASC'); 
        $subQuery =  $this->db->get_compiled_select();
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('r.locName AS region');
        $this->db->select('c.year AS year');
        $this->db->select('c.eco AS eco');
        
        switch($column_index) {
            case 1: $this->db->select('c.transplant as value'); break;
            case 2: $this->db->select('c.direct as value'); break;
        }
        
        $this->db->from('rb_cropest c');
        $this->db->join('ids_location l', 'c.locCode = l.locCode AND c.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->join('ids_ecosystem e', 'c.eco = e.eco');
        
        if(isset($location_code)){
            $this->db->where('c.locCode', $location_code); 
        }
        else {
            if($location_type == 2){
                $this->db->where('c.locCode !=', '999'); 
            }
        }
        
        $this->db->where('c.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('c.year >=', $year_start);
            $this->db->where('c.year <=', $year_end);
        }
        else {
            $this->db->where('c.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('c.eco', $ecosystem);
        }
        
        $this->db->order_by('r.sort', 'ASC'); 
        $this->db->order_by('l.locName', 'ASC'); 
        $this->db->order_by('c.eco', 'DESC'); 
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
    
    function get_seedrate_prov ($location_code = NULL, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        // Subquery
        $this->db->select('locCode, locType, locName, sort');
        $this->db->from('ids_location');
        $this->db->where('locType', '1');
        $this->db->order_by('sort', 'ASC'); 
        $subQuery =  $this->db->get_compiled_select();
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('r.locName AS region');
        $this->db->select('c.year AS year');
        $this->db->select('c.eco AS eco');
        
        switch($column_index) {
            case 1: $this->db->select('c.transSeedingRate as value'); break;
            case 2: $this->db->select('c.directSeedingRate as value'); break;
            case 3: $this->db->select('c.aveSeedingRate as value'); break;
        }
        
        $this->db->from('rb_seedrate c');
        $this->db->join('ids_location l', 'c.locCode = l.locCode AND c.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->join('ids_ecosystem e', 'c.eco = e.eco');
        
        if(isset($location_code)){
            $this->db->where('c.locCode', $location_code); 
        }
        else {
            if($location_type == 2){
                $this->db->where('c.locCode !=', '999'); 
            }
        }
        
        $this->db->where('c.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('c.year >=', $year_start);
            $this->db->where('c.year <=', $year_end);
        }
        else {
            $this->db->where('c.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('c.eco', $ecosystem);
        }
        
        $this->db->order_by('r.sort', 'ASC'); 
        $this->db->order_by('l.locName', 'ASC'); 
        $this->db->order_by('c.eco', 'DESC'); 
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