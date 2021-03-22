<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class Solutions extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Solutions_model');
        $this->load->helper('seo_helper');
        $this->load->helper('file_uploader');
    }

    public function solutions_submenu() {
        $data['model']=$this->Solutions_model->solutions_submenu_update();
        $data['models'] = $this->db->from('solution_sub_one_crd')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'solutions_submenu';
        $data['page_title']     =       'solutions_submenu';
        $data['view_module']    =       'solutions';
        $this->templates->admin($data);
    }
    public function solutions_submenu_update() {
        // $result=$this->Solutions_model->solution_sub_one_update();
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
        $result = $this->db->update('solutions_menu', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/solutions/solutions-submenu');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/solutions-submenu');
        }
    } 

    public function solution_sub() {
        
        $data['model']=$this->Solutions_model->solution_sub_one_update();
        $data['models'] = $this->db->from('solution_sub_one_crd')->order_by('id', 'DESC')->get()->result();
        
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'solutions';
        $data['page_title']     =       'solutions';
        $data['view_module']    =       'solutions';
        $this->templates->admin($data);
    }
    public function solution_sub_one_update() {
        // $result=$this->Solutions_model->solution_sub_one_update();
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
        $result = $this->db->update('solution_sub_one', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/solutions/solution-sub');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/solution-sub');
        }
    } 

    public function solution_sub_create() {
        // View File
        
        $data['view_file']      =       "solutions-create";
        $data['page_title']     =       'blog Create';
        $data['view_module']    =       'solutions';
        $this->templates->admin($data);
    }

    public function solution_sub_store() {

        $data = array(
            'tag'                        =>  $this->input->post('tag'),
            'short_des'                  =>  $this->input->post('short_des'),
            'amount'                     =>  $this->input->post('amount'),
            'pckg_title'                 =>  $this->input->post('pckg_title'),
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
        $result = $this->db->insert('solution_sub_one_crd', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/solutions/solution-sub');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/solution-sub');
        }
    }

    public function solution_sub_edit($id) {
        $model = $this->Solutions_model->solution_sub_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "solutions-edit";
        $data['page_title']     =       'Update blog';
        $data['view_module']    =       'solutions';
        $this->templates->admin($data);
    }

    public function solution_sub_update($id) {
        
        $data = array (
            'tag'                        =>  $this->input->post('tag'),
            'short_des'                  =>  $this->input->post('short_des'),
            'amount'                     =>  $this->input->post('amount'),
            'pckg_title'                 =>  $this->input->post('pckg_title'),
            'button_text'                =>  $this->input->post('button_text'),
            'button_url'                 =>  $this->input->post('button_url'),
            'status'                     =>  $this->input->post('status')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('alt_tag'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('solution_sub_one_crd', $data);
        $result = $this->Solutions_model->solution_sub_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/solutions/solution-sub');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/solution-sub');
        }
 
    }

    public function solution_sub_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('solution_sub_one_crd');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/solutions/solution-sub');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/solution-sub');
        }
    }
   
    
    public function product_features() {
        
        $data['model']=$this->Solutions_model->product_features_first_update();
        $data['models'] = $this->db->from('product_features_crud_one')->order_by('id', 'DESC')->get()->result();
        $data['model_two']=$this->Solutions_model->product_features_second_update();
        $data['models_two'] = $this->db->from('product_features_crud_two')->order_by('id', 'DESC')->get()->result();
        $data['model_three']=$this->Solutions_model->product_features_third_update();
        $data['models_three'] = $this->db->from('product_features_crud_three')->order_by('id', 'DESC')->get()->result();
        $data['model_four']=$this->Solutions_model->product_features_fourth_update();
        $data['model_five']=$this->Solutions_model->product_features_fifth_update();
        $data['models_five'] = $this->db->from('product_features_crud_five')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'product-features';
        $data['page_title']     =       'product-features';
        $data['view_module']    =       'solutions';
        $this->templates->admin($data);
    }
    public function product_features_first_update() {
        // $result=$this->Solutions_model->blog_info_update();
        $data = array(
            'title'                  =>  $this->input->post('title')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('solutions_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/solutions/product-features');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/product-features');
        }
    } 

    public function product_features_one_create() {
        // View File
        
        $data['view_file']      =       "product-features-one-create";
        $data['page_title']     =       'blog Create';
        $data['view_module']    =       'solutions';
        $this->templates->admin($data);
    }

    public function product_features_one_store() {

        $data = array(
            'title'                   =>  $this->input->post('title'),
            'description'             =>  $this->input->post('description'),
            'status'                  =>  $this->input->post('status')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('product_features_crud_one', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/solutions/product-features');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/product-features');
        }
    }

    public function product_features_one_edit($id) {
        $model = $this->Solutions_model->product_features_one_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "product-features-one-edit";
        $data['page_title']     =       'Update blog';
        $data['view_module']    =       'solutions';
        $this->templates->admin($data);
    }

    public function product_features_one_update($id) {
        
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
        $result = $this->Solutions_model->product_features_one_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/solutions/product-features');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/product-features');
        }
 
    }

    public function product_features_one_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('product_features_crud_one');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/solutions/product-features');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/product-features');
        }
    }  
   


    public function product_features_second_update() {

        $data = array(
            'title_two'                  =>  $this->input->post('title_two'),
            'short_des_two'                  =>  $this->input->post('short_des_two'),
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('solutions_update', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/solutions/product-features');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/product-features');
        }
    } 

    public function product_features_two_create() {
        // View File
        
        $data['view_file']      =       "product-features-two-create";
        $data['page_title']     =       'blog Create';
        $data['view_module']    =       'solutions';
        $this->templates->admin($data);
    }

    public function product_features_two_store() {

        $data = array(
            'title'                   =>  $this->input->post('title'),
            'description'             =>  $this->input->post('description'),
            'status'                  =>  $this->input->post('status')
        );

        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('product_features_crud_two', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/solutions/product-features');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/product-features');
        }
    }

    public function product_features_two_edit($id) {
        $model = $this->Solutions_model->product_features_two_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "product-features-two-edit";
        $data['page_title']     =       'Update blog';
        $data['view_module']    =       'solutions';
        $this->templates->admin($data);
    }

    public function product_features_two_update($id) {
        
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
        $result = $this->Solutions_model->product_features_two_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/solutions/product-features');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/product-features');
        }
 
    }

    public function product_features_two_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('product_features_crud_two');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/solutions/product-features');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/product-features');
        }
    }
    
    
    public function product_features_third_update() {

        $data = array(
            'title_three'                      =>  $this->input->post('title_three'),
            'short_des_three'                  =>  $this->input->post('short_des_three'),
        );
        
        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
         
        // $data['model']=$result;
        // $this->loadViews("model", $this->global, NULL);
        $this->db->where('id', '1');
        $result = $this->db->update('solutions_update', $data);
        
        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/solutions/product-features');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/product-features');
        }
        } 
        
        public function product_features_three_create() {
        // View File
        
        $data['view_file']      =       "product-features-three-create";
        $data['page_title']     =       'blog Create';
        $data['view_module']    =       'solutions';
        $this->templates->admin($data);
        }
        
        public function product_features_three_store() {
        
        $data = array(
            'title'                   =>  $this->input->post('title'),
            'description'             =>  $this->input->post('description'),
            'status'                  =>  $this->input->post('status')
        );
        
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('alt_tag'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
        
        // $this->db->where('id', 1);
        $result = $this->db->insert('product_features_crud_three', $data);
        
        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/solutions/product-features');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/product-features');
        }
        }
        
        public function product_features_three_edit($id) {
        $model = $this->Solutions_model->product_features_three_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "product-features-three-edit";
        $data['page_title']     =       'Update blog';
        $data['view_module']    =       'solutions';
        $this->templates->admin($data);
        }
        
        public function product_features_three_update($id) {
        
        $data = array (
            'title'                   =>  $this->input->post('title'),
            'description'             =>  $this->input->post('description'),
            'status'                  =>  $this->input->post('status')
        
        );
        
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = seo_friendly_string($this->input->post('alt_tag'));
            $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }
        
        //$this->db->where('id', '$id');
        //$result = $this->db->update('blog_menu_tbl', $data);
        $result = $this->Solutions_model->product_features_three_update($data, $id);
        
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/solutions/product-features');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/product-features');
        }
        
        }
        
        public function product_features_three_delete($id) {
        
        $this->db->where('id', $id);
        $result = $this->db->delete('product_features_crud_three');
        
        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/solutions/product-features');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/solutions/product-features');
        }
        } 

        public function product_features_fourth_update() {
            // $result=$this->Solutions_model->blog_info_update();
            $data = array(
                'short_title_four'                  =>  $this->input->post('short_title_four'),
                'title_four'                        =>  $this->input->post('title_four'),
                'des_four'                          =>  $this->input->post('des_four'),
                'button_text'                       =>  $this->input->post('button_text'),
                'button_url'                        =>  $this->input->post('button_url')
            );
    
            if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
                $title = seo_friendly_string($this->input->post('title'));
                $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
                $data['image'] = $photo;
            }
             
            // $data['model']=$result;
            // $this->loadViews("model", $this->global, NULL);
            $this->db->where('id', '1');
            $result = $this->db->update('solutions_update', $data);
    
            if($result) {
                $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
                redirect('admin/solutions/product-features');
            } else {
                $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
                redirect('admin/solutions/product-features');
            }
        } 

        public function product_features_fifth_update() {

            $data = array(
                'short_title_five'                      =>  $this->input->post('short_title_five'),
                'title_five'                            =>  $this->input->post('title_five'),
                'des_five'                              =>  $this->input->post('des_five')
            );
            
            // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            //     $title = seo_friendly_string($this->input->post('title'));
            //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            //     $data['image'] = $photo;
            // }
             
            // $data['model']=$result;
            // $this->loadViews("model", $this->global, NULL);
            $this->db->where('id', '1');
            $result = $this->db->update('solutions_update', $data);
            
            if($result) {
                $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
                redirect('admin/solutions/product-features');
            } else {
                $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
                redirect('admin/solutions/product-features');
            }
            } 
            
            public function product_features_five_create() {
            // View File
            
            $data['view_file']      =       "product-features-five-create";
            $data['page_title']     =       'blog Create';
            $data['view_module']    =       'solutions';
            $this->templates->admin($data);
            }
            
            public function product_features_five_store() {
            
            $data = array(
                'status'                  =>  $this->input->post('status')
            );
            
            if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
                $title = seo_friendly_string($this->input->post('status'));
                $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
                $data['image'] = $photo;
            }
            
            // $this->db->where('id', 1);
            $result = $this->db->insert('product_features_crud_five', $data);
            
            if($result) {
                $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
                redirect('admin/solutions/product-features');
            } else {
                $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
                redirect('admin/solutions/product-features');
            }
            }
            
            public function product_features_five_edit($id) {
            $model = $this->Solutions_model->product_features_five_edit($id);
            $data['model'] = $model;
            // View File
            $data['view_file']      =       "product-features-five-edit";
            $data['page_title']     =       'Update blog';
            $data['view_module']    =       'solutions';
            $this->templates->admin($data);
            }
            
            public function product_features_five_update($id) {
            
            $data = array (
                'status'                  =>  $this->input->post('status')
            
            );
            
            if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
                $title = seo_friendly_string($this->input->post('status'));
                $photo = uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
                $data['image'] = $photo;
            }
            
            //$this->db->where('id', '$id');
            //$result = $this->db->update('blog_menu_tbl', $data);
            $result = $this->Solutions_model->product_features_five_update($data, $id);
            
            if($result) {
                $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
                redirect('admin/solutions/product-features');
            } else {
                $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
                redirect('admin/solutions/product-features');
            }
            
            }
            
            public function product_features_five_delete($id) {
            
            $this->db->where('id', $id);
            $result = $this->db->delete('product_features_crud_five');
            
            if($result) {
                $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
                redirect('admin/solutions/product-features');
            } else {
                exit();
                $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
                redirect('admin/solutions/product-features');
              }
            }
}


