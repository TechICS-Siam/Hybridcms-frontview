<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class Company extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Company_model');
        $this->load->helper('seo_helper');
        $this->load->helper('file_uploader');
    }

    public function company_submenu() {
        $data['model']=$this->Company_model->company_submenu_update();
        $data['models'] = $this->db->from('webinar_tbl')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'company_submenu';
        $data['page_title']     =       'company_submenu';
        $data['view_module']    =       'company';
        $this->templates->admin($data);
    }
    public function company_submenu_update() {
        // $result=$this->Company_model->blog_info_update();
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
        $result = $this->db->update('company_menu', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/company/company-submenu');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/company/company-submenu');
        }
    } 

    public function customer_stories() {
        
        $data['models'] = $this->db->from('customer_stories')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'customer-stories';
        $data['page_title']     =       'company';
        $data['view_module']    =       'company';
        $this->templates->admin($data);
    }
    // public function customer_stories_one_update() {
    //     // $result=$this->Company_model->customer_stories_one_update();
    //     $data = array(
    //         'title'                  =>  $this->input->post('title'),
    //         'description'            =>  $this->input->post('description')
    //     );

    //     // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
    //     //     $title = seo_friendly_string($this->input->post('name'));
    //     //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
    //     //     $data['image'] = $photo;
    //     // }
         
    //     // $data['model']=$result;
    //     // $this->loadViews("model", $this->global, NULL);
    //     $this->db->where('id', '1');
    //     $result = $this->db->update('blog_info', $data);

    //     if($result) {
    //         $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
    //         redirect('admin/company/customer-stories');
    //     } else {
    //         $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
    //         redirect('admin/company/customer-stories');
    //     }
    // } 

    public function customer_stories_create() {
        // View File
        
        $data['view_file']      =       "customer-stories-create";
        $data['page_title']     =       'blog Create';
        $data['view_module']    =       'company';
        $this->templates->admin($data);
    }

    public function customer_stories_store() {

        $data = array(
            'title'                 =>  $this->input->post('title'),
            'quotes'                =>  $this->input->post('quotes'),
            'button_text'           =>  $this->input->post('button_text'),
            'button_url'            =>  $this->input->post('button_url'),
            'status'                =>  $this->input->post('status'),
            'date'                  =>  $this->input->post('date')    	
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
    
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('customer_stories', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/company/customer-stories');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/company/customer-stories');
        }
    }

    public function customer_stories_edit($id) {
        $model = $this->Company_model->customer_stories_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "customer-stories-edit";
        $data['page_title']     =       'Update blog';
        $data['view_module']    =       'company';
        $this->templates->admin($data);
    }

    public function customer_stories_update($id) {
        
        $data = array(
            'title'                 =>  $this->input->post('title'),
            'quotes'                =>  $this->input->post('quotes'),
            'button_text'           =>  $this->input->post('button_text'),
            'button_url'            =>  $this->input->post('button_url'),
            'status'                =>  $this->input->post('status'),
            'date'                  =>  $this->input->post('date')    	
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
    
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('customer_stories', $data);
        $result = $this->Company_model->customer_stories_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/company/customer-stories');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/company/customer-stories');
        }
 
    }

    public function customer_stories_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('customer_stories');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/company/customer-stories');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/company/customer-stories');
        }
    }
   
    public function webinars() {
        
        $data['models'] = $this->db->from('webinar_tbl')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'webinars';
        $data['page_title']     =       'webinars';
        $data['view_module']    =       'company';
        $this->templates->admin($data);
    }
    public function webinars_one_update() {
        // $result=$this->Company_model->blog_info_update();
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
        $result = $this->db->update('webinar_tbl', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/company/company-submenu');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/company/company-submenu');
        }
    } 

    public function webinars_create() {
        // View File
        
        $data['view_file']      =       "webinars-create";
        $data['page_title']     =       'blog Create';
        $data['view_module']    =       'company';
        $this->templates->admin($data);
    }

    public function webinars_store() {

        $data = array(
            'tag'                    =>  $this->input->post('tag'),
            'title'                  =>  $this->input->post('title'),
            'short_des'              =>  $this->input->post('short_des'),
            'button_text'            =>  $this->input->post('button_text'),
            'button_url'             =>  $this->input->post('button_url'),
            'status'                 =>  $this->input->post('status')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('webinar_tbl', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/company/webinars');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/company/webinars');
        }
    }

    public function webinars_edit($id) {
        $model = $this->Company_model->webinars_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "webinars-edit";
        $data['page_title']     =       'Update blog';
        $data['view_module']    =       'company';
        $this->templates->admin($data);
    }

    public function webinars_update($id) {
        
        $data = array (
            'tag'                    =>  $this->input->post('tag'),
            'title'                  =>  $this->input->post('title'),
            'short_des'              =>  $this->input->post('short_des'),
            'button_text'            =>  $this->input->post('button_text'),
            'button_url'             =>  $this->input->post('button_url'),
            'status'                 =>  $this->input->post('status')

        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('alt_tag'));
        //     $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('webinar_tbl', $data);
        $result = $this->Company_model->webinars_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/company/webinars');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/company/webinars');
        }
 
    }

    public function webinars_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('webinar_tbl');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/company/webinars');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/company/webinars');
        }
    }  
}


