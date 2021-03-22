<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Terms_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function terms_update() {
        $this->db->select('*');
        $this->db->from('terms');
        $query = $this->db->get();
        return $query->row_array();
    }

   
}