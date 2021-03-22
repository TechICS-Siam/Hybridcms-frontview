<?php
    $segmentOne = $this->uri->segment(1);
    $segmentTwo = $this->uri->segment(2);
    $segmentThree = $this->uri->segment(3);
    $segmentFour = $this->uri->segment(4);
    $segmentFive = $this->uri->segment(5);
    $segmentSix = $this->uri->segment(6);
    $segmentSeven = $this->uri->segment(7);
    $segmentEight = $this->uri->segment(8);
    $segmentNine = $this->uri->segment(9);
    $segmentTen = $this->uri->segment(10);
    $segmentEleven = $this->uri->segment(11);
    $segmentTwelve = $this->uri->segment(12);
    $segmentThirteen = $this->uri->segment(13);
    $segmentFourteen = $this->uri->segment(14);


?>
<div id="sidebarMenu" class="sidebar sidebar-fixed sidebar-components">
    <div class="sidebar-header">
        <a href="" id="mainMenuOpen">
            <i data-feather="menu"></i>
        </a>

        <h5>
            <img style="width:125px;"  src="<?= $library->logo != null ? base_url(). 'uploads/'. $library->logo : base_url(). 'assets/images/logo-cms.png' ?>" alt="CMS Logo">
        </h5>

        <a href="" id="sidebarMenuClose">
            <i data-feather="x"></i>
        </a>
    </div>

    <div class="sidebar-body">
        <ul class="sidebar-nav">

            <!-- Dashboard -->
            <li class="nav-item">
                <a href="<?= site_url('dashboard') ?>" class="nav-link <?= $segmentOne == 'dashboard' ? 'active' : '' ?>">
                    <i data-feather="grid"></i>
                    Dashboard
                </a>
            </li>

            <!-- Home Page Manager -->
            <li class="nav-item <?= $segmentTwo == 'home-page' ? 'show' : '' ?>">
                <a href="" class="nav-link with-sub <?= $segmentTwo == 'home-page' ? 'active' : '' ?>">
                <i data-feather="airplay"></i> Home Page Manager</a>
                <nav class="nav">
                    <a class="<?= $segmentThree == 'section-one' ? 'active' : '' ?>" href="<?= site_url('admin/home-page/section-one') ?>">Section One</a>
                    <a class="<?= $segmentThree == 'section-two' ? 'active' : '' ?>" href="<?= site_url('admin/home-page/section-two') ?>">Section Two</a>
                    <a class="<?= $segmentThree == 'section-three' ? 'active' : '' ?>" href="<?= site_url('admin/home-page/section-three') ?>">Section Three</a>
                    <a class="<?= $segmentThree == 'section-four' ? 'active' : '' ?>" href="<?= site_url('admin/home-page/section-four') ?>">Section Four</a>
                    <a class="<?= $segmentThree == 'section-five' ? 'active' : '' ?>" href="<?= site_url('admin/home-page/section-five') ?>">Section Five</a>
                    <a class="<?= $segmentThree == 'section-six' ? 'active' : '' ?>" href="<?= site_url('admin/home-page/section-six') ?>">Section Six</a>
                    <a class="<?= $segmentThree == 'section-seven' ? 'active' : '' ?>" href="<?= site_url('admin/home-page/section-seven') ?>">Section Seven</a>
                    <a class="<?= $segmentThree == 'section-eight' ? 'active' : '' ?>" href="<?= site_url('admin/home-page/section-eight') ?>">Section Eight</a>
                    <a class="<?= $segmentThree == 'section-nine' ? 'active' : '' ?>" href="<?= site_url('admin/home-page/section-nine') ?>">Section Nine</a>
                    <a class="<?= $segmentThree == 'section-ten' ? 'active' : '' ?>" href="<?= site_url('admin/home-page/section-ten') ?>">Section Ten</a>
                    <a class="<?= $segmentThree == 'section-eleven' ? 'active' : '' ?>" href="<?= site_url('admin/home-page/section-eleven') ?>">Section Eleven</a>
                    <a class="<?= $segmentThree == 'section-twelve' ? 'active' : '' ?>" href="<?= site_url('admin/home-page/section-twelve') ?>">Section Twelve</a>
                </nav>
            </li>

            <!-- add services -->
            <li class="nav-item <?= $segmentTwo == 'manage-services' ? 'show' : '' ?>">
                <a href="" class="nav-link with-sub <?= $segmentTwo == 'manage-services' ? 'active' : '' ?>">
                <i data-feather="airplay"></i> Manage Services</a>
                <nav class="nav">
                    <a class="<?= $segmentThree == 'manage-ressources' ? 'active' : '' ?>" href="<?= site_url('admin/manage-services/manage-ressources') ?>">Manage Ressources</a>
                    <a class="<?= $segmentThree == 'manage-solutions' ? 'active' : '' ?>" href="<?= site_url('admin/manage-services/manage-solutions') ?>">Manage Solutions</a>
                    <a class="<?= $segmentThree == 'manage-industries' ? 'active' : '' ?>" href="<?= site_url('admin/manage-services/manage-industries') ?>">Manage Industries</a>
                    <a class="<?= $segmentThree == 'manage-pricing' ? 'active' : '' ?>" href="<?= site_url('admin/manage-services/manage-pricing') ?>">Manage Pricing</a>
                    <a class="<?= $segmentThree == 'manage-company' ? 'active' : '' ?>" href="<?= site_url('admin/manage-services/manage-company') ?>">Manage Company</a>                    
                </nav>
            </li>
             <!-- Website pages -->
               <li class="nav-item <?= $segmentTwo == 'website-pages' ? 'show' : '' ?>">
                <a href="" class="nav-link with-sub <?= $segmentTwo == 'website-pages' ? 'active' : '' ?>">
                <i data-feather="globe"></i>Manage Ressources</a>
                <nav class="nav">
                    <a class="<?= $segmentThree == 'about' ? 'active' : '' ?>" href="<?= site_url('admin/website-pages/about') ?>">About US</a>
                    <a class="<?= $segmentThree == 'blog' ? 'active' : '' ?>" href="<?= site_url('admin/website-pages/blog') ?>">Blog</a>
                    <a class="<?= $segmentThree == 'faq' ? 'active' : '' ?>" href="<?= site_url('admin/website-pages/faq') ?>">FAQ</a>
                    <a class="<?= $segmentThree == 'help' ? 'active' : '' ?>" href="<?= site_url('admin/website-pages/help') ?>">Help Center</a>
                    <a class="<?= $segmentThree == 'terms' ? 'active' : '' ?>" href="<?= site_url('admin/website-pages/terms') ?>">Terms Of Use</a>
                    <a class="<?= $segmentThree == 'privacy_policy' ? 'active' : '' ?>" href="<?= site_url('admin/website-pages/privacy-policy') ?>">Privacy Policy</a>
                    <a class="<?= $segmentThree == 'contact' ? 'active' : '' ?>" href="<?= site_url('admin/website-pages/contact') ?>">Contact Us</a>
                </nav>
            </li>  
            <!-- Solutions -->
               <li class="nav-item <?= $segmentTwo == 'solutions' ? 'show' : '' ?>">
                <a href="" class="nav-link with-sub <?= $segmentTwo == 'solutions' ? 'active' : '' ?>">
                <i data-feather="codepen"></i>Manage Solutions</a>
                <nav class="nav">
                    <a class="<?= $segmentThree == 'solutions-submenu' ? 'active' : '' ?>" href="<?= site_url('admin/solutions/solutions-submenu') ?>">Sub Menu Management</a>
                    <a class="<?= $segmentThree == 'solution-sub' ? 'active' : '' ?>" href="<?= site_url('admin/solutions/solution-sub') ?>">Solution Sub</a>
                    <a class="<?= $segmentThree == 'product-features' ? 'active' : '' ?>" href="<?= site_url('admin/solutions/product-features') ?>">product Features</a>
                </nav>
            </li> 


             <!-- Industries -->
               <li class="nav-item <?= $segmentTwo == 'industries' ? 'show' : '' ?>">
                <a href="" class="nav-link with-sub <?= $segmentTwo == 'industries' ? 'active' : '' ?>">
                <i data-feather="layers"></i>Manage Industries</a>
                <nav class="nav">
                    <a class="<?= $segmentThree == 'industries-submenu' ? 'active' : '' ?>" href="<?= site_url('admin/industries/industries-submenu') ?>">Sub Menu Management</a>
                    <a class="<?= $segmentThree == 'investor-relation' ? 'active' : '' ?>" href="<?= site_url('admin/industries/investor-relation') ?>">Investor Relation</a>
                    <a class="<?= $segmentThree == 'newsroom' ? 'active' : '' ?>" href="<?= site_url('admin/industries/newsroom') ?>">Newsroom</a>
                </nav>
            </li>   

  

            <!-- Pricing -->
              <li class="nav-item <?= $segmentTwo == 'pricing' ? 'show' : '' ?>">
                <a href="" class="nav-link with-sub <?= $segmentTwo == 'pricing' ? 'active' : '' ?>">
                <i data-feather="package"></i>Manage Pricing</a>
                <nav class="nav">
                    <a class="<?= $segmentThree == 'pricing-submenu' ? 'active' : '' ?>" href="<?= site_url('admin/pricing/pricing-submenu') ?>">Sub Menu Management</a>
                    <a class="<?= $segmentThree == 'pricing-sub' ? 'active' : '' ?>" href="<?= site_url('admin/pricing/pricing-sub') ?>">Pricing</a>
                </nav>
            </li>    

             <!-- Company -->
              <li class="nav-item <?= $segmentTwo == 'company' ? 'show' : '' ?>">
                <a href="" class="nav-link with-sub <?= $segmentTwo == 'company' ? 'active' : '' ?>">
                <i data-feather="trello"></i>Manage Company</a>
                <nav class="nav">
                    <a class="<?= $segmentThree == 'company-submenu' ? 'active' : '' ?>" href="<?= site_url('admin/company/company-submenu') ?>">Sub Menu Management</a>
                    <a class="<?= $segmentThree == 'customer-stories' ? 'active' : '' ?>" href="<?= site_url('admin/company/customer-stories') ?>">Customer Stories</a>
                    <a class="<?= $segmentThree == 'webinars' ? 'active' : '' ?>" href="<?= site_url('admin/company/webinars') ?>">Webinars</a>
                </nav>
            </li>    
              <!-- ressources -->
            <!-- <li class="nav-item <?= $segmentTwo == 'ressources' ? 'show' : '' ?>">
                <a href="" class="nav-link with-sub <?= $segmentTwo == 'ressources' ? 'active' : '' ?>">
                <i data-feather="layout"></i>Manage ressources</a>
                <nav class="nav">
                    <a class="<?= $segmentThree == 'ressources-submenu' ? 'active' : '' ?>" href="<?= site_url('admin/ressources/ressources-submenu') ?>">Sub Menu Management</a>
                    <a class="<?= $segmentThree == 'product-features' ? 'active' : '' ?>" href="<?= site_url('admin/ressources/product-features') ?>">Product Features</a>
                </nav>
            </li>     -->

   
            <!-- Partner -->
             <li class="nav-item">
                <a href="<?= site_url('admin/partner') ?>" class="nav-link <?= $segmentFourteen == 'partner' || $segmentFourteen == 'partner' ? 'active' : '' ?> ">
                    <i data-feather="git-merge"></i> 
                    Partner
                </a>
            </li>   
            <!-- User -->
            <li class="nav-item">
                <a href="<?= site_url('admin/users') ?>" class="nav-link <?= $segmentTwo == 'users' || $segmentTwo == 'user' ? 'active' : '' ?> ">
                    <i data-feather="users"></i>
                    Users
                </a>
            </li> 

            <!-- Setting -->
            <li class="nav-item <?= $segmentTwo == 'settings' ? 'show' : '' ?>">
                <a href="" class="nav-link with-sub <?= $segmentTwo == 'settings' ? 'active' : '' ?>">
                <i data-feather="settings"></i> Setting</a>
                <nav class="nav">
                    <a class="<?= $segmentThree == 'software-settings' ? 'active' : '' ?>" href="<?= site_url('admin/settings/software-settings') ?>">Software Settings</a>
                    <a class="<?= $segmentThree == 'social-settings' ? 'active' : '' ?>" href="<?= site_url('admin/settings/social-settings') ?>">Social Settings</a>
                    <a class="<?= $segmentThree == 'administrator-login-settings' ? 'active' : '' ?>" href="<?= site_url('admin/settings/administrator-login-settings') ?>">Admin Login Page</a>
                </nav>
            </li> 

        </ul>
    </div>
</div>