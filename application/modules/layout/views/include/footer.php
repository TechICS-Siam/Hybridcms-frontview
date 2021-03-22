<!-- footer -->
<section>
  <div class="bg-footer">
    <div class="row mx-auto">
      <div class="col-lg-2 footer-text-srt">
        <h5>SOLUTIONS</h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo site_url('solution-sub'); ?>">Hybrid Sales</a></li>
          <li><a href="<?php echo site_url('solution-sub'); ?>">Hybrid Marketing</a></li>
          <li><a href="<?php echo site_url('solution-sub'); ?>">Hybrid Service</a></li>
          <li><a href="<?php echo site_url('solution-sub'); ?>">Hybrid Contents Manager</a></li>
          <li><a href="<?php echo site_url('solution-sub'); ?>">Hybrid Automation </a></li>

        </ul>
      </div>
      <div class="col-lg-2 footer-text-srt">
        <h5>INDUSTRIES</h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo site_url(); ?>">
            Hybrid CMS
          </a></li>
          <li><a href="<?php echo site_url(); ?>">
            Business Consultancies
          </a></li>
          <li><a href="<?php echo site_url(); ?>">
            Professional Services
          </a></li>
          <li><a href="<?php echo site_url(); ?>">
            Legal Services
          </a></li>
          <li><a href="<?php echo site_url(); ?>">
            Building & Construction
          </a></li>
        </ul>
      </div>
      <div class="col-lg-2 footer-text-srt">
        <h5>INDUSTRIES </h5>
        <ul class="list-unstyled">
     
          <li><a href="<?php echo site_url(); ?>">
            Information Technology
          </a></li>
          <li><a href="<?php echo site_url(); ?>">
            Accountancies
          </a></li>
          <li><a href="<?php echo site_url(); ?>">
            Architecture
          </a></li>
          <li><a href="<?php echo site_url(); ?>">
            Agencies &
            Non-profits
          </a></li>
          <li><a href="<?php echo site_url(); ?>">
            Training Providers
          </a></li>

        </ul>
      </div>
      <div class="col-lg-2 footer-text-srt">
        <h5>COMPANY</h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo site_url('about-us'); ?>">About Us</a></li>
          <li><a href="<?php echo site_url('webinars'); ?>">Management</a></li>
          <li><a href="<?php echo site_url('investor-relation'); ?>">Investor Relations</a></li>
          <li><a href="<?php echo site_url('newsroom'); ?>">Newsroom</a></li>
          <li><a href="<?php echo site_url('contact'); ?>">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-lg-2 footer-text-srt ">
        <h5>RESOURCES </h5>
        <ul class="list-unstyled"> 
          <li><a href="<?php echo site_url('product-features'); ?>"> Product Features </a></li> 
          <li><a href="<?php echo site_url('blog'); ?>"> Blog </a></li>
          <li><a href="<?php echo site_url('webinars'); ?>"> Webinars </a></li> 
          <li><a href="<?php echo site_url('customer_stories'); ?>"> Customer Stories </a></li>
          <li><a href="<?php echo site_url('faq'); ?>"> FAQ </a></li> </ul>
      </div>
      <div class="col-lg-2 footer-text-srt ">
        <h5>SUPPORT</h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo site_url('help'); ?>">Help Center</a></li>
          <li><a href="<?php echo site_url('faq'); ?>">Raise Support Ticket</a></li>
          <li><a href="<?php echo site_url('terms'); ?>">Terms of Use</a></li>
          <li><a href="<?php echo site_url('privacy-policy'); ?>">Privacy Policy </a></li>
          <li><a href="<?php echo site_url('partner'); ?>">Partners</a></li>
        </ul>
      </div>
   
    </div>
    <div class="row mx-auto">
       <?php foreach ($footer_update as $h) {?>
     <div class="col-lg-12">
       <hr class="">
       <div class="row mx-auto ">
         <div class="col-lg-4">
           <div class="footer-logo">
             <a href="<?php echo site_url(); ?>">
             <img src="<?= base_url() ?>uploads/<?php echo $h['logo']?>" alt="">
            </a>
           </div>
         </div>
         <div class="col-lg-4 ">
           <ul class="list-unstyled footer-btm-f-ul ">
           <?php echo $h ['footer_title'] ?>
             <!-- <li> <a href="<?php echo site_url('privacy-policy'); ?>">User Agreement |</a> </li>
             <li><a href="<?php echo site_url('partner'); ?>">GPDR |</a> </li>
             <li><a href="<?php echo site_url('terms'); ?>">Terms & Conditions</a> </li> -->
           </ul>
           <ul class="list-unstyled footer-btm-f-ul">
            <li> <a c target="_blank" href="https://www.techics.com/">Tech ICS |</a> </li>
            <li><a style="font-family:sans-serif;" href="#">2020 |</a> </li>
            <li><a href="#">All rights reserved </a> </li>
          </ul>  
         </div>
         <div class="col-lg-4 footer-btm-f-dv">
           <ul class="list-unstyled footer-btm-s-ul">
             <li class="footer-btm-s-ul-li">
               <a target="_blank" href="<?php echo $h ['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
             </li>
             <li class="footer-btm-s-ul-li">
               <a target="_blank" href="<?php echo $h ['twitter'] ?>"><i class="fab fa-twitter"></i></a>             
             </li>
             <li class="footer-btm-s-ul-li">
               <a target="_blank" href="<?php echo $h ['linkedin'] ?>"><i class="fab fa-linkedin-in"></i></a>
             </li>
             <li class="footer-btm-s-ul-li">
               <a target="_blank" href="<?php echo $h ['youtube'] ?>"><i class="fab fa-youtube"></i></a>
              </li>
           </ul>
         </div>
       </div>
     </div>

    </div>
    <?php }?>
  </div>
</section>
<!-- footer -->





  <!-- scroll top to buttom -->
  <div id="stop" class="scrollTop">
    <span><a class="text-dark" href=""><i class="fas fa-angle-up scrollTop-icon"></i></a></span>
  </div>
  <!-- scroll top to buttom -->