<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Footer extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Footer_model');
    }
    
    public function footer_info() {
        $data['footer_info'] = array('content' => 'Hello World');
        
        $data['view_file'] = "footer_info";
        $this->templates->admin($data);
    }

    public function update() {
        
       
            $data = array
                (
                    'address' => $this->input->post('address'),
                    'content' => $this->input->post('content'),
                
                );
            
            $this->db->update('footer', $data);

            $this->session->set_flashdata('success', 'Successfully updated the Footer Info');
            redirect('footer/footer_info');
        
        
        
    }
 
}
