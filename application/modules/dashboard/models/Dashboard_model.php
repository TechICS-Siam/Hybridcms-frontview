<?php

class Dashboard_model extends CI_Model
{

    public function get_total_customer(){
        $this->db->select('*');
        $this->db->from('techics_customer');
        $query = $this->db->count_all_results();
        return $query;
    }

    public function get_total_supplier(){
        $this->db->select('*');
        $this->db->from('techics_supplier');
        $query = $this->db->count_all_results();
        return $query;
    }

    public function get_total_product(){
        $this->db->select('*');
        $this->db->from('techics_product');
        $query = $this->db->count_all_results();
        return $query;
    }

    public function get_total_employee(){
        $this->db->select('*');
        $this->db->from('techics_employee');
        $query = $this->db->count_all_results();
        return $query;
    }

}