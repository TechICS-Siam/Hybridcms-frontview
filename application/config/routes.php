<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'website';
$route['404_override'] = 'Error_404/error_page';
$route['translate_uri_dashes'] = FALSE;

// default route
$route['dashboard'] = 'dashboard';
$route['administrator'] = 'administrator';

// profile
$route['admin/profile']                             = 'user/profile';
$route['admin/update-profile']                      = 'user/update_profile';
$route['admin/update-profile-picture']              = 'user/update_profile_picture';

// user
$route['admin/users']['get']                        = 'user/index';
$route['admin/user/create']['get']                  = 'user/create';
$route['admin/user/store']['post']                  = 'user/store';
$route['admin/user/edit/(:num)']['get']             = 'user/edit/$1';
$route['admin/user/update/(:num)']['post']          = 'user/update/$1';
$route['admin/user/delete/(:num)']['get']           = 'user/delete/$1';
$route['admin/user/change-status/(:num)']['get']    = 'user/status/$1';

// Settings
$route['admin/settings/software-settings']['get']               = 'settings/software_settings';
$route['admin/settings/update-software-settings']['post']       = 'settings/update_software_settings';
$route['admin/settings/social-settings']['get']                 = 'settings/social_settings';
$route['admin/settings/update-social-settings']['post']         = 'settings/update_social_settings';
$route['admin/settings/administrator-login-settings']['get']    = 'settings/admin_login';
$route['admin/settings/administrator-login-update']['post']     = 'settings/update_admin_login';

// home-page/section-one
$route['admin/home-page/section-one']['get'] = 'homepage/section_one';
$route['admin/home-page/update-section-one']['post'] = 'homepage/update_section_one';
$route['admin/home-page/section-two']['get'] = 'homepage/section_two';
$route['admin/home-page/section-two-create']['get'] = 'homepage/section_two_create';
$route['admin/home-page/section-two-store']['post'] = 'homepage/section_two_store';
$route['admin/home-page/section-two-edit/(:num)']['get'] = 'homepage/section_two_edit/$1';
$route['admin/home-page/section-two-update/(:num)']['post'] = 'homepage/section_two_update/$1';
$route['admin/home-page/section-two-delete/(:num)']['get'] = 'homepage/section_two_delete/$1';
$route['admin/home-page/section-three']['get'] = 'homepage/section_three';
$route['admin/home-page/update-section-three']['post'] = 'homepage/update_section_three';
$route['admin/home-page/section-four']['get'] = 'homepage/section_four';
$route['admin/home-page/update-section-four']['post'] = 'homepage/update_section_four';
$route['admin/home-page/section-four-create']['get'] = 'homepage/section_four_create';
$route['admin/home-page/section-four-store']['post'] = 'homepage/section_four_store';
$route['admin/home-page/section-four-edit/(:num)']['get'] = 'homepage/section_four_edit/$1';
$route['admin/home-page/section-four-update/(:num)']['post'] = 'homepage/section_four_update/$1';
$route['admin/home-page/section-four-delete/(:num)']['get'] = 'homepage/section_four_delete/$1';
$route['admin/home-page/section-five']['get'] = 'homepage/section_five';
$route['admin/home-page/update-section-five']['post'] = 'homepage/update_section_five';
$route['admin/home-page/section-five-create']['get'] = 'homepage/section_five_create';
$route['admin/home-page/section-five-store']['post'] = 'homepage/section_five_store';
$route['admin/home-page/section-five-edit/(:num)']['get'] = 'homepage/section_five_edit/$1';
$route['admin/home-page/section-five-update/(:num)']['post'] = 'homepage/section_five_update/$1';
$route['admin/home-page/section-five-delete/(:num)']['get'] = 'homepage/section_five_delete/$1';
$route['admin/home-page/section-six']['get'] = 'homepage/section_six';
$route['admin/home-page/update-section-six']['post'] = 'homepage/update_section_six';
$route['admin/home-page/section-seven']['get'] = 'homepage/section_seven';
$route['admin/home-page/update-section-seven']['post'] = 'homepage/update_section_seven';
$route['admin/home-page/section-seven-create']['get'] = 'homepage/section_seven_create';
$route['admin/home-page/section-seven-store']['post'] = 'homepage/section_seven_store';
$route['admin/home-page/section-seven-edit/(:num)']['get'] = 'homepage/section_seven_edit/$1';
$route['admin/home-page/section-seven-update/(:num)']['post'] = 'homepage/section_seven_update/$1';
$route['admin/home-page/section-seven-delete/(:num)']['get'] = 'homepage/section_seven_delete/$1';
$route['admin/home-page/section-eight']['get'] = 'homepage/section_eight';
$route['admin/home-page/update-section-eight']['post'] = 'homepage/update_section_eight';
$route['admin/home-page/section-nine']['get'] = 'homepage/section_nine';
$route['admin/home-page/update-section-nine']['post'] = 'homepage/update_section_nine';

$route['admin/home-page/section-ten']['get'] = 'homepage/section_ten';
$route['admin/home-page/update-section-ten']['post'] = 'homepage/update_section_ten';

$route['admin/home-page/section-ten/create']['get'] = 'homepage/section_ten_create';
$route['admin/home-page/section-ten/store']['post'] = 'homepage/section_ten_store';
$route['admin/home-page/section-ten/edit/(:num)']['get'] = 'homepage/section_ten_edit/$1';
$route['admin/home-page/section-ten/update/(:num)']['post'] = 'homepage/section_ten_update/$1';
$route['admin/home-page/section-ten/delete/(:num)']['get'] = 'homepage/section_ten_delete/$1';

$route['admin/home-page/section-eleven']['get'] = 'homepage/section_eleven';
$route['admin/home-page/update-section-eleven']['post'] = 'homepage/update_section_eleven';

$route['admin/home-page/section-twelve']['get'] = 'homepage/section_twelve';
$route['admin/home-page/update-section-twelve']['post'] = 'homepage/update_section_twelve';

// serices manage


$route['admin/manage-services/manage-ressources']['get'] = 'manage_services/services/manage_ressources';
$route['admin/manage-services/manage-ressources-create']['get'] = 'manage_services/services/manage_ressources_create/$1';
$route['admin/manage-services/manage-ressources-store']['post'] = 'manage_services/services/manage_ressources_store';
$route['admin/manage-services/manage-ressources-edit/(:num)']['get'] = 'manage_services/services/manage_ressources_edit/$1';
$route['admin/manage-services/manage-ressources-update/(:num)']['post'] = 'manage_services/services/manage_ressources_update/$1';
$route['admin/manage-services/manage-ressources-delete/(:num)']['get'] = 'manage_services/services/manage_ressources_delete/$1';

$route['admin/manage-services/manage-solutions']['get'] = 'manage_services/services/manage_solutions';
$route['admin/manage-services/manage-solutions-create']['get'] = 'manage_services/services/manage_solutions_create/$1';
$route['admin/manage-services/manage-solutions-store']['post'] = 'manage_services/services/manage_solutions_store';
$route['admin/manage-services/manage-solutions-edit/(:num)']['get'] = 'manage_services/services/manage_solutions_edit/$1';
$route['admin/manage-services/manage-solutions-update/(:num)']['post'] = 'manage_services/services/manage_solutions_update/$1';
$route['admin/manage-services/manage-solutions-delete/(:num)']['get'] = 'manage_services/services/manage_solutions_delete/$1';

$route['admin/manage-services/manage-industries']['get'] = 'manage_services/services/manage_industries';
$route['admin/manage-services/manage-industries-create']['get'] = 'manage_services/services/manage_industries_create/$1';
$route['admin/manage-services/manage-industries-store']['post'] = 'manage_services/services/manage_industries_store';
$route['admin/manage-services/manage-industries-edit/(:num)']['get'] = 'manage_services/services/manage_industries_edit/$1';
$route['admin/manage-services/manage-industries-update/(:num)']['post'] = 'manage_services/services/manage_industries_update/$1';
$route['admin/manage-services/manage-industries-delete/(:num)']['get'] = 'manage_services/services/manage_industries_delete/$1';

$route['admin/manage-services/manage-pricing']['get'] = 'manage_services/services/manage_pricing';
$route['admin/manage-services/manage-pricing-create']['get'] = 'manage_services/services/manage_pricing_create/$1';
$route['admin/manage-services/manage-pricing-store']['post'] = 'manage_services/services/manage_pricing_store';
$route['admin/manage-services/manage-pricing-edit/(:num)']['get'] = 'manage_services/services/manage_pricing_edit/$1';
$route['admin/manage-services/manage-pricing-update/(:num)']['post'] = 'manage_services/services/manage_pricing_update/$1';
$route['admin/manage-services/manage-pricing-delete/(:num)']['get'] = 'manage_services/services/manage_pricing_delete/$1';

$route['admin/manage-services/manage-company']['get'] = 'manage_services/services/manage_company';
$route['admin/manage-services/manage-company-create']['get'] = 'manage_services/services/manage_company_create/$1';
$route['admin/manage-services/manage-company-store']['post'] = 'manage_services/services/manage_company_store';
$route['admin/manage-services/manage-company-edit/(:num)']['get'] = 'manage_services/services/manage_company_edit/$1';
$route['admin/manage-services/manage-company-update/(:num)']['post'] = 'manage_services/services/manage_company_update/$1';
$route['admin/manage-services/manage-company-delete/(:num)']['get'] = 'manage_services/services/manage_company_delete/$1';



// Sub Menu
$route['admin/website-pages/about']['get'] = 'about_us/about';
$route['admin/website-pages/about-update']['post'] = 'about_us/about_update';

$route['admin/website-pages/terms']['get'] = 'terms/terms/terms';
$route['admin/website-pages/terms-update']['post'] = 'terms/terms/terms_update';

$route['admin/website-pages/privacy-policy']['get'] = 'privacy-policy/privacy_policy/privacy_policy';
$route['admin/website-pages/privacy-policy-update']['post'] = 'privacy-policy/privacy_policy/privacy_policy_update';

$route['admin/website-pages/contact']['get'] = 'contact/contact/contact';
$route['admin/website-pages/contact-update']['post'] = 'contact/contact/contact_update';

$route['admin/website-pages/blog']['get'] = 'blog/blog/blog_info';
$route['admin/website-pages/blog']['post'] = 'blog/blog/blog_info';
$route['admin/website-pages/blog-info-update']['post'] = 'blog/blog/blog_info_update';
$route['admin/website-pages/blog-create']['get'] = 'blog/blog_create/$1';
$route['admin/website-pages/blog-store']['post'] = 'blog/blog/blog_store';
$route['admin/website-pages/blog-edit/(:num)']['get'] = 'blog/blog/blog_edit/$1';
$route['admin/website-pages/blog-update/(:num)']['post'] = 'blog/blog/blog_update/$1';
$route['admin/website-pages/blog-delete/(:num)']['get'] = 'blog/blog/blog_delete/$1';


$route['admin/website-pages/faq']['get'] = 'faq/faq/faq_info';
$route['admin/website-pages/faq']['post'] = 'faq/faq/faq_info';
$route['admin/website-pages/faq-info-update']['post'] = 'faq/faq/faq_info_update';
$route['admin/website-pages/faq-create']['get'] = 'faq/faq_create/$1';
$route['admin/website-pages/faq-store']['post'] = 'faq/faq/faq_store';
$route['admin/website-pages/faq-edit/(:num)']['get'] = 'faq/faq/faq_edit/$1';
$route['admin/website-pages/faq-update/(:num)']['post'] = 'faq/faq/faq_update/$1';
$route['admin/website-pages/faq-delete/(:num)']['get'] = 'faq/faq/faq_delete/$1';

$route['admin/website-pages/help']['get'] = 'help/help/help_info';
$route['admin/website-pages/help']['post'] = 'help/help/help_info';
$route['admin/website-pages/help-info-update']['post'] = 'help/help/help_info_update';
$route['admin/website-pages/help-create']['get'] = 'help/help_create/$1';
$route['admin/website-pages/help-store']['post'] = 'help/help/help_store';
$route['admin/website-pages/help-edit/(:num)']['get'] = 'help/help/help_edit/$1';
$route['admin/website-pages/help-update/(:num)']['post'] = 'help/help/help_update/$1';
$route['admin/website-pages/help-delete/(:num)']['get'] = 'help/help/help_delete/$1';


$route['admin/solutions/solutions-submenu']['get'] = 'solutions/solutions/solutions_submenu';
$route['admin/solutions/solutions-submenu-update']['post'] = 'solutions/solutions/solutions_submenu_update';
$route['admin/solutions/solution-sub']['get'] = 'solutions/solutions/solution_sub';
$route['admin/solutions/solution-sub-one-update']['post'] = 'solutions/solutions/solution_sub_one_update';
$route['admin/solutions/solution-sub-create']['get'] = 'solutions/solutions/solution_sub_create/$1';
$route['admin/solutions/solution-sub-store']['post'] = 'solutions/solutions/solution_sub_store';
$route['admin/solutions/solution-sub-edit/(:num)']['get'] = 'solutions/solutions/solution_sub_edit/$1';
$route['admin/solutions/solution-sub-update/(:num)']['post'] = 'solutions/solutions/solution_sub_update/$1';
$route['admin/solutions/solution-sub-delete/(:num)']['get'] = 'solutions/solutions/solution_sub_delete/$1';


$route['admin/solutions/product-features']['get'] = 'solutions/solutions/product_features';

$route['admin/solutions/product-features-first-update']['post'] = 'solutions/solutions/product_features_first_update';
$route['admin/solutions/product-features-one-create']['get'] = 'solutions/solutions/product_features_one_create/$1';
$route['admin/solutions/product-features-one-store']['post'] = 'solutions/solutions/product_features_one_store';
$route['admin/solutions/product-features-one-edit/(:num)']['get'] = 'solutions/solutions/product_features_one_edit/$1';
$route['admin/solutions/product-features-one-update/(:num)']['post'] = 'solutions/solutions/product_features_one_update/$1';
$route['admin/solutions/product-features-one-delete/(:num)']['get'] = 'solutions/solutions/product_features_one_delete/$1';

$route['admin/solutions/product-features-second-update']['post'] = 'solutions/solutions/product_features_second_update';
$route['admin/solutions/product-features-two-create']['get'] = 'solutions/solutions/product_features_two_create/$1';
$route['admin/solutions/product-features-two-store']['post'] = 'solutions/solutions/product_features_two_store';
$route['admin/solutions/product-features-two-edit/(:num)']['get'] = 'solutions/solutions/product_features_two_edit/$1';
$route['admin/solutions/product-features-two-update/(:num)']['post'] = 'solutions/solutions/product_features_two_update/$1';
$route['admin/solutions/product-features-two-delete/(:num)']['get'] = 'solutions/solutions/product_features_two_delete/$1';

$route['admin/solutions/product-features-third-update']['post'] = 'solutions/solutions/product_features_third_update';
$route['admin/solutions/product-features-three-create']['get'] = 'solutions/solutions/product_features_three_create/$1';
$route['admin/solutions/product-features-three-store']['post'] = 'solutions/solutions/product_features_three_store';
$route['admin/solutions/product-features-three-edit/(:num)']['get'] = 'solutions/solutions/product_features_three_edit/$1';
$route['admin/solutions/product-features-three-update/(:num)']['post'] = 'solutions/solutions/product_features_three_update/$1';
$route['admin/solutions/product-features-three-delete/(:num)']['get'] = 'solutions/solutions/product_features_three_delete/$1';


$route['admin/solutions/product-features-fourth-update']['post'] = 'solutions/solutions/product_features_fourth_update';


$route['admin/solutions/product-features-fifth-update']['post'] = 'solutions/solutions/product_features_fifth_update';
$route['admin/solutions/product-features-five-create']['get'] = 'solutions/solutions/product_features_five_create/$1';
$route['admin/solutions/product-features-five-store']['post'] = 'solutions/solutions/product_features_five_store';
$route['admin/solutions/product-features-five-edit/(:num)']['get'] = 'solutions/solutions/product_features_five_edit/$1';
$route['admin/solutions/product-features-five-update/(:num)']['post'] = 'solutions/solutions/product_features_five_update/$1';
$route['admin/solutions/product-features-five-delete/(:num)']['get'] = 'solutions/solutions/product_features_five_delete/$1';




$route['admin/industries/industries-submenu']['get'] = 'industries/industries/industries_submenu';
$route['admin/industries/industries-submenu-update']['post'] = 'industries/industries/industries_submenu_update';
$route['admin/industries/investor-relation']['get'] = 'industries/industries/investor_relation';
$route['admin/industries/investor-relation-top-update']['post'] = 'industries/industries/investor_relation_top_update';
$route['admin/industries/investor-relation-first-update']['post'] = 'industries/industries/investor_relation_first_update';
$route['admin/industries/investor-relation-one-create']['get'] = 'industries/industries/investor_relation_one_create/$1';
$route['admin/industries/investor-relation-one-store']['post'] = 'industries/industries/investor_relation_one_store';
$route['admin/industries/investor-relation-one-edit/(:num)']['get'] = 'industries/industries/investor_relation_one_edit/$1';
$route['admin/industries/investor-relation-one-update/(:num)']['post'] = 'industries/industries/investor_relation_one_update/$1';
$route['admin/industries/investor-relation-one-delete/(:num)']['get'] = 'industries/industries/investor_relation_one_delete/$1';


$route['admin/industries/investor-relation-second-update']['post'] = 'industries/industries/investor_relation_second_update';
$route['admin/industries/investor-relation-two-create']['get'] = 'industries/industries/investor_relation_two_create/$1';
$route['admin/industries/investor-relation-two-store']['post'] = 'industries/industries/investor_relation_two_store';
$route['admin/industries/investor-relation-two-edit/(:num)']['get'] = 'industries/industries/investor_relation_two_edit/$1';
$route['admin/industries/investor-relation-two-update/(:num)']['post'] = 'industries/industries/investor_relation_two_update/$1';
$route['admin/industries/investor-relation-two-delete/(:num)']['get'] = 'industries/industries/investor_relation_two_delete/$1';


$route['admin/industries/investor-relation-third-update']['post'] = 'industries/industries/investor_relation_third_update';
$route['admin/industries/investor-relation-three-create']['get'] = 'industries/industries/investor_relation_three_create/$1';
$route['admin/industries/investor-relation-three-store']['post'] = 'industries/industries/investor_relation_three_store';
$route['admin/industries/investor-relation-three-edit/(:num)']['get'] = 'industries/industries/investor_relation_three_edit/$1';
$route['admin/industries/investor-relation-three-update/(:num)']['post'] = 'industries/industries/investor_relation_three_update/$1';
$route['admin/industries/investor-relation-three-delete/(:num)']['get'] = 'industries/industries/investor_relation_three_delete/$1';


$route['admin/industries/newsroom']['get'] = 'industries/industries/newsroom';
$route['admin/industries/newsroom-top-update']['post'] = 'industries/industries/newsroom_top_update';
$route['admin/industries/newsroom-one-create']['get'] = 'industries/industries/newsroom_one_create/$1';
$route['admin/industries/newsroom-one-store']['post'] = 'industries/industries/newsroom_one_store';
$route['admin/industries/newsroom-one-edit/(:num)']['get'] = 'industries/industries/newsroom_one_edit/$1';
$route['admin/industries/newsroom-one-update/(:num)']['post'] = 'industries/industries/newsroom_one_update/$1';
$route['admin/industries/newsroom-one-delete/(:num)']['get'] = 'industries/industries/newsroom_one_delete/$1';

$route['admin/industries/newsroom-two-create']['get'] = 'industries/industries/newsroom_two_create/$1';
$route['admin/industries/newsroom-two-store']['post'] = 'industries/industries/newsroom_two_store';
$route['admin/industries/newsroom-two-edit/(:num)']['get'] = 'industries/industries/newsroom_two_edit/$1';
$route['admin/industries/newsroom-two-update/(:num)']['post'] = 'industries/industries/newsroom_two_update/$1';
$route['admin/industries/newsroom-two-delete/(:num)']['get'] = 'industries/industries/newsroom_two_delete/$1';



$route['admin/pricing/pricing-submenu']['get'] = 'pricing/pricing/pricing_submenu';
$route['admin/pricing/pricing-submenu-update']['post'] = 'pricing/pricing/pricing_submenu_update';
$route['admin/pricing/pricing-sub']['get'] = 'pricing/pricing/pricing_sub';
$route['admin/pricing/pricing-sub-top-update']['post'] = 'pricing/pricing/pricing_sub_top_update';
$route['admin/pricing/pricing-sub-one-update']['post'] = 'pricing/pricing/pricing_sub_one_update';
$route['admin/pricing/pricing-sub-create']['get'] = 'pricing/pricing/pricing_sub_create/$1';
$route['admin/pricing/pricing-sub-store']['post'] = 'pricing/pricing/pricing_sub_store';
$route['admin/pricing/pricing-sub-edit/(:num)']['get'] = 'pricing/pricing/pricing_sub_edit/$1';
$route['admin/pricing/pricing-sub-update/(:num)']['post'] = 'pricing/pricing/pricing_sub_update/$1';
$route['admin/pricing/pricing-sub-delete/(:num)']['get'] = 'pricing/pricing/pricing_sub_delete/$1';



$route['admin/company/company-submenu']['get'] = 'company/company/company_submenu';
$route['admin/company/company-submenu-update']['post'] = 'company/company/company_submenu_update';
$route['admin/company/customer-stories']['get'] = 'company/company/customer_stories';
$route['admin/company/customer-stories-one-update']['post'] = 'company/company/customer_stories_one_update';
$route['admin/company/customer-stories-create']['get'] = 'company/company/customer_stories_create/$1';
$route['admin/company/customer-stories-store']['post'] = 'company/company/customer_stories_store';
$route['admin/company/customer-stories-edit/(:num)']['get'] = 'company/company/customer_stories_edit/$1';
$route['admin/company/customer-stories-update/(:num)']['post'] = 'company/company/customer_stories_update/$1';
$route['admin/company/customer-stories-delete/(:num)']['get'] = 'company/company/customer_stories_delete/$1';



$route['admin/company/webinars']['get'] = 'company/company/webinars';
$route['admin/company/webinars-create']['get'] = 'company/company/webinars_create/$1';
$route['admin/company/webinars-store']['post'] = 'company/company/webinars_store';
$route['admin/company/webinars-edit/(:num)']['get'] = 'company/company/webinars_edit/$1';
$route['admin/company/webinars-update/(:num)']['post'] = 'company/company/webinars_update/$1';
$route['admin/company/webinars-delete/(:num)']['get'] = 'company/company/webinars_delete/$1';



// Sub Menu

// partner


$route['admin/partner']['get']                                     = 'partner/partner/partner';
$route['admin/partner/partner-first-update']['post']               = 'partner/partner/partner_first_update';
$route['admin/partner/partner-one-create']['get']                  = 'partner/partner/partner_one_create';
$route['admin/partner/partner-one-store']['post']                  = 'partner/partner/partner_one_store';
$route['admin/partner/partner-one-edit/(:num)']['get']             = 'partner/partner/partner_one_edit/$1';
$route['admin/partner/partner-one-update/(:num)']['post']          = 'partner/partner/partner_one_update/$1';
$route['admin/partner/partner-one-delete/(:num)']['get']           = 'partner/partner/partner_one_delete/$1';


$route['admin/partner/partner-second-update']['post']              = 'partner/partner/partner_second_update';
$route['admin/partner/partner-two-create']['get']                  = 'partner/partner/partner_two_create';
$route['admin/partner/partner-two-store']['post']                  = 'partner/partner/partner_two_store';
$route['admin/partner/partner-two-edit/(:num)']['get']             = 'partner/partner/partner_two_edit/$1';
$route['admin/partner/partner-two-update/(:num)']['post']          = 'partner/partner/partner_two_update/$1';
$route['admin/partner/partner-two-delete/(:num)']['get']           = 'partner/partner/partner_two_delete/$1';


$route['admin/partner/partner-third-update']['post']                 = 'partner/partner/partner_third_update';
$route['admin/partner/partner-three-create']['get']                  = 'partner/partner/partner_three_create';
$route['admin/partner/partner-three-store']['post']                  = 'partner/partner/partner_three_store';
$route['admin/partner/partner-three-edit/(:num)']['get']             = 'partner/partner/partner_three_edit/$1';
$route['admin/partner/partner-three-update/(:num)']['post']          = 'partner/partner/partner_three_update/$1';
$route['admin/partner/partner-three-delete/(:num)']['get']           = 'partner/partner/partner_three_delete/$1';


$route['admin/partner/partner-fourth-update']['post']               = 'partner/partner/partner_fourth_update';
$route['admin/partner/partner-four-create']['get']                  = 'partner/partner/partner_four_create';
$route['admin/partner/partner-four-store']['post']                  = 'partner/partner/partner_four_store';
$route['admin/partner/partner-four-edit/(:num)']['get']             = 'partner/partner/partner_four_edit/$1';
$route['admin/partner/partner-four-update/(:num)']['post']          = 'partner/partner/partner_four_update/$1';
$route['admin/partner/partner-four-delete/(:num)']['get']           = 'partner/partner/partner_four_delete/$1';


$route['admin/partner/partner-fifth-update']['post']               = 'partner/partner/partner_fifth_update';
$route['admin/partner/partner-five-create']['get']                  = 'partner/partner/partner_five_create';
$route['admin/partner/partner-five-store']['post']                  = 'partner/partner/partner_five_store';
$route['admin/partner/partner-five-edit/(:num)']['get']             = 'partner/partner/partner_five_edit/$1';
$route['admin/partner/partner-five-update/(:num)']['post']          = 'partner/partner/partner_five_update/$1';
$route['admin/partner/partner-five-delete/(:num)']['get']           = 'partner/partner/partner_five_delete/$1';


$route['admin/partner/partner-sixth-update']['post']               = 'partner/partner/partner_sixth_update';
$route['admin/partner/partner-six-create']['get']                  = 'partner/partner/partner_six_create';
$route['admin/partner/partner-six-store']['post']                  = 'partner/partner/partner_six_store';
$route['admin/partner/partner-six-edit/(:num)']['get']             = 'partner/partner/partner_six_edit/$1';
$route['admin/partner/partner-six-update/(:num)']['post']          = 'partner/partner/partner_six_update/$1';
$route['admin/partner/partner-six-delete/(:num)']['get']           = 'partner/partner/partner_six_delete/$1';

//Website Route Start

$route['about-us'] = 'website/about_us';
$route['blog'] = 'website/blog';
$route['contact'] = 'website/contact';
$route['customer_stories'] = 'website/customer_stories';
$route['faq'] = 'website/faq';
$route['help'] = 'website/help';
$route['investor-relation'] = 'website/investor_relation';
$route['newsroom'] = 'website/newsroom';
$route['partner'] = 'website/partner';
$route['pricing'] = 'website/pricing';
$route['privacy-policy'] = 'website/privacy_policy';
$route['product-features'] = 'website/product_features';
$route['registretion'] = 'website/registretion';
$route['login'] = 'website/login';
$route['solution-sub'] = 'website/solution_sub';
$route['terms'] = 'website/terms';
$route['webinars'] = 'website/webinars';

