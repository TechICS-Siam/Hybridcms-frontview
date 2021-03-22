<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class Faq extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Faq_model');
        $this->load->helper('seo_helper');
        $this->load->helper('file_uploader');
    }

    public function faq_info() {
        $data['model']=$this->Faq_model->faq_info_update();
        $data['models'] = $this->db->from('faq_menu_tbl')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'faq';
        $data['page_title']     =       'faq';
        $data['view_module']    =       'faq';
        $this->templates->admin($data);
    }
    public function faq_info_update() {
        // $result=$this->Faq_model->faq_info_update();
        $data = array(
            'heading'                =>  $this->input->post('heading'),
            'title'                  =>  $this->input->post('title'),
            'dropdown'               =>  $this->input->post('dropdown'),
            'title_two'              =>  $this->input->post('title_two'),
            'dropdown_two'           =>  $this->input->post('dropdown_two'),
            'title_three'            =>  $this->input->post('title_three'),
            'dropdown_three'         =>  $this->input->post('dropdown_three')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('faq_info', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/website-pages/faq');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/website-pages/faq');
        }
    } 

       
    public function faq_create() {
        // View File
        
        $data['view_file']      =       "faq-create";
        $data['page_title']     =       'faq Create';
        $data['view_module']    =       'faq';
        $this->templates->admin($data);
    }

    public function faq_store() {

        $data = array(
            'menu'                 =>  $this->input->post('menu'),
            'submenu'              =>  $this->input->post('submenu'),
            'status'               =>  $this->input->post('status')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('faq_menu_tbl', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/website-pages/faq');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/website-pages/faq');
        }
    }

    public function faq_edit($id) {
        $model = $this->Faq_model->faq_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "faq-edit";
        $data['page_title']     =       'Update faq';
        $data['view_module']    =       'faq';
        $this->templates->admin($data);
    }

    public function faq_update($id) {
        
        $data = array (
            'menu'                 =>  $this->input->post('menu'),
            'submenu'              =>  $this->input->post('submenu'),
            'status'               =>  $this->input->post('status')

        );

       

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('title'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('faq', $data);
        $result = $this->Faq_model->faq_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/website-pages/faq');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/website-pages/faq');
        }
 
    }

    public function faq_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('faq_menu_tbl');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/website-pages/faq');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/website-pages/faq');
        }
    }
    
}


