<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Administrator_model');
    }

    public function index() {
        $this->templates->login();
    }
    
    public function login_credential() {

        $this->form_validation->set_rules('email_or_username', 'Email Or Username', 'trim|required|min_length[5]|max_length[25]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[25]');
        if ($this->form_validation->run() == true) {
            $email_or_username = htmlentities($this->input->post('email_or_username'));
            $password = $this->input->post('password');

            // Check Username or Email
            $admin= $this->Administrator_model->check_login_username($email_or_username);
            if(!$admin) {
                setOldValues($this->input->post());
                $this->session->set_flashdata('warning', 'Username or Email is wrong!!!');
                redirect(base_url().'administrator');
            }
            // Check Password
            $db_password = $admin->password;
            if($db_password != base64_encode($password)) {
                setOldValues($this->input->post());
                $this->session->set_flashdata('warning', 'Password is Wrong!!!');
                redirect(base_url().'administrator');
            }
            // Check status
            if($admin->status == 0) {
                $this->session->set_flashdata('warning', 'Your account is de-active!!!');
                redirect(base_url().'administrator');
            }

            $data = array(
                'username' => $admin->username,
                'email' => $admin->email,
                'photo' => $admin->photo,
                'id' => $admin->id,
                'is_logged_in' => true
            );

            $this->session->set_userdata($data);
            redirect(base_url().'dashboard');

        } else {
            setOldValues($this->input->post());
            setError($this->form_validation->error_array());
            $this->session->set_flashdata('warning', 'Failed to Submit Request!!!');
            redirect(base_url().'administrator');
        }
    }

    public function logout() {
        
        $this->session->unset_userdata('is_logged_in');
        $this->session->unset_userdata('email');
        //redirect(base_url());
	redirect(base_url().'administrator');
    }

}
