<!--top bar-->
<section>
    <div class="topnav-bar">
        <div class="row mx-auto ">
            <div class="col-lg-6 col-sm-6 col-md-6 res-topbar-1">
                <div class="">
                    <ul class="list-unstyled topnav-bar-ul ">
                        <li>
                            <a class="nav-link-csr" href="#">
                              <button class="openBtn" onclick="openSearch()"> Search &nbsp; |</button> 
                              <span class="sr-only">(current)</span>        
                            </a>
                        </li>
                        <li>
                            <a class="nav-link-csr" href="<?php echo site_url('help'); ?>">
                               Help Center
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 topnav-bar-dv">
                <div class="">
                    <ul class="list-unstyled topnav-bar-ul">
                        <li>
                            <a href="<?php echo site_url('login')?>">
                                Login &nbsp; |  
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('registretion'); ?>">
                                Register &nbsp; |
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('about-us'); ?>">
                                About &nbsp; | 
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('contact'); ?>">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>              
            </div>
        </div>
    </div>
</section>
<!--top bar--> 
<div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<!-- logo section -->
<section>
    <div class="logo-bar">
        <div class="row mx-auto">
            <div class="col-lg-6 col-sm-6 res-topbar-lg">
                <div class="">
                    <ul class="list-unstyled">
                        <li class="py-3">
                        <?php foreach ($header_text as $h) {?>
                            <a href="<?php echo site_url(); ?>">
                                <img src="<?= base_url() ?>uploads/<?php echo $h['logo']?>"  alt="">
                            </a>
                        <?php }?>
                        </li>
                        <li>
                        <a href="" class="like-fb">
                            <i class="fas fa-thumbs-up"></i>
                            Like 354k
                        </a>
                        <a href="" class="share-fb">
                            Share
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="">
                <?php foreach ($header_text as $h) {?>
                    <ul class="list-unstyled text-right logo-bar-snd-ul m-0">
                        <li>
                       <a href="tel:0207 237 3388">

                       <?php echo $h ['telephone']?>
                        </a>
                        <a href="mailto:info@techics.com">
                        <?php echo $h ['email']?>
                        </a>
                    </li>
                    <li>
                    <a href="<?php echo $h ['button_url']?>">
                        <button class="btn-regi"> <?php echo $h ['button_text']?></button>
                    </a>
                    </li>
                    </ul>
                    <?php }?>
                </div>

            </div> 
        </div>
    </div>
</section>
<!-- logo section -->

<!-- second navbar -->
<section class="sticky-top"> 
 <!-- mega menu -->
<header>
  <nav class="navbar navbar-expand-lg navbar-light main ">
    <div class="container-fluid">
      <button class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown ">
             <a class="nav-link " href="<?php echo site_url(); ?>" id="navbarDropdown" role="button"><i class="fas fa-house-user"></i></a>
          </li>        
          <li class="nav-item dropdown position-static">
            <?php foreach ($solutions_menu as $h) {?>
            <a class="nav-link " data-toggle="dropdown" href="<?php echo site_url('solution-sub'); ?>" id="navbarDropdown" role="button" >Solutions
              <i class="icon ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu megamenu brodertopdrop">
              <div class="row sub-main-bd row-space">
                <div class="col-md-9">
                 <div class="row">
                  <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                    <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                     <i class="las la-atom menuicn"></i>
                    </a>
                    <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                      <?php echo $h['servs_title']?>
                      <br>
                      <span class="crm-title-fl"> <?php echo $h['short_des']?></span>
                    </a>
                    
                  </li>
                  <li class="col-md-4 sub-one-bg-sd clr-trasp">
                    <ul class="sub-ul-two clr-trasp">
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('solution-sub'); ?>" class="crm-titlei-ff">
                              <i class="las la-file-invoice menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('solution-sub'); ?>" class="crm-title-ff">
                          Full Hybrid CMS
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('solution-sub'); ?>" class="crm-titlei-ff">
                              <i class="las la-dice-d20 menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('solution-sub'); ?>" class="crm-title-ff">
                          Hybrid CMS 
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st clr-trasp">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('solution-sub'); ?>" class="crm-titlei-ff">
                              <i class="las la-h-square menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('solution-sub'); ?>" class="crm-title-ff">
                          Hybrid Sales
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-4 sub-one-bg-sd">
                    <ul class="sub-ul-two">
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('solution-sub'); ?>" class="crm-titlei-ff">
                              <i class="las la-parking menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
                        <a href="<?php echo site_url('solution-sub'); ?>" class="crm-title-ff">
                          Architecture
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('solution-sub'); ?>" class="crm-titlei-ff">
                              <i class="las la-cubes menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('solution-sub'); ?>" class="crm-title-ff">
                          Accountancies
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('solution-sub'); ?>" class="crm-titlei-ff">
                              <i class="las la-industry menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('solution-sub'); ?>" class="crm-title-ff">
                          Legal Services
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-4 sub-one-bg-sd">
                    <ul class="sub-ul-two">
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('solution-sub'); ?>" class="crm-titlei-ff">
                              <i class="lab la-atlassian menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('solution-sub'); ?>" class="crm-title-ff">
                          Hybrid Service
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('solution-sub'); ?>" class="crm-titlei-ff">
                              <i class="lab la-angular menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">         
                        <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                          Hybrid Contents
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                              <i class="lab la-artstation menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">        
                        <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                          Hybrid Automation
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                 </div>
                </div>               
                <li class="col-md-3 m-auto text-center">
                      <a href="" class="crm-title-s text-center">
                        <i class="las la-people-carry"></i>
                      </a>
                      <a href="" class="crm-title-s text-center p-0">
                      <?php echo $h['title']?>
                      </a>
                      <a href="<?php echo $h['button_url']?>" class="btn btn-danger-bt text-center">
                      <?php echo $h['button_text']?>
                      </a>
                </li>             
              </div>
            </ul>
            <?php }?>
          </li>
          <li class="nav-item dropdown position-static">
            <?php foreach ($industries_menu as $h) {?>
            <a class="nav-link" data-toggle="dropdown" href="<?php echo site_url('investor-relation'); ?>" id="navbarDropdown" role="button" >Industries
              <i class="icon ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu megamenu megamenu-tw brodertopdrop">
              <div class="row sub-main-bd row-space">
                <div class="col-md-9">
                 <div class="row">
                  <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                    <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                      <i class="lab la-cloudsmith menuicn"></i>
                    </a>
                    <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                    <?php echo $h['servs_title']?>
                      <br>
                      <span class="crm-title-fl"> <?php echo $h['short_des']?></span>
                    </a>
                    
                  </li>
                  <li class="col-md-4 sub-one-bg-sd clr-trasp">
                    <ul class="sub-ul-two clr-trasp">
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('investor-relation'); ?>" class="crm-titlei-ff">
                              <i class="las la-scroll menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">        
                        <a href="<?php echo site_url('investor-relation'); ?>" class="crm-title-ff">
                          Investor Relations
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('newsroom'); ?>" class="crm-titlei-ff">
                              <i class="las la-swimming-pool menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('newsroom'); ?>" class="crm-title-ff">
                          Newsroom
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st clr-trasp">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="about" class="crm-titlei-ff">
                              <i class="las la-spa menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('about-us'); ?>" class="crm-title-ff">
                          About Us
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-4 sub-one-bg-sd">
                    <ul class="sub-ul-two">
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('investor-relation'); ?>" class="crm-titlei-ff">
                              <i class="las la-id-badge menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('investor-relation'); ?>" class="crm-title-ff">
                          Hybrid Service
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('investor-relation'); ?>" class="crm-titlei-ff">
                              <i class="las la-dice-d6 menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('investor-relation'); ?>" class="crm-title-ff">
                          Full Hybrid CMS
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('investor-relation'); ?>" class="crm-titlei-ff">
                              <i class="lab la-critical-role menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('contact'); ?>" class="crm-title-ff">
                          Contact Us
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-4 sub-one-bg-sd">
                    <ul class="sub-ul-two">
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('customer_stories'); ?>" class="crm-titlei-ff">
                              <i class="las la-comment menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('customer_stories'); ?>" class="crm-title-ff">
                          Customer Stories 
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('blog'); ?>" class="crm-titlei-ff">
                              <i class="las la-calendar-check menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('blog'); ?>" class="crm-title-ff">
                          Blog
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('webinars'); ?>" class="crm-titlei-ff">
                              <i class="las la-snowflake menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('webinars'); ?>" class="crm-title-ff">
                        Webinars
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                 </div>
                </div>               
                <li class="col-md-3 m-auto text-center">
                      <a href="" class="crm-title-s text-center">
                        <i class="las la-people-carry"></i>
                      </a>
                      <a href="" class="crm-title-s text-center p-0">
                      <?php echo $h['title']?>
                      </a>
                      <a href="<?php echo $h['button_url']?>" class="btn btn-danger-bt text-center">
                      <?php echo $h['button_text']?>
                      </a>
                </li>             
              </div>
            </ul>
            <?php }?>
          </li>
          <li class="nav-item dropdown position-static">
           <?php foreach ($pricing_menu as $h) {?>
            <a class="nav-link" data-toggle="dropdown" href="<?php echo site_url('pricing'); ?>" id="navbarDropdown" role="button" >Pricing
              <i class="icon ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu megamenu brodertopdrop megamenu-trd">
              <div class="row sub-main-bd row-space">
                <div class="col-md-9">
                 <div class="row">
                  <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                    <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                      <i class="lab la-foursquare menuicn"></i>
                    </a>
                    <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                      <?php echo $h['servs_title']?>
                      <br>
                      <span class="crm-title-fl"> <?php echo $h['short_des']?></span>
                    </a>
                    
                  </li>
                  <li class="col-md-4 sub-one-bg-sd clr-trasp">
                    <ul class="sub-ul-two clr-trasp">
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                              <i class="las la-asterisk menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">         
                        <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                          Hybrid CMS
                        </a>
                        <p class="crm-title-p">
                          Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                              <i class="las la-atom menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                          Hybrid CMS
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st clr-trasp">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                              <i class="las la-circle-notch menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                          Hybrid CMS
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-4 sub-one-bg-sd">
                    <ul class="sub-ul-two">
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                              <i class="las la-haykal menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                          Hybrid CMS
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                              <i class="las la-seedling menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                          Hybrid CMS
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                              <i class="las la-file menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                          Hybrid CMS
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-4 sub-one-bg-sd">
                    <ul class="sub-ul-two">
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                              <i class="las la-parking menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                          Hybrid CMS
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                              <i class="las la-yin-yang menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                          Hybrid CMS
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                              <i class="las la-poll-h menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                          Hybrid CMS
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                 </div>
                </div>               
                <li class="col-md-3 m-auto text-center">
                      <a href="" class="crm-title-s text-center">
                        <i class="las la-people-carry"></i>
                      </a>
                      <a href="" class="crm-title-s text-center p-0">
                      <?php echo $h['title']?>
                      </a>
                      <a href="<?php echo $h['button_url']?>" class="btn btn-danger-bt text-center">
                      <?php echo $h['button_text']?>
                      </a>
                </li>                    
              </div>
            </ul>
            <?php } ?>
          </li>
          <li class="nav-item dropdown position-static">
          <?php foreach ($company_menu as $h) {?>
            <a class="nav-link" data-toggle="dropdown" href="<?php echo site_url('customer_stories'); ?>" id="navbarDropdown" role="button" >Company
              <i class="icon ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu megamenu brodertopdrop megamenu-fur">
              <div class="row sub-main-bd row-space">
                <div class="col-md-9">
                 <div class="row">
                  <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                    <a href="<?php echo site_url('product-features'); ?>" class="crm-titlei-ff">
                      <i class="lab la-hackerrank menuicn"></i>
                    </a>
                    <a href="<?php echo site_url('product-features'); ?>" class="crm-title-ff">
                      <?php echo $h['servs_title']?>
                      <br>
                      <span class="crm-title-fl"> <?php echo $h['short_des']?></span>
                    </a>
                    
                  </li>
                  <li class="col-md-4 sub-one-bg-sd clr-trasp">
                    <ul class="sub-ul-two clr-trasp">
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('pricing'); ?>" class="crm-titlei-ff">
                              <i class="las la-icons menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('pricing'); ?>" class="crm-title-ff">
                          Full Hybrid CMS 
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('pricing'); ?>" class="crm-titlei-ff">
                              <i class="las la-photo-video menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('pricing'); ?>" class="crm-title-ff">
                          Hybrid CMS
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st clr-trasp">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('pricing'); ?>" class="crm-titlei-ff">
                              <i class="las la-share-alt menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('pricing'); ?>" class="crm-title-ff">
                          Hybrid CMS
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-4 sub-one-bg-sd">
                    <ul class="sub-ul-two">
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('pricing'); ?>" class="crm-titlei-ff">
                              <i class="las la-poll menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('pricing'); ?>" class="crm-title-ff">
                          Hybrid CMS
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('pricing'); ?>" class="crm-titlei-ff">
                              <i class="las la-dharmachakra menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('pricing'); ?>" class="crm-title-ff">
                          Hybrid Sales
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('pricing'); ?>" class="crm-titlei-ff">
                              <i class="las la-bowling-ball menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">         
                        <a href="<?php echo site_url('pricing'); ?>" class="crm-title-ff">
                          Hybrid Marketing
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-4 sub-one-bg-sd">
                    <ul class="sub-ul-two">
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('pricing'); ?>" class="crm-titlei-ff">
                              <i class="las la-audio-description menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('pricing'); ?>" class="crm-title-ff">
                          Product Solution
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('pricing'); ?>" class="crm-titlei-ff">
                              <i class="las la-braille menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('pricing'); ?>" class="crm-title-ff">
                          Hybrid Contents Manager
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                      <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                        <div class="row">
                          <div class="col-md-2 m-auto">
                            <a href="<?php echo site_url('pricing'); ?>" class="crm-titlei-ff">
                              <i class="las la-shield-alt menuicn"></i>
                             </a>
                          </div>
                        <div class="col-md-10">
         
                        <a href="<?php echo site_url('pricing'); ?>" class="crm-title-ff">
                          Hybrid Automation	
                        </a>
                        <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                 </div>
                </div>               
                <li class="col-md-3 m-auto text-center">
                      <a href="" class="crm-title-s text-center">
                        <i class="las la-people-carry"></i>
                      </a>
                      <a href="" class="crm-title-s text-center p-0">
                      <?php echo $h['title']?>
                      </a>
                      <a href="<?php echo $h['button_url']?>" class="btn btn-danger-bt text-center">
                      <?php echo $h['button_text']?>
                      </a>
                </li>            
              </div>
            </ul>
            <?php }?>
          </li>
          <li class="nav-item dropdown position-static">
            <a class="nav-link" data-toggle="dropdown" href="<?php echo site_url('product-features'); ?>" id="navbarDropdown" role="button" >Resources
              <i class="icon ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu megamenu megamenu-thr brodertopdrop-d">
              <div class="row sub-main-bd">
                <li class="col-md-12 sub-nav-mb-la">
                  <ul class="sub-ul-two row">
                    <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st ">
                      <div class="row sub-nav-mb-last">
                        <div class="col-md-2 m-auto">
                          <a href="<?php echo site_url('customer_stories'); ?>" class="crm-titlei-ff">
                            <i class="las la-server menuicn"></i>
                           </a>
                        </div>
                      <div class="col-md-10 pl-0">       
                      <a href="<?php echo site_url('customer_stories'); ?>" class="crm-title-ff">
                        Customer Stories 
                      </a>
                      <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                      <div class="row sub-nav-mb-last">
                        <div class="col-md-2 m-auto">
                          <a href="<?php echo site_url('blog'); ?>" class="crm-titlei-ff">
                            <i class="lab la-squarespace menuicn"></i>
                           </a>
                        </div>
                      <div class="col-md-10 pl-0">
       
                      <a href="<?php echo site_url('blog'); ?>" class="crm-title-ff">
                        Blog
                      </a>
                      <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                      <div class="row sub-nav-mb-last">
                        <div class="col-md-2 m-auto">
                          <a href="<?php echo site_url('webinars'); ?>" class="crm-titlei-ff">
                            <i class="las la-eraser menuicn"></i>
                           </a>
                        </div>
                      <div class="col-md-10 pl-0">
       
                      <a href="<?php echo site_url('webinars'); ?>" class="crm-title-ff">
                      Webinars
                      </a>
                      <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                      <div class="row sub-nav-mb-last">
                        <div class="col-md-2 m-auto">
                          <a href="<?php echo site_url('faq'); ?>" class="crm-titlei-ff">
                            <i class="las la-leaf menuicn"></i>
                           </a>
                        </div>
                      <div class="col-md-10 pl-0">
       
                      <a href="<?php echo site_url('faq'); ?>" class="crm-title-ff">
                        FAQ
                      </a>
                      <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                        </div>
                      </div>
                    </li>
                    <li class="col-md-12 sub-one-bg-sd sub-one-bg-sd-st">
                      <div class="row sub-nav-mb-last">
                        <div class="col-md-2 m-auto">
                          <a href="<?php echo site_url('webinars'); ?>" class="crm-titlei-ff">
                            <i class="las la-eraser menuicn"></i>
                           </a>
                        </div>
                      <div class="col-md-10 pl-0">
       
                      <a href="<?php echo site_url('webinars'); ?>" class="crm-title-ff">
                      Help
                      </a>
                      <p class="crm-title-p">Learn more about Ravetree’s award winning work management</p>
                        </div>
                      </div>
                    </li>      
                  </ul>
                </li>
              </div>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " href="<?php echo site_url('partner'); ?>" id="navbarDropdown" role="button">partner</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- mega menu -->
</section>
<!-- second navbar -->