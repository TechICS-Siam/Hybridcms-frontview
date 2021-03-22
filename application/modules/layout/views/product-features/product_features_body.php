<!-- product features -->
<!-- section one -->
<section>
    <div class="container-page py-5">
      <div class="row mx-auto">
        <div class="col-md-12 text-center">
          <h1>
           <?= $product_features_update['title']?>
          </h1>
        </div>
        <div class="col-lg-12 py-5">
          <div class="row mx-auto">
            <?php foreach ($product_features_sec_one as $h) {?>
            <div class="col-lg-4">
              <div class="card ptr-feature-glry">
                <div class="ptr-feature-img">
                <img src="<?= base_url() ?>uploads/sub_menu/<?= $h['image'] ?>" class="mx-auto p-4" alt="">
                </div>
                <div class="ptr-feature-title">
                <h1 class="text-center ">
                  <?php echo $h['title']?> 
                </h1>
                </div>
                <div class=" text-center ptr-feature-p">
                 <p class="">  
                 <?php echo $h['description']?> 
                </p>
              </div>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- section one -->



<!-- section two -->
<section>
  <div class="cotainer-page py-5">
    <div class="row mx-auto">
      <div class="col-md-12">
        <h1 class="text-center">
        <?= $product_features_update['title_two']?>
        </h1>
        <h4 class="text-center py-4">
        <?= $product_features_update['short_des_two']?>
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

    <?php foreach ($product_features_sec_two as $h) {?>
      <div class="col-md-6">
        <h1 class="pb-3">
       <?= $h['title']?>
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
              <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>"  alt="">
            </div>
      </div>
    <?php } ?>
        </div>
  </div>
</section>



<!-- section three -->
<!-- section four -->


<!-- <section>
  <div class="container-page py-5">
    <div class="row mx-auto disanding-prdct">
      <div class="col-md-6">
        <div class="">
          <img src="<?= base_url() ?>assets/images/Group-25.svg"  alt="">
        </div>
  </div>
      <div class="col-md-6">
        <h1 class="pb-3">
        Stay connected with your
        customers 24/7
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
     
    </div>
  </div>
</section> -->
<!-- section four -->

<!-- section five -->

<section class="bg-subscribe my-5">
  <div class="container-page py-5 ">
      <div class="mx-auto ">
        <div class="col-md-12 email-transit">
            <h1 class="text-center">
            <?= $product_features_update['title_three']?>
            </h1>
            <p class="text-center">
            <?= $product_features_update['short_des_three']?>
            </p>
            <div class="col-lg-6 mx-auto py-3">
              <form action="" class="row mx-auto">
                <div class="col-8 mx-auto">
                  <input type="text" class="w-100 input-email-s" placeholder="Enter your Email">
                </div>
                <div class="col-4 mx-auto">
                  <input type="submit" class="w-100 input-button-s" >
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- section five -->
<!-- section six -->


<section>
  <div class="container-page py-5">
    <div class="row mx-auto">
    <?php foreach ($product_features_sec_three as $h) {?>
      <div class="col-md-6">
        <h1 class="pb-3">
       <?= $h['title']?>
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
              <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>"  alt="">
            </div>
      </div>
    <?php } ?>
    </div>
  </div>
</section>

<!-- section six -->
<!-- section seven -->


<!-- <section>
  <div class="container-page py-5">
    <div class="row mx-auto">
      <div class="col-md-6">
        <div class="">
          <img src="<?= base_url() ?>assets/images/Group-25.svg"  alt="">
        </div>
  </div>
      <div class="col-md-6">
        <h1 class="pb-3">
        Stay connected with your
        customers 24/7
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
     
    </div>
  </div>
</section> -->
<!-- section seven -->
<!-- section eight -->
<section class="bg-subscribe-n py-5">
  <div class="container-page py-5">
    <div class="row mx-auto">
      <div class="col-md-6 crm-eight">
        <p class="">
        <?= $product_features_update['short_title_four']?> 
        </p>
        <h1 class="pb-3">
        <?= $product_features_update['title_four']?>  
        </h1>
        <ul class="list-unstyled product-feature-glry">
          <li><i class="icon ion-checkmark-circled"></i>
            <a href="">
            
              The simplest CRM user interface  
            </a>
        </li>
        <li>
          <i class="icon ion-checkmark-circled"></i>
            <a href="">
              Free consultation, a comprehensive knowledge base and an extensive onboarding program that will kickstart your business
            </a>
        </li>
        <li>
          <i class="icon ion-checkmark-circled"></i>
            <a href="">
              Effortless data transfer and migration
            </a>
        </li>
          <li>
            <i class="icon ion-checkmark-circled"></i>
            <a href="">
              Full integration with countless third-party apps and systems
            </a>
        </li>
        <li>
          <i class="icon ion-checkmark-circled"></i>
          <a href="">
            Mobile responsive application optimized for all devices and screen sizes
          </a>
         </li>
         <li>
          <i class="icon ion-checkmark-circled"></i>
          <a href="">
            Mobile responsive application optimized for all devices and screen sizes
          </a>
         </li>
         <li><a href="">
        Learn more about us or sign up and try Simply for 30 days, free of charge.

         </a></li>
        </ul>
        <a href="<?= $product_features_update['button_url']?>  ">
        <button class="btn-trial">
        <?= $product_features_update['button_text']?>  
        </button>
        </a>
      </div>
      <div class="col-md-6">
            <div class="">
              <img src="<?= base_url() ?>updates/sub_menu/<?= $product_features_update['image']?>"  alt="">
            </div>
      </div>
    </div>
  </div>
</section>

<!-- section eight -->
<!-- section nine -->
<section>
  <div class="container-page py-5">
    <div class="row mx-auto">
      <div class="col-lg-6 logo-title-pdr-ft mx-auto">
        <p class="text-center"> <?= $product_features_update['short_title_five']?>  </p>
        <h1 class="text-center">
        <?= $product_features_update['title_five']?>
        </h1>    
      </div>
      <div class="col-lg-9 mx-auto logo-title-pdr-ft-s py-4">
        <p class="text-center">
        <?= $product_features_update['des_five']?></p
        </p>
      </div>

    </div>
    <div class="row mx-auto logo-glry-pdr-ftr">

    <?php foreach ($product_features_sec_five as $h) {?>
      <div class="col-lg-2 ">
        <div><img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>" alt=""></div>
      </div>
      <?php }?>
    </div>
    
  </div>
</section>

<!-- section nine -->

<!-- product features -->