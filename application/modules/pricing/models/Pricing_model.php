<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Pricing_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function pricing_submenu_update() {
        $this->db->select('*');
        $this->db->from('pricing_menu');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function pricing_sub_top_update() {
        $this->db->select('*');
        $this->db->from('pricing_update');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function pricing_sub_one_update() {
        $this->db->select('*');
        $this->db->from('pricing_update');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function pricing_sub_create($data) {
        $this->db->insert('pricing_sub_tbl', $data);
        return $this->db->insert_id();
    }
    
    public function pricing_sub(){
        $this->db->select('*');
        $this->db->from('pricing_sub_tbl');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function pricing_sub_edit($id) {
        $this->db->select('*');
        $this->db->from('pricing_sub_tbl');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function pricing_sub_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('pricing_sub_tbl', $data);
      
    }
    

}