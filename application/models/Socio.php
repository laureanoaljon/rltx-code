<?php

class Socio extends CI_Model {
    
    function get_socio ($location_code, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('s.year AS year');
        
        switch($column_index) {
            case 1: $this->db->select('s.count as value'); break;
            case 2: $this->db->select('s.age as value'); break;
            case 3: $this->db->select('s.ageOne as value'); break;
            case 4: $this->db->select('s.ageTwo as value'); break;
            case 5: $this->db->select('s.ageThree as value'); break;
            case 6: $this->db->select('s.ageFour as value'); break;
            case 7: $this->db->select('s.sexMale as value'); break;
            case 8: $this->db->select('s.sexFemale as value'); break;
            case 9: $this->db->select('s.cstatusSingle as value'); break;
            case 10: $this->db->select('s.cstatusMarried as value'); break;
            case 11: $this->db->select('s.cstatusWidow as value'); break;
            case 12: $this->db->select('s.cstatusSeparated as value'); break;
            case 13: $this->db->select('s.yrsSchooling as value'); break;
            case 14: $this->db->select('s.schoolNoFormal as value'); break;
            case 15: $this->db->select('s.schoolElem as value'); break;
            case 16: $this->db->select('s.schoolHS as value'); break;
            case 17: $this->db->select('s.schoolCollege as value'); break;
            case 18: $this->db->select('s.yrsFarmExp as value'); break;
            case 19: $this->db->select('s.hhSize as value'); break;
            case 20: $this->db->select('s.orgMember as value'); break;
            case 21: $this->db->select('s.withTraining as value'); break;
        }

        $this->db->from('rb_socio s');
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
    
    function get_socio_prov ($location_code = NULL, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
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
            case 1: $this->db->select('s.count as value'); break;
            case 2: $this->db->select('s.age as value'); break;
            case 3: $this->db->select('s.ageOne as value'); break;
            case 4: $this->db->select('s.ageTwo as value'); break;
            case 5: $this->db->select('s.ageThree as value'); break;
            case 6: $this->db->select('s.ageFour as value'); break;
            case 7: $this->db->select('s.sexMale as value'); break;
            case 8: $this->db->select('s.sexFemale as value'); break;
            case 9: $this->db->select('s.cstatusSingle as value'); break;
            case 10: $this->db->select('s.cstatusMarried as value'); break;
            case 11: $this->db->select('s.cstatusWidow as value'); break;
            case 12: $this->db->select('s.cstatusSeparated as value'); break;
            case 13: $this->db->select('s.yrsSchooling as value'); break;
            case 14: $this->db->select('s.schoolNoFormal as value'); break;
            case 15: $this->db->select('s.schoolElem as value'); break;
            case 16: $this->db->select('s.schoolHS as value'); break;
            case 17: $this->db->select('s.schoolCollege as value'); break;
            case 18: $this->db->select('s.yrsFarmExp as value'); break;
            case 19: $this->db->select('s.hhSize as value'); break;
            case 20: $this->db->select('s.orgMember as value'); break;
            case 21: $this->db->select('s.withTraining as value'); break;
        }
        
        $this->db->from('rb_socio s');
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