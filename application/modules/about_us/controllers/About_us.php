<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class About_us extends MX_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('About_model');
    }
    public function about() {
        $data['model']=$this->About_model->about_update();
        // // print_r($data['model']);
        // die();
        // View File
        $data['view_file']      =       'about';
        $data['page_title']     =       'about_us';
        $data['view_module']    =       'about_us';
        $this->templates->admin($data);
    }

    public function about_update() {
        $this->load->helper('seo_helper');
        $this->load->helper('file_uploader');

        $data = array (
            'heading' => $this->input->post('heading'),
            'description' => $this->input->post('description'),
            'button_one_text' => $this->input->post('button_one_text'),
            'button_one_text_url' => $this->input->post('button_one_text_url'),
            'button_two_text' => $this->input->post('button_two_text'),
            'button_two_text_url' => $this->input->post('button_two_text_url'),
            'title_one' => $this->input->post('title_one'),
            'description_one' => $this->input->post('description_one'),
            'title_two' => $this->input->post('title_two'),
            'description_two' => $this->input->post('description_two'),
            'title_three' => $this->input->post('title_three'),
            'description_three' => $this->input->post('description_three'),
            'title_three_link' => $this->input->post('title_three_link'),
            'title_three_url' => $this->input->post('title_three_url'),
            'title_snd' => $this->input->post('title_snd'),
            'description_snd' => $this->input->post('description_snd')
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
        $result = $this->db->update('about_us', $data);

        if($result) {
          
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/website-pages/about');
        } else {
       
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/website-pages/about');
        }
    }

}




