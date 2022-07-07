<?php

class Fertilizer extends CI_Model {
    
    function get_fertusage ($location_code, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('f.year AS year');
        
        switch($column_index) {
            case 1: $this->db->select('f.nPerHa as value'); break;
            case 2: $this->db->select('f.pPerHa as value'); break;
            case 3: $this->db->select('f.kPerHa as value'); break;
            case 4: $this->db->select('f.fertPerHa as value'); break;
        }

        $this->db->from('rb_fertilizer f');
        $this->db->join('ids_location l', 'f.locCode = l.locCode AND f.locType = l.locType');
        $this->db->join('ids_ecosystem e', 'f.eco = e.eco');
        $this->db->where('f.locCode', $location_code);
        $this->db->where('f.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('f.year >=', $year_start);
            $this->db->where('f.year <=', $year_end);
            $this->db->order_by('f.year', 'ASC');
        }
        else {
            $this->db->where('f.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('f.eco', $ecosystem);
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
    
    function get_fertusage_prov ($location_code = NULL, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        // Subquery
        $this->db->select('locCode, locType, locName, sort');
        $this->db->from('ids_location');
        $this->db->where('locType', '1');
        $this->db->order_by('sort', 'ASC'); 
        $subQuery =  $this->db->get_compiled_select();
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('r.locName AS region');
        $this->db->select('f.year AS year');
        $this->db->select('f.eco AS eco');
        
        switch($column_index) {
            case 1: $this->db->select('f.nPerHa as value'); break;
            case 2: $this->db->select('f.pPerHa as value'); break;
            case 3: $this->db->select('f.kPerHa as value'); break;
            case 4: $this->db->select('f.fertPerHa as value'); break;
        }
        
        $this->db->from('rb_fertilizer f');
        $this->db->join('ids_location l', 'f.locCode = l.locCode AND f.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->join('ids_ecosystem e', 'f.eco = e.eco');
        
        if(isset($location_code)){
            $this->db->where('f.locCode', $location_code); 
        }
        else {
            if($location_type == 2){
                $this->db->where('f.locCode !=', '999'); 
            }
        }
        
        $this->db->where('f.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('f.year >=', $year_start);
            $this->db->where('f.year <=', $year_end);
        }
        else {
            $this->db->where('f.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('f.eco', $ecosystem);
        }
        
        $this->db->order_by('r.sort', 'ASC'); 
        $this->db->order_by('l.locName', 'ASC'); 
        $this->db->order_by('f.eco', 'DESC'); 
        
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