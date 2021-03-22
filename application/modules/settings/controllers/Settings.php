<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->module('templates');
        $this->load->helper('file_uploader');
    }

    public function software_settings()
    {
        $query = $this->db->get_where('library', array('id' => '1'))->row();

        if($query) {
            $data['logo']       = $query->logo;
            $data['favicon']    = $query->favicon;
            $data['telephone'] = $query->telephone;
            $data['email']     = $query->email;
            $data['button_text'] = $query->button_text;
            $data['button_url']     = $query->button_url;
        } else {
            $data['logo']       = '';
            $data['favicon']    = '';
            $data['telephone'] = '';
            $data['email']     = '';
            $data['button_text'] = '';
            $data['button_url']     = '';
        }

        $data['view_file'] = "software-settings";
        $data['page_title'] = 'Software Settings';
        $data['view_module'] = 'settings';
        $this->templates->admin($data);
    }

    public function update_software_settings() {
        //$query = $this->db->get_where('library', array('id' => '1'))->row();
        $telephone       = $this->security->xss_clean($this->input->post('telephone'));
        $email      = $this->security->xss_clean($this->input->post('email'));
        $button_text       = $this->security->xss_clean($this->input->post('button_text'));
        $button_url      = $this->security->xss_clean($this->input->post('button_url'));
        $queryData = array
        (      
            'telephone'              =>  $telephone,
            'email'                  =>  $email,
            'button_text'            =>  $button_text,
            'button_url'             =>  $button_url,
        
        );
        $this->load->helper('image_exception');
        // $queryData = [];
       

        if(isset($_FILES['logo']['name']) && $_FILES['logo']['name'] != '') {

            // image width = 625px
            // image height = 415px
            // image size = 20KB
            image_exception($_FILES['logo']['tmp_name'], 625, 415, 20, 'consultation-page-info');

            $title = 'hybrid-cms-logo';
            $photo =  uploadFileWithCustomName('uploads/','logo', $title ,'*');
            $queryData['logo'] = $photo;
        }


        if(isset($_FILES['favicon']['name']) && $_FILES['favicon']['name'] != '') {
            // image width = 625px
            // image height = 415px
            // image size = 20KB
            image_exception($_FILES['favicon']['tmp_name'], 625, 415, 20, 'consultation-page-info');

            $title = 'hybrid-cms-favicon';
            $photo =  uploadFileWithCustomName('uploads/','favicon', $title ,'*');
            $queryData['favicon'] = $photo;
        }

        // echo '<pre>';print_r($queryData);exit();

        // $this->db->where('id', 1);
        // $result = $this->db->update('library', $queryData);
        $result = $this->db->update('library',$queryData,'id=1');

        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/settings/software-settings');
        } else {
            $this->session->set_flashdata('warning', 'Failed!!!');
            redirect('admin/settings/software-settings');
        }


    }

    public function social_settings() {
        $query = $this->db->get_where('library', array('id' => '1'))->row();

        if($query) {
            $data['facebook'] = $query->facebook;
            $data['twitter'] = $query->twitter;
            $data['linkedin'] = $query->linkedin;
            $data['youtube'] = $query->youtube;
            $data['footer_title'] = $query->footer_title;
        } else {
            $data['facebook'] = '';
            $data['twitter'] = '';
            $data['linkedin'] = '';
            $data['youtube'] = '';
            $data['footer_title'] = '';
        }

        $data['view_file'] = "social-settings";
        $data['page_title'] = 'Software Settings';
        $data['view_module'] = 'settings';
        $this->templates->admin($data);
    }

    public function update_social_settings() {
        $query = $this->db->get_where('library', array('id' => '1'));

        $facebook           = $this->security->xss_clean($this->input->post('facebook'));
        $twitter            = $this->security->xss_clean($this->input->post('twitter'));
        $linkedin           = $this->security->xss_clean($this->input->post('linkedin'));
        $youtube            = $this->security->xss_clean($this->input->post('youtube'));
        $footer_title       = $this->security->xss_clean($this->input->post('footer_title'));



        $queryData = array(

            'facebook'            =>  $facebook,
            'twitter'             =>  $twitter,
            'linkedin'            =>  $linkedin,
            'youtube'             =>  $youtube,
            'footer_title'        =>  $footer_title,
            
        );

        // echo '<pre>';print_r($queryData);exit();

        $this->db->where('id', 1);
        $result = $this->db->update('library', $queryData);


        $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
        redirect('admin/settings/social-settings');
    }

    public function admin_login() {
        $query = $this->db->get_where('admin_login_page', array('id' => '1'))->row();

        if($query) {
            $data['main_image']                             = $query->main_image;
            $data['header']                                 = $query->header;
            $data['email_username_label_text']              = $query->email_username_label_text;
            $data['email_username_input_field_placeholder'] = $query->email_username_input_field_placeholder;
            $data['password_label_text']                    = $query->password_label_text;
            $data['password_input_field_placeholder']       = $query->password_input_field_placeholder;
            $data['show_password_text']                     = $query->show_password_text;
            $data['hide_password_text']                     = $query->hide_password_text;
            $data['button_text']                            = $query->button_text;
            $data['footer_text']                            = $query->footer_text;
        } else {
            $data['main_image']                             = '';
            $data['header']                                 = '';
            $data['email_username_label_text']              = '';
            $data['email_username_input_field_placeholder'] = '';
            $data['password_label_text']                    = '';
            $data['password_input_field_placeholder']       = '';
            $data['show_password_text']                     = '';
            $data['hide_password_text']                     = '';
            $data['button_text']                            = '';
            $data['footer_text']                            = '';
        }

        $data['view_file']      = "admin-login-settings";
        $data['page_title']     = 'Admin Login Page Settings';
        $data['view_module']    = 'settings';
        $this->templates->admin($data);
    }

    public function update_admin_login() {
        $query = $this->db->get_where('admin_login_page', array('id' => '1'));

        $header                                     = $this->security->xss_clean($this->input->post('header'));
        $email_username_label_text                  = $this->security->xss_clean($this->input->post('email_username_label_text'));
        $email_username_input_field_placeholder     = $this->security->xss_clean($this->input->post('email_username_input_field_placeholder'));
        $password_label_text                        = $this->security->xss_clean($this->input->post('password_label_text'));
        $password_input_field_placeholder           = $this->security->xss_clean($this->input->post('password_input_field_placeholder'));
        $show_password_text                         = $this->security->xss_clean($this->input->post('show_password_text'));
        $hide_password_text                         = $this->security->xss_clean($this->input->post('hide_password_text'));
        $button_text                                = $this->security->xss_clean($this->input->post('button_text'));
        $footer_text                                = $this->security->xss_clean($this->input->post('footer_text'));

        $queryData = array(
            'header'   =>  $header,
            'email_username_label_text'  =>  $email_username_label_text,
            'email_username_input_field_placeholder'   =>  $email_username_input_field_placeholder,
            'password_label_text'   =>  $password_label_text,
            'password_input_field_placeholder'   =>  $password_input_field_placeholder,
            'show_password_text'   =>  $show_password_text,
            'hide_password_text'   =>  $hide_password_text,
            'button_text'   =>  $button_text,
            'footer_text'   =>  $footer_text
        );

        if(isset($_FILES['main_image']['name']) && $_FILES['main_image']['name'] != '') {
            $title = 'hybrid-cms-admin-panel-login-image';
            $photo =  uploadFileWithCustomName('uploads/','main_image', $title ,'*');
            $queryData['main_image'] = $photo;

            if($photo && $query->main_image != null) {
                $link = 'uploads/'. $query->main_image;
                unlink($link);
            }
        }


        $this->db->where('id', 1);
        $result = $this->db->update('admin_login_page', $queryData);


        $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
        redirect('admin/settings/administrator-login-settings');
    }
}
