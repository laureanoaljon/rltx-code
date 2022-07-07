<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedbacks extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('etc');
      $this->load->model('feedback');
    }

    function index(){
        $data['ageResponse'] = intval("1");
        $data['sexResponse'] = intval("1");
        $data['sectorResponse'] = intval("1");
        $data['agencyResponse'] = html_escape("Philippine Rice Research Institute");
        $data['purposeResponse'] = intval("1");
        $data['region'] = intval("3");
        $data['province'] = intval("49");
        $data['city'] = intval("17");
        $this->feedback->savefeedback($data);    
    }
    
    function provinces() {
        $region = intval($this->input->post('region', TRUE));
        $temp_array = $this->etc->get_selected_provinces($region);
        $list = stripslashes(json_encode($temp_array));
        print_r($list);
    }
    
    function cities() {
        $province = intval($this->input->post('province', TRUE));
        $temp_array = $this->etc->get_selected_cities($province);
        $list = stripslashes(json_encode($temp_array));
        print_r($list);
    }

    function submit() {
      $honeypot = $this->input->post('others_inspect', TRUE);
        
      if(empty($honeypot)){
          
          $data['ageResponse'] = intval($this->input->post('age', TRUE));
          $data['sexResponse'] = intval($this->input->post('sex', TRUE));
          $data['sectorResponse'] = intval($this->input->post('sector', TRUE));
          $data['agencyResponse'] = html_escape($this->input->post('agency_school', TRUE));
          $data['purposeResponse'] = intval($this->input->post('purpose_work', TRUE));
          $data['region'] = intval($this->input->post('region', TRUE));
          $data['province'] = intval($this->input->post('province', TRUE));
          $data['city'] = intval($this->input->post('municipality', TRUE));
          
          if(!(
              empty($data['ageResponse']) && 
              empty($data['sexResponse']) && 
              empty($data['sectorResponse']) && 
              empty($data['agencyResponse']) && 
              empty($data['purposeResponse']) && 
              empty($data['region']) && 
              empty($data['province']) && 
              empty($data['city'])
          )){
              $this->feedback->savefeedback($data);
          }
          else {
              show_404();
          }
      }
      else {
          show_404();
      }
             
    }
    
  }