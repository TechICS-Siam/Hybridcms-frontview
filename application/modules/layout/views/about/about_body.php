<!-- about -->
<section>
<div class="container-page py-5">
 <div class="row mx-auto">
 <?php foreach ($about_us as $h){?> 
     <div class="col-lg-12">
         <h1 class="py-3">
         <?php echo $h['heading']?>
         </h1>
         <p class="">
         <?php echo $h['description']?>
         </p>

         <a href=" <?php echo $h['button_one_text_url']?>">
         <button class="btn btn-primary">
         <?php echo $h['button_one_text']?>
         </button>
         </a>
         <a href=" <?php echo $h['button_one_text_url']?>">
         <button class="btn btn-primary">
         <?php echo $h['button_two_text']?>
         </button>
         </a>
     </div>
     <div class="col-lg-5 py-5">
         <div class="py-5">
       <h4>
       <?php echo $h['title_one']?>

       </h4>
       <p>
       <?php echo $h['description_one']?>
       </p>
      </div>
      <div class="py-5">
      <h4>
      <?php echo $h['title_two']?>
      </h4>
      <p>
      <?php echo $h['description_two']?>

      </p>
    </div>
    <div class="py-5">
        <h4>
        <?php echo $h['title_three']?>
        </h4>
        <p>
        <?php echo $h['description_three']?>
  
        </p>
        
        <a href="<?php echo $h['title_three_url']?>">
        <?php echo $h['title_three_link']?>
        </a>
      </div>
    </div>
     <div class="col-lg-7">
         <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>" width="100%" alt="">
     </div>
     <div class="col-lg-6">
         <div class="">
             <h1>
             <?php echo $h['title_snd']?>
             </h1>
             <p class="py-4">
             <?php echo $h['description_snd']?>

             </p>
         </div>
     </div>
     <div class="col-lg-6">
         <div class="">
             <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image_snd']?>" width="100%" alt="">
         </div>
     </div>
 </div>
</div>
<?php }?>
</section>


<!-- about -->