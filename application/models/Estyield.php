<?php

class Estyield extends CI_Model {
    
    function get_yield_avg($location_code, $location_type, $year, $ecosystem){
        
        $this->db->select('l.locName AS location_name, k.year AS year, AVG("k"."yieldEst") as value');
        $this->db->from('kpi_pay k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->join('ids_ecosystem e', 'k.eco = e.eco');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        $this->db->where('year', $year);
        $this->db->where('k.eco', $ecosystem);
        $this->db->order_by('year', 'ASC');
        $this->db->group_by(array("year", "location_name"));
        $query=$this->db->get();
        $data_array = $query->result_array();
        return $data_array[0];
    }
    
    function get_yield_avgs($location_code = null, $location_type,  $year_start, $year_end = NULL, $ecosystem, 
                                   $order = NULL, $limit = NULL, $region_code = NULL){
        
        // Subquery
        if($location_code == NULL){
            $this->db->select('locCode, locType, locName, sort');
            $this->db->from('ids_location');
            $this->db->where('locType', '1');
            $this->db->order_by('sort', 'ASC'); 
            $subQuery =  $this->db->get_compiled_select();    
        }
        
        if($location_code == NULL){
            $this->db->select('l.locName AS location_name, r.locName AS region, k.year AS year, AVG("k"."yieldEst") as value');
        } else{
            $this->db->select('l.locName AS location_name, k.year AS year, AVG("k"."yieldEst") as value');
        }

        $this->db->from('kpi_pay k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        if($location_code == NULL){
            $this->db->join("($subQuery) r", 'r.locCode = l.parent');
            $this->db->where('k.locType', '2');
        }
        $this->db->join('ids_ecosystem e', 'k.eco = e.eco');

        if(isset($location_code)){
            $this->db->where('k.locCode', $location_code);
            $this->db->where('k.locType', $location_type);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            if($location_type == 1){
                $this->db->where('l.parent', $region_code); 
            }
            if($location_type == 2){
                $this->db->where('k.locCode !=', '999'); 
                $this->db->where('k.locType', $location_type);
            }
        }
        
        if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        if($location_code == NULL){
            $this->db->group_by(array("year", "location_name", "r.locName"));  
        }
        else {
            $this->db->group_by(array("year", "location_name"));  
        }
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        
        if(isset($limit)){
            $this->db->limit($limit);
        }

        $this->db->where('k.eco', $ecosystem);
        $query=$this->db->get();
        return $query->result_array();
        
    }
    
    function get_yield_avgs_regions ($location_code = null, $location_type,  $year_start, $year_end = NULL, $ecosystem, 
                                   $order = NULL, $limit = NULL, $region_code = NULL){
        
        // Subquery
        if($location_code == NULL){
            $this->db->select('locCode, locType, locName, sort');
            $this->db->from('ids_location');
            $this->db->where('locType', '1');
            $this->db->order_by('sort', 'ASC'); 
            $subQuery =  $this->db->get_compiled_select();    
        }

        if($location_code == NULL){
            if($location_type == 1){
                $this->db->select('l.locName AS location_name, k.year AS year, AVG("k"."yieldEst") as value');
            }
            if($location_type == 2){
                $this->db->select('l.locName AS location_name, r.locName AS region, k.year AS year, SUM("k"."estProduction") as value');
            }
        } else{
            $this->db->select('l.locName AS location_name, k.year AS year, AVG("k"."yieldEst") as value');
        }
        
        $this->db->from('kpi_pay k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        if($location_code == NULL){
            $this->db->where('k.locType', $location_type);
            if($location_type == 2){
                $this->db->join("($subQuery) r", 'r.locCode = l.parent');
            }
            
        }
        $this->db->join('ids_ecosystem e', 'k.eco = e.eco');

        if(isset($location_code)){
            $this->db->where('k.locCode', $location_code);
            $this->db->where('k.locType', $location_type);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            if($location_type == 1){
                $this->db->where('l.parent', $region_code); 
            }
            if($location_type == 2){
                $this->db->where('k.locCode !=', '999'); 
                $this->db->where('k.locType', $location_type);
            }
        }
        
        if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        if($location_code == NULL){
            if($location_type == 1){
               $this->db->group_by(array("year", "location_name"));  
            }
            if($location_type == 2){
                $this->db->group_by(array("year", "location_name", "r.locName"));  
            }
        }
        else {
            $this->db->group_by(array("year", "location_name"));  
        }
        
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        
        if(isset($limit)){
            $this->db->limit($limit);
        }

        $this->db->where('k.eco', $ecosystem);        
        $query=$this->db->get();
        return $query->result_array();
        
    }
    
    function get_yield_avgs_geocodes($location_code = null, $location_type,  $year_start, $year_end = NULL, 
                                           $ecosystem, $order = NULL, $limit = NULL, $region_code = NULL){
        
        
        $this->db->select('l.locName AS location_name, g.geoCode AS map_ID, k.year AS year, AVG("k"."yieldEst") as value');
        $this->db->from('kpi_pay k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->join('ids_geocodes g', 'k.locCode = g.locCode AND k.locType = g.locType');
        $this->db->join('ids_ecosystem e', 'k.eco = e.eco');
        

        if(isset($location_code)){
            $this->db->where('k.locCode', $location_code);
            $this->db->where('k.locType', $location_type);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            if($location_type == 1){
                $this->db->where('l.parent', $region_code); 
            }
            if($location_type == 2){
                $this->db->where('k.locCode !=', '999');
				$this->db->where('k.locType', $location_type);				
            }
        }
        
        if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        $this->db->group_by(array("year", "location_name", "geoCode"));  
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        
        if(isset($limit)){
            $this->db->limit($limit);
        }

        $this->db->where('k.eco', $ecosystem);        
        $query=$this->db->get();
        return $query->result_array();
        
    }
    
    function get_yield_avgs_geocodes_regions($location_code = null, $location_type, $year_start, $year_end = NULL, 
                                           $ecosystem, $order = NULL, $limit = NULL, $region_code = NULL){
        
        if(!isset($location_code)){
            
            if ($location_type == 1) {
                $this->db->select('locCode, locType AS regType, locName AS region, sort');
                $this->db->from('ids_location');
                $this->db->where('locType', '1');
                $this->db->order_by('sort', 'ASC'); 
                $subQuery =  $this->db->get_compiled_select();

                $this->db->select('r.locCode, r.regType, r.region AS locName, l.locName AS prov, l.locCode AS provCode, l.locType as provType');
                $this->db->from('ids_location l');
                $this->db->join("($subQuery) r", 'r.locCode = l.parent');
                $this->db->where('l.locType', '2');
                $locQuery =  $this->db->get_compiled_select();
                
                $this->db->select('l.locName AS location_name, g.geoCode AS map_ID, k.year AS year, k.yieldEst as value');
                $this->db->from("($locQuery) l");
                $this->db->join('kpi_pay k', 'l.locCode = k.locCode AND l.regType = k.locType', 'left outer');
                $this->db->join('ids_geocodes g', 'l.provCode = g.locCode AND l.provType = g.locType');
                $this->db->join('ids_ecosystem e', 'k.eco = e.eco'); 
                $this->db->where('k.locType', '1');

                if(isset($year_end)){
                    $this->db->where('k.year >=', $year_start);
                    $this->db->where('k.year <=', $year_end);
                }
                else {
                    $this->db->where('k.year', $year_start);
                }

                if(isset($order)){
                    $this->db->order_by('value', $order);
                }

                if(isset($limit)){
                    $this->db->limit($limit);
                }

                $this->db->where('k.eco', $ecosystem);                
            }
            elseif ($location_type == 2) {
                $this->db->select('l.locName AS location_name, g.geoCode AS map_ID, k.year AS year, SUM("k"."estProduction") as value');
                $this->db->from('kpi_pay k');
                $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
                $this->db->join('ids_geocodes g', 'k.locCode = g.locCode AND k.locType = g.locType');
                $this->db->join('ids_ecosystem e', 'k.eco = e.eco');
                $this->db->where('k.locCode !=', '999'); 
                $this->db->where('k.locType', $location_type);

                if(isset($year_end)){
                    $this->db->where('k.year >=', $year_start);
                    $this->db->where('k.year <=', $year_end);
                }
                else {
                    $this->db->where('k.year', $year_start);
                }

                $this->db->group_by(array("year", "location_name", "geoCode"));  

                if(isset($order)){
                    $this->db->order_by('value', $order);
                }

                if(isset($limit)){
                    $this->db->limit($limit);
                }

                $this->db->where('k.eco', $ecosystem);
            }   
            
        }
           
        $query=$this->db->get();
        return $query->result_array();
        
    }

}

?>