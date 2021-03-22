<!-- partner page -->
<!-- section one -->

<!-- section one -->
<!-- section two -->

<!-- section two -->

<!-- section three -->
<section>
    <div class="container-page py-5">
        <div class="row mx-auto">
            <div class="col-md-7 mx-auto text-center">
            <h1>
            <?= $partner_update['title_one']?>
            </h1>
            <h5 class="">
            <?= $partner_update['des_one']?>

            </h5>
            </div>


            <div class="col-lg-12 py-5">
                <div class="row mx-auto">

                <?php foreach ($partner_sec_one as $h) { ?>
                    <div class="col-lg-4 gallery-card-prt">
                        <div class="card py-4">
                            <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>" class="mx-auto " width="270px"  height= 170px; atl="">
                        
                        <h1 class="text-center py-3">
                          <?php echo $h['title'] ?>


 

                        </h1>
                        <p class="text-center px-5">
                        <?php echo $h['description'] ?>
                        </p>
                        
                      </div>
                    </div>

                    <?php }?>
                  
              
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section three -->

<!-- section four -->
<section>
    <div class="container-page py-5">
        <div class="row mx-auto">
            <div class="col-md-7 mx-auto text-center">
            <h1>
            <?= $partner_update['title_two']?>
            </h1>
            <h5 class="">
            <?= $partner_update['des_two']?>
            </h5>
            </div>
            <div class="col-lg-12 py-5">
                <div class="row mx-auto">
                <?php foreach ($partner_sec_two as $h) { ?>
                    <div class="col-lg-4 gallery-card-prt">
                        <div class="card py-4">
                            <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>" class="mx-auto " width="270px"  height= 170px; alt="">
                        
                        <h1 class="text-center py-3">
                         <?php echo $h['title'] ?>
                        </h1>
                        <p class="text-center px-5 text-justify-center">
                        <?php echo $h['description'] ?>
                        </p>
             
                      </div>
                    </div>
                    <?php }?>

                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section four -->
<!-- section five -->
<section>
 <div class="container-page py-5">
     <div class="row mx-auto">
         <div class="col-lg-12 text-center py-5">
             <h1>
             <?= $partner_update['title_three']?>
             </h1>           
         </div>

         <div class="col-lg-12">
             <div class="row mx-auto">
             <?php foreach ($partner_sec_three as $h) { ?>
                <div class="col-md-4">

                    <div class="card py-4 my-card-quote">
                        <h5 class="text-justify px-5">
                        <?php echo $h['short_des'] ?>
                        </h5>

                        <div class="row mx-auto justify-content-center py-3">
                          <div class="col-md-3">
                              <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>" width="100%" class="rounded-circle" alt="">
                          </div>
                          <div class="col-md-6">
                              <h5>
                              <?php echo $h['dp_name'] ?>
                             </h5>
                             <p>
                             <?php echo $h['address'] ?>
                             </p>
                          </div>
                        </div>
                    </div>
         
                </div>
                <?php }?>
           
             </div>
         </div>
     </div>
 </div>
</section>

<!-- section five -->


<!-- section six -->
<section>
  <div class="container-page">
    <div class="row mx-auto">
      <div class="col-md-12 text-center">
        <h1>
        <?= $partner_update['title_four']?>
        </h1>
      </div>
      <div class="col-lg-12 py-5">
        <div class="row mx-auto">
        <?php foreach ($partner_sec_four as $h) { ?>
          <div class="col-lg-3">
            <div class="card ptr-logo-glry">
              <div class="ptr-logo-img">
              <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>" width="100%" class="mx-auto p-4" alt="">
              </div>
              <div class="">
              <h1 class="text-center">
              <?php echo $h['rating'] ?>
              </h1>
              </div>
              <div class=" text-center star-icon">
                <a href=""><i class="icon ion-ios-star"></i></a>
                <a href=""><i class="icon ion-ios-star"></i></a>
                <a href=""><i class="icon ion-ios-star"></i></a>
                <a href=""><i class="icon ion-ios-star"></i></a>
                <a href=""><i class="icon ion-ios-star-half"></i></a> 
            </div>
            </div>
          </div>
          <?php }?>
         
        </div>
      </div>
    </div>
  </div>
</section>
<!-- section six -->
<!-- section seven -->
<section>
  <div class="container-page py-5">

    <div class="row mx-auto ">
      <div class="col-md-12 text-center">
        <h1><?= $partner_update['title_five']?></h1>
      </div>
      <?php foreach ($partner_sec_five as $h) { ?>
       <div class="col-md-2 award-glry">
         <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>" width="100%" alt="">
       </div>
       <?php }?>
      
    </div>

    <div class="row mx-auto justify-content-center">
      <div class="col-md-2 award-glry">
        <img src="<?= base_url() ?>assets/images/award-7.png" width="100%" alt="">
      </div>
      <div class="col-md-2 award-glry">
        <img src="<?= base_url() ?>assets/images/award-8.png" width="100%" alt="">
      </div>
      <div class="col-md-2 award-glry">
        <img src="<?= base_url() ?>assets/images/award-9.png" width="100%" alt="">
      </div>
      <div class="col-md-2 award-glry">
        <img src="<?= base_url() ?>assets/images/award-10.png" width="100%" alt="">
      </div>
      <div class="col-md-2 award-glry">
        <img src="<?= base_url() ?>assets/images/award-11.png" width="100%" alt="">
      </div>
    </div>

  </div>
</section>
<!-- section seven -->

<!-- section eight -->
<section>
  <div class="container-page py-5">
    <div class="row mx-auto">
      <div class="col-md-12 text-center py-5 hybrd-cms-title">
        <h1><?= $partner_update['title_six']?></h1>
      </div>

    </div>
    <div class="row mx-auto">

    <?php foreach ($partner_sec_six as $h) { ?>
      <div class="col-md-4">
        <div class="card crd-cms-hrbd">
          <div class="">
            <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>" width="100%" alt="">
          </div>
          <p class="px-3 py-3">
          <?php echo $h['title'] ?>
          </p>
          <h1 class="">
          <?php echo $h['main_title'] ?>
          </h1>
          <div class="row mx-auto py-2">
            <div class="col-3">
              <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['dp_image']?>" class="rounded-circle" width="100%" alt="">
              
            </div>
            <div class="col-5 crd-txt-cms m-auto">
              <a href=""><?php echo $h['dp_name'] ?></a>
            </div>
            <div class="col-4 crd-txt-cms-t m-auto text-right">
              <a href="<?php echo $h['button_url'] ?>"><?php echo $h['button_text'] ?></a>
            </div>
          </div>
        </div>
      </div>
      <?php }?>
    
    </div>
    <div class="row mx-auto">
      <div class="col-md-12 text-center hybrd-cms-btn py-5">
        <a href="button_url_one">
        <?= $partner_update['button_text_one']?>
          <i class="fas fa-long-arrow-alt-right"></i>
        </a>
      </div>
      <div class="col-md-12 text-center hybrd-cms-btn py-5">
        <a href="button_url_two">
          <button class="btn btn-danger">
          <?= $partner_update['button_text_two']?>
          <i class="fas fa-arrow-right"></i>
          </button>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- section eight -->


<!-- partner page -->