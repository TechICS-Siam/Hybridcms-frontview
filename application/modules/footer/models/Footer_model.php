<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Footer_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
     public function get_footer() {
        $this->db->select('*');
        $this->db->from('footer');
        $query = $this->db->get();
        return $query->result_array();
    }
   
    
   
}
