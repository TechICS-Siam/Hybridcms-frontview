<?php defined('BASEPATH') or exit('No Direct Secipt allwoed here');

class Services extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Services_model');
        $this->load->helper('seo_helper');
        $this->load->helper('file_uploader');
    }

    public function manage_ressources() {
        $data['models'] = $this->db->from('manage_ressources')->order_by('id', 'DESC')->get()->result();
        
        //  print_r($data['models']);
        //  exit();
       
        // View File
        $data['view_file']      =       'ressources';
        $data['page_title']     =       'ressources';
        $data['view_module']    =       'manage_services';
        $this->templates->admin($data);

    }


    public function manage_ressources_create() {
            // View File
            
            $data['view_file']      =       "ressources-create";
            $data['page_title']     =       'ressources Create';
            $data['view_module']    =       'manage_services';
            $this->templates->admin($data);
        }

    public function manage_ressources_store() {

        $data = array (
            'menu_icon'                   =>  $this->input->post('menu_icon'),
            'menu_link'                   =>  $this->input->post('menu_link'),
            'menu_name'             =>  $this->input->post('menu_name'),
            'menu_title'             =>  $this->input->post('menu_title'),
            'status'                  =>  $this->input->post('status')

        );

      
    
        // $this->db->where('id', 1);
        $result = $this->db->insert('manage_ressources', $data);

        if($result) {
            $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
            redirect('admin/manage-services/manage-ressources');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/manage-services/manage-ressources');
        }
    }

    public function manage_ressources_edit($id) {
        $model = $this->Services_model->manage_ressources_edit($id);
        $data['model'] = $model;
        // View File
        $data['view_file']      =       "ressources-edit";
        $data['page_title']     =       'Update ressources';
        $data['view_module']    =       'manage_services';
        $this->templates->admin($data);
    }

    public function manage_ressources_update($id) {
        
        $data = array (
            'menu_icon'                   =>  $this->input->post('menu_icon'),
            'menu_link'                   =>  $this->input->post('menu_link'),
            'menu_name'             =>  $this->input->post('menu_name'),
            'menu_title'             =>  $this->input->post('menu_title'),
            'status'                  =>  $this->input->post('status')

        );

      
       

        $result = $this->Services_model->manage_ressources_update($data, $id);
       
        if($result) {
            $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
            redirect('admin/manage-services/manage-ressources');
        } else {
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/manage-services/manage-ressources');
        }
 
    }

    public function manage_ressources_delete($id) {

        $this->db->where('id', $id);
        $result = $this->db->delete('manage_ressources');

        if($result) {
            $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
            redirect('admin/manage-services/manage-ressources');
        } else {
            exit();
            $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
            redirect('admin/manage-services/manage-ressources');
        }
    }
 


    


   public function manage_solutions() {
    $data['models'] = $this->db->from('manage_solutions')->order_by('id', 'DESC')->get()->result();
    // print_r($data['model']);
    // exit();
   
    // View File
    $data['view_file']      =       'solutions';
    $data['page_title']     =       'solutions';
    $data['view_module']    =       'manage_services';
    $this->templates->admin($data);
}


public function manage_solutions_create() {
        // View File
        
        $data['view_file']      =       "solutions-create";
        $data['page_title']     =       'solutions Create';
        $data['view_module']    =       'manage_services';
        $this->templates->admin($data);
    }

public function manage_solutions_store() {

    $data = array (
        'menu_icon'             =>  $this->input->post('menu_icon'),
        'menu_link'                   =>  $this->input->post('menu_link'),
        'menu_name'             =>  $this->input->post('menu_name'),
        'menu_title'             =>  $this->input->post('menu_title'),
        'status'                  =>  $this->input->post('status')

    );

    // $this->db->where('id', 1);
    $result = $this->db->insert('manage_solutions', $data);

    if($result) {
        $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
        redirect('admin/manage-services/manage-solutions');
    } else {
        $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
        redirect('admin/manage-services/manage-solutions');
    }
}

public function manage_solutions_edit($id) {
    $model = $this->Services_model->manage_solutions_edit($id);
    $data['model'] = $model;
    // View File
    $data['view_file']      =       "solutions-edit";
    $data['page_title']     =       'Update solutions';
    $data['view_module']    =       'manage_services';
    $this->templates->admin($data);
}

public function manage_solutions_update($id) {
    
    $data = array (
        'menu_icon'             =>  $this->input->post('menu_icon'),
        'menu_link'                   =>  $this->input->post('menu_link'),
        'menu_name'             =>  $this->input->post('menu_name'),
        'menu_title'             =>  $this->input->post('menu_title'),
        'status'                  =>  $this->input->post('status')

    );
   

    $result = $this->Services_model->manage_solutions_update($data, $id);
   
    if($result) {
        $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
        redirect('admin/manage-services/manage-solutions');
    } else {
        $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
        redirect('admin/manage-services/manage-solutions');
    }

}

public function manage_solutions_delete($id) {

    $this->db->where('id', $id);
    $result = $this->db->delete('manage_solutions');

    if($result) {
        $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
        redirect('admin/manage-services/manage-solutions');
    } else {
        exit();
        $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
        redirect('admin/manage-services/manage-solutions');
    }
}





public function manage_industries() {
    $data['models'] = $this->db->from('manage_industries')->order_by('id', 'DESC')->get()->result();
    // print_r($data['model']);
    // exit();
   
    // View File
    $data['view_file']      =       'industries';
    $data['page_title']     =       'industries';
    $data['view_module']    =       'manage_services';
    $this->templates->admin($data);
}


public function manage_industries_create() {
        // View File
        
        $data['view_file']      =       "industries-create";
        $data['page_title']     =       'industries Create';
        $data['view_module']    =       'manage_services';
        $this->templates->admin($data);
    }

public function manage_industries_store() {

    $data = array (
        'menu_icon'             =>  $this->input->post('menu_icon'),
        'menu_link'                   =>  $this->input->post('menu_link'),
        'menu_name'             =>  $this->input->post('menu_name'),
        'menu_title'             =>  $this->input->post('menu_title'),
        'status'                  =>  $this->input->post('status')

    );

    // $this->db->where('id', 1);
    $result = $this->db->insert('manage_industries', $data);

    if($result) {
        $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
        redirect('admin/manage-services/manage-industries');
    } else {
        $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
        redirect('admin/manage-services/manage-industries');
    }
}

public function manage_industries_edit($id) {
    $model = $this->Services_model->manage_industries_edit($id);
    $data['model'] = $model;
    // View File
    $data['view_file']      =       "industries-edit";
    $data['page_title']     =       'Update industries';
    $data['view_module']    =       'manage_services';
    $this->templates->admin($data);
}

public function manage_industries_update($id) {
    
    $data = array (
        'menu_icon'             =>  $this->input->post('menu_icon'),
        'menu_link'                   =>  $this->input->post('menu_link'),
        'menu_name'             =>  $this->input->post('menu_name'),
        'menu_title'             =>  $this->input->post('menu_title'),
        'status'                  =>  $this->input->post('status')

    );
   

    $result = $this->Services_model->manage_industries_update($data, $id);
   
    if($result) {
        $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
        redirect('admin/manage-services/manage-industries');
    } else {
        $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
        redirect('admin/manage-services/manage-industries');
    }

}

public function manage_industries_delete($id) {

    $this->db->where('id', $id);
    $result = $this->db->delete('manage_industries');

    if($result) {
        $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
        redirect('admin/manage-services/manage-industries');
    } else {
        exit();
        $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
        redirect('admin/manage-services/manage-industries');
    }
}





public function manage_pricing() {
    $data['models'] = $this->db->from('manage_pricing')->order_by('id', 'DESC')->get()->result();


    // print_r($data['model']);
    // exit();
   
    // View File
    $data['view_file']      =       'pricing';
    $data['page_title']     =       'pricing';
    $data['view_module']    =       'manage_services';
    $this->templates->admin($data);
}


public function manage_pricing_create() {
        // View File
        
        $data['view_file']      =       "pricing-create";
        $data['page_title']     =       'pricing Create';
        $data['view_module']    =       'manage_services';
        $this->templates->admin($data);
    }

public function manage_pricing_store() {

    $data = array (
        'menu_icon'             =>  $this->input->post('menu_icon'),
        'menu_link'                   =>  $this->input->post('menu_link'),
        'menu_name'             =>  $this->input->post('menu_name'),
        'menu_title'             =>  $this->input->post('menu_title'),
        'status'                  =>  $this->input->post('status')

    );

    // $this->db->where('id', 1);
    $result = $this->db->insert('manage_pricing', $data);

    if($result) {
        $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
        redirect('admin/manage-services/manage-pricing');
    } else {
        $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
        redirect('admin/manage-services/manage-pricing');
    }
}

public function manage_pricing_edit($id) {
    $model = $this->Services_model->manage_pricing_edit($id);
    $data['model'] = $model;
    // View File
    $data['view_file']      =       "pricing-edit";
    $data['page_title']     =       'Update pricing';
    $data['view_module']    =       'manage_services';
    $this->templates->admin($data);
}

public function manage_pricing_update($id) {
    
    $data = array (
        'menu_icon'                   =>  $this->input->post('menu_icon'),
        'menu_link'                   =>  $this->input->post('menu_link'),
        'menu_name'                   =>  $this->input->post('menu_name'),
        'menu_title'                  =>  $this->input->post('menu_title'),
        'status'                      =>  $this->input->post('status')

    );
   

    $result = $this->Services_model->manage_pricing_update($data, $id);
   
    if($result) {
        $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
        redirect('admin/manage-services/manage-pricing');
    } else {
        $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
        redirect('admin/manage-services/manage-pricing');
    }

}

public function manage_pricing_delete($id) {

    $this->db->where('id', $id);
    $result = $this->db->delete('manage_pricing');

    if($result) {
        $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
        redirect('admin/manage-services/manage-pricing');
    } else {
        exit();
        $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
        redirect('admin/manage-services/manage-pricing');
    }
}





public function manage_company() {
    $data['models'] = $this->db->from('manage_company')->order_by('id', 'DESC')->get()->result();

    // print_r($data['model']);
    // exit();
   
    // View File
    $data['view_file']      =       'company';
    $data['page_title']     =       'company';
    $data['view_module']    =       'manage_services';
    $this->templates->admin($data);
}


public function manage_company_create() {
        // View File
        
        $data['view_file']      =       "company-create";
        $data['page_title']     =       'company Create';
        $data['view_module']    =       'manage_services';
        $this->templates->admin($data);
    }

public function manage_company_store() {

    $data = array (
        'menu_icon'             =>  $this->input->post('menu_icon'),
        'menu_link'             =>  $this->input->post('menu_link'),
        'menu_name'             =>  $this->input->post('menu_name'),
        'menu_title'            =>  $this->input->post('menu_title'),
        'status'                =>  $this->input->post('status')

    );

    // $this->db->where('id', 1);
    $result = $this->db->insert('manage_company', $data);

    if($result) {
        $this->session->set_flashdata('success', 'Data Insert Successfully!!!');
        redirect('admin/manage-services/manage-company');
    } else {
        $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
        redirect('admin/manage-services/manage-company');
    }
}

public function manage_company_edit($id) {
    $model = $this->Services_model->manage_company_edit($id);
    $data['model'] = $model;
    // View File
    $data['view_file']      =       "company-edit";
    $data['page_title']     =       'Update company';
    $data['view_module']    =       'manage_services';
    $this->templates->admin($data);
}

public function manage_company_update($id) {
    
    $data = array (
        'menu_icon'             =>  $this->input->post('menu_icon'),
        'menu_link'                   =>  $this->input->post('menu_link'),
        'menu_name'             =>  $this->input->post('menu_name'),
        'menu_title'             =>  $this->input->post('menu_title'),
        'status'                  =>  $this->input->post('status')

    );
   

    $result = $this->Services_model->manage_company_update($data, $id);
   
    if($result) {
        $this->session->set_flashdata('success', 'Data Updated Successfully!!!');
        redirect('admin/manage-services/manage-company');
    } else {
        $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
        redirect('admin/manage-services/manage-company');
    }

}

public function manage_company_delete($id) {

    $this->db->where('id', $id);
    $result = $this->db->delete('manage_company');

    if($result) {
        $this->session->set_flashdata('success', 'Data Delete Successfully!!!');
        redirect('admin/manage-services/manage-company');
    } else {
        exit();
        $this->session->set_flashdata('warning', 'Something is wrong. Please Try Again!!!');
        redirect('admin/manage-services/manage-company');
    }
}

}


