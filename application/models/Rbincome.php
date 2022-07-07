<?php

class Rbincome extends CI_Model {
    
    function get_income_rb ($location_code, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('i.year AS year');
        
        switch($column_index) {
            case 1: $this->db->select('i.monthlyIncome as value'); break;
            case 2: $this->db->select('i.riceSource as value'); break;
            case 3: $this->db->select('i.nonRiceSource as value'); break;
            case 4: $this->db->select('i.abovePovertyShare as value'); break;
            case 5: $this->db->select('i.belowPovertyShare as value'); break;
        }

        $this->db->from('rb_income i');
        $this->db->join('ids_location l', 'i.locCode = l.locCode AND i.locType = l.locType');
        $this->db->join('ids_ecosystem e', 'i.eco = e.eco');
        $this->db->where('i.locCode', $location_code);
        $this->db->where('i.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('i.year >=', $year_start);
            $this->db->where('i.year <=', $year_end);
            $this->db->order_by('i.year', 'ASC');
        }
        else {
            $this->db->where('i.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('i.eco', $ecosystem);
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
    
    function get_income_rb_prov ($location_code = NULL, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        // Subquery
        $this->db->select('locCode, locType, locName, sort');
        $this->db->from('ids_location');
        $this->db->where('locType', '1');
        $this->db->order_by('sort', 'ASC'); 
        $subQuery =  $this->db->get_compiled_select();
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('r.locName AS region');
        $this->db->select('i.year AS year');
        $this->db->select('i.eco AS eco');
        
        switch($column_index) {
            case 1: $this->db->select('i.monthlyIncome as value'); break;
            case 2: $this->db->select('i.riceSource as value'); break;
            case 3: $this->db->select('i.nonRiceSource as value'); break;
            case 4: $this->db->select('i.abovePovertyShare as value'); break;
            case 5: $this->db->select('i.belowPovertyShare as value'); break;
        }
        
        $this->db->from('rb_income i');
        $this->db->join('ids_location l', 'i.locCode = l.locCode AND i.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->join('ids_ecosystem e', 'i.eco = e.eco');
        
        if(isset($location_code)){
            $this->db->where('i.locCode', $location_code); 
        }
        else {
            if($location_type == 2){
                $this->db->where('i.locCode !=', '999'); 
            }
        }
        
        $this->db->where('i.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('i.year >=', $year_start);
            $this->db->where('i.year <=', $year_end);
        }
        else {
            $this->db->where('i.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('i.eco', $ecosystem);
        }
        
        $this->db->order_by('r.sort', 'ASC'); 
        $this->db->order_by('l.locName', 'ASC'); 
        $this->db->order_by('i.eco', 'DESC'); 
        
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
    
    function get_povertythreshold_rb_prov ($location_code = NULL, $location_type, $year_start, $year_end = NULL){
        
        // Subquery
        $this->db->select('locCode, locType, locName, sort');
        $this->db->from('ids_location');
        $this->db->where('locType', '1');
        $this->db->order_by('sort', 'ASC'); 
        $subQuery =  $this->db->get_compiled_select();
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('r.locName AS region');
        $this->db->select('i.year AS year');
        $this->db->select('i.pThreshold as value');
        
        $this->db->from('rb_pthreshold i');
        $this->db->join('ids_location l', 'i.locCode = l.locCode AND i.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        
        if(isset($location_code)){
            $this->db->where('i.locCode', $location_code); 
        }
        else {
            if($location_type == 2){
                $this->db->where('i.locCode !=', '999'); 
            }
        }
        
        $this->db->where('i.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('i.year >=', $year_start);
            $this->db->where('i.year <=', $year_end);
        }
        else {
            $this->db->where('i.year', $year_start);
        }
            
        $this->db->order_by('r.sort', 'ASC'); 
        $this->db->order_by('l.locName', 'ASC'); 
        
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
    
    function get_povertythreshold_rb ($location_code, $location_type, $year_start, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('p.year AS year');
        $this->db->select('p.pThreshold as value');

        $this->db->from('rb_pthreshold p');
        $this->db->join('ids_location l', 'p.locCode = l.locCode AND p.locType = l.locType');
        $this->db->where('p.locCode', $location_code);
        $this->db->where('p.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('p.year >=', $year_start);
            $this->db->where('p.year <=', $year_end);
            $this->db->order_by('p.year', 'ASC');
        }
        else {
            $this->db->where('p.year', $year_start);
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
    
    function get_incomesource_rb ($location_code, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('i.year AS year');
        
        switch($column_index) {
            case 1: $this->db->select('i.percentRiceOn as value'); break;
            case 2: $this->db->select('i.percentRiceOff as value'); break;
            case 3: $this->db->select('i.percentRiceAll as value'); break;
        }

        $this->db->from('rb_incomeshare i');
        $this->db->join('ids_location l', 'i.locCode = l.locCode AND i.locType = l.locType');
        $this->db->join('ids_ecosystem e', 'i.eco = e.eco');
        $this->db->where('i.locCode', $location_code);
        $this->db->where('i.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('i.year >=', $year_start);
            $this->db->where('i.year <=', $year_end);
            $this->db->order_by('i.year', 'ASC');
        }
        else {
            $this->db->where('i.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('i.eco', $ecosystem);
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
    
    function get_incomesource_rb_prov ($location_code = NULL, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
        
        // Subquery
        $this->db->select('locCode, locType, locName, sort');
        $this->db->from('ids_location');
        $this->db->where('locType', '1');
        $this->db->order_by('sort', 'ASC'); 
        $subQuery =  $this->db->get_compiled_select();
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('r.locName AS region');
        $this->db->select('i.year AS year');
        $this->db->select('i.eco AS eco');
        
        switch($column_index) {
            case 1: $this->db->select('i.percentRiceOn as value'); break;
            case 2: $this->db->select('i.percentRiceOff as value'); break;
            case 3: $this->db->select('i.percentRiceAll as value'); break;
        }
        
        $this->db->from('rb_incomeshare i');
        $this->db->join('ids_location l', 'i.locCode = l.locCode AND i.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->join('ids_ecosystem e', 'i.eco = e.eco');
        
        if(isset($location_code)){
            $this->db->where('i.locCode', $location_code); 
        }
        else {
            if($location_type == 2){
                $this->db->where('i.locCode !=', '999'); 
            }
        }
        
        $this->db->where('i.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('i.year >=', $year_start);
            $this->db->where('i.year <=', $year_end);
        }
        else {
            $this->db->where('i.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('i.eco', $ecosystem);
        }
        
        $this->db->order_by('r.sort', 'ASC'); 
        $this->db->order_by('l.locName', 'ASC'); 
        $this->db->order_by('i.eco', 'DESC'); 
        
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