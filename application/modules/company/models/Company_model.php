<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Company_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function company_submenu_update() {
        $this->db->select('*');
        $this->db->from('company_menu');
        $query = $this->db->get();
        return $query->row_array();
    }
    // public function customer_stories_one_update() {
    //     $this->db->select('*');
    //     $this->db->from('blog_info');
    //     $query = $this->db->get();
    //     return $query->row_array();
    // }
    public function customer_stories_create($data) {
        $this->db->insert('customer_stories', $data);
        return $this->db->insert_id();
    }
    
    public function customer_stories(){
        $this->db->select('*');
        $this->db->from('customer_stories');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function customer_stories_edit($id) {
        $this->db->select('*');
        $this->db->from('customer_stories');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function customer_stories_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('customer_stories', $data);
      
    }
    public function webinars_one_update() {
        $this->db->select('*');
        $this->db->from('blog_info');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function webinars_create($data) {
        $this->db->insert('webinar_tbl', $data);
        return $this->db->insert_id();
    }
    
    public function webinars(){
        $this->db->select('*');
        $this->db->from('webinar_tbl');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function webinars_edit($id) {
        $this->db->select('*');
        $this->db->from('webinar_tbl');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function webinars_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('webinar_tbl', $data);
      
    }  

}