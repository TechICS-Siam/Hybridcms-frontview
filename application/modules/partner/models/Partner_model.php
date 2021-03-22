<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Partner_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function partner_first_update() {
        $this->db->select('*');
        $this->db->from('partner_update');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function partner_one_create($data) {
        $this->db->insert('partner_sec_one', $data);
        return $this->db->insert_id();
    }
    
    public function partner_one(){
        $this->db->select('*');
        $this->db->from('partner_sec_one');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function partner_one_edit($id) {
        $this->db->select('*');
        $this->db->from('partner_sec_one');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function partner_one_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('partner_sec_one', $data);
      
    }
    


    public function partner_second_update() {
        $this->db->select('*');
        $this->db->from('partner_update');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function partner_two_create($data) {
        $this->db->insert('partner_sec_two', $data);
        return $this->db->insert_id();
    }
    
    public function partner_two(){
        $this->db->select('*');
        $this->db->from('partner_sec_two');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function partner_two_edit($id) {
        $this->db->select('*');
        $this->db->from('partner_sec_two');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function partner_two_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('partner_sec_two', $data);
      
    }

    public function partner_third_update() {
        $this->db->select('*');
        $this->db->from('partner_update');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function partner_three_create($data) {
        $this->db->insert('partner_sec_three', $data);
        return $this->db->insert_id();
    }
    
    public function partner_three(){
        $this->db->select('*');
        $this->db->from('partner_sec_three');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function partner_three_edit($id) {
        $this->db->select('*');
        $this->db->from('partner_sec_three');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function partner_three_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('partner_sec_three', $data);
      
    }


    public function partner_fourth_update() {
        $this->db->select('*');
        $this->db->from('partner_update');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function partner_four_create($data) {
        $this->db->insert('partner_sec_four', $data);
        return $this->db->insert_id();
    }
    
    public function partner_four(){
        $this->db->select('*');
        $this->db->from('partner_sec_four');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function partner_four_edit($id) {
        $this->db->select('*');
        $this->db->from('partner_sec_four');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function partner_four_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('partner_sec_four', $data);
      
    }

    public function partner_fifth_update() {
        $this->db->select('*');
        $this->db->from('partner_update');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function partner_five_create($data) {
        $this->db->insert('partner_sec_five', $data);
        return $this->db->insert_id();
    }
    
    public function partner_five(){
        $this->db->select('*');
        $this->db->from('partner_sec_five');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function partner_five_edit($id) {
        $this->db->select('*');
        $this->db->from('partner_sec_five');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function partner_five_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('partner_sec_five', $data);
      
    }

    public function partner_sixth_update() {
        $this->db->select('*');
        $this->db->from('partner_update');
        $query = $this->db->get();
        return $query->row_array();
    }

    public function partner_six_create($data) {
        $this->db->insert('partner_sec_six', $data);
        return $this->db->insert_id();
    }
    
    public function partner_six(){
        $this->db->select('*');
        $this->db->from('partner_sec_six');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function partner_six_edit($id) {
        $this->db->select('*');
        $this->db->from('partner_sec_six');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function partner_six_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('partner_sec_six', $data);
      
    }
}