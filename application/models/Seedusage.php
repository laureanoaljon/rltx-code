<?php

class Seedusage extends CI_Model {
    
    function get_seedusage ($location_code, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('s.year AS year');
        
        switch($column_index) {
            case 1: $this->db->select('s.hybrid as value'); break;
            case 2: $this->db->select('s.highInbred as value'); break;
            case 3: $this->db->select('s.goodSeeds as value'); break;
            case 4: $this->db->select('s.farmerSeeds as value'); break;
        }

        $this->db->from('rb_seedclass s');
        $this->db->join('ids_location l', 's.locCode = l.locCode AND s.locType = l.locType');
        $this->db->join('ids_ecosystem e', 's.eco = e.eco');
        $this->db->where('s.locCode', $location_code);
        $this->db->where('s.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('s.year >=', $year_start);
            $this->db->where('s.year <=', $year_end);
            $this->db->order_by('s.year', 'ASC');
        }
        else {
            $this->db->where('s.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('s.eco', $ecosystem);
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
    
    function get_seedusage_prov ($location_code = NULL, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        // Subquery
        $this->db->select('locCode, locType, locName, sort');
        $this->db->from('ids_location');
        $this->db->where('locType', '1');
        $this->db->order_by('sort', 'ASC'); 
        $subQuery =  $this->db->get_compiled_select();
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('r.locName AS region');
        $this->db->select('s.year AS year');
        $this->db->select('s.eco AS eco');
        
        switch($column_index) {
            case 1: $this->db->select('s.hybrid as value'); break;
            case 2: $this->db->select('s.highInbred as value'); break;
            case 3: $this->db->select('s.goodSeeds as value'); break;
            case 4: $this->db->select('s.farmerSeeds as value'); break;
        }
        
        $this->db->from('rb_seedclass s');
        $this->db->join('ids_location l', 's.locCode = l.locCode AND s.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->join('ids_ecosystem e', 's.eco = e.eco');
        
        if(isset($location_code)){
            $this->db->where('s.locCode', $location_code); 
        }
        else {
            if($location_type == 2){
                $this->db->where('s.locCode !=', '999'); 
            }
        }
        
        $this->db->where('s.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('s.year >=', $year_start);
            $this->db->where('s.year <=', $year_end);
        }
        else {
            $this->db->where('s.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('s.eco', $ecosystem);
        }
        
        $this->db->order_by('r.sort', 'ASC'); 
        $this->db->order_by('l.locName', 'ASC'); 
        $this->db->order_by('s.eco', 'DESC'); 
        
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