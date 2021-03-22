<!-- investor -->
<!-- title section -->


<section>
  <div class="container-page py-5">
    <div class="row mx-auto">
      <div class="col-md-12 invest-tag-title">
        <h1 class="text-center px-5">
        <?php echo $investor_relation_update['heading']?>
        </h1>
        <p class="text-center">
        <?php echo $investor_relation_update['short_des']?>
        </p>
        
      </div>
<div class="col-lg-12">
  <div class="row mx-auto invest-tag-list px-5">
    <div class="col-lg-3">
    <a href=" <?php echo $investor_relation_update['button_one_url']?>">
      <h3>
      <?php echo $investor_relation_update['button_one']?>
      </h3>
    </a>
    </div>
    <div class="col-lg-3">
    <a href=" <?php echo $investor_relation_update['button_two_url']?>">
      <h3>
      <?php echo $investor_relation_update['button_two']?>
      </h3>
    </a>
    </div>
    <div class="col-lg-3">
    <a href=" <?php echo $investor_relation_update['button_three_url']?>">
      <h3>
      <?php echo $investor_relation_update['button_three']?>
      </h3>
    </a>
    </div>
    <div class="col-lg-3">
    <a href=" <?php echo $investor_relation_update['button_four_url']?>">
      <h3>
      <?php echo $investor_relation_update['button_four']?>
      </h3>
    </a>
    </div>
  </div>
</div>
    
    </div>
  </div>
</section>


<!-- title section -->

<!-- advertising section -->

<section>
  <div class="container-page">
    <div class="row mx-auto">
    <div class="col-lg-4 advertis-title">
       <p class="">05 November 2020</p>
       <h1 class="">
       <?php echo $investor_relation_update['project_title']?>
       </h1>
       <h5>
       <?php echo $investor_relation_update['project_short_des']?>
       </h5>
    </div>
    <div class="col-lg-8">
      <div class="">
        <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $investor_relation_update['image']?>" width="100%" alt="">
      </div>
    </div>

    <div class="col-lg-12">
      <div class="row mx-auto advertis-tag py-3">
        <div class="col-lg-3">
          <h4 class="">
            Press Release
          </h4>
          <p class="">
            PDF(3.6MB)
          </p>
        </div>
        <div class="col-lg-3">
          <h4 class="">
            Presentation
          </h4>
          <p class="">
            PDF(4.6MB)
          </p>
        </div>
        <div class="col-lg-3">
          <h4 class="">
            Booklet
          </h4>
          <p class="">
            PDF(6.8MB)
          </p>
        </div>
        <div class="col-lg-3">
          <h4 class="">
            Transcript
          </h4>
          <p class="">
            PDF(304KB)
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-12 financial-sct">
      <h1 class="py-4">
        Financial highlights - Interim results 2020/21
      </h1>
      <div class="row">
        <div class="col-lg-3">
          <h1 class="">
            +6.9%
          </h1>
          <p class="">
            Like-for-like sales (excl. fuel)
          </p>
        </div>
        <div class="col-lg-3">
          <h1 class="">
            +8.2%
          </h1>
          <p class="">
            Grocery sales   
          </p>
        </div>
        <div class="col-lg-3">
          <h1 class="">
            £301m
          </h1>
          <p class="">
            Underlying profit before tax           
          </p>
        </div>
        <div class="col-lg-3">
          <h1 class="">
            £943m
          </h1>
          <p class=""> 
           Retail free cash flow           
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-12 py-5 performance-dv">
      <h1 class="">
      <?php echo $investor_relation_update['title_two']?>
      </h1>
      <div class="row mx-auto">
      <?php foreach ($investor_relation_sec_one as $h) {?>
        <div class="col-lg-6 pl-0">
          <div class="">
            <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>" width="100%" alt="">

            <div class="title-per">
              <h5 class="">
               <?php echo $h['title']?>
              </h5>
              <a href="  <?php echo $h['short_des_url']?>">
              <h3>
              <?php echo $h['short_des']?>
              </h3>
              </a>
            </div>
          </div>

        </div>

        <?php }?>
       
        <div class="col-lg-12 last-update-dv py-5">
            <h1>
            <?php echo $investor_relation_update['title_three']?>
            </h1>
          <div class="row mx-auto ">

          <?php foreach ($investor_relation_sec_two as $h) {?>
            <div class="col-lg-4">
              <div class="">
               <h5 class="">
                <?= $h['title']?>
               </h5>
               <h3 class="">
               <?= $h['short_des']?>
               </h3>
               <p>
                03 December 2020
               </p>
               <a href="<?= $h['button_url']?>  " class="text-dark" >
               <h2 class="">
               <?= $h['button_text']?>  
               </h2>
               </a>
              </div>
            </div>
            <?php }?>
       
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>

<section class="bg-light py-5 mb-5">
  <div class="container-page py-3">
    <div class="row mx-auto">
      <div class="col-lg-12 quick-link p-0 py-3">
        <h1 class="">
        <?php echo $investor_relation_update['title_four']?>
        </h1>
      </div>
      <div class="row mx-auto quick-link-rw">
      <?php foreach ($investor_relation_sec_three as $h) {?>
        <div class="col-lg-4">
        <a href="<?php echo $h['tag_url']?>" class="text-dark">
          <h5 class="">
            <?php echo $h['tag']?>
          </h5>
          </a>
         
        </div>
        <?php }?>
      

      </div>
      
    </div>
  </div>
</section>
<!-- advertising section -->



<!-- investor -->
