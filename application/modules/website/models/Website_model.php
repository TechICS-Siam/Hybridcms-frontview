<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Website_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function solutions_menu_update() {
        $this->db->select('*');
        $this->db->from('solutions_menu');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function industries_menu_update() {
        $this->db->select('*');
        $this->db->from('industries_menu');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function pricing_menu_update() {
        $this->db->select('*');
        $this->db->from('pricing_menu');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function company_menu_update() {
        $this->db->select('*');
        $this->db->from('company_menu');
        $query = $this->db->get();
        return $query->result_array();
    }


    public function section_one() {
        $this->db->select('*');
        $this->db->from('section_one');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function section_two() {
        $this->db->select('*');
        $this->db->from('section_two');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function section_three() {
        $this->db->select('*');
        $this->db->from('section_three');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function section_five() {
        $this->db->select('*');
        $this->db->from('section_five');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function custom_table() {
        $this->db->select('*');
        $this->db->from('custom_table');
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function custom_table_sec_five() {
        $row = $this->db->from('custom_table')->where('page', 'section-five')->get()->row();
        return $row;
    }
    public function custom_table_sec_four() {
        $row = $this->db->from('custom_table')->where('page', 'section-four')->get()->row();
        return $row;
    }
    public function section_four() {
        $this->db->select('*');
        $this->db->from('section_four');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function section_seven() {
        $this->db->select('*');
        $this->db->from('section_seven');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function custom_table_sec_seven() {
        $model = $this->db->from('custom_table')->where('page', 'section-seven')->get()->row();
        return $model;
     
    }
    
    public function section_eight() {
        $this->db->select('*');
        $this->db->from('section_eight');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function section_nine() {
        $this->db->select('*');
        $this->db->from('section_nine');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function section_ten() {
        $this->db->select('*');
        $this->db->from('section_ten');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function section_eleven() {
        $this->db->select('*');
        $this->db->from('section_eleven');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function custom_table_sec_ten() {
        $row = $this->db->from('custom_table')->where('page', 'section-ten')->get()->row();
        return $row;
    }
    public function section_twelve() {
        $this->db->select('*');
        $this->db->from('section_twelve');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_header_text_update() {
        $this->db->select('*');
        $this->db->from('library');
        $query = $this->db->get();
        return $query->result_array(); 
    }

    public function about_update() {
        $this->db->select('*');
        $this->db->from('about_us');
        $query = $this->db->get();
        return $query->result_array();
    }
     public function blog() {
       
    }
    public function customer_stories() {
       
    }

    

    public function faq_update() {
        $this->db->select('*');
        $this->db->from('faq_info');
        $query = $this->db->get();
        return $query->result_array(); 
    }

    public function faq_answer() {
        $this->db->select('*');
        $this->db->from('faq_menu_tbl');
        $query = $this->db->get();
        return $query->result_array(); 
    }
    public function get_help_page() {
        $this->db->select('*');
        $this->db->from('help_info');
        $query = $this->db->get();
        return $query->result_array(); 
    }

    public function get_help_menu() {
        $this->db->select('*');
        $this->db->from('help_menu_tbl');
        $query = $this->db->get();
        return $query->result_array(); 
    }

    public function investor_relation() {
       

    }

    public function get_product_features_update() {
        $this->db->select('*');
        $this->db->from('solutions_update');
        $query = $this->db->get();
        return $query->row_array();     
    } 
    
    public function get_product_features_sec_one() {
        $this->db->select('*');
        $this->db->from('product_features_crud_one');
        $query = $this->db->get();
        return $query->result_array();     
    }

    public function get_product_features_sec_two() {
        $this->db->select('*');
        $this->db->from('product_features_crud_two');
        $query = $this->db->get();
        return $query->result_array();     
    }
    
    public function get_product_features_sec_three() {
        $this->db->select('*');
        $this->db->from('product_features_crud_three');
        $query = $this->db->get();
        return $query->result_array();     
    }
    public function get_product_features_sec_five() {
        $this->db->select('*');
        $this->db->from('product_features_crud_five');
        $query = $this->db->get();
        return $query->result_array();     
    }
    public function get_investor_relation_update() {
        $this->db->select('*');
        $this->db->from('investor_relation_update');
        $query = $this->db->get();
        return $query->row_array();   
        
    }
    public function get_investor_relation_sec_one() {
        $this->db->select('*');
        $this->db->from('investor_relation_one');
        $query = $this->db->get();
        return $query->result_array();       
    }

    public function get_investor_relation_sec_two() {
        $this->db->select('*');
        $this->db->from('investor_relation_two');
        $query = $this->db->get();
        return $query->result_array();       
    }

    public function get_investor_relation_sec_three() {
        $this->db->select('*');
        $this->db->from('investor_relation_three');
        $query = $this->db->get();
        return $query->result_array();       
    }

    public function newsroom() {
        
    }
    
    public function get_newsroom_update() {
        $this->db->select('*');
        $this->db->from('newsroom_info');
        $query = $this->db->get();
        return $query->row_array(); 
    }
    
    public function get_newsroom_section_one() {
        $this->db->select('*');
        $this->db->from('news_main_tbl');
        $query = $this->db->get();
        return $query->result_array();  
    }
    public function get_newsroom_section_two() {
        $this->db->select('*');
        $this->db->from('news_sub_tbl');
        $query = $this->db->get();
        return $query->result_array();  
    }
    
    public function partner() {
       
    }
    public function pricing() {
       
    }

  

    public function get_pricing_section_one() {
        $this->db->select('*');
        $this->db->from('pricing_update');
        $query = $this->db->get();
        return $query->row_array(); 
    }
    public function get_pricing_section_two() {
        $this->db->select('*');
        $this->db->from('pricing_sub_tbl');
        $query = $this->db->get();
        return $query->result_array(); 
    }

    public function get_privacy_update() {
        $this->db->select('*');
        $this->db->from('privacy_policy');
        $query = $this->db->get();
        return $query->result_array(); 
    }
    public function product_features() {
       
    }
    public function registretion() {
       
    }
    public function login() {
       
    }
    public function solution_sub() {
       
    }

    public function get_solution_sub__one_update() {
        $this->db->select('*');
        $this->db->from('solution_sub_one');
        $query = $this->db->get();
        return $query->row_array(); 
    }

    public function get_solution_sub_one() {
        $this->db->select('*');
        $this->db->from('solution_sub_one_crd');
        $query = $this->db->get();
        return $query->result_array(); 
    }

    
    public function get_trems_update() {
        $this->db->select('*');
        $this->db->from('terms');
        $query = $this->db->get();
        return $query->result_array(); 
    }

    public function get_webinars_gallery() {
        $this->db->select('*');
        $this->db->from('webinar_tbl');
        $query = $this->db->get();
        return $query->result_array();  
    }

    public function get_partner_update() {

        $this->db->select('*');
        $this->db->from('partner_update');
        $query = $this->db->get();
        return $query->row_array();
       
    }
    public function get_partner_section_one() {
        $this->db->select('*');
        $this->db->from('partner_sec_one');
        $query = $this->db->get();
        return $query->result_array();
       
    }

    public function get_partner_section_two() {
        $this->db->select('*');
        $this->db->from('partner_sec_two');
        $query = $this->db->get();
        return $query->result_array();

       
    }

    public function get_partner_section_three() {

        $this->db->select('*');
        $this->db->from('partner_sec_three');
        $query = $this->db->get();
        return $query->result_array();
       
    }

    public function get_partner_section_four() {
        $this->db->select('*');
        $this->db->from('partner_sec_four');
        $query = $this->db->get();
        return $query->result_array();

       
    }

    public function get_partner_section_five() {
        $this->db->select('*');
        $this->db->from('partner_sec_five');
        $query = $this->db->get();
        return $query->result_array();

       
    }
    public function get_partner_section_six() {
        $this->db->select('*');
        $this->db->from('partner_sec_six');
        $query = $this->db->get();
        return $query->result_array();
       
    }

    public function get_customer_stories_gallery() {
        $this->db->select('*');
        $this->db->from('customer_stories');
        $query = $this->db->get();
        return $query->result_array(); 
    }
    
    public function get_contact_page() {
        $this->db->select('*');
        $this->db->from('contact');
        $query = $this->db->get();
        return $query->result_array(); 
    }

    public function get_footer_update() {
        $this->db->select('*');
        $this->db->from('library');
        $query = $this->db->get();
        return $query->result_array(); 
    }


}
