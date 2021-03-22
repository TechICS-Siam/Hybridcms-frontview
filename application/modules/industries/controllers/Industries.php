<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class Industries extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Industries_model');
        $this->load->helper('seo_helper');
        $this->load->helper('file_uploader');
    }

    public function industries_submenu() {
        $data['model']=$this->Industries_model->industries_submenu_update();
        $data['models'] = $this->db->from('blog_menu_tbl')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'industries_submenu';
        $data['page_title']     =       'industries_submenu';
        $data['view_module']    =       'industries';
        $this->templates->admin($data);
    }
    public function industries_submenu_update() {
        // $result=$this->Industries_model->blog_info_update();
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
        $result = $this->db->update('industries_menu', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/industries/industries-submenu');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/industries-submenu');
        }
    } 

    public function investor_relation() {
        
        $data['model']=$this->Industries_model->investor_relation_top_update();
        $data['model_two']=$this->Industries_model->investor_relation_first_update();
        $data['models'] = $this->db->from('investor_relation_one')->order_by('id', 'DESC')->get()->result();
        $data['model_three']=$this->Industries_model->investor_relation_second_update();
        $data['models_two'] = $this->db->from('investor_relation_two')->order_by('id', 'DESC')->get()->result();
        $data['model_four']=$this->Industries_model->investor_relation_third_update();
        $data['models_three'] = $this->db->from('investor_relation_three')->order_by('id', 'DESC')->get()->result();
 
       
        // View File
        $data['view_file']      =       'investor-relation';
        $data['page_title']     =       'investor-relation';
        $data['view_module']    =       'industries';
        $this->templates->admin($data);
    }

    public function investor_relation_top_update() {
        // $result=$this->Industries_model->blog_info_update();
        $data = array(
            'heading'                  =>  $this->input->post('heading'),
            'short_des'                =>  $this->input->post('short_des'),
            'button_one'               =>  $this->input->post('button_one'),
            'button_one_url'           =>  $this->input->post('button_one_url'),
            'button_two'               =>  $this->input->post('button_two'),
            'button_two_url'           =>  $this->input->post('button_two_url'),
            'button_three'             =>  $this->input->post('button_three'),
            'button_three_url'         =>  $this->input->post('button_three_url'),
            'button_four'              =>  $this->input->post('button_four'),
            'button_four_url'          =>  $this->input->post('button_four_url'),
            'project_title'            =>  $this->input->post('project_title'),
            'project_short_des'        =>  $this->input->post('project_short_des'),
            'middle_des'                =>  $this->input->post('middle_des')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('heading'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }

        if(isset($_FILES['file_one']['name']) && $_FILES['file_one']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo =  uploadFileWithCustomName('uploads/sub_menu','file_one', $title ,'*');
            $data['file_one'] = $photo;
        }
      
        if(isset($_FILES['file_two']['name']) && $_FILES['file_two']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo =  uploadFileWithCustomName('uploads/sub_menu','file_two', $title ,'*');
            $data['file_two'] = $photo;

        }
       
        if(isset($_FILES['file_three']['name']) && $_FILES['file_three']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo =  uploadFileWithCustomName('uploads/sub_menu','file_three', $title ,'*');
            $data['file_three'] = $photo;

        }

        if(isset($_FILES['file_four']['name']) && $_FILES['file_four']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo =  uploadFileWithCustomName('uploads/sub_menu','file_four', $title ,'*');
            $data['file_four'] = $photo;
         }

        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('investor_relation_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/industries/investor-relation');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/investor-relation');
        }
    } 
    public function investor_relation_first_update() {
        // $result=$this->Industries_model->blog_info_update();
        $data = array(
            'title_two'                  =>  $this->input->post('title_two')
        );
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('investor_relation_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/industries/investor-relation');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/investor-relation');
        }
    } 
    public function investor_relation_one_create() {
        // View File
        
        $data['view_file']      =       "investor-relation-one-create";
        $data['page_title']     =       'investor-relation Create';
        $data['view_module']    =       'industries';
        $this->templates->admin($data);
    }

    public function investor_relation_one_store() {

        $data = array(
            'title'                       =>  $this->input->post('title'),
            'short_des'                   =>  $this->input->post('short_des'),
            'short_des_url'               =>  $this->input->post('short_des_url'),
            'status'                      =>  $this->input->post('status')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('investor_relation_one', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/industries/investor-relation');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/investor-relation');
        }
    }

    public function investor_relation_one_edit($id) {
        $model = $this->Industries_model->investor_relation_one_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "investor-relation-one-edit";
        $data['page_title']     =       'Update investor-relation';
        $data['view_module']    =       'industries';
        $this->templates->admin($data);
    }

    public function investor_relation_one_update($id) {
        
        $data = array (
            'title'                      =>  $this->input->post('title'),
            'short_des'                  =>  $this->input->post('short_des'),
            'short_des_url'              =>  $this->input->post('short_des_url'),
            'status'                     =>  $this->input->post('status')

        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Industries_model->investor_relation_one_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/industries/investor-relation');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/investor-relation');
        }
 
    }

    public function investor_relation_one_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('investor_relation_one');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/industries/investor-relation');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/investor-relation');
        }
    }

    public function investor_relation_second_update() {
        // $result=$this->Industries_model->blog_info_update();
        $data = array(
            'title_three'                  =>  $this->input->post('title_three')
        );
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('investor_relation_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/industries/investor-relation');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/investor-relation');
        }
    } 
    public function investor_relation_two_create() {
        // View File
        
        $data['view_file']      =       "investor-relation-two-create";
        $data['page_title']     =       'investor-relation Create';
        $data['view_module']    =       'industries';
        $this->templates->admin($data);
    }

    public function investor_relation_two_store() {

        $data = array(
            'title'                      =>  $this->input->post('title'),
            'short_des'                  =>  $this->input->post('short_des'),
            'short_des_url'              =>  $this->input->post('short_des_url'),
            'button_text'                =>  $this->input->post('button_text'),
            'button_url'                 =>  $this->input->post('button_url'),
            'status'                     =>  $this->input->post('status')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('alt_tag'));
        //     $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('investor_relation_two', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/industries/investor-relation');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/investor-relation');
        }
    }

    public function investor_relation_two_edit($id) {
        $model = $this->Industries_model->investor_relation_two_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "investor-relation-two-edit";
        $data['page_title']     =       'Update investor-relation';
        $data['view_module']    =       'industries';
        $this->templates->admin($data);
    }

    public function investor_relation_two_update($id) {
        
        $data = array (
            'title'                      =>  $this->input->post('title'),
            'short_des'                  =>  $this->input->post('short_des'),
            'short_des_url'              =>  $this->input->post('short_des_url'),
            'button_text'                =>  $this->input->post('button_text'),
            'button_url'                 =>  $this->input->post('button_url'),
            'status'                     =>  $this->input->post('status')

        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('alt_tag'));
        //     $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Industries_model->investor_relation_two_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/industries/investor-relation');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/investor-relation');
        }
 
    }

    public function investor_relation_two_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('investor_relation_two');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/industries/investor-relation');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/investor-relation');
        }
    }


    public function investor_relation_third_update() {
        // $result=$this->Industries_model->blog_info_update();
        $data = array(
            'title_four'                  =>  $this->input->post('title_four')
        );
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('investor_relation_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/industries/investor-relation');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/investor-relation');
        }
    } 
    public function investor_relation_three_create() {
        // View File
        
        $data['view_file']      =       "investor-relation-three-create";
        $data['page_title']     =       'investor-relation Create';
        $data['view_module']    =       'industries';
        $this->templates->admin($data);
    }

    public function investor_relation_three_store() {

        $data = array(
            'tag'                      =>  $this->input->post('tag'),
            'tag_url'                  =>  $this->input->post('tag_url'),
            'status'                   =>  $this->input->post('status')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('alt_tag'));
        //     $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('investor_relation_three', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/industries/investor-relation');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/investor-relation');
        }
    }

    public function investor_relation_three_edit($id) {
        $model = $this->Industries_model->investor_relation_three_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "investor-relation-three-edit";
        $data['page_title']     =       'Update investor-relation';
        $data['view_module']    =       'industries';
        $this->templates->admin($data);
    }

    public function investor_relation_three_update($id) {
        
        $data = array (
            'tag'                      =>  $this->input->post('tag'),
            'tag_url'                  =>  $this->input->post('tag_url'),
            'status'                   =>  $this->input->post('status')

        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('alt_tag'));
        //     $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Industries_model->investor_relation_three_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/industries/investor-relation');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/investor-relation');
        }
 
    }

    public function investor_relation_three_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('investor_relation_three');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/industries/investor-relation');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/investor-relation');
        }
    }



    public function newsroom() {
        
        $data['model'] = $this->Industries_model->newsroom_top_update();
        $data['models'] = $this->db->from('news_main_tbl')->order_by('id', 'DESC')->get()->result();
        $data['models_two'] = $this->db->from('news_sub_tbl')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'newsroom';
        $data['page_title']     =       'newsroom';
        $data['view_module']    =       'industries';
        $this->templates->admin($data);
    }
    public function newsroom_top_update() {

        $data = array(
            'title'                  =>  $this->input->post('title')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('newsroom_info', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/industries/newsroom');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/newsroom');
        }
    } 

    public function newsroom_one_create() {
        // View File
        
        $data['view_file']      =       "newsroom-one-create";
        $data['page_title']     =       'blog Create';
        $data['view_module']    =       'industries';
        $this->templates->admin($data);
    }

    public function newsroom_one_store() {

        $data = array(
            'heading'                  =>  $this->input->post('heading'),
            'description'             =>  $this->input->post('description'),
            'button_text'                  =>  $this->input->post('button_text'),
            'button_url'               =>  $this->input->post('button_url'),
            'status'                  =>  $this->input->post('status')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('alt_tag'));
        //     $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('news_main_tbl', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/industries/newsroom');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/newsroom');
        }
    }

    public function newsroom_one_edit($id) {
        $model = $this->Industries_model->newsroom_one_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "newsroom-one-edit";
        $data['page_title']     =       'Update blog';
        $data['view_module']    =       'industries';
        $this->templates->admin($data);
    }

    public function newsroom_one_update($id) {
        
        $data = array (
            'heading'                  =>  $this->input->post('heading'),
            'description'             =>  $this->input->post('description'),
            'button_text'                  =>  $this->input->post('button_text'),
            'button_url'               =>  $this->input->post('button_url'),
            'status'                  =>  $this->input->post('status')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('alt_tag'));
        //     $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Industries_model->newsroom_one_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/industries/newsroom');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/newsroom');
        }
 
    }

    public function newsroom_one_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('news_main_tbl');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/industries/newsroom');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/newsroom');
        }
    }  

    public function newsroom_two_create() {
        // View File
        
        $data['view_file']      =       "newsroom-two-create";
        $data['page_title']     =       'blog Create';
        $data['view_module']    =       'industries';
        $this->templates->admin($data);
    }

    public function newsroom_two_store() {

        $data = array(
            'title'                  =>  $this->input->post('title'),
            'short_des'                  =>  $this->input->post('short_des'),
            'short_des_url'               =>  $this->input->post('short_des_url'),
            'status'                  =>  $this->input->post('status')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('alt_tag'));
        //     $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('news_sub_tbl', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/industries/newsroom');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/newsroom');
        }
    }

    public function newsroom_two_edit($id) {
        $model = $this->Industries_model->newsroom_two_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "newsroom-two-edit";
        $data['page_title']     =       'Update blog';
        $data['view_module']    =       'industries';
        $this->templates->admin($data);
    }

    public function newsroom_two_update($id) {
        
        $data = array (
            'title'                  =>  $this->input->post('title'),
            'short_des'                  =>  $this->input->post('short_des'),
            'short_des_url'               =>  $this->input->post('short_des_url'),
            'status'                  =>  $this->input->post('status')

        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('alt_tag'));
        //     $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Industries_model->newsroom_two_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/industries/newsroom');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/newsroom');
        }
 
    }

    public function newsroom_two_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('news_sub_tbl');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/industries/newsroom');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/industries/newsroom');
        }
    }  
}


