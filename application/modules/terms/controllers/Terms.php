<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class Terms extends MX_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Terms_model');
    }
    public function terms() {
        $data['model']=$this->Terms_model->terms_update();
        // // print_r($data['model']);
        // die();
        // View File
        $data['view_file']      =       'terms';
        $data['page_title']     =       'terms';
        $data['view_module']    =       'terms';
        $this->templates->admin($data);
    }

    public function terms_update() {
        $this->load->helper('seo_helper');
        $this->load->helper('file_uploader');

        $data = array (
            'heading' => $this->input->post('heading'),
            'description' => $this->input->post('description')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('heading'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }

        $this->db->where('id', '1');
        $result = $this->db->update('terms', $data);

        if($result) {
          
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/website-pages/terms');
        } else {
       
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/website-pages/terms');
        }
    }

}




