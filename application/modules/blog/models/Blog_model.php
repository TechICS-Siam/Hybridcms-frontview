<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Blog_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function blog_info_update() {
        $this->db->select('*');
        $this->db->from('blog_info');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function create($data) {
        $this->db->insert('blog_menu_tbl', $data);
        return $this->db->insert_id();
    }
    
    public function blog(){
        $this->db->select('*');
        $this->db->from('blog_menu_tbl');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function blog_edit($id) {
        $this->db->select('*');
        $this->db->from('blog_menu_tbl');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function blog_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('blog_menu_tbl', $data);
      
    }
    

}