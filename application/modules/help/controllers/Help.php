<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class Help extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Help_model');
        $this->load->helper('seo_helper');
        $this->load->helper('file_uploader');
    }

    public function help_info() {
        $data['model']=$this->Help_model->help_info_update();
        $data['models'] = $this->db->from('help_menu_tbl')->order_by('id', 'DESC')->get()->result();
        // print_r($data['model']);
        // exit();
       
        // View File
        $data['view_file']      =       'help';
        $data['page_title']     =       'help';
        $data['view_module']    =       'help';
        $this->templates->admin($data);
    }
    public function help_info_update() {
        // $result=$this->Help_model->help_info_update();
        $data = array(
            'title'                  =>  $this->input->post('title'),
            'title_two'              =>  $this->input->post('title_two'),
            'dropdown'               =>  $this->input->post('dropdown'),
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
        $result = $this->db->update('help_info', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/website-pages/help');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/website-pages/help');
        }
    } 

       
    public function help_create() {
        // View File
        
        $data['view_file']      =       "help-create";
        $data['page_title']     =       'Help Create';
        $data['view_module']    =       'help';
        $this->templates->admin($data);
    }

    public function help_store() {

        $data = array(
            'menu'                     =>  $this->input->post('menu'),
            'submenu_one'              =>  $this->input->post('submenu_one'),
            'submenu_one_link'         =>  $this->input->post('submenu_one_link'),
            'submenu_two'              =>  $this->input->post('submenu_one'),
            'submenu_two_link'         =>  $this->input->post('submenu_two_link'),
            'submenu_three'            =>  $this->input->post('submenu_three'),
            'submenu_three_link'       =>  $this->input->post('submenu_three_link'),
            'status'                   =>  $this->input->post('status')
        );

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('help_menu_tbl', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/website-pages/help');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/website-pages/help');
        }
    }

    public function help_edit($id) {
        $model = $this->Help_model->help_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "help-edit";
        $data['page_title']     =       'Update Help';
        $data['view_module']    =       'help';
        $this->templates->admin($data);
    }

    public function help_update($id) {
        
        $data = array (
            'menu'                     =>  $this->input->post('menu'),
            'submenu_one'              =>  $this->input->post('submenu_one'),
            'submenu_one_link'         =>  $this->input->post('submenu_one_link'),
            'submenu_two'              =>  $this->input->post('submenu_one'),
            'submenu_two_link'         =>  $this->input->post('submenu_two_link'),
            'submenu_three'            =>  $this->input->post('submenu_three'),
            'submenu_three_link'       =>  $this->input->post('submenu_three_link'),
            'status'                   =>  $this->input->post('status')

        );

       

        // if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('title'));
        //     $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
        //     $data['image'] = $photo;
        // }
       
        //$this->db->where('id', '$id');
        //$result = $this->db->update('help', $data);
        $result = $this->Help_model->help_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/website-pages/help');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/website-pages/help');
        }
 
    }

    public function help_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('help_menu_tbl');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/website-pages/help');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/website-pages/help');
        }
    }
    
}


