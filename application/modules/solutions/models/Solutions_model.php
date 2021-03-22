<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Solutions_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function solutions_submenu_update() {
        $this->db->select('*');
        $this->db->from('solutions_menu');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function solution_sub_one_update() {
        $this->db->select('*');
        $this->db->from('solution_sub_one');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function create($data) {
        $this->db->insert('solution_sub_one_crd', $data);
        return $this->db->insert_id();
    }
    
    public function solution_sub(){
        $this->db->select('*');
        $this->db->from('solution_sub_one_crd');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function solution_sub_edit($id) {
        $this->db->select('*');
        $this->db->from('solution_sub_one_crd');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function solution_sub_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('solution_sub_one_crd', $data);
      
    }
    public function product_features_first_update() {
        $this->db->select('*');
        $this->db->from('solutions_update');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function product_features_one_create($data) {
        $this->db->insert('product_features_crud_one', $data);
        return $this->db->insert_id();
    }
    
    public function product_features(){
        $this->db->select('*');
        $this->db->from('product_features_crud_one');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function product_features_one_edit($id) {
        $this->db->select('*');
        $this->db->from('product_features_crud_one');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function product_features_one_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('product_features_crud_one', $data);
      
    } 

    public function product_features_two(){
        $this->db->select('*');
        $this->db->from('product_features_crud_two');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function product_features_second_update() {
        $this->db->select('*');
        $this->db->from('solutions_update');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function product_features_two_create($data) {
        $this->db->insert('product_features_crud_two', $data);
        return $this->db->insert_id();
    }

   
    public function product_features_two_edit($id) {
        $this->db->select('*');
        $this->db->from('product_features_crud_two');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function product_features_two_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('product_features_crud_two', $data);
      
    }  

    public function product_features_three(){
        $this->db->select('*');
        $this->db->from('product_features_crud_three');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function product_features_third_update() {
        $this->db->select('*');
        $this->db->from('solutions_update');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function product_features_three_create($data) {
        $this->db->insert('product_features_crud_three', $data);
        return $this->db->insert_id();
    }

   
    public function product_features_three_edit($id) {
        $this->db->select('*');
        $this->db->from('product_features_crud_three');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function product_features_three_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('product_features_crud_three', $data);
      
    } 
    
    public function product_features_fourth_update() {
        $this->db->select('*');
        $this->db->from('solutions_update');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function product_features_five(){
        $this->db->select('*');
        $this->db->from('product_features_crud_five');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function product_features_fifth_update() {
        $this->db->select('*');
        $this->db->from('solutions_update');
        $query = $this->db->get();
        return $query->row_array();
    }
    public function product_features_five_create($data) {
        $this->db->insert('product_features_crud_five', $data);
        return $this->db->insert_id();
    }

   
    public function product_features_five_edit($id) {
        $this->db->select('*');
        $this->db->from('product_features_crud_five');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function product_features_five_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('product_features_crud_five', $data);
      
    }  

}