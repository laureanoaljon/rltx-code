<?php

class Etc extends CI_Model {
    
    function get_proper_caret ($latest_value, $previous_value){
        $next = round(floatval($latest_value), 2);
        $prev = round(floatval($previous_value), 2);
        
        if($next > $prev){
            $send_data = "bi bi-caret-up-fill";
        }
        elseif($next < $prev){
            $send_data = "bi bi-caret-down-fill";
        }
        elseif($next < 1){
            $send_data = "";
        }
        else {
            $send_data = "bi bi-dash";
        }
        
        return $send_data;
        
    }
    
    function is_location_exists ($location_code, $location_type, $table) {
        if(is_numeric($location_code)){
            $this->db->where('locCode', $location_code);
            $this->db->where('locType', $location_type);
            $query = $this->db->get($table);
            
            if ($query->num_rows() > 0){
               	return true;
            }
            else{
               	return false;
            }
        }
        else {
            return false;
        }
    }
    
    function get_all_regions ($table) {
        
        // Subquery
        $this->db->select('locCode, locType');
        $this->db->from($table);
        $this->db->where('locType', '1');
        $this->db->group_by(array("locCode", "locType")); 
        $subQuery =  $this->db->get_compiled_select();
        
        $this->db->select('l.locCode as id, l.locName AS location_name');
        $this->db->from("ids_location l");
        $this->db->join("($subQuery) t", 't.locCode = l.locCode AND t.locType = l.locType');
        $this->db->order_by('l.sort', 'ASC');
        $query=$this->db->get();
        $data_array = $query->result_array();
        return $data_array;
    
    }
    
     function get_all_provinces ($table, $year_end = NULL) {
        
        // Subquery
        $this->db->select('locCode, locType');
        $this->db->from($table);
        $this->db->where('locType', '2');
        if(isset($year_end)){
            $this->db->where('year', $year_end);
        }
        $this->db->group_by(array("locCode", "locType"));
	    $this->db->where('locCode !=', "36");
        $subQuery =  $this->db->get_compiled_select();
         
        $this->db->select('l.locCode as id, l.locName AS location_name, l.parent AS region');
        $this->db->from("ids_location l");
        $this->db->join("($subQuery) t", 't.locCode = l.locCode AND t.locType = l.locType');
        $subQuery2 =  $this->db->get_compiled_select();
         
        $this->db->select('l.locCode as region_id, l.locName AS region_name, t.id AS province_id, t.location_name as province');
        $this->db->from("ids_location l");
        $this->db->join("($subQuery2) t", 't.region = l.locCode');
        
        $this->db->order_by('l.sort', 'ASC');  
        $this->db->order_by('t.location_name', 'ASC'); 
        $this->db->where('l.locType', '1');
        $query=$this->db->get();
        $data_array = $query->result_array();
        return $data_array;
       
    }
    
    function get_selected_provinces ($region) {
        // Subquery
        $this->db->select('locCode, locType');
        $this->db->from("ids_location");
        $this->db->where('locType', '2');
        $this->db->group_by(array("locCode", "locType"));
	    $this->db->where('locCode !=', "36");
        $subQuery =  $this->db->get_compiled_select();
         
        $this->db->select('l.locCode as id, l.locName AS location_name, l.parent AS region');
        $this->db->from("ids_location l");
        $this->db->join("($subQuery) t", 't.locCode = l.locCode AND t.locType = l.locType');
        $subQuery2 =  $this->db->get_compiled_select();
         
        $this->db->select('l.locCode as region_id, l.locName AS region_name, t.id AS province_id, t.location_name as province');
        $this->db->from("ids_location l");
        $this->db->join("($subQuery2) t", 't.region = l.locCode');
        
        $this->db->order_by('l.sort', 'ASC');  
        $this->db->order_by('t.location_name', 'ASC'); 
        $this->db->where('l.locType', '1');
        $this->db->where('t.region', $region);
        $query=$this->db->get();
        $data_array = $query->result_array();
        return $data_array;
    }
    
     function get_selected_cities ($province) {
        // Subquery
        $this->db->select('locCode, locType');
        $this->db->from("ids_location");
        $this->db->where('locType', '3');
        $this->db->group_by(array("locCode", "locType"));
        $subQuery =  $this->db->get_compiled_select();
         
        $this->db->select('l.locCode as id, l.locName AS location_name, l.parent AS province');
        $this->db->from("ids_location l");
        $this->db->join("($subQuery) t", 't.locCode = l.locCode AND t.locType = l.locType');
        $subQuery2 =  $this->db->get_compiled_select();
         
        $this->db->select('l.locCode as province_id, l.locName AS province, t.id AS city_id, t.location_name as city');
        $this->db->from("ids_location l");
        $this->db->join("($subQuery2) t", 't.province = l.locCode');
        
        $this->db->order_by('l.sort', 'ASC');  
        $this->db->order_by('t.location_name', 'ASC'); 
        $this->db->where('l.locType', '2');
        $this->db->where('t.province', $province);
        $query=$this->db->get();
        $data_array = $query->result_array();
        return $data_array;
    }
    
    
}

?>