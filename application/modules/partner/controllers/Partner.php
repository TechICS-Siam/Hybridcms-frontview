<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class Partner extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Partner_model');
        $this->load->helper('seo_helper');
        $this->load->helper('file_uploader');
    }

    public function partner() {
        $data['model_first']=$this->Partner_model->partner_first_update();
        $data['models_one'] = $this->db->from('partner_sec_one')->order_by('id', 'DESC')->get()->result();
        $data['model_second']=$this->Partner_model->partner_second_update();
        $data['models_two'] = $this->db->from('partner_sec_two')->order_by('id', 'DESC')->get()->result();
        $data['model_third']=$this->Partner_model->partner_third_update();
        $data['models_three'] = $this->db->from('partner_sec_three')->order_by('id', 'DESC')->get()->result();
        $data['model_fourth']=$this->Partner_model->partner_fourth_update();
        $data['models_four'] = $this->db->from('partner_sec_four')->order_by('id', 'DESC')->get()->result();
        $data['model_fifth']=$this->Partner_model->partner_fifth_update();
        $data['models_five'] = $this->db->from('partner_sec_five')->order_by('id', 'DESC')->get()->result();
        $data['model_sixth']=$this->Partner_model->partner_sixth_update();
        $data['models_six'] = $this->db->from('partner_sec_six')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'partner';
        $data['page_title']     =       'partner';
        $data['view_module']    =       'partner';
        $this->templates->admin($data);
    }
    public function partner_first_update() {
        // $result=$this->Partner_model->partner_first_update();
        $data = array(
            'title_one'                  =>  $this->input->post('title_one'),
            'des_one'                    =>  $this->input->post('des_one')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('partner_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    } 

       
    public function partner_one_create() {
        // View File
        
        $data['view_file']      =       "partner-one-create";
        $data['page_title']     =       'partner Create';
        $data['view_module']    =       'partner';
        $this->templates->admin($data);
    }

    public function partner_one_store() {

        $data = array(
            'title'                  =>  $this->input->post('title'),
            'description'             =>  $this->input->post('description'),
            'status'                  =>  $this->input->post('status')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('partner_sec_one', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    }

    public function partner_one_edit($id) {
        $model = $this->Partner_model->partner_one_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "partner-one-edit";
        $data['page_title']     =       'Update partner';
        $data['view_module']    =       'partner';
        $this->templates->admin($data);
    }

    public function partner_one_update($id) {
        
        $data = array (
            'title'                   =>  $this->input->post('title'),
            'description'             =>  $this->input->post('description'),
            'status'                  =>  $this->input->post('status')

        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Partner_model->partner_one_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
 
    }

    public function partner_one_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('partner_sec_one');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/partner');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    }

    public function partner_second_update() {
        // $result=$this->Partner_model->partner_second_update();
        $data = array(
            'title_two'                  =>  $this->input->post('title_two'),
            'des_two'                    =>  $this->input->post('des_two')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('partner_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    } 

       
    public function partner_two_create() {
        // View File
        
        $data['view_file']      =       "partner-two-create";
        $data['page_title']     =       'partner Create';
        $data['view_module']    =       'partner';
        $this->templates->admin($data);
    }

    public function partner_two_store() {

        $data = array(
            'title'                  =>  $this->input->post('title'),
            'description'             =>  $this->input->post('description'),
            'status'                  =>  $this->input->post('status')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('partner_sec_two', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    }

    public function partner_two_edit($id) {
        $model = $this->Partner_model->partner_two_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "partner-two-edit";
        $data['page_title']     =       'Update partner';
        $data['view_module']    =       'partner';
        $this->templates->admin($data);
    }

    public function partner_two_update($id) {
        
        $data = array (
            'title'                   =>  $this->input->post('title'),
            'description'             =>  $this->input->post('description'),
            'status'                  =>  $this->input->post('status')

        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Partner_model->partner_two_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
 
    }

    public function partner_two_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('partner_sec_two');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/partner');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    }
    public function partner_third_update() {
        // $result=$this->Partner_model->partner_third_update();
        $data = array(
            'title_three'                  =>  $this->input->post('title_three')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('partner_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    } 

       
    public function partner_three_create() {
        // View File
        
        $data['view_file']      =       "partner-three-create";
        $data['page_title']     =       'partner Create';
        $data['view_module']    =       'partner';
        $this->templates->admin($data);
    }

    public function partner_three_store() {

        $data = array(
            'dp_name'                  =>  $this->input->post('dp_name'),
            'address'                  =>  $this->input->post('address'),
            'short_des'                =>  $this->input->post('short_des'),
            'status'                   =>  $this->input->post('status')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('dp_name'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('partner_sec_three', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    }

    public function partner_three_edit($id) {
        $model = $this->Partner_model->partner_three_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "partner-three-edit";
        $data['page_title']     =       'Update partner';
        $data['view_module']    =       'partner';
        $this->templates->admin($data);
    }

    public function partner_three_update($id) {
        
        $data = array (
            'dp_name'                  =>  $this->input->post('dp_name'),
            'address'                  =>  $this->input->post('address'),
            'short_des'                =>  $this->input->post('short_des'),
            'status'                   =>  $this->input->post('status')

        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('dp_name'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Partner_model->partner_three_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
 
    }

    public function partner_three_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('partner_sec_three');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/partner');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    }


    public function partner_fourth_update() {
        // $result=$this->Partner_model->partner_fourth_update();
        $data = array(
            'title_four'                  =>  $this->input->post('title_four')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('partner_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    } 

       
    public function partner_four_create() {
        // View File
        
        $data['view_file']      =       "partner-four-create";
        $data['page_title']     =       'partner Create';
        $data['view_module']    =       'partner';
        $this->templates->admin($data);
    }

    public function partner_four_store() {

        $data = array(
            'rating'                  =>  $this->input->post('rating'),
            'status'                  =>  $this->input->post('status')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('rating'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('partner_sec_four', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    }

    public function partner_four_edit($id) {
        $model = $this->Partner_model->partner_four_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "partner-four-edit";
        $data['page_title']     =       'Update partner';
        $data['view_module']    =       'partner';
        $this->templates->admin($data);
    }

    public function partner_four_update($id) {
        
        $data = array (
            'rating'                  =>  $this->input->post('rating'),
            'status'                  =>  $this->input->post('status')

        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Partner_model->partner_four_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
 
    }

    public function partner_four_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('partner_sec_four');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/partner');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    }


    public function partner_fifth_update() {
        // $result=$this->Partner_model->partner_fiveth_update();
        $data = array(
            'title_five'                  =>  $this->input->post('title_five')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('partner_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    } 

       
    public function partner_five_create() {
        // View File
        
        $data['view_file']      =       "partner-five-create";
        $data['page_title']     =       'partner Create';
        $data['view_module']    =       'partner';
        $this->templates->admin($data);
    }

    public function partner_five_store() {

        $data = array(
            'status'                  =>  $this->input->post('status')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('status'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('partner_sec_five', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    }

    public function partner_five_edit($id) {
        $model = $this->Partner_model->partner_five_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "partner-five-edit";
        $data['page_title']     =       'Update partner';
        $data['view_module']    =       'partner';
        $this->templates->admin($data);
    }

    public function partner_five_update($id) {
        
        $data = array (
            'status'                  =>  $this->input->post('status')

        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Partner_model->partner_five_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
 
    }

    public function partner_five_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('partner_sec_five');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/partner');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    }


    public function partner_sixth_update() {
        // $result=$this->Partner_model->partner_sixth_update();
        $data = array(
            'title_six'                       =>  $this->input->post('title_six'),
            'button_text_one'                 =>  $this->input->post('button_text_one'),
            'button_url_one'                  =>  $this->input->post('button_url_one'),
            'button_text_two'                 =>  $this->input->post('button_text_two'),
            'button_url_two'                  =>  $this->input->post('button_url_two')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('partner_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    } 

       
    public function partner_six_create() {
        // View File
        
        $data['view_file']      =       "partner-six-create";
        $data['page_title']     =       'partner Create';
        $data['view_module']    =       'partner';
        $this->templates->admin($data);
    }

    public function partner_six_store() {

        $data = array(
            'title'                  =>  $this->input->post('title'),
            'main_title'             =>  $this->input->post('main_title'),
            'dp_name'             =>  $this->input->post('dp_name'),
            'button_text'             =>  $this->input->post('button_text'),
            'button_url'             =>  $this->input->post('button_url'),
            'status'                  =>  $this->input->post('status')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }

        
        if(isset($_FILES['dp_image']['name']) && $_FILES['dp_image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','dp_image', $title ,'*');
            $data['dp_image'] = $photo;
        }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('partner_sec_six', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    }

    public function partner_six_edit($id) {
        $model = $this->Partner_model->partner_six_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "partner-six-edit";
        $data['page_title']     =       'Update partner';
        $data['view_module']    =       'partner';
        $this->templates->admin($data);
    }

    public function partner_six_update($id) {
        
        $data = array (
            'title'                  =>  $this->input->post('title'),
            'main_title'             =>  $this->input->post('main_title'),
            'dp_name'             =>  $this->input->post('dp_name'),
            'button_text'             =>  $this->input->post('button_text'),
            'button_url'             =>  $this->input->post('button_url'),
            'status'                  =>  $this->input->post('status')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
        if(isset($_FILES['dp_image']['name']) && $_FILES['dp_image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','dp_image', $title ,'*');
            $data['dp_image'] = $photo;
        }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Partner_model->partner_six_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/partner');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
 
    }

    public function partner_six_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('partner_sec_six');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/partner');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/partner');
        }
    }

}


