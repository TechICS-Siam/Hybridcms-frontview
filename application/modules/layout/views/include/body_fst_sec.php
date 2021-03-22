<!-- body first section -->
<section>
<?php foreach ($section_one as $h){?> 
    <div style="background-image: url(<?= base_url() ?>uploads/home-page/<?php echo $h['background_image']?>);" class="bg-body-hm">
        <div class="row mx-auto">
            <div class="col-lg-8 banner-text-dv animated bounceInLeft">
                <h1 class="banner-text ">
                <?php echo $h['header']?>
                </h1>
                <p class="banner-text-p">
                <?php echo $h['sub_header']?>
                </p>
                <p class="banner-text-ps">
                  <a href="">
                  <?php echo $h['learn_more_text']?> <i class="fas fa-angle-right"></i>
                  </a>
                </p>
            </div>
            <div class="col-lg-4 banner-btn-dv">
                <div class="btn-banner-st  animated bounceInRight">
                  <button><?php echo $h['learn_more_text_two']?></button>  
                  <button>
                    <i class="fas fa-play"></i>
                    <?php echo $h['watch_custom_video_text']?>
                    </button>    
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</section>
<!-- body first section -->