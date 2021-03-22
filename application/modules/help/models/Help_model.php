<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Help_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    public function help_info_update() {
        $this->db->select('*');
        $this->db->from('help_info');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function create($data) {

        $this->db->insert('help_menu_tbl', $data);
        return $this->db->insert_id();
    }
    
    public function help() {
        $this->db->select('*');
        $this->db->from('help_menu_tbl');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function help_edit($id) {
        $this->db->select('*');
        $this->db->from('help_menu_tbl');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function help_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('help_menu_tbl', $data);
      
    }
    

}