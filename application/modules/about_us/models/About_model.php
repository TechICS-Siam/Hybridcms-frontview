<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class About_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function about_update() {
        $this->db->select('*');
        $this->db->from('about_us');
        $query = $this->db->get();
        return $query->row_array();
    }

   
}