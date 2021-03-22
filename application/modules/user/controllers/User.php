<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('User_model');
    }

    public function create()
    {
        $data['view_file'] = "create";
        $data['page_title'] = 'Create Users';
        $data['view_module'] = 'user';
        $this->templates->admin($data);
    }
    
    public function store()
    {
        $id = $this->session->userdata('id');
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'PHone', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[25]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[8]|max_length[25]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[25]');
        if ($this->form_validation->run() == true) {

            // check username
            $this->db->select("username");
            $this->db->from("admins");
            $this->db->where("username", $this->input->post('username'));
            $query = $this->db->get()->row();
            if($query) {
                $this->session->set_flashdata('warning', 'Username is Already Exist!!!');
                redirect(base_url().'admin/user/create');
            }
            // check email
            $this->db->select("email");
            $this->db->from("admins");
            $this->db->where("email", $this->input->post('email'));
            $query = $this->db->get()->row();
            if($query) {
                $this->session->set_flashdata('warning', 'Email is Already Exist!!!');
                redirect(base_url().'user/create');
            }

            $data = [
                'first_name'    => $this->input->post('first_name'),
                'last_name'     => $this->input->post('last_name'),
                'phone'         => $this->input->post('phone'),
                'username'      => $this->input->post('username'),
                'email'         => $this->input->post('email'),
                'password'      => base64_encode($this->input->post('password'))
            ];

            $this->db->insert('admins',$data);

            $this->session->set_flashdata('success', 'Data Created Successfully!!!');
            redirect(base_url().'admin/users');

        } else {
            setError($this->form_validation->error_array());
            $this->session->set_flashdata('warning', 'Failed to Submit Request!!!');
            redirect(base_url().'admin/user/create');
        }
    }

    public function index()
    {
        $data['models'] = $this->User_model->get_user();
        $data['view_file'] = "index";
        $data['page_title'] = 'Users';
        $data['view_module'] = 'user';
        $this->templates->admin($data);
    }

    public function status($id) {

        $model = $this->db->from('admins')->where('id', $id)->get()->row();
        if($model) {
            $old_status = $model->status;
            $old_status == 1 ? $status = 0 : $status = 1;
            $data['status'] = $status;
            $this->db->update('admins', $data, 'id='. $id);

            $this->session->set_flashdata('success', 'Successfully Updated Status!!!');
            redirect('admin/users');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong!!!');
            redirect('admin/users');
        }
    }


    public function edit($id)
    {
        $data['model'] = $this->User_model->get_user_edit($id);
        $data['view_file'] = "edit";
        $data['page_title'] = 'Users';
        $data['view_module'] = 'user';
        $this->templates->admin($data);
    }
    
    public function update($id) {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'PHone', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[25]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[8]|max_length[25]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[25]');
        if ($this->form_validation->run() == true) {

            // check username
            $this->db->select("username");
            $this->db->from("admins");
            $this->db->where("username", $this->input->post('username'));
            $this->db->where("id !=", $id);
            $query = $this->db->get()->row();
            if($query) {
                $this->session->set_flashdata('warning', 'Username is Already Exist!!!');
                redirect(base_url().'admin/user/edit/'.$id);
            }
            // check email
            $this->db->select("email");
            $this->db->from("admins");
            $this->db->where("email", $this->input->post('email'));
            $this->db->where("id !=", $id);
            $query = $this->db->get()->row();
            if($query) {
                $this->session->set_flashdata('warning', 'Email is Already Exist!!!');
                redirect(base_url().'admin/user/edit/'.$id);
            }

            $data = [
                'first_name'    => $this->input->post('first_name'),
                'last_name'     => $this->input->post('last_name'),
                'phone'         => $this->input->post('phone'),
                'username'      => $this->input->post('username'),
                'email'         => $this->input->post('email'),
                'password'      => base64_encode($this->input->post('password'))
            ];

            $this->db->update('admins',$data,array('id' => $id));

            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect(base_url().'admin/users');

        } else {
            setError($this->form_validation->error_array());
            $this->session->set_flashdata('warning', 'Failed to Submit Request!!!');
            redirect(base_url().'admin/user/create');
        }
    }

    
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('admins');

        $this->session->set_flashdata('success', 'Successfully Deleted The User');
        redirect('admin/users');
    }

    public function account_settings()
    {
        $data['view_file'] = "account_settings";
        $this->templates->admin($data);
    }

    public function profile()
    {
        $id = $this->session->userdata('id');
        $data['user'] = $this->User_model->get_user_edit($id);

        $data['page_title'] = 'Profile';
        $data['view_file'] = "profile";
        $data['view_module'] = 'user';

        $this->templates->admin($data);
    }

    public function update_password()
    {
        $id = $this->session->userdata('id');
        $old_password_get = $this->User_model->get_old_password($id);
        $old_password = $this->input->post('old_password');
        $new_password = $this->input->post('new_password');
        $confirm_password = $this->input->post('confirm_password');
        
        if($old_password_get != $old_password)
        {
           $this->session->set_flashdata('warning', 'Old Password Does Not Match!!');
           redirect('user/account_settings');
        }
        elseif($new_password != $confirm_password)
        {
           $this->session->set_flashdata('warning', 'Confirm Password Does Not Match!!');
           redirect('user/account_settings');
        }
        else
        {
            $data = array(
            'password' => $new_password
                );
            $this->db->where('id', $id);
            $this->db->update('techics_users', $data);

            $this->session->set_flashdata('success', 'Successfully Changed Your Password');
            redirect('administrator/logout');
        }
        
        
    }

    public function update_profile() {
        $id = $this->session->userdata('id');
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'PHone', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[25]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[8]|max_length[25]');
        if ($this->form_validation->run() == true) {

            // check username
            $this->db->select("username");
            $this->db->from("admins");
            $this->db->where("username", $this->input->post('username'));
            $this->db->where("id !=", $id);
            $query = $this->db->get()->row();
            if($query) {
                $this->session->set_flashdata('warning', 'Username is Already Exist!!!');
                redirect(base_url().'admin/profile');
            }
            // check email
            $this->db->select("email");
            $this->db->from("admins");
            $this->db->where("email", $this->input->post('email'));
            $this->db->where("id !=", $id);
            $query = $this->db->get()->row();
            if($query) {
                $this->session->set_flashdata('warning', 'Email is Already Exist!!!');
                redirect(base_url().'admin/profile');
            }

            $data = [
                'first_name'    => $this->input->post('first_name'),
                'last_name'     => $this->input->post('last_name'),
                'phone'         => $this->input->post('phone'),
                'username'      => $this->input->post('username'),
                'email'         => $this->input->post('email')
            ];

            $this->db->update('admins',$data,array('id' => $id));

            $this->session->set_flashdata('success', 'Data Update Successfully!!!');
            redirect(base_url().'admin/profile');

        } else {
            setError($this->form_validation->error_array());
            $this->session->set_flashdata('warning', 'Failed to Submit Request!!!');
            redirect(base_url().'admin/profile');
        }
    }

    public function update_profile_picture() {
        $this->load->helper('file_uploader');
        $this->load->helper('seo');

        $id = $this->session->userdata('id');
        $title = seo_friendly_string($this->session->userdata('username'));
        $photo = uploadFileWithCustomName('uploads/users/','photo', $title ,'*');
        if($photo && $this->session->userdata('photo') != null) {
            $link = './uploads/users/' . $this->session->userdata('photo');
//            unlink($link);
        }

        $data['photo'] = $photo;
        $status = $this->db->update('admins',$data,array('id' => $id));
        if($status) {
            $this->session->set_flashdata('success', 'Data Update Successfully!!!');
            redirect(base_url().'admin/profile');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect(base_url().'admin/profile');
        }
    }
}
