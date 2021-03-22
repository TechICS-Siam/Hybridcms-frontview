<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Privacy_policy_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function privacy_policy_update() {
        $this->db->select('*');
        $this->db->from('privacy_policy');
        $query = $this->db->get();
        return $query->row_array();
    }

   
}