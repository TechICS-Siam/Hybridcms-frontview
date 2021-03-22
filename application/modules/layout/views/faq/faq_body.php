<!-- faq page -->
<section>
    <div class="container-page-two ">
    <?php foreach ($faq_info_update as $h){?> 
        <div class="row mx-auto pb-5">
            <div class="col-md-7 text-center mx-auto py-4 section-title">
            <h1 class="pb-5">

            <?php echo $h['heading']?>
                <!-- FREQUENTLY ASKED QUESTIONS -->
            </h1>
      
            </div>
        </div>
        <div class="row mx-auto py-5">
            <div class="col-lg-6 m-auto pt-5">
                <div class="row mx-auto">  
                    <div class="col-lg-12">
                        <a href="#" class="togglefaq faqanswer-s">1. <?php echo $h['title']?> <i class="icon ion-chevron-down"></i></a>  
                        <div class="faqanswer">
                          <p>
                          <?php echo $h['dropdown']?>
                          </p>
                        </div>
                  
                        <a href="#" class="togglefaq faqanswer-s">2. <?php echo $h['title_two']?> <i class="icon ion-chevron-down"></i></a>
                         <div class="faqanswer">
                           <p>
                           <?php echo $h['dropdown_two']?>
                           </p>
                         </div>
                  
                      <a href="#" class="togglefaq faqanswer-s">3. <?php echo $h['title']?> <i class="icon ion-chevron-down"></i></a>
                        <div class="faqanswer">
                           <p>
                           <?php echo $h['dropdown_three']?>
                           </p>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mx-auto text-center pt-5">
                <div class="my-faq-image">                  
                 <img src="<?= base_url() ?>assets/images/faq.png" alt="">
                </div>
            </div>
        </div>

    <?php }?>
        <div class="row mx-auto py-5">
            <div class="col-lg-9 m-auto pt-5">
            <?php foreach ($faq_answer as $h){?> 

                <div class="row mx-auto">  
                    <div class="col-lg-12">
                        <a href="#" class="togglefaq faqanswer-s"><?php echo $h['menu']?> <i class="icon ion-chevron-down"></i></a>  
                        <div class="faqanswer">
                          <p>
                          <?php echo $h['submenu']?>
                          </p>
                        </div>
                    </div>
                </div>

            <?php }?>
            </div>
        </div>
    </div>
</section>
<!-- faq  page -->