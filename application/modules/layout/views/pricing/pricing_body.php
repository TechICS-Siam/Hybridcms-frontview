<!-- section two -->
<section>
    <div class="cotainer-page py-5">
      <div class="row mx-auto">
        <div class="col-md-12">
          <h1 class="text-center">
           <?= $pricing_section_one['title']?>
          </h1>
          <h4 class="text-center py-4">
          <?= $pricing_section_one['short_des']?>
          </h4>
        </div>
        <div class="col-lg-4 mx-auto">
            <form action="" class="row mx-auto">
              <div class="col-8 mx-auto">
                <input type="text" class="w-100 input-email" placeholder="Enter your Email">
              </div>
              <div class="col-4 mx-auto">
                <input type="submit" class="w-100 input-button" >
              </div>
            </form>
        </div>
      </div>
    </div>
</section>
<!-- section two -->
<!-- section three -->

<section>
    <div class="container-page py-5">
      <div class="row mx-auto">
        <div class="col-md-6">
          <h1 class="pb-3">
          <?= $pricing_section_one['card_title']?>
          </h1>
          <ul class="list-unstyled product-feature-glry">
            <li><i class="icon ion-checkmark-circled"></i>
              <a href="">
              
              Communicate with your clients through email, live chat, social media or smartphone
              </a>
          </li>
          <li>
            <i class="icon ion-checkmark-circled"></i>
              <a href="">
              Follow leads, sales calls and email marketing campaigns
              </a>
          </li>
          <li>
            <i class="icon ion-checkmark-circled"></i>
              <a href="">
              Integrate all communication data into a single dashboard
              </a>
          </li>
            <li>
              <i class="icon ion-checkmark-circled"></i>
              <a href="">
              Test the effectiveness of each communication method
              </a>
          </li>
          <li>
            <i class="icon ion-checkmark-circled"></i>
            <a href="">
            Receive real-time notifications about your customers’ activities
            </a>
           </li>
            
          </ul>
        </div>
        <div class="col-md-6">
              <div class="">
                <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $pricing_section_one['image']?>"  alt="">
              </div>
        </div>
      </div>
    </div>
</section>

<!-- section three -->
<!-- body section four -->
<section class="bg-body-con-fr">
    <div class="container-hybrid">
        <div class="row mx-auto">
            <div class="col-lg-4 body-con-frf ">
                 <h1>
                 <?= $pricing_section_one['title_two']?>
                </h1>
                 <p class="text-justify">
                  
                       
              

                  <?= $pricing_section_one['description_two']?>
   
                 
                 </p>
            </div>

            
            <?php foreach ($pricing_section_two as $h){
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
                   <a href="<?php echo $h['button_url']?>">
                   <button class="btn-bdy-fr w-100">
                   <?php echo $h['button_text']?>
                    </button>
                    </a>
               </div>
            </div>
            <?php }?>
    
       
        </div>
    </div>
</section>
<!-- body section four -->