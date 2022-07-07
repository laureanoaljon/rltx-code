<?php

class Stock extends CI_Model {

    function get_stocks ($location_code, $location_type, $column_index, $limit =  NULL, $year_start = NULL, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.month AS month');
        $this->db->select('k.year AS year');
        
        
        switch($column_index) {
            case 1: $this->db->select('k.household as value'); break;
            case 2: $this->db->select('k.commercial as value'); break;
            case 3: $this->db->select('k.nfa as value'); break;
            case 4: $this->db->select('k.total as value'); break;
        }
        
        $this->db->from('kpi_ricestocks k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else if(isset($year_start)){
            $this->db->where('k.year', $year_start);
        }
        else {
            $this->db->order_by('k.year', 'DESC');
            $this->db->order_by('k.month', 'DESC');
        }
        
        if($limit != null)  {
            $this->db->limit($limit);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if(isset($year_end)){
            $send_data = $data_array;
        }
        else if(isset($year_start)){
            $send_data = $data_array[0];
        }
        else{
            if($limit != null)  {
                if($limit != 1){
                    $send_data = $data_array;
                }
                else {
                    $send_data = $data_array[0];
                }
            }
        }
        
        return $send_data;
    }
    
}

?>