<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Templates_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_user_p($id) {
        $this->db->select('*');
        $this->db->from('admins');
        $this->db->where('id', $id);
        $result = $this->db->get()->row();
        return $result;
    }

}
