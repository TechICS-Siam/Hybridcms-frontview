
<!-- icon view blog -->
<div class="feature-section">
  <div class="container">
    <div class="section-layout-2-col odd row">
    <?php foreach ($section_twelve as $h){?>
      <div class="section-content-wrapper right hp-da-section-content-wrapper col-md-6">
        <div class="section-content hp-da-section-content">
          <div data-w-id="0a8d525d-629e-d739-8585-7645594ea900" class="section-titles">
          <div class="tag-02">
          <div class="label-underline in-tag-02" style="width: 100%; height: 10px;">
            <div class="divider-element _95-wide"></div>
            <div class="divider-element dot">
          </div>
          </div>
        </div>
        <h2 class="section-title-group-heading" >
        <?php echo $h['title']?>
        <span class="hero-dot">.</span></h2></div>
          <p> 
          <?php echo $h['description']?>
          </p>
          <a href="">
          <div  class="disconnected-apps-ravetree-logo-wrapper ravetree-logo-wrapper" >
          <?php echo $h['icon']?>
          </div>
          </a>
          <div class="section-actions">
            <div>
            <?php echo $h['title_two']?>
            </div>
             <a href="<?php echo $h['button_text_url']?>" class="button-text2 text icon-right w-inline-block">
            <div class="button-elements">
              <div class="button-text small button-text-lern">
                  <?php echo $h['button_text']?>
                  <i class="las la-angle-right"></i>
              </div>
             </div>
             </a>
          </div>
         </div>
          </div>
            <div class="section-visuals flex-horz-centered col-md-6"><div class="disconnect-apps-feature-visual">
              <div class="disconnected-apps-row centered">
              <div  class="disconnected-app-icon-wrapper plus-30" data-aos="zoom-in">
                <a href="<?php echo $h['link_one_url']?>">
                <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['link_one']?>" alt="" class="icon-image medium hp-fa-feature-icon">
                </a>
              </div>
            </div>
                <div class="disconnected-apps-row justify-ends">
                 <div class="disconnected-app-icon-wrapper" data-aos="zoom-in">
                  <a href="<?php echo $h['link_two_url']?>">
                  <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['link_two']?>" alt="" class="icon-image medium hp-fa-feature-icon" >
                  </a>
                 </div>
                <div class="disconnected-app-icon-wrapper" data-aos="zoom-in">
                  <a href="<?php echo $h['link_three_url']?>">
                  <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['link_three']?>" alt="" class="icon-image medium hp-fa-feature-icon">
                   </a>
                </div>
              </div>
            <div class="disconnected-apps-row centered">
            <div class="disconnected-app-icon-wrapper" data-aos="zoom-in">
              <a href="<?php echo $h['link_four_url']?>">
              <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['link_four']?>" alt="" class="icon-image medium hp-fa-feature-icon">
              </a>
            </div>
            <div  class="disconnected-app-icon-wrapper minus-top-30 minus-left-30" data-aos="zoom-in">
              <a href="<?php echo $h['link_five_url']?>">
              <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['link_five']?>" alt="" class="icon-image medium hp-fa-feature-icon">
              </a>
            </div>
          </div>
            <div class="disconnected-apps-row distibuted">
              <div class="disconnected-app-icon-wrapper minus-left-15-mob" data-aos="zoom-in">
              <a href="<?php echo $h['link_six_url']?>">
              <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['link_six']?>" alt="" class="icon-image medium hp-fa-feature-icon">
              </a>
            </div>
            <div class="disconnected-app-icon-wrapper minus-top-30" data-aos="zoom-in">
              <a href="<?php echo $h['link_seven_url']?>">
              <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['link_seven']?>" alt="" class="icon-image medium hp-fa-feature-icon">
              </a>
            </div>
            </div>
              <div class="disconnected-apps-row centered">
                <div class="disconnected-app-icon-wrapper" >
                <a href="<?php echo $h['link_eight_url']?>">
                <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['link_eight']?>" alt="" class="icon-image medium hp-fa-feature-icon">
                </a>
              </div>
              <div class="disconnected-app-icon-wrapper minus-top-30" >
                <a href="<?php echo $h['link_nine_url']?>">
                  <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['link_nine']?>" alt="" class="icon-image medium hp-fa-feature-icon">
                </a>
              </div>
              </div>
            </div>            
          <div class="hp-da-visuals-background">
          </div>
        </div>
        <div class="section-visuals-background hp-disconnect-apps-feature">
       </div>
       <?php }?>
    </div>
  </div>
</div>
<!-- icon view blog -->
<!-- body section three -->
<section class="bg-body-tree">
<?php foreach ($section_three as $h){?>
    <div class="container-hybrid" >
        <div class="row mx-auto px-4">
            <div class="col-lg-12 body-con-thre" >
                <h3 class=""  >
                    <?php echo $h['title_one']?>
                    <!-- Hybrid <span class="log-clr">CMS</span>, Customer Relations Management (CRM). Tomorrow’s Technology -->
                </h3>
                <?php echo $h['description_one']?>
                <!-- <ul class="list-unstyled text-justify"  data-aos="fade-up">
                    <li>We are now in a world of innovative developing technology, that constantly requires us to keep updated. </li>
                    <li>It is our disruptive competitiveness that leads to enhancing your business. Hybrid is to lead a new generation into
                        building sustainable technologies that are compatible with other CRM’s for integration of services. Hybrid brings it all
                        together. <b> Our vision is to create a one stop solution, easy integrations and sensible pricing, whether you are a
                        small business to larger business enterprises. </b>
                    </li>
                    <li>
                        What is Hybrid, a fully managed service tool, for both you and your customers. It has never been so much more
                        important, with price being so competitive, businesses now need to seek to go the extra step and create personal
                        relationships with all their stakeholders, and this is enabled by Hybrid. 
                    </li>
                </ul> -->
                <h2>
                <?php echo $h['title_two']?>
                </h2>
                <div class="row mx-auto">
                    <div class="col-lg-6 body-con-thre-r pl-0"  data-aos="fade-right">
                        <h3>A single, real-time platform for you & your team</h3>
                        <?php echo $h['description_two']?>
                        <!-- <ul class="list-unstyled text-justify">
                            <li>
                                The ability to manage a customers journey from the start
                                to the end, and then continuing that relationship., Hybrid
                                CMS, allows the simple collaboration within your team. 
                            </li>
                            <li>
                                We know that most of us run so many applications to run
                                our operations, with Hybrid CMS, this stops today. 
                            </li>
                            <li>
                                Track progress and share the customer journey with your
                                team using our automated reports and personally
                                tailored dashboards, all in real time.
                            </li>
                        </ul> -->
                        
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="text-center">
                        <?php echo $h['video']?>
                            <!-- <iframe width="100%" height="315" src="https://www.youtube.com/embed/ndvnpXaj1kU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>
</section>
<!-- body section three -->
<!-- body section five -->

<section>
  <div class="container-hybrid">
    <div class="row mx-auto">
      <div class="col-lg-12 mt-5">
       <h1 class="font-weight-bold fve-title-text pl-5">
        <?= $custom_table_sec_five->title?>
        </h1>
      </div>        
    </div>
    <div class="row mx-auto mb-3 px-4">
      <div class="col-lg-3 " data-aos="fade-right">
        <div class="body-con-fve-f">
           <p class="text-justify">
           <?= $custom_table_sec_five->description?>
           </p>
        </div>
      </div>
      <!-- <div class="col-lg-3 text-center" data-aos="fade-down">
        <div class="body-con-fve">
          <i class="lab la-hackerrank"></i>
           <h2>           
            On-demand knowledge base 
           </h2>
           <p class="text-center">
           Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique minima provident aliquam fuga velit. 
           </p>
        </div>
      </div>
      <div class="col-lg-3 text-center" data-aos="fade-left">
        <div class="body-con-fve ">
          <i class="las la-chalkboard-teacher"></i>
           <h2>       
            Role-based access control
           </h2>
           <p class="text-center">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique minima provident aliquam fuga velit. 
           </p>
        </div>
      </div>
      <div class="col-lg-3 text-center" data-aos="fade-left">
        <div class="body-con-fve">
          <i class="las la-address-book"></i>
           <h2>                    
            Role-based access control
           </h2>
           <p class="text-center">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique minima provident aliquam fuga velit. 
           </p>
        </div>
      </div> -->
    

    <?php
    foreach ($section_five as $h){?>
      <div class="col-lg-3  text-center my-3" data-aos="fade-up">
        <div class="body-con-fve">
        <?php echo $h['icon']?>
        <!-- <i class="las la-clone"></i> -->
           <h2>           
            <!-- Activity logs    -->
            <?php echo $h['title']?>
           </h2>
           <p class="text-center">
           <?php echo $h['description']?>
           </p>
        </div>
      </div>
    <?php }?>
      <!-- <div class="col-lg-3 text-center" data-aos="fade-up">
        <div class="body-con-fve">
          <i class="las la-file-alt"></i>
           <h2>
            Enterprose-grade security
            
           </h2>
           <p class="text-center">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique minima provident aliquam fuga velit. 
           </p>
        </div>
      </div>
      <div class="col-lg-3 text-center" data-aos="fade-up">
        <div class="body-con-fve">
          <i class="las la-users"></i>
           <h2>
            Product assortment
           </h2>
           <p class="text-center">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique minima provident aliquam fuga velit. 
           </p>
        </div>
      </div>
      <div class="col-lg-3 text-center" data-aos="fade-up">
        <div class="body-con-fve">
          <i class="las la-layer-group"></i>
           <h2>
            Product assortment
           </h2>
           <p class="text-center">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde similique minima provident aliquam fuga velit. 
           </p>
        </div>
      </div> -->
    </div>
    
  </div>
</section>
<!-- body section five -->
<!-- body section four -->
<section class="bg-body-con-fr">
    <div class="container-hybrid" >
        <div class="row mx-auto">
            <div class="col-lg-4 body-con-frf " data-aos="fade-up">
                 <h1>
                 <?= $custom_table_sec_four->title?>
                </h1>
                 <p class="text-justify">
                 <?= $custom_table_sec_four->description?>
                 </p>
            </div>
            <?php foreach ($section_four as $h){
              $features = $h['features'];
              $feature = explode('??', $features);
              $count = count($feature);
            ?>
            <div class="col-lg-4 body-con-frf-d " data-aos="fade-up">
               <div class="card body-con-frsd">
                   <h4>
                   <?php echo $h['icon']?>
                    <?php echo $h['title']?>
                   </h4>
                   <p>
                   <?php echo $h['description']?>
                   </p>
                   <h6>
                   <?php echo $h['feature_title']?>
                       
                   </h6>
                   <ul class="list-unstyled">
                        <?php for($i = 0; $i < 3; $i++): ?>
                       <li>
                       
                        <i class="fas fa-check"></i>
                           <a href=""><?php echo $feature[$i] ?></a>
                        </li>
                      <?php endfor; ?>
                   </ul>
                   <button class="btn-bdy-fr">
                   <?php echo $h['button_text']?>
                    </button>
               </div>
            </div>
            <?php }?>
            
    </div>
</section>
<!-- body section four -->



<!-- body section six -->
<!-- <section class="">
  <div class="">
    <div class="row mx-auto">
      <div class="col-lg-6 p-0 body-con-six-fdiv" data-aos="fade-up">
        <div class="body-con-six">
          
        </div>
      </div>
      <div class="col-lg-6 p-0 body-con-six-sdiv" data-aos="fade-up">
        <div class="">
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- body section six -->
<!-- body section seven -->
<div class="container-hybrid mt-5 mb-5">
	<div class="row">
		<div class="col">
			<!--Carousel Wrapper-->
			<div class="carousel slide carousel-multi-item" data-ride="carousel" id="multi-item-example1">
				<h1 class="d-inline-block mb-3 bdy-seven-title">
        <?= $custom_table_sec_seven->title?>
        <!-- What can Ravetree do for you? -->
        </h1>
        <!--Controls-->
				<!--Slides-->
				<div class="carousel-inner p-4 carousel-inner-width" role="listbox">

					<!-- slide-->
          <?php $i=3; $total = count($section_seven); foreach ($section_seven as $h){ ?>
            <?php if($i%3==0): ?>
          <div class="carousel-item <?= ($i==3) ? 'active' : ''; ?>">
						<div class="row">
            <?php endif; ?>
						  <div class="col-lg-4" data-aos="fade-up">
                <div class="body-con-svn">
                  <h6><?php echo $h['tag']?></h6>
                   <h5> 
                   <?php echo $h['title']?>
                   </h5>
                   <p class="text-justify">
                   <?php echo $h['description']?>
                   </p>
                     <a href="<?php echo $h['button_url']?>" class="">
                     <?php echo $h['button_text']?> <i class="fas fa-angle-right"></i>
                      </a>
                </div>
              </div>
              <?php if(($i+1)%3==0 && $i != 3): ?>
                </div>
          </div>
            <?php endif; ?>
            <?php if( ($i-2)==$total && $total%3 != 0): ?>
                </div>
          </div>
            <?php endif; ?>
						
          <?php $i++; }?>
          <!--/. slide-->

				</div><!--/.Slides-->
        <!--Indicators-->
        <div class="controls-bottom pull-right controls-bottom-main">
          <a class="btn btn-outline-secondary prev" data-slide="prev" href="#multi-item-example1"><i class="fa fa-chevron-left"></i></a> 
          <a class="btn btn-outline-secondary next" data-slide="next" href="#multi-item-example1"><i class="fa fa-chevron-right"></i></a>
				</div><!--/.Controls-->
				<!--/.Indicators-->
			</div><!--/.Carousel Wrapper-->
		</div>
	</div>
</div>
<!-- body section seven -->

<!-- body section eight -->
 <section class="bg-body-con-eght">
   <div class="container-hybrid" data-aos="fade-up">
     <div class="row mx-auto">
       <div class="col-lg-6 body-con-eght">
       <?php foreach ($section_eight as $h){ ?>
         <h2 class="">
         <?php echo $h['title']?>
          <!-- See all your markething come together -->
         </h2>
         <p>
         <?php echo $h['description']?>
          <!-- Our markething calender bring all of your campaigns into one clear view, so you can stay organized and productive. -->
         </p>
         <a href=" <?php echo $h['button_url']?>">
         <button class="">
         <?php echo $h['button_text']?>
         <!-- View your clendar -->
         </button>
         </a>
       </div>
       <div class="col-lg-6 pr-0">
         <div class="body-con-eght-mg">
           <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['photo']?>" width="100%" alt="">
         </div>
       </div>
       <?php }?>
     </div>
   </div>
 </section>
<!-- body section eight -->

<!-- body section nine -->
<section>
  <div class="mt-5 container-hybrid">
    <div class="row mx-auto">
      <div class="col-lg-12 text-center body-con-nine">
        <h1>
          Sell it. Do it. Bill it.
        </h1>
      </div>
    </div>
    <div class="row mx-auto">
      <div class="col-lg-12">
        <div class="tile" id="tile-1">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <div class="slider"></div>
            <?php foreach ($section_nine as $h){ ?>
             <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">

                <?php echo $h['tab_one_icon']?>
                <?php echo $h['tab_one_title']?> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                <?php echo $h['tab_two_icon']?>
                <?php echo $h['tab_two_title']?>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                <?php echo $h['tab_three_icon']?>
                <?php echo $h['tab_three_title']?>
                </a>
              </li>
            <li class="nav-item">
                <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false">
                <?php echo $h['tab_four_icon']?>
                <?php echo $h['tab_four_title']?>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="reports-tab" data-toggle="tab" href="#reports" role="tab" aria-controls="reports" aria-selected="false">
                <?php echo $h['tab_five_icon']?>
                <?php echo $h['tab_five_title']?>
                </a>
              </li>
          </ul>
        
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="" data-aos="fade-up">
                <div class="row mx-auto">
                  <div class="col-lg-5 body-con-nine-snd m-auto">
                    <h1>
                    <?php echo $h['tab_one_header']?>
                    </h1>
                    <p>
                    <?php echo $h['tab_one_description']?>
                    </p>
                    
                  </div>
                  <div class="col-lg-7 body-con-nine-snd-sd" data-aos="fade-up">
                    <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['tab_one_photo']?>" width="100%" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="">
              <div class="row mx-auto">
                <div class="col-lg-5 body-con-nine-snd m-auto">
                  <h1>
                  <?php echo $h['tab_two_header']?>
                  </h1>
                  <p>
                  <?php echo $h['tab_one_description']?>
                  </p>
                  
                </div>
                <div class="col-lg-7 body-con-nine-snd-sd">
                  <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['tab_two_photo']?>" width="100%" alt="">
                </div>
              </div>
            </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <div class="">
              <div class="row mx-auto">
                <div class="col-lg-5 body-con-nine-snd m-auto">
                  <h1>
                  <?php echo $h['tab_three_header']?>
                  </h1>
                  <p>
                  <?php echo $h['tab_three_description']?>
                  </p>
                  
                </div>
                <div class="col-lg-7 body-con-nine-snd-sd">
                  <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['tab_three_photo']?>" width="100%" alt="">
                </div>
              </div>
            </div>
             </div>
            <div class="tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
              <div class="">
                <div class="row mx-auto">
                  <div class="col-lg-5 body-con-nine-snd m-auto">
                    <h1>
                    <?php echo $h['tab_four_header']?>
                    </h1>
                    <p>
                    <?php echo $h['tab_four_description']?>
                    </p>
                    
                  </div>
                  <div class="col-lg-7 body-con-nine-snd-sd">
                    <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['tab_four_photo']?>" width="100%" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="reports" role="tabpanel" aria-labelledby="reports-tab">
              <div class="">
                <div class="row mx-auto">
                  <div class="col-lg-5 body-con-nine-snd m-auto">
                    <h1>
                    <?php echo $h['tab_five_header']?>
                    </h1>
                    <p>
                    <?php echo $h['tab_five_description']?>
                    </p>
                    
                  </div>
                  <div class="col-lg-7 body-con-nine-snd-sd">
                    <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['tab_five_photo']?>" width="100%" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>       
        </div>
      </div>
    </div>
    <?php }?>
  </div>
</section>
<!-- body section nine -->
<!-- body section ten -->
<!-- <section>
  <div class="bg-body-con-ten">
    <div class="row mx-auto">
      <div class="col-lg-3 body-con-ten">
        <h1>
          Help desk software that creates better customer expriences for your business
        </h1>
       <ul class="list-unstyled body-con-ten-ul">
         <li>
           Officiis deleniti  
         </li>
         <li>Sit amet consectetur</li>
         <li>Adipisicing elit</li>
         <li>Fugit impedit esse corporis</li>
         <li>Numquam assumenda</li>
         <li>In repellat ratione</li>

       </ul>
      </div>
      <div class="col-lg-9">
          <div class="row mx-auto body-con-ten-row">
            <div class="col-lg-6">
              <div class="fst-img-bd-ten">
                <img src="<?= base_url() ?>assets/images/ten-2.jpg" width="100%" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="snd-img-bd-ten">
                <img src="<?= base_url() ?>assets/images/ten-1.jpg" width="100%" alt="">
              </div>
            </div>
          </div>
      </div>
      <div class="col-lg-12 body-con-ten-btm-dv">
        <div class="body-con-ten-btm">
          <h1>
            A help desk that helps you 
          </h1>
          <p>
            Track, priorities, and solve your customer interactions with ease.
          </p>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- body section ten -->

<!-- body section eleven -->
<section class="bg-body-con-elvn-lt py-5">
  <div class="container-hybrid-evl">
    <div class="row mx-auto">
    
      <div class="col-lg-12 body-con-elvn" data-aos="fade-up">
        <h1>
        <?= $custom_table_sec_ten->title?>
        </h1>
        <p>
        <?= $custom_table_sec_ten->description?>
          <br><br>
        </p>
      </div>
    </div>
    <div class="row mx-auto bg-body-con-elvn-lt">
    <?php foreach ($section_ten as $h){ ?>
      <div class="col-lg-3 px-5 my-4" data-aos="fade-right">
        <div class="card text-center resp-card-sv">
          <h5 class="bdy-con-ten-til">
          <?php echo $h['title_one']?>
          <!-- Agencies -->
          </h5> 
          <div class="bdy-con-ten-lgo">
            <img src="<?= base_url() ?>assets/images/logo-cms.png" alt="">
          </div>
          <div class="row">
            <div class="col-md-12 bdy-con-ten-sv">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F2E9E4" fill-opacity="1" d="M0,96L80,112C160,128,320,160,480,144C640,128,800,64,960,32C1120,0,1280,0,1360,0L1440,0L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg> 
              <div class="bg-bdy-con-ten">
              </div>
            </div>
            <div class="col-6">
              <div class="bdy-con-ten-dv6-2">
              <h5>
              <?php echo $h['title_two']?> 
              </h5>
              <h1>
               <?php echo $h['percentages']?> 
              </h1>
              </div>
            </div>
            <div class="col-6">
              <div class="bdy-con-ten-img-p">
                <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['photo']?>" width="100%" alt="">
              </div>
            </div>
          </div>             
        </div>
      </div>
      <?php }?>
      <div class="col-lg-12 text-center body-con-elvn-alst">
        <a href="">
          <?= $custom_table_sec_ten->button_text?>
          <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- body section eleven -->

<!-- body section thirteen -->
<section>
  <div class="mt-5">
    <div class="row mx-auto">
      <?php foreach ($section_eleven as $h) { ?> 
      <div class="col-md-12 text-center mb-5 last-section" data-aos="fade-right">
        <h1 class="font-weight-bold">
        <?php echo $h['header']?>
        </h1>
       <h4 class="py-2">
       <?php echo $h['sub_header']?>
       </h4>
       <h4 class="py-2">
       <?php echo $h['sub_header_two']?>
       <!-- Select what you want to manage: -->
       </h4>
       <div class="row mx-auto d-flex last-section-s">
         <div class="">
           <a href="<?php echo $h['service_one_url']?>" class="text-dark">
           <i class="fas fa-dot-circle circle-2"></i> <?php echo $h['service_one']?>
           </a>
          </div>

         <div class="">
           <a href="<?php echo $h['service_two_url']?>" class="text-dark">
           <i class="fas fa-dot-circle circle-3"></i><?php echo $h['service_two']?>
           </a>
          </div>

         <div class="">
          <a href="<?php echo $h['service_three_url']?>" class="text-dark">
          <i class="fas fa-dot-circle circle-4"></i> <?php echo $h['service_three']?>
          </a>
        </div>

         <div class="">
           <a href="<?php echo $h['service_four_url']?>" class="text-dark">
           <i class="fas fa-dot-circle circle-5"></i><?php echo $h['service_four']?>
           </a>
         </div>
         
        <div class="">
         <a href="<?php echo $h['service_five_url']?>" class="text-dark">
         <i class="fas fa-dot-circle circle-1"></i><?php echo $h['service_five']?>
         </a>
        </div>

       </div>
       <div class="row mx-auto d-flex last-section-s py-2">


        <div class="">
         <a href="<?php echo $h['service_six_url']?>" class="text-dark">
          <i class="fas fa-dot-circle circle-2"></i> <?php echo $h['service_six']?>
         </a>
      </div>

        <div class="">
          <a href="<?php echo $h['service_seven_url']?>" class="text-dark"> 
          <i class="fas fa-dot-circle circle-3"></i><?php echo $h['service_seven']?>
          </a>
      </div>

        <div class="">
          <a href="<?php echo $h['service_eight_url']?>" class="text-dark"> 
          <i class="fas fa-dot-circle circle-5"></i><?php echo $h['service_eight']?>
          </a>
        </div>
       <div class="">
           <a href="<?php echo $h['service_nine_url']?>" class="text-dark">
           <i class="fas fa-dot-circle circle-1"></i><?php echo $h['service_nine']?>
           </a>
        </div>

      </div>
      <a href="<?php echo $h['button_text_url']?>">
        <button class="btn btn-dark-style d-block">
        <?php echo $h['button_text']?>
          <i class="fas fa-angle-right"></i>
        </button>
      </a>
      </div>
      <?php }?>
    </div>
  </div>
</section>
<!-- body section thirteen -->