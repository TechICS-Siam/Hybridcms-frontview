<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Administrator_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function check_login_username($email_or_username) {
        $this->db->select('*');
        $this->db->from('admins');
        $this->db->where('username', $email_or_username);
        $this->db->or_where('email', $email_or_username);
        $query = $this->db->get();
        $has = $query->num_rows();
        if ($has === 1) {
            $result = $query->row();
            return $result;
        } else {
            return FALSE;
        }
    }

}
