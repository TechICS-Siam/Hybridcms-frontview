<!-- body section two -->
<section class="">
    <div class="container-fluid">
      <div class="row m-0 p-0">
      
        <div class="col-md-12" >
          <div class="owl-carousel owl-theme owl-theme-custom">
              <div class="img-bdr">
              <?php foreach ($section_two as $h){?>
                <a target="_blank" href="#">
                  <img src="<?= base_url() ?>uploads/home-page/<?php echo $h['photo']?>" class="img-hov" />
        
                </a>
              <?php }?>
              </div>
          </div>
        </div>

      </div>
    </div>
</section>

<!-- body section two -->