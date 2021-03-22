<?php

class Templates extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Templates_model');
        $this->load->helper('url');
    }

    function login() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if($is_logged_in) {
           redirect('dashboard');
        }

        $data['page_title'] = 'Administrator';
        $this->load->view('login', $data);
    }

    function admin($data) {

        $id = $this->session->userdata('id');
        $data['user_p'] = $this->Templates_model->get_user_p($id);
        $data['library'] = $this->db->from('library')->where('id', 1)->get()->row();
        if (!isset($data['view_module'])) {
            $data['view_module'] = $this->uri->segment(1);
        }

        $logged_in = $this->session->userdata('is_logged_in');
        if ($logged_in == 1) {
            $this->load->view('admin', $data);
        } else {
            redirect('administrator');
        }
    }
}
