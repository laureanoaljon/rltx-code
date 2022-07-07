<?php

class Income extends CI_Model {
    
    function get_net_returns ($location_code, $location_type, $ecosystem, $year_start, $year_end = NULL){
        
        // Subquery
        $this->db->select('locCode, locType, year, eco, AVG("yieldEst") as "yieldEst"');
        $this->db->from('kpi_pay');
        $this->db->where('locCode', $location_code);
        $this->db->where('locType', $location_type);
        $this->db->where('eco', $ecosystem);
        if(isset($year_end)){
            $this->db->where('year >=', $year_start);
            $this->db->where('year <=', $year_end);
        }
        else {
            $this->db->where('year', $year_start);
        }
        $this->db->group_by(array("locCode", "locType", "year", "eco"));  
        $subQuery =  $this->db->get_compiled_select();
        
        // Main query
        $this->db->select('l.locName AS location_name, y.year AS year, (((("y"."yieldEst") * 1000) * ("p"."farmgatePrice")) - "c"."costProduction") AS value');
        $this->db->from("($subQuery) y");
        $this->db->join('kpi_costs c', 'y.locCode = c.locCode AND y.locType = c.locType AND y.year = c.year');
        $this->db->join('kpi_prices p', 'y.locCode = p.locCode AND y.locType = p.locType AND y.year = p.year');
        $this->db->join('ids_location l', 'l.locCode = y.locCode AND l.locType = y.locType');
        $this->db->where('y.locCode', $location_code);
        $this->db->where('y.locType', $location_type);
        $this->db->where('y.eco', $ecosystem);
        
        if(isset($year_end)){
            $this->db->where('y.year >=', $year_start);
            $this->db->where('y.year <=', $year_end);
            $this->db->order_by('y.year', 'ASC');
        }
        else {
            $this->db->where('y.year', $year_start);
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
    
    function get_total_costs ($location_code, $location_type, $year_start, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.costProduction as value');
        $this->db->from('kpi_costs k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        $this->db->order_by('k.year', 'ASC'); 
        
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
    
//  function get_costs_net ($location_code = NULL, $location_type, $ecosystem, $year_start, $year_end = NULL, $order = NULL, $limit =  NULL){
    
    function get_gross_returns ($location_code = NULL, $location_type, $ecosystem, $year_start, $year_end = NULL, $order = NULL, $limit =  NULL){
        
        // Subquery
        $this->db->select('locCode, locType, year, eco, AVG("yieldEst") as "yieldEst"');
        $this->db->from('kpi_pay');
        if(isset($location_code)){
            $this->db->where('locCode', $location_code);
        }
        $this->db->where('locType', $location_type);
        $this->db->where('eco', $ecosystem);
        if(isset($year_end)){
            $this->db->where('year >=', $year_start);
            $this->db->where('year <=', $year_end);
             $this->db->order_by('year', 'ASC');
        }
        else {
            $this->db->where('year', $year_start);
        }
        $this->db->group_by(array("locCode", "locType", "year", "eco"));  
        $subQuery =  $this->db->get_compiled_select();
        
        // Main query
        $this->db->select('l.locName AS location_name, y.year AS year, (("y"."yieldEst") * 1000) * ("p"."farmgatePrice") AS value');
        $this->db->from("($subQuery) y");
        $this->db->join('kpi_prices p', 'y.locCode = p.locCode AND y.locType = p.locType AND y.year = p.year');
        $this->db->join('ids_location l', 'l.locCode = y.locCode AND l.locType = y.locType');
        if(isset($location_code)){
            $this->db->where('y.locCode', $location_code);
        }
        $this->db->where('y.locType', $location_type);
        $this->db->where('y.eco', $ecosystem);
        
        if(isset($year_end)){
            $this->db->where('y.year >=', $year_start);
            $this->db->where('y.year <=', $year_end);
             $this->db->order_by('y.year', 'ASC');
        }
        else {
            $this->db->where('y.year', $year_start);
        }
        
        if(isset($order)){
            $this->db->order_by('location_name', $order);
        }
        
        if(isset($limit)){
            $this->db->limit($limit);
        }

        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if(isset($year_end)){
            $send_data = $data_array;
        }
        else if(!(isset($location_code))){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
    
        return $send_data;

    }
    
    function get_costs_net ($location_code = NULL, $location_type, $ecosystem, $year_start, $year_end = NULL, $order = NULL, $limit =  NULL){
        
        // Subquery
        $this->db->select('locCode, locType, year, eco, AVG("yieldEst") as "yieldEst"');
        $this->db->from('kpi_pay');
        if(isset($location_code)){
            $this->db->where('locCode', $location_code);
        }
        $this->db->where('locType', $location_type);
        $this->db->where('eco', $ecosystem);
        if(isset($year_end)){
            $this->db->where('year >=', $year_start);
            $this->db->where('year <=', $year_end);
            $this->db->order_by('year', 'ASC');
        }
        else {
            $this->db->where('year', $year_start);
        }
        $this->db->group_by(array("locCode", "locType", "year", "eco"));  
        $subQuery =  $this->db->get_compiled_select();
        
        // Main query
        $this->db->select('l.locName AS location_name, y.year AS year, c.costProduction AS costs, (((("y"."yieldEst") * 1000) * ("p"."farmgatePrice")) - "c"."costProduction") AS net');
        $this->db->from("($subQuery) y");
        $this->db->join('kpi_costs c', 'y.locCode = c.locCode AND y.locType = c.locType AND y.year = c.year');
        $this->db->join('kpi_prices p', 'y.locCode = p.locCode AND y.locType = p.locType AND y.year = p.year');
        $this->db->join('ids_location l', 'l.locCode = y.locCode AND l.locType = y.locType');
        if(isset($location_code)){
            $this->db->where('y.locCode', $location_code);
        }
        $this->db->where('y.locType', $location_type);
        $this->db->where('y.eco', $ecosystem);
        
        if(isset($year_end)){
            $this->db->where('y.year >=', $year_start);
            $this->db->where('y.year <=', $year_end);
             $this->db->order_by('y.year', 'ASC');
        }
        else {
            $this->db->where('y.year', $year_start);
        }
        
        if(isset($order)){
            $this->db->order_by('l.sort', $order);
        }
        
        if(isset($limit)){
            $this->db->limit($limit);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if(isset($year_end)){
            $send_data = $data_array;
        }
        else if(!(isset($location_code))){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
        
    }      
    
    function get_farmgate_prices ($location_code, $location_type, $year_start, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.farmgatePrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
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
    
    function get_farmgate_prices_series ($location_code, $location_type, $year_end, $year_type, $limit){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.periodUnit AS period');
        $this->db->select('k.farmgatePrice as value');
        $this->db->from('kpi_pricess k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        $this->db->where('k.yearType', $year_type);
        
        $this->db->order_by('k.year', 'ASC');
        $this->db->order_by('k.periodUnit', 'ASC');
        $this->db->limit($limit);
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if($limit != 1){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
    }
    
    function get_farmgate_prices_reg ($year_start, $year_end = NULL, $order = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.farmgatePrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locType', "1");
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        $send_data = $data_array;
        
        return $send_data;
    }
    
    function get_farmgate_prices_geocodes_regions($location_code = null, $location_type, $year_start, $year_end = NULL, 
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
                
                $this->db->select('l.locName AS location_name, g.geoCode AS map_ID, k.year AS year, k.farmgatePrice as value');
                $this->db->from("($locQuery) l");
                $this->db->join('kpi_prices k', 'l.locCode = k.locCode AND l.regType = k.locType', 'left outer');
                $this->db->join('ids_geocodes g', 'l.provCode = g.locCode AND l.provType = g.locType');
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
            
            }
            
        }
           
        $query=$this->db->get();
        return $query->result_array();
        
    }
    
    function get_farmgate_prices_prov ($region_code, $year_start, $year_end = NULL, $order = NULL){

            $this->db->select('locCode, locType, locName, sort');
            $this->db->from('ids_location');
            $this->db->where('locType', '1');
            $this->db->order_by('sort', 'ASC'); 
            $subQuery =  $this->db->get_compiled_select();    
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.farmgatePrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->where('k.locType', "2");
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        $this->db->where('l.parent', $region_code); 
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        $send_data = $data_array;
        
        return $send_data;
    }
    
    function get_farmgate_prices_geocodes($location_code = null, $location_type,  $year_start, $year_end = NULL, 
                                           $ecosystem, $order = NULL, $limit = NULL, $region_code = NULL){
        
        
        $this->db->select('l.locName AS location_name, g.geoCode AS map_ID, k.year AS year,  k.farmgatePrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->join('ids_geocodes g', 'k.locCode = g.locCode AND k.locType = g.locType');        

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
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        
        if(isset($limit)){
            $this->db->limit($limit);
        }
       
        $query=$this->db->get();
        return $query->result_array();
        
    }
    
    function get_wholesale_prices ($location_code, $location_type, $year_start, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.wholesalePrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
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
    
    function get_wholesale_prices_reg ($year_start, $year_end = NULL, $order = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.wholesalePrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locType', "1");
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        $send_data = $data_array;
        
        return $send_data;
    }
    
    function get_wholesale_prices_geocodes_regions($location_code = null, $location_type, $year_start, $year_end = NULL, 
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
                
                $this->db->select('l.locName AS location_name, g.geoCode AS map_ID, k.year AS year, k.wholesalePrice as value');
                $this->db->from("($locQuery) l");
                $this->db->join('kpi_prices k', 'l.locCode = k.locCode AND l.regType = k.locType', 'left outer');
                $this->db->join('ids_geocodes g', 'l.provCode = g.locCode AND l.provType = g.locType');
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
            
            }
            
        }
           
        $query=$this->db->get();
        return $query->result_array();
        
    }
    
    function get_wholesale_prices_series ($location_code, $location_type, $year_end, $year_type, $limit){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.periodUnit AS period');
        $this->db->select('k.wholesalePrice as value');
        $this->db->from('kpi_pricess k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        $this->db->where('k.yearType', $year_type);
        
        $this->db->order_by('k.year', 'ASC');
        $this->db->order_by('k.periodUnit', 'ASC');
        $this->db->limit($limit);
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if($limit != 1){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
    }
    
    function get_wholesale_prices_prov ($region_code, $year_start, $year_end = NULL, $order = NULL){

            $this->db->select('locCode, locType, locName, sort');
            $this->db->from('ids_location');
            $this->db->where('locType', '1');
            $this->db->order_by('sort', 'ASC'); 
            $subQuery =  $this->db->get_compiled_select();    
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.wholesalePrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->where('k.locType', "2");
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        $this->db->where('l.parent', $region_code); 
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        $send_data = $data_array;
        
        return $send_data;
    }
    
    function get_wholesale_prices_geocodes($location_code = null, $location_type,  $year_start, $year_end = NULL, 
                                           $ecosystem, $order = NULL, $limit = NULL, $region_code = NULL){
        
        
        $this->db->select('l.locName AS location_name, g.geoCode AS map_ID, k.year AS year,  k.wholesalePrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->join('ids_geocodes g', 'k.locCode = g.locCode AND k.locType = g.locType');        

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
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        
        if(isset($limit)){
            $this->db->limit($limit);
        }
       
        $query=$this->db->get();
        return $query->result_array();
        
    }
    
    function get_wholesale_sp_prices ($location_code, $location_type, $year_start, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.wholesaleSpPrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
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
    
    function get_wholesale_sp_prices_reg ($year_start, $year_end = NULL, $order = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.wholesaleSpPrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locType', "1");
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        $send_data = $data_array;
        
        return $send_data;
    }
    
    function get_wholesale_sp_prices_prov ($region_code, $year_start, $year_end = NULL, $order = NULL){
        
            $this->db->select('locCode, locType, locName, sort');
            $this->db->from('ids_location');
            $this->db->where('locType', '1');
            $this->db->order_by('sort', 'ASC'); 
            $subQuery =  $this->db->get_compiled_select();    
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.wholesaleSpPrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->where('k.locType', "2");
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        $this->db->where('l.parent', $region_code); 
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        $send_data = $data_array;
        
        return $send_data;
    }
    
    function get_wholesale_prices_sp_geocodes($location_code = null, $location_type,  $year_start, $year_end = NULL, 
                                           $ecosystem, $order = NULL, $limit = NULL, $region_code = NULL){
        
        
        $this->db->select('l.locName AS location_name, g.geoCode AS map_ID, k.year AS year,  k.wholesaleSpPrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->join('ids_geocodes g', 'k.locCode = g.locCode AND k.locType = g.locType');        

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
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        
        if(isset($limit)){
            $this->db->limit($limit);
        }
       
        $query=$this->db->get();
        return $query->result_array();
        
    }
    
    function get_wholesale_prices_sp_geocodes_regions($location_code = null, $location_type, $year_start, $year_end = NULL, 
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
                
                $this->db->select('l.locName AS location_name, g.geoCode AS map_ID, k.year AS year, k.wholesaleSpPrice as value');
                $this->db->from("($locQuery) l");
                $this->db->join('kpi_prices k', 'l.locCode = k.locCode AND l.regType = k.locType', 'left outer');
                $this->db->join('ids_geocodes g', 'l.provCode = g.locCode AND l.provType = g.locType');
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
            
            }
            
        }
           
        $query=$this->db->get();
        return $query->result_array();
        
    }
    
    function get_wholesale_sp_prices_series ($location_code, $location_type, $year_end, $year_type, $limit){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.periodUnit AS period');
        $this->db->select('k.wholesaleSpPrice as value');
        $this->db->from('kpi_pricess k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        $this->db->where('k.yearType', $year_type);
        
        $this->db->order_by('k.year', 'ASC');
        $this->db->order_by('k.periodUnit', 'ASC');
        $this->db->limit($limit);
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if($limit != 1){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
    }
    
    function get_retail_prices ($location_code, $location_type, $year_start, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.retailPrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
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
    
    function get_retail_prices_series ($location_code, $location_type, $year_end, $year_type, $limit){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.periodUnit AS period');
        $this->db->select('k.retailPrice as value');
        $this->db->from('kpi_pricess k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        $this->db->where('k.yearType', $year_type);
        
        $this->db->order_by('k.year', 'ASC');
        $this->db->order_by('k.periodUnit', 'ASC');
        $this->db->limit($limit);
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if($limit != 1){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
    }
    
    function get_retail_prices_reg ($year_start, $year_end = NULL, $order = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.retailPrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locType', "1");
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        $send_data = $data_array;
        
        return $send_data;
    }
    
    function get_retail_prices_geocodes_regions($location_code = null, $location_type, $year_start, $year_end = NULL, 
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
                
                $this->db->select('l.locName AS location_name, g.geoCode AS map_ID, k.year AS year, k.retailPrice as value');
                $this->db->from("($locQuery) l");
                $this->db->join('kpi_prices k', 'l.locCode = k.locCode AND l.regType = k.locType', 'left outer');
                $this->db->join('ids_geocodes g', 'l.provCode = g.locCode AND l.provType = g.locType');
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
            
            }
            
        }
           
        $query=$this->db->get();
        return $query->result_array();
        
    }
    
    function get_retail_prices_prov ($region_code, $year_start, $year_end = NULL, $order = NULL){

            $this->db->select('locCode, locType, locName, sort');
            $this->db->from('ids_location');
            $this->db->where('locType', '1');
            $this->db->order_by('sort', 'ASC'); 
            $subQuery =  $this->db->get_compiled_select();    
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.retailPrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->where('k.locType', "2");
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        $this->db->where('l.parent', $region_code); 
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        $send_data = $data_array;
        
        return $send_data;
    }
    
    function get_retail_prices_geocodes($location_code = null, $location_type,  $year_start, $year_end = NULL, 
                                           $ecosystem, $order = NULL, $limit = NULL, $region_code = NULL){
        
        
        $this->db->select('l.locName AS location_name, g.geoCode AS map_ID, k.year AS year,  k.retailPrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->join('ids_geocodes g', 'k.locCode = g.locCode AND k.locType = g.locType');        

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
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        
        if(isset($limit)){
            $this->db->limit($limit);
        }
       
        $query=$this->db->get();
        return $query->result_array();
        
    }
    
    function get_retail_sp_prices ($location_code, $location_type, $year_start, $year_end = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.retailSpPrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
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
    
    function get_retail_sp_prices_series ($location_code, $location_type, $year_end, $year_type, $limit){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.periodUnit AS period');
        $this->db->select('k.retailSpPrice as value');
        $this->db->from('kpi_pricess k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        $this->db->where('k.yearType', $year_type);
        
        $this->db->order_by('k.year', 'ASC');
        $this->db->order_by('k.periodUnit', 'ASC');
        $this->db->limit($limit);
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        if($limit != 1){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $send_data;
    }
    
    function get_retail_sp_prices_reg ($year_start, $year_end = NULL, $order = NULL){
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.retailSpPrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locType', "1");
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        $send_data = $data_array;
        
        return $send_data;
    }
    
    function get_retail_sp_prices_geocodes_regions($location_code = null, $location_type, $year_start, $year_end = NULL, 
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
                
                $this->db->select('l.locName AS location_name, g.geoCode AS map_ID, k.year AS year, k.retailSpPrice as value');
                $this->db->from("($locQuery) l");
                $this->db->join('kpi_prices k', 'l.locCode = k.locCode AND l.regType = k.locType', 'left outer');
                $this->db->join('ids_geocodes g', 'l.provCode = g.locCode AND l.provType = g.locType');
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
            
            }
            
        }
           
        $query=$this->db->get();
        return $query->result_array();
        
    }
    
    function get_retail_sp_prices_prov ($region_code, $year_start, $year_end = NULL, $order = NULL){

            $this->db->select('locCode, locType, locName, sort');
            $this->db->from('ids_location');
            $this->db->where('locType', '1');
            $this->db->order_by('sort', 'ASC'); 
            $subQuery =  $this->db->get_compiled_select();    
        
        $this->db->select('l.locName AS location_name');
        $this->db->select('k.year AS year');
        $this->db->select('k.retailSpPrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->join("($subQuery) r", 'r.locCode = l.parent');
        $this->db->where('k.locType', "2");
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
        }
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        $this->db->where('l.parent', $region_code); 
        
        $query=$this->db->get();
        $data_array = $query->result_array();
        $send_data = $data_array;
        
        return $send_data;
    }
    
    function get_retail_sp_prices_geocodes($location_code = null, $location_type,  $year_start, $year_end = NULL, 
                                           $ecosystem, $order = NULL, $limit = NULL, $region_code = NULL){
        
        
        $this->db->select('l.locName AS location_name, g.geoCode AS map_ID, k.year AS year,  k.retailSpPrice as value');
        $this->db->from('kpi_prices k');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->join('ids_geocodes g', 'k.locCode = g.locCode AND k.locType = g.locType');        

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
        
        if(isset($order)){
            $this->db->order_by('value', $order);
        }
        
        if(isset($limit)){
            $this->db->limit($limit);
        }
       
        $query=$this->db->get();
        return $query->result_array();
        
    }
    
    function get_farmgate_prices_real ($location_code, $location_type, $cpi_base, $year_start, $year_end = NULL){
        
        // Formula Used: Real Price = (Nominal Price / CPI base year) * 100

        switch ($cpi_base) {
          case '1':
            $mainquery = 'l.locName AS location_name, k.year AS year, ("k"."farmgatePrice" / "c"."cpiAll") * 100 AS value';
            break;
          case '2':
            $mainquery = 'l.locName AS location_name, k.year AS year, ("k"."farmgatePrice" / "c"."cpiFood") * 100 AS value';
            break;
          case '3':
            $mainquery = 'l.locName AS location_name, k.year AS year, ("k"."farmgatePrice" / "c"."cpiRice") * 100 AS value';
            break;
        }
        
        // Main query
        $this->db->select($mainquery);
        $this->db->from('kpi_prices k');
        $this->db->join("kpi_cpi c", 'c.locCode = k.locCode AND c.locType = k.locType AND c.year = k.year');
        $this->db->join('ids_location l', 'k.locCode = l.locCode AND k.locType = l.locType');
        $this->db->where('k.locCode', $location_code);
        $this->db->where('k.locType', $location_type);
        
       if(isset($year_end)){
            $this->db->where('k.year >=', $year_start);
            $this->db->where('k.year <=', $year_end);
            $this->db->order_by('k.year', 'ASC');
        }
        else {
            $this->db->where('k.year', $year_start);
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
    
    function get_cost_breakdown($location_code = NULL, $location_type, $year_start, $ecosystem, $year_end = NULL){
        
        if(isset($location_code)){
            $this->db->where('locCode', $location_code);
        }
        
        $this->db->where('eco', $ecosystem);
        $this->db->where('locType', $location_type);
        
        if(isset($year_end)){
            $this->db->where('year >=', $year_start);
            $this->db->where('year <=', $year_end);
        }
        else {
            $this->db->where('year', $year_start);
        }
        
        $query=$this->db->get('kpi_costscom');
        $data_array = $query->result_array();
        
        if(isset($year_end)){
            $send_data = $data_array;
        }
        else {
            $send_data = $data_array[0];
        }
        
        return $data_array;
        
    }
    
    function get_npk_usage ($location_code = NULL, $location_type, $ecosystem, $year_start, $yield, $year_end = NULL, $region_code = NULL){
        
        // Subquery
        $this->db->select('locCode, locType, year, eco, AVG("yieldEst") as "yieldEst"');
        $this->db->from('kpi_pay');
        if(isset($location_code)){
            $this->db->where('locCode', $location_code);
        }
        $this->db->where('locType', $location_type);
        $this->db->where('eco', $ecosystem);
        $this->db->where('yieldEst >=', $yield);
        if(isset($year_end)){
            $this->db->where('year >=', $year_start);
            $this->db->where('year <=', $year_end);
        }
        else {
            $this->db->where('year', $year_start);
        }
        $this->db->group_by(array("locCode", "locType", "year", "eco"));  
        $subQuery = $this->db->get_compiled_select();
        
        // Subquery
        if(isset($region_code)){
            $this->db->select('locCode, locType, locName, sort');
            $this->db->from('ids_location');
            $this->db->where('locCode', $region_code);
            $this->db->where('locType', '1');
            $this->db->order_by('sort', 'ASC'); 
            $subQuery2 =  $this->db->get_compiled_select();  
            
            $this->db->select('l.locCode, l.locType, l.locName, l.sort, l.parent');
            $this->db->from('ids_location l');
            $this->db->join("($subQuery2) r", "r.locCode = l.parent");
            $subQuery3 =  $this->db->get_compiled_select();  
        }
        
        // Main query
        $this->db->select('l.locName AS location_name, y.year AS year, n.nperha As n_value, n.pperha AS p_value, n.kperha AS k_value');
        $this->db->from("($subQuery) y");
        $this->db->join('kpi_npk n', 'y.locCode = n.locCode AND y.locType = n.locType AND y.year = n.year AND y.eco = n.eco');
        if(isset($region_code)){
            $this->db->join("($subQuery3) l", "l.locCode = y.locCode AND l.locType = y.locType");    
        }
        else {
              $this->db->join('ids_location l', 'l.locCode = y.locCode AND l.locType = y.locType');
        }
        if(isset($location_code)){
            $this->db->where('y.locCode', $location_code);
        }
        $this->db->where('y.locType', $location_type);
        $this->db->where('y.eco', $ecosystem);
        
        if(isset($year_end)){
            $this->db->where('y.year >=', $year_start);
            $this->db->where('y.year <=', $year_end);
        }
        else {
            $this->db->where('y.year', $year_start);
        }
        $this->db->order_by('location_name', 'ASC');
        $query=$this->db->get();
        $data_array = $query->result_array();
        
        $send_data = $data_array;
        
        return $send_data;

    }
    
    function get_net_returns_provincial ($location_code, $location_type, $ecosystem, $year_start, $year_end = NULL){
        
        // Subquery
        $this->db->select('locCode, locType, year, eco, AVG("yieldEst") as "yieldEst"');
        $this->db->from('kpi_pay');
        $this->db->where('locCode', $location_code);
        $this->db->where('locType', $location_type);
        $this->db->where('eco', $ecosystem);
        if(isset($year_end)){
            $this->db->where('year >=', $year_start);
            $this->db->where('year <=', $year_end);
        }
        else {
            $this->db->where('year', $year_start);
        }
        $this->db->group_by(array("locCode", "locType", "year", "eco"));  
        $subQuery1 =  $this->db->get_compiled_select();
        
        // Subquery
        $this->db->select('locCode, locType, locName, sort');
        $this->db->from('ids_location');
        $this->db->where('locType', '1');
        $this->db->order_by('sort', 'ASC'); 
        $subQuery2 = $this->db->get_compiled_select();
        
        // Subquery
        $this->db->select('l.parent AS locCode, r.locType AS locType, l.locCode as provCode, l.locType as provType');
        $this->db->from('ids_location l');
        $this->db->join("($subQuery2) r", 'r.locCode = l.parent');
        $this->db->where('l.locCode', $location_code);
        $this->db->where('l.locType', $location_type);
        $subQuery3 = $this->db->get_compiled_select();
        
        // Subquery
        $this->db->select('rg.provCode AS locCode, rg.provType as locType, sq.year, sq.costProduction');
        $this->db->from("($subQuery3) rg");
        $this->db->join('kpi_costs sq', 'rg.locCode = sq.locCode AND rg.locType = sq.locType');
        $subQuery4 = $this->db->get_compiled_select();
        
        // Main query
        $this->db->select('l.locName AS location_name, y.year AS year, (((("y"."yieldEst") * 1000) * ("p"."farmgatePrice")) - "c"."costProduction") AS value');
        $this->db->from("($subQuery1) y");
        $this->db->join("($subQuery4) c", "y.locCode = c.locCode AND y.locType = c.locType AND y.year = c.year");
        $this->db->join('kpi_prices p', 'y.locCode = p.locCode AND y.locType = p.locType AND y.year = p.year');
        $this->db->join('ids_location l', 'l.locCode = y.locCode AND l.locType = y.locType');
        $this->db->where('y.locCode', $location_code);
        $this->db->where('y.locType', $location_type);
        $this->db->where('y.eco', $ecosystem);
        
        if(isset($year_end)){
            $this->db->where('y.year >=', $year_start);
            $this->db->where('y.year <=', $year_end);
        }
        else {
            $this->db->where('y.year', $year_start);
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
    
}

?>