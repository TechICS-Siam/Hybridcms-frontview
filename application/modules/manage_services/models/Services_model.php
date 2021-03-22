<?php

if (!defined('BASEPATH')) exit ('No direct script access allowed');

class Services_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    public function manage_ressources_create($data) {
        $this->db->insert('manage_ressources', $data);
        return $this->db->insert_id();
    }
    
    public function manage_ressources(){
        $this->db->select('*');
        $this->db->from('manage_ressources');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    
    public function manage_ressources_edit($id) {
        $this->db->select('*');
        $this->db->from('manage_ressources');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function manage_ressources_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('manage_ressources', $data);
      
    }

    public function manage_solutions_create($data) {
        $this->db->insert('manage_solutions', $data);
        return $this->db->insert_id();
    }
    
    public function manage_solutions(){
        $this->db->select('*');
        $this->db->from('manage_solutions');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function manage_solutions_edit($id) {
        $this->db->select('*');
        $this->db->from('manage_solutions');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function manage_solutions_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('manage_solutions', $data);
      
    }


    public function manage_industries_create($data) {
        $this->db->insert('manage_industries', $data);
        return $this->db->insert_id();
    }
    
    public function manage_industries(){
        $this->db->select('*');
        $this->db->from('manage_industries');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function manage_industries_edit($id) {
        $this->db->select('*');
        $this->db->from('manage_industries');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function manage_industries_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('manage_industries', $data);
      
    }


    public function manage_pricing_create($data) {
        $this->db->insert('manage_pricing', $data);
        return $this->db->insert_id();
    }
    
    public function manage_pricing(){
        $this->db->select('*');
        $this->db->from('manage_pricing');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function manage_pricing_edit($id) {
        $this->db->select('*');
        $this->db->from('manage_pricing');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function manage_pricing_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('manage_pricing', $data);
      
    }


    public function manage_company_create($data) {
        $this->db->insert('manage_company', $data);
        return $this->db->insert_id();
    }
    
    public function manage_company(){
        $this->db->select('*');
        $this->db->from('manage_company');
        $this->db->order_by('id', "desc");
        $query = $this->db->get();
        return $query->result_array();
    }
   
    public function manage_company_edit($id) {
        $this->db->select('*');
        $this->db->from('manage_company');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
     public function manage_company_update($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('manage_company', $data);
      
    }

   
   
}