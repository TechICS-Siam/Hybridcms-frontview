<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Industries_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function industries_submenu_update() {
        $this->db->select('*');
        $this->db->from('industries_menu');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function investor_relation_top_update() {
        $this->db->select('*');
        $this->db->from('investor_relation_update');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function investor_relation_first_update() {
        $this->db->select('*');
        $this->db->from('investor_relation_update');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function investor_relation_one_create($data) {
        $this->db->insert('investor_relation_one', $data);
        return $this->db->insert_id();
    }
    
    public function investor_relation_one(){
        $this->db->select('*');
        $this->db->from('investor_relation_one');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function investor_relation_one_edit($id) {
        $this->db->select('*');
        $this->db->from('investor_relation_one');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function investor_relation_one_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('investor_relation_one', $data);
      
    }

    public function investor_relation_second_update() {
        $this->db->select('*');
        $this->db->from('investor_relation_update');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function investor_relation_two_create($data) {
        $this->db->insert('investor_relation_two', $data);
        return $this->db->insert_id();
    }
    
    public function investor_relation_two(){
        $this->db->select('*');
        $this->db->from('investor_relation_two');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function investor_relation_two_edit($id) {
        $this->db->select('*');
        $this->db->from('investor_relation_two');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function investor_relation_two_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('investor_relation_two', $data);
      
    }

    public function investor_relation_third_update() {
        $this->db->select('*');
        $this->db->from('investor_relation_update');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function investor_relation_three_create($data) {
        $this->db->insert('investor_relation_three', $data);
        return $this->db->insert_id();
    }
    
    public function investor_relation_three(){
        $this->db->select('*');
        $this->db->from('investor_relation_three');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function investor_relation_three_edit($id) {
        $this->db->select('*');
        $this->db->from('investor_relation_three');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function investor_relation_three_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('investor_relation_three', $data);
      
    }

    public function newsroom_top_update() {
        $this->db->select('*');
        $this->db->from('newsroom_info');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function newsroom_one_create($data) {
        $this->db->insert('news_main_tbl', $data);
        return $this->db->insert_id();
    }
    
    public function newsroom_one(){
        $this->db->select('*');
        $this->db->from('news_main_tbl');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function newsroom_one_edit($id) {
        $this->db->select('*');
        $this->db->from('news_main_tbl');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function newsroom_one_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('news_main_tbl', $data);
      
    }
    public function newsroom_two_create($data) {
        $this->db->insert('news_sub_tbl', $data);
        return $this->db->insert_id();
    }
    
    public function newsroom_two(){
        $this->db->select('*');
        $this->db->from('news_sub_tbl');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function newsroom_two_edit($id) {
        $this->db->select('*');
        $this->db->from('news_sub_tbl');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function newsroom_two_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('news_sub_tbl', $data);
      
    }
    

}