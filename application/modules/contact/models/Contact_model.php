<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Contact_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function contact_update() {
        $this->db->select('*');
        $this->db->from('contact');
        $query = $this->db->get();
        return $query->row_array();
    }

   
}