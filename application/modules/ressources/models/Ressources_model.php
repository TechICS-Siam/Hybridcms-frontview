<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Ressources_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function ressources_submenu_update() {
        $this->db->select('*');
        $this->db->from('blog_info');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function product_features_one_update() {
        $this->db->select('*');
        $this->db->from('blog_info');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function create($data) {
        $this->db->insert('blog_menu_tbl', $data);
        return $this->db->insert_id();
    }
    
    public function product_features(){
        $this->db->select('*');
        $this->db->from('blog_menu_tbl');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function product_features_edit($id) {
        $this->db->select('*');
        $this->db->from('blog_menu_tbl');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function product_features_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('blog_menu_tbl', $data);
      
    }
    

}