<?php

class YCost extends CI_Model {
    
    function get_yield_cost($location_code = null, $location_type,  $year_start, $year_end = NULL, 
                                   $order = NULL, $limit = NULL, $region_code = NULL){
        
        if(isset($region_code)){
            $this->db->select('locCode, locType, locName, sort');
            $this->db->from('ids_location');
            $this->db->where('locCode', $region_code);
            $this->db->where('locType', '1');
            $this->db->order_by('sort', 'ASC'); 
            $subQuery1 =  $this->db->get_compiled_select();  
            
            $this->db->select('l.locCode, l.locType, l.locName, l.sort, l.parent');
            $this->db->from('ids_location l');
            $this->db->join("($subQuery1) r", "r.locCode = l.parent");
            $subQuery2 =  $this->db->get_compiled_select();  
        }
        
        $this->db->select('l.locName AS location_name, k.year AS year, k.yieldEst as x, k.costperkg as y');
        $this->db->from('rb_ycost k');
        if(isset($region_code)){
            $this->db->join("($subQuery2) l", "k.locCode = l.locCode AND k.locType = l.locType"); 
        }
        else {
             $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        }

        if(isset($location_code)){
            $this->db->where('k.locCode', $location_code); 
        }
        
        $this->db->where('k.locType', $location_type);
        
        if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        
        if(isset($order)){
            $this->db->order_by('location_name', $order);
        }
        
        if(isset($limit)){
            $this->db->limit($limit);
        }
       
        $query=$this->db->get();
        return $query->result_array();
        
    }

}

?>