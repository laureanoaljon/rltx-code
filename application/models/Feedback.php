<?php

class Feedback extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->model('etc');
    }
    
    function savefeedback ($data){
        $this->db->insert('sys_clients', $data);
        $db_error = $this->db->error();
        if (!empty($db_error)) {
            throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
            return false; // unreachable retrun statement !!!
        }
        return true;   
    }
    
}

?>