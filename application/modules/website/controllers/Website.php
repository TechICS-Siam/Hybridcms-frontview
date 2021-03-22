<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Website_model');
        $this->load->module('software_settings');
        $this->load->module('footer');
        $this->load->module('slider');
        $this->load->module('clients');
        $this->load->module('whychoose');
        $this->load->module('service');
        $this->load->module('testimonial');
        $this->load->module('milestone');
        $this->load->module('blog');
    }

    public function index()
    {
//  ---------------------global start -----------------------------------
        
     
        $data['section_one'] = $this->Website_model->section_one();
        $data['section_two'] = $this->Website_model->section_two();
        $data['section_three'] = $this->Website_model->section_three();
        $four = $this->Website_model->section_four(); 
        $data['section_four'] = $four;
        $data['section_five'] = $this->Website_model->section_five(); 
        $data['custom_table'] = $this->Website_model->custom_table(); 
        $data['custom_table_sec_five'] = $this->Website_model->custom_table_sec_five();
        $data['custom_table_sec_four'] = $this->Website_model->custom_table_sec_four(); 
        $data['section_seven'] = $this->Website_model->section_seven();
        $data['custom_table_sec_seven'] = $this->Website_model->custom_table_sec_seven();
        $data['section_eight'] = $this->Website_model->section_eight();
        $data['section_nine'] = $this->Website_model->section_nine();
        $data['section_ten'] = $this->Website_model->section_ten(); 
        $data['section_eleven'] = $this->Website_model->section_eleven();
        $data['custom_table_sec_ten'] = $this->Website_model->custom_table_sec_ten(); 
        $data['section_twelve'] = $this->Website_model->section_twelve();

        // echo '<pre>';print_r($data['custom_table_sec_five']);exit();
        $data['footer_update'] = $this->Website_model->get_footer_update();

        $data['header_text'] = $this->Website_model->get_header_text_update();

        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();

        $this->load->view('layout/home/home', $data);
    }

    public function about_us()
    {
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();

        $data['section_one'] = $this->Website_model->section_one();
        $data['section_two'] = $this->Website_model->section_two();
        $data['about_us'] = $this->Website_model->about_update();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        
        $this->load->view('layout/about/about', $data);
    }
    


    public function contact()
    {
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();

        $data['section_one'] = $this->Website_model->section_one();
        $data['contact_update'] = $this->Website_model->get_contact_page();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/contact/contact', $data);
    }

    public function customer_stories()
    {
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();
        $data['customer_stories_gallery'] = $this->Website_model->get_customer_stories_gallery();

        $data['section_one'] = $this->Website_model->section_one();
        // $data['about_page'] = $this->Website_model->get_about_page();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/customer-stories/customer_stories', $data);
    }

    public function faq()

    {
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();

        $data['section_one'] = $this->Website_model->section_one();
        $data['faq_info_update'] = $this->Website_model->faq_update();
        $data['faq_answer'] = $this->Website_model->faq_answer();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/faq/faq', $data);
    }
 
    public function investor_relation()
    
    {
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();
             
        $data['investor_relation_update'] = $this->Website_model->get_investor_relation_update();

        $data['investor_relation_sec_one'] = $this->Website_model->get_investor_relation_sec_one();
        $data['investor_relation_sec_two'] = $this->Website_model->get_investor_relation_sec_two();
        $data['investor_relation_sec_three'] = $this->Website_model->get_investor_relation_sec_three();

        
        // $data['about_page'] = $this->Website_model->get_about_page();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/investor-relation/investor-relation', $data);
    }
    public function newsroom()
    {
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();


        $data['newsroom_update'] = $this->Website_model->get_newsroom_update();
        $data['newsroom_section_one'] = $this->Website_model->get_newsroom_section_one();
        $data['newsroom_section_two'] = $this->Website_model->get_newsroom_section_two();

        // $data['about_page'] = $this->Website_model->get_about_page();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/newsroom/newsroom', $data);
    }

    public function pricing()
    {
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();

        $data['pricing_section_one'] = $this->Website_model->get_pricing_section_one();
        $data['pricing_section_two'] = $this->Website_model->get_pricing_section_two();

        $data['section_one'] = $this->Website_model->section_one();
        // $data['about_page'] = $this->Website_model->get_about_page();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/pricing/pricing', $data);
    }
    public function privacy_policy()
    {
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();


        $data['privacy_update'] = $this->Website_model->get_privacy_update();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/privacy-policy/privacy_policy', $data);
    }
    public function product_features()
    {
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();

        $data['product_features_update'] = $this->Website_model->get_product_features_update();
        $data['product_features_sec_one'] = $this->Website_model->get_product_features_sec_one();
        $data['product_features_sec_two'] = $this->Website_model->get_product_features_sec_two();
        $data['product_features_sec_three'] = $this->Website_model->get_product_features_sec_three();
        $data['product_features_sec_five'] = $this->Website_model->get_product_features_sec_five();

        
        $data['section_one'] = $this->Website_model->section_one();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/product-features/product_features', $data);
    }

    public function solution_sub()
    {
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();
        
        $data['solution_sub_one_update'] = $this->Website_model->get_solution_sub__one_update();

        $data['solution_sub_one'] = $this->Website_model->get_solution_sub_one();

        $data['section_one'] = $this->Website_model->section_one();
        // $data['about_page'] = $this->Website_model->get_about_page();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/solution-sub/solution_sub', $data);
    }
    public function terms()
    {
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();

        $data['section_one'] = $this->Website_model->section_one();
        $data['trems_update'] = $this->Website_model->get_trems_update();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/terms/terms', $data);
    }
    public function webinars()
    {
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();

        $data['webinars_gallery'] = $this->Website_model->get_webinars_gallery();

        $data['section_one'] = $this->Website_model->section_one();
        // $data['about_page'] = $this->Website_model->get_about_page();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/webinars/webinars', $data);
    }

    public function partner()
    {

        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();

        $data['section_one'] = $this->Website_model->section_one();
        $data['section_two'] = $this->Website_model->section_two();
        // $data['about_page'] = $this->Website_model->get_about_page();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        


        $data['partner_update'] = $this->Website_model->get_partner_update();
        $data['partner_sec_one'] = $this->Website_model->get_partner_section_one();
        $data['partner_sec_two'] = $this->Website_model->get_partner_section_two();
        $data['partner_sec_three'] = $this->Website_model->get_partner_section_three();
        $data['partner_sec_four'] = $this->Website_model->get_partner_section_four();
        $data['partner_sec_five'] = $this->Website_model->get_partner_section_five();
        $data['partner_sec_six'] = $this->Website_model->get_partner_section_six();

        $data['footer_update'] = $this->Website_model->get_footer_update();
        // print_r($data['partner_update']['title_one']);
        // exit();
       
        $this->load->view('layout/partner/partner', $data);
    }

    public function footer_info()
    {
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();

        $data['footer_update'] = $this->Website_model->get_footer_update();
        // $data['about_page'] = $this->Website_model->get_about_page();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        
        $this->load->view('layout/include/footer', $data);
    }

    public function blog(){
        $data['solutions_menu'] = $this->Website_model->solutions_menu_update();
        $data['industries_menu'] = $this->Website_model->industries_menu_update();
        $data['pricing_menu'] = $this->Website_model->pricing_menu_update();
        $data['company_menu'] = $this->Website_model->company_menu_update();
        $data['header_text'] = $this->Website_model->get_header_text_update();

        // $blogs = Blog_model::with('user')->orderBy('id', 'desc')->take(10);

        $data['section_one'] = $this->Website_model->section_one();
        $blogs = $this->db->from('blog_menu_tbl')->order_by('id', 'DESC')->get()->result_array();
        // echo '<pre>';print_r($blogs);exit();
        // $data['about_page'] = $this->Website_model->get_about_page();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();

        $tempArray = $blogs;

        $formedData = array();
        $looper = 1;

        while(count($tempArray)){
            if($looper == 1){
                $looper = 2;
                array_push($formedData, array_splice($tempArray, 0, 4));
            }else{
                array_push($formedData, array_splice($tempArray, 0, 1));
                $looper =1;
            }
        }
        $data['blogs'] = $formedData;

        $this->load->view('layout/blog/blog', $data);

        // if (!($this->input->get('key') == null)) { 
        //     $blogs = $blogs->where('title', 'like', '%' . $this->input->get('key') . '%')->Where('description', 'like', '%' . $this->input->get('key') . '%');
        // }

        // if(!( $this->input->get('tag') == null )){
        //     $blogs = $blogs->where('tags', 'like', '%' . $this->input->get('tag') . '%');
        // }

        // if (!($this->input->get('category') == null)) {
        //     $id = icsDecode($this->input->get('category'));
        //     $blogs = $blogs->where('category_id', $id);
        // }

        // $this->data['blogs'] = $blogs->get()->toArray();
        
       
        // $this->data['blogs'] = $formedData;
    	// _renderView('index', $this->data);
        
    }

    public function help()
    {

        $data['help_info'] = $this->Website_model->get_help_page();
        $data['help_menu'] = $this->Website_model->get_help_menu();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/help/help', $data);
    }


    public function registretion()
    {

        // $data['about_page'] = $this->Website_model->get_about_page();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/registretion/registretion');
    }
    public function login()
    {

        // $data['about_page'] = $this->Website_model->get_about_page();
        // $data['about_team'] = $this->Website_model->get_about_page_team();
        $data['footer_update'] = $this->Website_model->get_footer_update();
        $this->load->view('layout/login/login');
    }


   
}
