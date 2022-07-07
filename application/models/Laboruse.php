<?php

class Laboruse extends CI_Model {
    
    function get_labor ($location_code, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('lb.year AS year');
        
        switch($column_index) {
            case 1: $this->db->select('lb.totalLabor as value'); break;
            case 2: $this->db->select('lb.preHarvest as value'); break;
            case 3: $this->db->select('lb.harvThreshing as value'); break;
            case 4: $this->db->select('lb.postHarvest as value'); break;
            case 5: $this->db->select('lb.permLabor as value'); break;
        }

        $this->db->from('rb_labor lb');
        $this->db->join('ids_location l', 'lb.locCode = l.locCode AND lb.locType = l.locType');
        $this->db->join('ids_ecosystem e', 'lb.eco = e.eco');
        $this->db->where('lb.locCode', $location_code);
        $this->db->where('lb.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('lb.year >=', $year_start);
            $this->db->where('lb.year <=', $year_end);
            $this->db->order_by('lb.year', 'ASC');
        }
        else {
            $this->db->where('lb.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('lb.eco', $ecosystem);
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
    
    function get_labor_prov ($location_code = NULL, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        // Subquery
        $this->db->select('locCode, locType, locName, sort');
        $this->db->from('ids_location');
        $this->db->where('locType', '1');
        $this->db->order_by('sort', 'ASC'); 
        $subQuery =  $this->db->get_compiled_select();
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('r.locName AS region');
        $this->db->select('lb.year AS year');
        $this->db->select('lb.eco AS eco');
        
        switch($column_index) {
            case 1: $this->db->select('lb.totalLabor as value'); break;
            case 2: $this->db->select('lb.preHarvest as value'); break;
            case 3: $this->db->select('lb.harvThreshing as value'); break;
            case 4: $this->db->select('lb.postHarvest as value'); break;
            case 5: $this->db->select('lb.permLabor as value'); break;
        }

        $this->db->from('rb_labor lb');
        $this->db->join('ids_location l', 'lb.locCode = l.locCode AND lb.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->join('ids_ecosystem e', 'lb.eco = e.eco');
        
        if(isset($location_code)){
            $this->db->where('lb.locCode', $location_code); 
        }
        else {
            if($location_type == 2){
                $this->db->where('lb.locCode !=', '999'); 
            }
        }
        
        $this->db->where('lb.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('lb.year >=', $year_start);
            $this->db->where('lb.year <=', $year_end);
        }
        else {
            $this->db->where('lb.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('lb.eco', $ecosystem);
        }
        
        $this->db->order_by('r.sort', 'ASC'); 
        $this->db->order_by('l.locName', 'ASC'); 
        $this->db->order_by('lb.eco', 'DESC'); 
        
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