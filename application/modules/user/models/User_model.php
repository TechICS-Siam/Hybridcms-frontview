<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function check_username($username) {
        $query = $this->db->get_where('techics_users', array('username' => $username));
        return $query->result();
    }

    public function create($data) {
        $this->db->insert('techics_users', $data);
        return $this->db->insert_id();
    }

    public function get_user() {
        $this->db->select('*');
        $this->db->from('admins');
        $this->db->where('id !=', 1);
        $this->db->order_by('id', "desc");
        $query = $this->db->get()->result();
        return $query;
    }
    public function get_user_edit($id) {
        $query = '';
        $this->db->select('*');
        $this->db->from('admins');
        $this->db->where('id', $id);
        $query = $this->db->get()->row();
        return $query;
    }
    
    public function get_old_password($id)
    {
        $this->db->select('password');
        $this->db->from('techics_users');
        $this->db->where('id', $id);
        $result = $this->db->get();
        $ret = $result->row();
        return $ret->password;
    }
    

}
