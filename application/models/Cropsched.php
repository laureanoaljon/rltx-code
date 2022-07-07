<?php

class Cropsched extends CI_Model {
    
    function get_sched($location_code, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL, $limit = false, $flag = false){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('cs.year AS year');
        $this->db->select('m.monthName AS month');
        
        switch($column_index) {
            case 1: $this->db->select('cs.plant1 as value'); break;
            case 2: $this->db->select('cs.plant2 as value'); break;
            case 3: $this->db->select('cs.plant3 as value'); break;
            case 4: $this->db->select('cs.harv1 as value'); break;
            case 5: $this->db->select('cs.harv2 as value'); break;
            case 6: $this->db->select('cs.harv3 as value'); break;
        }
        
        $this->db->from('rb_cropsched cs');
        $this->db->join('ids_location l', 'cs.locCode = l.locCode AND cs.locType = l.locType');
        $this->db->join('ids_ecosystem e', 'cs.eco = e.eco');
        $this->db->join('ids_months m', 'cs.month = m.month');
        $this->db->where('cs.locCode', $location_code);
        $this->db->where('cs.locType', $location_type);
        
        if(isset($year_end)){
            $this->db->where('cs.year >=', $year_start);
            $this->db->where('cs.year <=', $year_end);
            $this->db->order_by('cs.year', 'ASC');
        }
        else {
            $this->db->where('cs.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('cs.eco', $ecosystem);
        }
        
        if($limit == true){
           $this->db->limit(1);
        }
        
        if($flag == true){
            $this->db->where('cs.month != 13');
        }
        
        switch($column_index) {
            case 1: $this->db->order_by('cs.plant1', 'DESC'); break;
            case 2: $this->db->order_by('cs.plant2', 'DESC'); break;
            case 3: $this->db->order_by('cs.plant3', 'DESC'); break;
            case 4: $this->db->order_by('cs.harv1', 'DESC'); break;
            case 5: $this->db->order_by('cs.harv2', 'DESC'); break;
            case 6: $this->db->order_by('cs.harv3', 'DESC'); break;
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
       if($limit == false){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
    }
        
    function get_sched_yearly ($location_code = NULL, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL){
                
        $this->db->select('l.locName AS location_name');
        $this->db->select('m.monthName AS month');
        $this->db->select('cs.year AS year');
        $this->db->select('cs.eco AS eco');
        
        switch($column_index) {
            case 1: $this->db->select('cs.plant1 as value'); break;
            case 2: $this->db->select('cs.plant2 as value'); break;
            case 3: $this->db->select('cs.plant3 as value'); break;
            case 4: $this->db->select('cs.harv1 as value'); break;
            case 5: $this->db->select('cs.harv2 as value'); break;
            case 6: $this->db->select('cs.harv3 as value'); break;
        }

        $this->db->from('rb_cropsched cs');
        $this->db->join('ids_location l', 'cs.locCode = l.locCode AND cs.locType = l.locType');
        $this->db->join('ids_ecosystem e', 'cs.eco = e.eco');
        $this->db->join('ids_months m', 'cs.month = m.month');
        
        if(isset($location_code)){
            $this->db->where('cs.locCode', $location_code); 
        }
        else {
            if($location_type == 2){
                $this->db->where('cs.locCode !=', '999'); 
            }
        }
        
        $this->db->where('cs.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('cs.year >=', $year_start);
            $this->db->where('cs.year <=', $year_end);
        }
        else {
            $this->db->where('cs.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('cs.eco', $ecosystem);
        }
        
        $this->db->order_by('l.locName', 'ASC'); 
        $this->db->order_by('cs.eco', 'DESC'); 
        $this->db->order_by('cs.month', 'ASC'); 
        
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
    
    function get_sched_prov ($location_code = NULL, $location_type, $column_index, $year_start, $ecosystem, $year_end = NULL, $flag = false){
        
        // SubQuery 1 
        $this->db->select('locCode');
        $this->db->select('locType');
        $this->db->select('year');
        $this->db->select('eco');
        switch($column_index) {
            case 1: $this->db->select_max('plant1','top'); break;
            case 2: $this->db->select_max('plant2','top'); break;
            case 3: $this->db->select_max('plant3','top'); break;
            case 4: $this->db->select_max('harv1','top'); break;
            case 5: $this->db->select_max('harv2','top'); break;
            case 6: $this->db->select_max('harv3','top'); break;
        }
        
        $this->db->from('rb_cropsched');
        
        if(isset($year_end)){
            $this->db->where('year >=', $year_start);
            $this->db->where('year <=', $year_end);
        }
        else {
            $this->db->where('year', $year_start);
        }
        
        if(isset($location_code)){
            $this->db->where('locCode', $location_code); 
        }
        else {
            if($location_type == 2){
                $this->db->where('locCode !=', '999'); 
            }
        }
        
        if(isset($ecosystem)){
            $this->db->where('eco', $ecosystem);
        }
        
        if($flag == true){
            $this->db->where('month != 13');
        }
        
        $this->db->where('locType', $location_type); 
        $this->db->group_by(array("locCode", "locType", "year", "eco")); 
        $subQuery1 =  $this->db->get_compiled_select();
        
        // SubQuery 2        
        $this->db->select('sq.locCode');
        $this->db->select('sq.locType');
        $this->db->select('sq.year');
        $this->db->select('sq.eco');
        $this->db->select('sq.month');
        switch($column_index) {
            case 1: $this->db->select('sq.plant1 AS top'); break;
            case 2: $this->db->select('sq.plant2 AS top'); break;
            case 3: $this->db->select('sq.plant3 AS top'); break;
            case 4: $this->db->select('sq.harv1 AS top'); break;
            case 5: $this->db->select('sq.harv2 AS top'); break;
            case 6: $this->db->select('sq.harv3 AS top'); break;
        }
        $this->db->from('rb_cropsched sq');
        
        switch($column_index) {
            case 1: $this->db->join("($subQuery1) ij", 'sq.locCode = ij.locCode AND sq.locType = ij.locType AND sq.year = ij.year AND sq.eco = ij.eco AND sq.plant1 = ij.top', 'right'); break;
            case 2: $this->db->join("($subQuery1) ij", 'sq.locCode = ij.locCode AND sq.locType = ij.locType AND sq.year = ij.year AND sq.eco = ij.eco AND sq.plant2 = ij.top', 'right'); break;
            case 3: $this->db->join("($subQuery1) ij", 'sq.locCode = ij.locCode AND sq.locType = ij.locType AND sq.year = ij.year AND sq.eco = ij.eco AND sq.plant3 = ij.top', 'right'); break;
            case 4: $this->db->join("($subQuery1) ij", 'sq.locCode = ij.locCode AND sq.locType = ij.locType AND sq.year = ij.year AND sq.eco = ij.eco AND sq.harv1 = ij.top', 'right'); break;
            case 5: $this->db->join("($subQuery1) ij", 'sq.locCode = ij.locCode AND sq.locType = ij.locType AND sq.year = ij.year AND sq.eco = ij.eco AND sq.harv2 = ij.top', 'right'); break;
            case 6: $this->db->join("($subQuery1) ij", 'sq.locCode = ij.locCode AND sq.locType = ij.locType AND sq.year = ij.year AND sq.eco = ij.eco AND sq.harv3 = ij.top', 'right'); break;
        }
        
        if(isset($year_end)){
            $this->db->where('sq.year >=', $year_start);
            $this->db->where('sq.year <=', $year_end);
        }
        else {
            $this->db->where('sq.year', $year_start);
        }
        
        if(isset($location_code)){
            $this->db->where('sq.locCode', $location_code); 
        }
        else {
            if($location_type == 2){
                $this->db->where('sq.locCode !=', '999'); 
            }
        }
        
        if(isset($ecosystem)){
            $this->db->where('sq.eco', $ecosystem);
        }
        
        if($flag == true){
            $this->db->where('sq.month != 13');
        }
        
        $this->db->where('sq.locType', $location_type); 
        $subQuery2 =  $this->db->get_compiled_select();
        
        // Subquery 3
        $this->db->select('locCode, locType, locName, sort');
        $this->db->from('ids_location');
        $this->db->where('locType', '1');
        $this->db->order_by('sort', 'ASC'); 
        $subQuery3 = $this->db->get_compiled_select();
                    
        $this->db->select('"l"."locName" AS "location_name", "r"."locName" AS "region", "cs"."year" AS "year", "cs"."eco" AS "eco", string_agg("m"."monthName", '.$this->db->escape(", ").') AS month, "cs"."top" AS "value"');
        
        $this->db->from("($subQuery2) cs");
        $this->db->join('ids_location l', 'cs.locCode = l.locCode AND cs.locType = l.locType');
        $this->db->join("($subQuery3) r", 'r.locCode = l.parent');
        $this->db->join('ids_ecosystem e', 'cs.eco = e.eco');
        $this->db->join('ids_months m', 'cs.month = m.month');
        
        if(isset($location_code)){
            $this->db->where('cs.locCode', $location_code); 
        }
        else {
            if($location_type == 2){
                $this->db->where('cs.locCode !=', '999'); 
            }
        }
        
        $this->db->where('cs.locType', $location_type);        
        
       if(isset($year_end)){
            $this->db->where('cs.year >=', $year_start);
            $this->db->where('cs.year <=', $year_end);
        }
        else {
            $this->db->where('cs.year', $year_start);
        }
        
        if(isset($ecosystem)){
            $this->db->where('cs.eco', $ecosystem);
        }
        
        if($flag == true){
            $this->db->where('cs.month != 13');
        }
        
        $this->db->order_by('r.sort', 'ASC');

        $this->db->order_by('l.locName', 'ASC'); 
        $this->db->order_by('cs.eco', 'DESC'); 
        
        $this->db->group_by(array("l.locName", "r.locName", "cs.eco", "cs.year", "cs.top", "r.sort")); 
        
        $query=$this->db->get();
        $data_array = $query->result_array();
    
        return $data_array;
           
    }
    
}

?>