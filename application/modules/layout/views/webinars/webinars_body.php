<!-- webinars -->
<!-- filter -->
<section>
   <div class="container-page py-5">
       <div class="row mx-auto">
           <div class="col-lg-12 filter-webiners">
               <p>FILTER BY</p>
               <ul class="list-unstyled d-flex">
                   <li><a href="">Sales</a></li>
                   <li><a href="">Service & Support</a></li>
                   <li><a href="">Marketing</a></li>
                   <li><a href="">Commerce</a></li>
                   <li><a href="">IT</a></li>
                   <li><a href="">Small Business Owner</a></li>

               </ul>
           </div>
           <div class="col-lg-12">
               <p class="result-webiner">
                   Showing 61 of 61 0 Applied</p>
               <div class="row mx-auto">

               <?php foreach ($webinars_gallery as $h) {?>
                   <div class="col-lg-4 my-3">
                    <div class="card webiners-fst">
                        <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>" width="100%" alt="">

                        <div class="p-3 webiners-fst-s">
                            <span class="d-block pb-3">
                           <?php echo $h['tag'] ?>
                            </span>
                            <h1 class="d-block">
                            <?php echo $h['title'] ?>
                            </h1>
                            <div class="py-2">
                            <p><?php echo $h['short_des'] ?></p>
                            </div>
                            <div class="link-webiner-btn">
                                <a href="<?php echo $h['button_url'] ?>">
                                <?php echo $h['button_text'] ?>
                                 <i class="icon ion-ios-arrow-right ion-ios-arrow-bfr"></i>
                                </a>
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
<!-- filter -->

<!-- webinars -->