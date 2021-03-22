<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class Privacy_policy extends MX_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Privacy_policy_model');
        $this->load->helper('seo_helper');
        $this->load->helper('file_uploader');
    }
    public function privacy_policy() {
        $data['model']=$this->Privacy_policy_model->privacy_policy_update();
        // // print_r($data['model']);
        // die();
        // View File
        $data['view_file']      =       'privacy_policy';
        $data['page_title']     =       'privacy_policy';
        $data['view_module']    =       'privacy-policy';
        $this->templates->admin($data);
    }

    public function privacy_policy_update() {

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
        $result = $this->db->update('privacy_policy', $data);

        if($result) {
          
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/website-pages/privacy-policy');
        } else {
       
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/website-pages/privacy-policy');
        }
    }

}




