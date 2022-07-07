<?php

class Machine extends CI_Model {
    
    function get_machine_top($location_code, $location_type, $year, $ecosystem, $limit = NULL){
        $this->db->select('l.locName AS location_name, p.year AS year, p.rank AS rank, p.machine AS label, p.percent AS value');
        $this->db->from('rb_machine p');
        $this->db->join('ids_location l', 'p.locCode = l.locCode AND p.locType = l.locType');
        $this->db->join('ids_ecosystem e', 'p.eco = e.eco');
        $this->db->where('p.locCode', $location_code);
        $this->db->where('p.locType', $location_type);
        $this->db->where('year', $year);
        $this->db->where('p.eco', $ecosystem); 
        $this->db->where('p.percent !=', 0);
        if(isset($limit)){
            $this->db->where('p.rank <=', $limit);
        }
        $this->db->order_by('p.rank', 'ASC');
        $query=$this->db->get();
        $data_array = $query->result_array();
        return $data_array;
    }
        
    function get_machine_top_prov($location_code = NULL, $location_type, $year_start, $ecosystem, $year_end = NULL, $limit = NULL){
        
        // Subquery
        $this->db->select('locCode, locType, locName, sort');
        $this->db->from('ids_location');
        $this->db->where('locType', '1');
        $this->db->order_by('sort', 'ASC'); 
        $subQuery =  $this->db->get_compiled_select();
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('r.locName AS region');
        $this->db->select('p.rank AS rank');
        $this->db->select('p.year AS year');
        $this->db->select('p.machine AS label');
        $this->db->select('p.percent AS value');
        $this->db->from('rb_machine p');
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
        $this->db->where('p.percent !=', 0);       
        
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
        $this->db->order_by('p.eco', 'DESC'); 
        $this->db->order_by('p.rank', 'ASC');
        
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
    
    function get_adopted_top($location_code, $location_type, $year, $ecosystem, $category = NULL){
        $limit = 5;
        $this->db->select('l.locName AS location_name, p.year AS year, p.rank AS rank, t.technology AS tech, p.percent AS value');
        $this->db->from('rb_awareness p');
        $this->db->join('ids_location l', 'p.locCode = l.locCode AND p.locType = l.locType');
        $this->db->join('ids_ecosystem e', 'p.eco = e.eco');
        $this->db->join('ids_technology t', 't.technologyCode = p.technologyCode');
        $this->db->where('p.locCode', $location_code);
        $this->db->where('p.locType', $location_type);
        if(isset($category)){
            $this->db->where('p.categoryCode', $category); 
        }
        $this->db->where('year', $year);
        $this->db->where('p.eco', $ecosystem);
        $this->db->order_by('p.rank', 'ASC');
        $this->db->where('p.rank <=', $limit);
        $this->db->where('p.percent !=', 0);    
        $query=$this->db->get();
        $data_array = $query->result_array();
        return $data_array;
    }
    
    function get_adopted_top_all($location_code, $location_type, $year, $ecosystem, $limit = NULL){
        $this->db->select('l.locName AS location_name, c.category AS category, p.year AS year, p.rank AS rank, t.technology AS tech, p.percent AS value');
        $this->db->from('rb_awareness p');
        $this->db->join('ids_location l', 'p.locCode = l.locCode AND p.locType = l.locType');
        $this->db->join('ids_ecosystem e', 'p.eco = e.eco');
        $this->db->join('ids_technology t', 't.technologyCode = p.technologyCode');
        $this->db->join('ids_acategory c', 'c.categoryCode = p.categoryCode');
        $this->db->where('p.locCode', $location_code);
        $this->db->where('p.locType', $location_type);
        if(isset($category)){
            $this->db->where('p.categoryCode', $category); 
        }
        $this->db->where('year', $year);
        $this->db->where('p.eco', $ecosystem);
        $this->db->where('p.percent !=', 0);    
        $this->db->order_by('p.categoryCode', 'ASC');
        $this->db->order_by('p.rank', 'ASC');
        $this->db->where('p.rank <=', $limit);
        $query=$this->db->get();
        $data_array = $query->result_array();
        return $data_array;
    }
    
}

?>