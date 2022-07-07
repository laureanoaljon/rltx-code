<?php

class Pest extends CI_Model {
    
    function get_pests_top($location_code, $location_type, $year, $ecosystem, $limit = NULL){
        $this->db->select('l.locName AS location_name, p.year AS year, p.rank AS rank, p.pType as type, p.brand AS label, p.percent AS value');
        $this->db->from('rb_pest p');
        $this->db->join('ids_location l', 'p.locCode = l.locCode AND p.locType = l.locType');
        $this->db->join('ids_ecosystem e', 'p.eco = e.eco');
        $this->db->where('p.locCode', $location_code);
        $this->db->where('p.locType', $location_type);
        $this->db->where('year', $year);
        $this->db->where('p.eco', $ecosystem);
        if(isset($limit)){
            $this->db->where('p.rank <=', $limit);
        }
        $this->db->order_by('p.rank', 'ASC');
        $query=$this->db->get();
        $data_array = $query->result_array();
        return $data_array;
    }
        
    function get_pests_top_prov($location_code = NULL, $location_type, $year_start, $ecosystem, $year_end = NULL, $limit = NULL){
        
        // Subquery
        $this->db->select('locCode, locType, locName, sort');
        $this->db->from('ids_location');
        $this->db->where('locType', '1');
        $this->db->order_by('sort', 'ASC'); 
        $subQuery =  $this->db->get_compiled_select();
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('r.locName AS region');
        $this->db->select('p.rank AS rank');
        $this->db->select('p.pType AS type');
        $this->db->select('p.pTypeRank AS p_rank');
        $this->db->select('p.year AS year');
        $this->db->select('p.brand AS label');
        $this->db->select('p.percent AS value');
        $this->db->from('rb_pest p');
        $this->db->join('ids_location l','p.locCode = l.locCode AND p.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->join('ids_ecosystem e', 'p.eco = e.eco');
        
        if(isset($location_code)){
            $this->db->where('p.locCode', $location_code); 
        }
        else {
            if($location_type == 2){
                $this->db->where('p.locCode !=', '999'); 
            }
        }
        
        $this->db->where('p.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('p.year >=', $year_start);
            $this->db->where('p.year <=', $year_end);
        }
        else {
            $this->db->where('p.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('p.eco', $ecosystem);
        }
               
        if(isset($limit)){
            $this->db->where('p.rank <=', $limit);
        }
        
        $this->db->order_by('r.sort', 'ASC'); 
        $this->db->order_by('l.locName', 'ASC'); 
        $this->db->order_by('p.pTypeRank', 'ASC'); 
        
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