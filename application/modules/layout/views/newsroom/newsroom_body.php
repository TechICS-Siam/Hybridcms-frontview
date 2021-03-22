
<!-- news page -->

<section>
  <div class="">
    <div class="row mx-auto ">
        <div class="col-lg-12 p-0 newsroom-bnr">
            <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $newsroom_update['image']?>" width="100%" alt="">
            <div class="mx-auto">
                <h1>
                <?php echo $newsroom_update['title']?>
                </h1>
            </div>
        </div>
    </div>
  </div>
  <div class="container-page py-5">
    <div class="row mx-auto">
        <div class="col-lg-7">
            <div class="rgt-dv-newsroom">
                <h1>
                    Press releases
                </h1>
                <p>By year:</p>
                <select name="" id="">
                  <option value="1">2020</option>
                  <option value="1">2019</option>
                  <option value="1">2018</option>
                  <option value="1">2017</option>
                  <option value="1">2016</option>
                  <option value="1">2015</option>
                  <option value="1">2014</option>
                  <option value="1">2013</option>

                </select>
                <hr>     
            </div>

            <?php foreach ($newsroom_section_one as $h ) {?>
            <div class="rgt-dv-newsroom-s">
              <p><p>October 27, 2020</p></p>
                <h1>
                  <?= $h['heading']?>
                </h1>
                <p>
                  
                 <!-- <a href="">Freshworks Inc., </a>  

                  the customer and employee engagement software company, was recognized as one of the 
                 <a href="">25 Highest Rated Private Cloud Computing Companies To Work For</a>  
                  in a list released by 
                  <a href="">
                  Battery Ventures,
                  </a>
                   a global investment firm and cloud investor, with data specifically provided by 
                  <a href="">Glassdoor*…</a> -->
                  <?= $h['description']?>
                </p>
                <a href=" <?= $h['button_url']?>"> <?= $h['button_text']?> <i class="icon ion-arrow-right-c"></i></a>
                <hr>
            </div>
          <?php }?>
            
        </div>
        <div class="col-lg-5">
          <div class="row mx-auto lft-rw-newsroom">

         
            <div class="col-lg-12">
              <div class="lft-dv-newsroom">
                <h1>
                    In the news
                </h1>
                <hr>
                <?php foreach ($newsroom_section_two as $h ) {?>
                <span>November 20, 2020 &bull; <?php echo $h['title']?></span>
                <p class="py-3">
                  <?php echo $h['short_des']?>
                </p>
                <hr>
                <?php }?>
            </div>
         

          



            </div>
          </div>
           
        </div>
    </div>
  </div>
</section>

<!-- news page -->