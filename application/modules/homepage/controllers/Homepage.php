<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class Homepage extends MX_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->module('templates');
        $this->load->helper('file_uploader');
        $this->load->helper('seo');
    }

    public function section_one() {
        $data['model'] = $this->db->from('section_one')->where('id', 1)->get()->row();

        // View File
        $data['view_file']      =       "section-one";
        $data['page_title']     =       'Section One';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }
    public function update_section_one () {
        $data = array(
            'title'                     =>  $this->input->post('title'),
            'quotes'                    =>  $this->input->post('quotes'),
            'button_text'               =>  $this->input->post('button_text'),
            'button_url'                =>  $this->input->post('button_url')
        );


        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            $title = 'hybrid-cms-background-photo';
            $photo =  uploadFileWithCustomName('uploads/sub_menu','image', $title ,'*');
            $data['image'] = $photo;
        }

        $this->db->where('id', 1);
        $result = $this->db->update('section_one', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/home-page/section-one');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-one');
        }
    }

    public function section_two() {
        $data['models'] = $this->db->from('section_two')->where('id', 1)->get()->result();

        // View File
        $data['view_file']      =       "section-two";
        $data['page_title']     =       'Section Two';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function section_two_create() {
        // View File
        $data['view_file']      =       "section-two-create";
        $data['page_title']     =       'Create New Section Two';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function section_two_store () {
        $data = array(
            'name'             =>  $this->input->post('name'),
            'alt_tag'          =>  $this->input->post('alt_tag'),
            'status'           =>  $this->input->post('status'),
        );

        if(isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '') {
            $title = seo_friendly_string($this->input->post('name'));
            $photo =  uploadFileWithCustomName('uploads/home-page','photo', $title ,'*');
            $data['photo'] = $photo;
        }

        // $this->db->where('id', 1);
        $result = $this->db->insert('section_two', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/home-page/section-two');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-two');
        }
    }

    public function section_two_edit($id) {
        $data['model'] = $this->db->from('section_two')->where('id', 1)->get()->row();

        // View File
        $data['view_file']      =       "section-two-edit";
        $data['page_title']     =       'Update Section Two';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function section_two_update ($id) {
        $data = array(
            'name'             =>  $this->input->post('name'),
            'alt_tag'          =>  $this->input->post('alt_tag'),
            'status'           =>  $this->input->post('status'),
        );

        if(isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '') {
            $title = seo_friendly_string($this->input->post('name'));
            $photo =  uploadFileWithCustomName('uploads/home-page','photo', $title ,'*');
            $data['photo'] = $photo;
        }

        $this->db->where('id', 1);
        $result = $this->db->update('section_two', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Update Successfully!!!');
            redirect('admin/home-page/section-two');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-two/'.$id);
        }
    }

    public function section_two_delete($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('section_two');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/home-page/section-two');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-two');
        }
    }

    public function section_three() {
        $data['model'] = $this->db->from('section_three')->where('id', 1)->get()->row();

        // View File
        $data['view_file']      =       "section-three";
        $data['page_title']     =       'Section Three';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function update_section_three () {
        $data = array(
            'title_one'             =>  $this->input->post('title_one'),
            'description_one'       =>  $this->input->post('description_one'),
            'title_two'             =>  $this->input->post('title_two'),
            'description_two'       =>  $this->input->post('description_two'),
            'video'                 =>  $this->input->post('video'),
        );

        $this->db->where('id', 1);
        $result = $this->db->update('section_three', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/home-page/section-three');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-three');
        }
    }
    
    public function section_four() {
        $data['model'] = $this->db->from('custom_table')->where('page', 'section-four')->get()->row();
        $data['models'] = $this->db->from('section_four')->order_by('id', 'DESC')->get()->result();

        // View File
        $data['view_file']      =       "section-four";
        $data['page_title']     =       'Section Four';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function update_section_four () {
        $data = array(
            'title'             =>  $this->input->post('title'),
            'description'       =>  $this->input->post('description'),
        );

        $this->db->where('page', 'section-four');
        $result = $this->db->update('custom_table', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/home-page/section-four');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-four');
        }
    }

    public function section_four_create() {
        // View File
        $data['view_file']      =       "section-four-create";
        $data['page_title']     =       'Create New Section Four';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function section_four_store() {
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

        // $this->db->where('id', $id);
        $result = $this->db->insert('section_four', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/home-page/section-four');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-four');
        }
    }

    public function section_four_edit($id) {
        $data['model'] = $this->db->from('section_four')->where('id', $id)->get()->row();
        // View File
        $data['view_file']      =       "section-four-edit";
        $data['page_title']     =       'Update Section Four';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function section_four_update($id) {
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

        $this->db->where('id', $id);
        $result = $this->db->update('section_four', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/home-page/section-four');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-four');
        }
    }

    public function section_four_delete($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('section_four');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/home-page/section-four');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-four');
        }
    }

    public function section_five() {
        $data['model'] = $this->db->from('custom_table')->where('page', 'section-five')->get()->row();
        $data['models'] = $this->db->from('section_five')->order_by('id', 'DESC')->get()->result();

        // View File
        $data['view_file']      =       "section-five";
        $data['page_title']     =       'Section Five';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function update_section_five () {
        $data = array (
            'title'             =>  $this->input->post('title'),
            'description'       =>  $this->input->post('description')
        );

        $this->db->where('page', 'section-five');
        $result = $this->db->update('custom_table', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/home-page/section-five');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-five');
        }
    }

    public function section_five_create() {
        // View File
        $data['view_file']      =       "section-five-create";
        $data['page_title']     =       'Create New Section Five';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function section_five_store() {
        $data = array(
            'alt_tag'           =>  $this->input->post('alt_tag'),
            'title'             =>  $this->input->post('title'),
            'description'       =>  $this->input->post('description')
        );

        if(isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '') {
            $title = seo_friendly_string($this->input->post('name'));
            $photo = uploadFileWithCustomName('uploads/home-page','photo', $title ,'*');
            $data['photo'] = $photo;
        }

        // $this->db->where('id', 1);
        $result = $this->db->insert('section_five', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/home-page/section-five');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-five');
        }
    }

    public function section_five_edit($id) {
        $data['model'] = $this->db->from('section_five')->where('id', $id)->get()->row();
        // View File
        $data['view_file']      =       "section-five-edit";
        $data['page_title']     =       'Update Section Five';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function section_five_update($id) {
        $data = array(
            'alt_tag'           =>  $this->input->post('alt_tag'),
            'description'       =>  $this->input->post('description'),
            'title'             =>  $this->input->post('title'),
            'icon'              =>  $this->input->post('icon'),
            'status'            =>  $this->input->post('status')
        );


        // if(isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '') {
        //     $title = seo_friendly_string($this->input->post('name'));
        //     $photo = uploadFileWithCustomName('uploads/home-page','photo', $title ,'*');
        //     $data['photo'] = $photo;
        // }

        $this->db->where('id', $id);
        $result = $this->db->update('section_five', $data);
        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/home-page/section-five');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-five');
        }
    }

    public function section_delete_delete($id) {
        $this->db->where('id', $id);
        $result = $this->db->delete('section_five');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/home-page/section-five');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-five');
        }
    }

    public function section_six() {
        $data['model'] = $this->db->from('section_six')->where('id', '1')->get()->row();

        // View File
        $data['view_file']      =       "section-six";
        $data['page_title']     =       'Section Six';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function update_section_six () {
        $data = array (
            'title'             =>  $this->input->post('title'),
            'alt_tag'           =>  $this->input->post('alt_tag'),
            'description'       =>  $this->input->post('description'),
            'option_one'        =>  $this->input->post('option_one'),
            'option_two'        =>  $this->input->post('option_two'),
            'option_three'      =>  $this->input->post('option_three'),
            'option_four'       =>  $this->input->post('option_four'),
            'option_five'       =>  $this->input->post('option_five')
        );

        if(isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/home-page','photo', $title ,'*');
            $data['photo'] = $photo;
        }

        $this->db->where('id', '1');
        $result = $this->db->update('section_six', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/home-page/section-six');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-six');
        }
    }

        public function section_seven() {
            $data['models'] = $this->db->from('section_seven')->order_by('id DESC')->get()->result();
            $data['model'] = $this->db->from('custom_table')->where('page', 'section-seven')->get()->row();


             
            // View File
            $data['view_file']      =       "section-seven";
            $data['page_title']     =       'Section Seven';
            $data['view_module']    =       'homepage';
            $this->templates->admin($data);
        }

        public function update_section_seven() {
            $data = array (
                'title'             =>  $this->input->post('title')
            );

            $this->db->where('page', 'section-seven');
            $result = $this->db->update('custom_table', $data);

            if($result) {
                $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
                redirect('admin/home-page/section-seven');
            } else {
                $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
                redirect('admin/home-page/section-seven');
            }
        }

        public function section_seven_create() {
            // View File
            $data['view_file']      =       "section-seven-create";
            $data['page_title']     =       'Create New Section Seven';
            $data['view_module']    =       'homepage';
            $this->templates->admin($data);
        }

        public function section_seven_store() {
            $data = array(
                'tag'                   =>  $this->input->post('tag'),
                'title'                 =>  $this->input->post('title'),
                'description'           =>  $this->input->post('description'),
                'button_text'           =>  $this->input->post('button_text'),
                'button_url'            =>  $this->input->post('button_url'),
                'button_open'           =>  $this->input->post('button_open'),
                'status'                =>  $this->input->post('status'),
                'date'                  =>  $this->input->post('date')    	
            );

        
            // $this->db->where('id', 1);
            $result = $this->db->insert('section_seven', $data);

            if($result) {
                $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
                redirect('admin/home-page/section-seven');
            } else {
                $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
                redirect('admin/home-page/section-seven');
            }
        }

        public function section_seven_edit($id) {
            $data['model'] = $this->db->from('section_seven')->where('id', $id)->get()->row();
            // View File
            $data['view_file']      =       "section-seven-edit";
            $data['page_title']     =       'Update Section Seven';
            $data['view_module']    =       'homepage';
            $this->templates->admin($data);
        }

        public function section_seven_update($id) {
            $data = array (
                'tag'                   =>  $this->input->post('tag'),
                'title'                 =>  $this->input->post('title'),
                'description'           =>  $this->input->post('description'),
                'button_text'           =>  $this->input->post('button_text'),
                'button_url'            =>  $this->input->post('button_url'),
                'button_open'           =>  $this->input->post('button_open'),
                'status'                =>  $this->input->post('status')

            );
            $this->db->where('id', '$id');
            $result = $this->db->update('section_seven', $data);
            if($result) {
                $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
                redirect('admin/home-page/section-seven');
            } else {
                $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
                redirect('admin/home-page/section-seven');
            }
        }

        public function section_delete($id) {

            $this->db->where('id', $id);
            $result = $this->db->delete('section_seven');

            if($result) {
                $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
                redirect('admin/home-page/section-seven');
            } else {
                $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
                redirect('admin/home-page/section-seven');
            }
        }

public function section_eight() {
        $data['model'] = $this->db->from('section_eight')->where('id', '1')->get()->row();

        // View File
        $data['view_file']      =       "section-eight";
        $data['page_title']     =       'Section Eight';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function update_section_eight () {
        $data = array (
            'title'             =>  $this->input->post('title'),
            'alt_tag'           =>  $this->input->post('alt_tag'),
            'description'       =>  $this->input->post('description'),
            'button_url'        =>  $this->input->post('button_url'),
            'button_text'       =>  $this->input->post('button_text'),
            'button_open'       =>  $this->input->post('button_open')
        );

        if(isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title'));
            $photo = uploadFileWithCustomName('uploads/home-page','photo', $title ,'*');
            $data['photo'] = $photo;
        }

        $this->db->where('id', '1');
        $result = $this->db->update('section_eight', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/home-page/section-eight');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-eight');
        }
    }
    public function section_nine() {
        $data['model'] = $this->db->from('section_nine')->where('id', '1')->get()->row();

        // View File
        $data['view_file']      =       "section-nine";
        $data['page_title']     =       'Section Nine';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function update_section_nine () {
        $data = array (
            'title'                  =>  $this->input->post('title'),
            'tab_one_icon'           =>  $this->input->post('tab_one_icon'),
            'tab_one_title'          =>  $this->input->post('tab_one_title'),
            'tab_one_header'         =>  $this->input->post('tab_one_header'),
            'tab_one_description'    =>  $this->input->post('tab_one_description'),
            'tab_one_alt_tag'        =>  $this->input->post('tab_one_alt_tag'),
            'tab_one_link_text'      =>  $this->input->post('tab_one_link_text'),
            'tab_one_link_url'       =>  $this->input->post('tab_one_link_url'),
            'tab_one_link_open'      =>  $this->input->post('tab_one_link_open'),

            'tab_two_icon'           =>  $this->input->post('tab_two_icon'),
            'tab_two_title'          =>  $this->input->post('tab_two_title'),
            'tab_two_header'         =>  $this->input->post('tab_two_header'),
            'tab_two_description'    =>  $this->input->post('tab_two_description'),
            'tab_two_alt_tag'        =>  $this->input->post('tab_two_alt_tag'),
            'tab_two_link_text'      =>  $this->input->post('tab_two_link_text'),
            'tab_two_link_url'       =>  $this->input->post('tab_two_link_url'),
            'tab_two_link_open'      =>  $this->input->post('tab_two_link_open'),
            
            'tab_three_icon'           =>  $this->input->post('tab_three_icon'),
            'tab_three_title'          =>  $this->input->post('tab_three_title'),
            'tab_three_header'         =>  $this->input->post('tab_three_header'),
            'tab_three_description'    =>  $this->input->post('tab_three_description'),
            'tab_three_alt_tag'        =>  $this->input->post('tab_three_alt_tag'),
            'tab_three_link_text'      =>  $this->input->post('tab_three_link_text'),
            'tab_three_link_url'       =>  $this->input->post('tab_three_link_url'),
            'tab_three_link_open'      =>  $this->input->post('tab_three_link_open'),

            'tab_four_icon'           =>  $this->input->post('tab_four_icon'),
            'tab_four_title'          =>  $this->input->post('tab_four_title'),
            'tab_four_header'         =>  $this->input->post('tab_four_header'),
            'tab_four_description'    =>  $this->input->post('tab_four_description'),
            'tab_four_alt_tag'        =>  $this->input->post('tab_four_alt_tag'),
            'tab_four_link_text'      =>  $this->input->post('tab_four_link_text'),
            'tab_four_link_url'       =>  $this->input->post('tab_four_link_url'),
            'tab_four_link_open'      =>  $this->input->post('tab_four_link_open'),
            
            'tab_five_icon'           =>  $this->input->post('tab_five_icon'),
            'tab_five_title'          =>  $this->input->post('tab_five_title'),
            'tab_five_header'         =>  $this->input->post('tab_five_header'),
            'tab_five_description'    =>  $this->input->post('tab_five_description'),
            'tab_five_alt_tag'        =>  $this->input->post('tab_five_alt_tag'),
            'tab_five_link_text'      =>  $this->input->post('tab_five_link_text'),
            'tab_five_link_url'       =>  $this->input->post('tab_five_link_url'),
            'tab_five_link_open'      =>  $this->input->post('tab_five_link_open')
        );

        if(isset($_FILES['tab_one_photo']['name']) && $_FILES['tab_one_photo']['name'] != '') {
            $title = seo_friendly_string($this->input->post('tab_one_title'));
            $photo = uploadFileWithCustomName('uploads/home-page','tab_one_photo', $title ,'*');
            $data['tab_one_photo'] = $photo;
        }
        
        if(isset($_FILES['tab_two_photo']['name']) && $_FILES['tab_two_photo']['name'] != '') {
            $title = seo_friendly_string($this->input->post('tab_two_title'));
            $photo = uploadFileWithCustomName('uploads/home-page','tab_two_photo', $title ,'*');
            $data['tab_two_photo'] = $photo;
        }
       
        if(isset($_FILES['tab_three_photo']['name']) && $_FILES['tab_three_photo']['name'] != '') {
            $title = seo_friendly_string($this->input->post('tab_three_title'));
            $photo = uploadFileWithCustomName('uploads/home-page','tab_three_photo', $title ,'*');
            $data['tab_three_photo'] = $photo;
        }
        
        if(isset($_FILES['tab_four_photo']['name']) && $_FILES['tab_four_photo']['name'] != '') {
            $title = seo_friendly_string($this->input->post('tab_four_title'));
            $photo = uploadFileWithCustomName('uploads/home-page','tab_four_photo', $title ,'*');
            $data['tab_four_photo'] = $photo;
        }
        
        if(isset($_FILES['tab_five_photo']['name']) && $_FILES['tab_five_photo']['name'] != '') {
            $title = seo_friendly_string($this->input->post('tab_five_title'));
            $photo = uploadFileWithCustomName('uploads/home-page','tab_five_photo', $title ,'*');
            $data['tab_five_photo'] = $photo;
        }

        $this->db->where('id', '1');
        $result = $this->db->update('section_nine', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/home-page/section-nine');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-nine');
        }
    }

    public function section_ten() {
        $data['models'] = $this->db->from('section_ten')->order_by('id', 'DESC')->get()->result();
        $data['row'] = $this->db->from('custom_table')->where('page', 'section-ten')->get()->row();

        // View File
        $data['view_file']      =       "section-ten";
        $data['page_title']     =       'Section Ten';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function update_section_ten () {
        $data = array (
            'title'             =>  $this->input->post('title'),
            'description'           =>  $this->input->post('description'),
            'button_text'       =>  $this->input->post('button_text')
        );

        $this->db->where('page', 'section-ten');
        $result = $this->db->update('custom_table', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/home-page/section-ten');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-ten');
        }
    }

    public function section_ten_create() {
        // View File
        $data['view_file']      =       "section-ten-create";
        $data['page_title']     =       'Create New Section Ten';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function section_ten_store() {
        $data = array(
            'alt_tag' => $this->input->post('alt_tag'),
            'title_one' => $this->input->post('title_one'),
            'title_two' => $this->input->post('title_two'),
            'percentages' => $this->input->post('percentages'),
            'status' => $this->input->post('status')
        );

        if(isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title_one'));
            $photo = uploadFileWithCustomName('uploads/home-page','photo', $title ,'*');
            $data['photo'] = $photo;
        }

        $result = $this->db->insert('section_ten', $data);
        if($result) {
            $this->session->set_flashdata('success', 'Data Created Successfully!!!');
            redirect('admin/home-page/section-ten');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-ten-create');
        }
    }

    public function section_ten_edit($id) {
        $model = $this->db->from('section_ten')->where('id', $id)->get()->row();
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "section-ten-edit";
        $data['page_title']     =       'Update Section Ten';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function section_ten_update($id) {
        $data = array(
            'alt_tag' => $this->input->post('alt_tag'),
            'title_one' => $this->input->post('title_one'),
            'title_two' => $this->input->post('title_two'),
            'percentages' => $this->input->post('percentages'),
            'status' => $this->input->post('status')
        );

        if(isset($_FILES['photo']['name']) && $_FILES['photo']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title_one'));
            $photo = uploadFileWithCustomName('uploads/home-page','photo', $title ,'*');
            $data['photo'] = $photo;
        }

        $result = $this->db->update('section_ten', $data, array('id' => $id));
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/home-page/section-ten');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-ten-edit/'.$id);
        }
    }

    public function section_ten_delete($id) {
        $result = $this->db->delete('section_ten', array('id', $id));
        if($result) {
            $this->session->set_flashdata('success', 'Data Deleted Successfully!!!');
            redirect('admin/home-page/section-ten');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-ten');
        }
    }

    public function section_eleven() {
        $data['model'] = $this->db->from('section_eleven')->where('id', '1')->get()->row();

        // View File
        $data['view_file']      =       "section-eleven";
        $data['page_title']     =       'Section Eleven';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }

    public function update_section_eleven() {
        $data = array (
            'header'               =>  $this->input->post('header'),
            'sub_header'           =>  $this->input->post('sub_header'),
            'sub_header_two'           =>  $this->input->post('sub_header_two'),
            'service_one'          =>  $this->input->post('service_one'),
            'service_one_url'      =>  $this->input->post('service_one_url'),
            'service_two'          =>  $this->input->post('service_two'),
            'service_two_url'      =>  $this->input->post('service_two_url'),
            'service_three'        =>  $this->input->post('service_three'),
            'service_three_url'    =>  $this->input->post('service_three_url'),
            'service_four'         =>  $this->input->post('service_four'),
            'service_four_url'     =>  $this->input->post('service_four_url'),
            'service_five'         =>  $this->input->post('service_five'),
            'service_five_url'     =>  $this->input->post('service_five_url'),
            'service_six'          =>  $this->input->post('service_six'),
            'service_six_url'      =>  $this->input->post('service_six_url'),
            'service_seven'        =>  $this->input->post('service_seven'),
            'service_seven_url'    =>  $this->input->post('service_seven_url'),
            'service_eight'        =>  $this->input->post('service_eight'),
            'service_eight_url'    =>  $this->input->post('service_eight_url'),
            'service_nine'         =>  $this->input->post('service_nine'),
            'service_nine_url'     =>  $this->input->post('service_nine_url'),
            'button_text'          =>  $this->input->post('button_text'),
            'button_text_url'      =>  $this->input->post('button_text_url')
        );

        $this->db->where('id', '1');
        $result = $this->db->update('section_eleven', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/home-page/section-eleven');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-eleven');
        }
    }

    public function section_twelve() {
        $data['model'] = $this->db->from('section_twelve')->where('id', '1')->get()->row();
    
        // View File
        $data['view_file']      =       "section-twelve";
        $data['page_title']     =       'Section twelve';
        $data['view_module']    =       'homepage';
        $this->templates->admin($data);
    }
    
    public function update_section_twelve() {
        $data = array (
            'link_one_url'       =>  $this->input->post('link_one_url'),
            'link_two_url'       =>  $this->input->post('link_two_url'),
            'link_three_url'     =>  $this->input->post('link_three_url'),
            'link_four_url'      =>  $this->input->post('link_four_url'),
            'link_five_url'      =>  $this->input->post('link_five_url'),
            'link_six_url'       =>  $this->input->post('link_six_url'),
            'link_seven_url'     =>  $this->input->post('link_seven_url'),
            'link_eight_url'     =>  $this->input->post('link_eight_url'),
            'link_nine_url'      =>  $this->input->post('link_nine_url'),
            'title'              =>  $this->input->post('title'),
            'description'        =>  $this->input->post('description'),
            'icon'               =>  $this->input->post('icon'),
            'title_two'          =>  $this->input->post('title_two'),
            'button_text'        =>  $this->input->post('button_text'),
            'button_text_url'    =>  $this->input->post('button_text_url')
        );
        
        if(isset($_FILES['link_one']['name']) && $_FILES['link_one']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title_one'));
            $photo = uploadFileWithCustomName('uploads/home-page','link_one', $title ,'*');
            $data['link_one'] = $photo;
        }
        if(isset($_FILES['link_two']['name']) && $_FILES['link_two']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title_two'));
            $photo = uploadFileWithCustomName('uploads/home-page','link_two', $title ,'*');
            $data['link_two'] = $photo;
        }
        if(isset($_FILES['link_three']['name']) && $_FILES['link_three']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title_three'));
            $photo = uploadFileWithCustomName('uploads/home-page','link_three', $title ,'*');
            $data['link_three'] = $photo;
        }
        if(isset($_FILES['link_four']['name']) && $_FILES['link_four']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title_four'));
            $photo = uploadFileWithCustomName('uploads/home-page','link_four', $title ,'*');
            $data['link_four'] = $photo;
        }
        if(isset($_FILES['link_five']['name']) && $_FILES['link_five']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title_five'));
            $photo = uploadFileWithCustomName('uploads/home-page','link_five', $title ,'*');
            $data['link_five'] = $photo;
        }
        if(isset($_FILES['link_six']['name']) && $_FILES['link_six']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title_six'));
            $photo = uploadFileWithCustomName('uploads/home-page','link_six', $title ,'*');
            $data['link_six'] = $photo;
        }
        if(isset($_FILES['link_seven']['name']) && $_FILES['link_seven']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title_seven'));
            $photo = uploadFileWithCustomName('uploads/home-page','link_seven', $title ,'*');
            $data['link_seven'] = $photo;
        }
        if(isset($_FILES['link_eight']['name']) && $_FILES['link_eight']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title_eight'));
            $photo = uploadFileWithCustomName('uploads/home-page','link_eight', $title ,'*');
            $data['link_eight'] = $photo;
        }
        if(isset($_FILES['link_nine']['name']) && $_FILES['link_nine']['name'] != '') {
            $title = seo_friendly_string($this->input->post('title_nine'));
            $photo = uploadFileWithCustomName('uploads/home-page','link_nine', $title ,'*');
            $data['link_nine'] = $photo;
        }
    
        $this->db->where('id', '1');
        $result = $this->db->update('section_twelve', $data);
    
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/home-page/section-twelve');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/home-page/section-twelve');
        }
    }


}


