<?php

class Location extends CI_Model {
    
    function get_region ($location_code, $location_type){
        
        $this->db->select('locCode, locType, locName, sort');
        $this->db->from('ids_location');
        $this->db->where('locType', '1');
        $this->db->order_by('sort', 'ASC'); 
        $subQuery =  $this->db->get_compiled_select();
        
        $this->db->select('l.parent AS location_code, r.locName AS location_name');
        $this->db->from('ids_location l');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->where('l.locCode', $location_code);
        $this->db->where('l.locType', $location_type);
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        return $data_array[0];
    
    }
}

?>