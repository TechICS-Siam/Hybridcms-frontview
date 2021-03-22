<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class Ressources extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Ressources_model');
        $this->load->helper('seo_helper');
        $this->load->helper('file_uploader');
    }

    public function ressources_submenu() {
        $data['model']=$this->Ressources_model->ressources_submenu_update();
        $data['models'] = $this->db->from('blog_menu_tbl')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'ressources_submenu';
        $data['page_title']     =       'ressources_submenu';
        $data['view_module']    =       'ressources';
        $this->templates->admin($data);
    }
    public function ressources_submenu_update() {
        // $result=$this->Ressources_model->ressources_submenu_update();
        $data = array(
            'title'                  =>  $this->input->post('title'),
            'description'            =>  $this->input->post('description')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('blog_info', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/ressources/ressources-submenu');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/ressources/ressources-submenu');
        }
    } 

    public function product_features() {
        
        $data['model']=$this->Ressources_model->product_features_one_update();
        $data['models'] = $this->db->from('blog_menu_tbl')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'ressources';
        $data['page_title']     =       'ressources';
        $data['view_module']    =       'ressources';
        $this->templates->admin($data);
    }
    public function product_features_one_update() {
        // $result=$this->Ressources_model->product_features_one_update();
        $data = array(
            'title'                  =>  $this->input->post('title'),
            'description'            =>  $this->input->post('description')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('blog_info', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/ressources/product-features');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/ressources/product-features');
        }
    } 

    public function product_features_create() {
        // View File
        
        $data['view_file']      =       "ressources-create";
        $data['page_title']     =       'blog Create';
        $data['view_module']    =       'ressources';
        $this->templates->admin($data);
    }

    public function product_features_store() {

        $data = array(
            'fb_url'                  =>  $this->input->post('fb_url'),
            'tw_url'                  =>  $this->input->post('tw_url'),
            'insta_url'               =>  $this->input->post('insta_url'),
            'description'             =>  $this->input->post('description'),
            'alt_tag'                 =>  $this->input->post('alt_tag'),
            'status'                  =>  $this->input->post('status')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('alt_tag'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('blog_menu_tbl', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/ressources/product-features');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/ressources/product-features');
        }
    }

    public function product_features_edit($id) {
        $model = $this->Ressources_model->blog_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "ressources-edit";
        $data['page_title']     =       'Update blog';
        $data['view_module']    =       'ressources';
        $this->templates->admin($data);
    }

    public function product_features_update($id) {
        
        $data = array (
            'fb_url'                  =>  $this->input->post('fb_url'),
            'tw_url'                  =>  $this->input->post('tw_url'),
            'insta_url'               =>  $this->input->post('insta_url'),
            'description'             =>  $this->input->post('description'),
            'alt_tag'                 =>  $this->input->post('alt_tag'),
            'status'                  =>  $this->input->post('status')

        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('alt_tag'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Ressources_model->blog_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/ressources/product-features');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/ressources/product-features');
        }
 
    }

    public function product_features_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('blog_menu_tbl');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/ressources/product-features');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/ressources/product-features');
        }
    }
    
}


