<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class Pricing extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Pricing_model');
        $this->load->helper('seo_helper');
        $this->load->helper('file_uploader');
    }

    public function pricing_submenu() {
        $data['model']=$this->Pricing_model->pricing_submenu_update();
        $data['models'] = $this->db->from('blog_menu_tbl')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'pricing_submenu';
        $data['page_title']     =       'pricing_submenu';
        $data['view_module']    =       'pricing';
        $this->templates->admin($data);
    }
    public function pricing_submenu_update() {
        // $result=$this->Pricing_model->blog_info_update();
        $data = array(
            'title'                        =>  $this->input->post('title'),
            'servs_title'                  =>  $this->input->post('servs_title'),
            'short_des'                    =>  $this->input->post('short_des'),
            'button_text'                  =>  $this->input->post('button_text'),
            'button_url'                   =>  $this->input->post('button_url')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('pricing_menu', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/pricing/pricing-submenu');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/pricing/pricing-submenu');
        }
    } 

    public function pricing_sub() {
        
        $data['model']=$this->Pricing_model->pricing_sub_top_update();
        $data['model_one']=$this->Pricing_model->pricing_sub_one_update();
        $data['models'] = $this->db->from('pricing_sub_tbl')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'pricing';
        $data['page_title']     =       'pricing';
        $data['view_module']    =       'pricing';
        $this->templates->admin($data);
    }
    public function pricing_sub_top_update() {
        // $result=$this->Pricing_model->blog_info_update();
        $data = array(
            'title'                        =>  $this->input->post('title'),
            'short_des'                    =>  $this->input->post('short_des'),
            'card_title'                    =>  $this->input->post('card_title'),
            'description'                  =>  $this->input->post('description')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('pricing_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/pricing/pricing-sub');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/pricing/pricing-sub');
        }
    } 
    public function pricing_sub_one_update() {
        // $result=$this->Pricing_model->blog_info_update();
        $data = array(
            'title_two'                        =>  $this->input->post('title_two'),
            'description_two'                  =>  $this->input->post('description_two')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('title'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('pricing_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/pricing/pricing-sub');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/pricing/pricing-sub');
        }
    } 
    public function pricing_sub_create() {
        // View File
        
        $data['view_file']      =       "pricing-sub-create";
        $data['page_title']     =       'blog Create';
        $data['view_module']    =       'pricing';
        $this->templates->admin($data);
    }

    public function pricing_sub_store() {
        $features = implode('??', $this->input->post('features'));
        $data = array(
            'icon'              =>  $this->input->post('icon'),
            'title'             =>  $this->input->post('title'),
            'feature_title'     =>  $this->input->post('feature_title'),
            'status'            =>  $this->input->post('status'),
            'button_text'       =>  $this->input->post('button_text'),
            'button_url'        =>  $this->input->post('button_url'),
            'button_open'       =>  $this->input->post('button_open'),
            'description'       =>  $this->input->post('description'),
            'features'          =>  $features
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('alt_tag'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('pricing_sub_tbl', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/pricing/pricing-sub');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/pricing/pricing-sub');
        }
    }

    public function pricing_sub_edit($id) {
        $model = $this->Pricing_model->pricing_sub_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "pricing-sub-edit";
        $data['page_title']     =       'Update blog';
        $data['view_module']    =       'pricing';
        $this->templates->admin($data);
    }

    public function pricing_sub_update($id) {
        
        $data = array(
            'icon'              =>  $this->input->post('icon'),
            'title'             =>  $this->input->post('title'),
            'feature_title'     =>  $this->input->post('feature_title'),
            'status'            =>  $this->input->post('status'),
            'button_text'       =>  $this->input->post('button_text'),
            'button_url'        =>  $this->input->post('button_url'),
            'button_open'       =>  $this->input->post('button_open'),
            'description'       =>  $this->input->post('description'),
            'features'          =>  $features
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('alt_tag'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Pricing_model->pricing_sub_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/pricing/pricing-sub');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/pricing/pricing-sub');
        }
 
    }

    public function pricing_sub_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('pricing_sub_tbl');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/pricing/pricing-sub');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/pricing/pricing-sub');
        }
    }
    
}


