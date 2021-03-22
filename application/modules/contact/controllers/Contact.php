<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class Contact extends MX_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Contact_model');
    }
    public function contact() {
        $data['model']=$this->Contact_model->contact_update();
        // // print_r($data['model']);
        // die();
        // View File
        $data['view_file']      =       'contact';
        $data['page_title']     =       'contact';
        $data['view_module']    =       'contact';
        $this->templates->admin($data);
    }

    public function contact_update() {
        $this->load->helper('seo_helper');
        $this->load->helper('file_uploader');

        $data = array (
            'heading' => $this->input->post('heading'),
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }

        if(isset($_FILES['image_snd']['name']) && $_FILES['image_snd']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image_snd', $title ,'*');
            $data['image_snd'] = $photo;
        }

        $this->db->where('id', '1');
        $result = $this->db->update('contact', $data);

        if($result) {
          
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/website-pages/contact');
        } else {
       
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/website-pages/contact');
        }
    }

}




