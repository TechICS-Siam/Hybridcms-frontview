<!-- customer stories -->
<!-- title -->
<section>
    <div class="mt-5 container-page">
    <div class="row mx-auto mainrwcustmstr">
      <div class="col-lg-8 col-sm-6">
        <h6 class="rwcustmstrh6">
          Customer Stories
        </h6>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="row">
          <div class="col-md-4">
            <div class="dropdown hommbdydrop">
              <a class="dropdown-toggle " id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="hommbdysdrp">Region: All</span>
              </a>
              <div class="dropdown-menu hommbdydropsb cmsmaindrp" aria-labelledby="dropdownMenuButton">   
                <p class="">Region</p>
                <a class="dropdown-item" href="#">
                  <i class="icon ion-checkmark-round"></i>
                  All
                </a>
                <a class="dropdown-item cmsmaindrpa" href="#">Americas</a>
                <a class="dropdown-item cmsmaindrpa" href="#">APAC</a>
                <a class="dropdown-item cmsmaindrpa" href="#">EMEA</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="dropdown hommbdydrop">
              <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="hommbdysdrp">Industry: All</span>
              </a>
              <div class="dropdown-menu hommbdydropsb cmsmaindrp cmsmaindrpt" aria-labelledby="dropdownMenuButton">             
                <p class="">Industry</p>
                <a class="dropdown-item" href="#">
                  <i class="icon ion-checkmark-round"></i>
                  All
                </a>
                <a class="dropdown-item cmsmaindrpa" href="#">Software & Technology</a>
                <a class="dropdown-item cmsmaindrpa" href="#">Retail & eCommerce</a>
                <a class="dropdown-item cmsmaindrpa" href="#">Travel & Hospitality</a>
                <a class="dropdown-item cmsmaindrpa" href="#"> Media & Entertainment</a>
                <a class="dropdown-item cmsmaindrpa" href="#">Manufacturing</a>
                <a class="dropdown-item cmsmaindrpa" href="#">Operations & Logistics</a>
                <a class="dropdown-item cmsmaindrpa" href="#">Automotive</a>
                <a class="dropdown-item cmsmaindrpa" href="#">Financial Services</a>
                <a class="dropdown-item cmsmaindrpa" href="#">Healthcare</a>
                <a class="dropdown-item cmsmaindrpa" href="#">Communications</a>
                <a class="dropdown-item cmsmaindrpa" href="#">Energy & Utilities</a>
                <a class="dropdown-item cmsmaindrpa" href="#">Government</a>
                <a class="dropdown-item cmsmaindrpa" href="#">Education</a>
  
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="dropdown hommbdydrop"> 
              <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="hommbdysdrp">Type: Enterprise</span>
              </a> 
              <div class="dropdown-menu hommbdydropsb cmsmaindrp" aria-labelledby="dropdownMenuButton">   
                <p class="">Enterprise</p>
                <a class="dropdown-item" href="#">
                  <i class="icon ion-checkmark-round"></i>
                  All
                </a>
                <a class="dropdown-item cmsmaindrpa" href="#">Americas</a>
                <a class="dropdown-item cmsmaindrpa" href="#">APAC</a>
                <a class="dropdown-item cmsmaindrpa" href="#">EMEA</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>
<!-- title -->

<!-- gallery -->
<section>
    <div class="container-page my-5">
    <div class="row mx-auto mainrwcustmstr mb-5 mt-2">

    <?php foreach ($customer_stories_gallery as $h) {?>
        <div class="col-lg-3 col-sm-6 my-3">
        <div class="card">
            <div class="mainrwcustmimg px-4 py-4 customer-story-card">
            <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>" class="card-img-top" width="100%" height="220px" alt="...">
            <div class="customer-story-btn position-absolute top-0 right-0 mt-2 mr-2" role="button">

            <a href="<?php echo $h['button_url']?>">
            <span class="btn-mktg mx-auto py-2 px-3" role="button">
                <span class="f2">&nearr;</span>
            </span>
            </a>
            </div>
            </div>
            
            <div class="card-body py-0">
            <h5 class="card-title mainrwcustmtl pb-1 m-0">
            <?= $h['title']?>
            </h5>
            <p class="mainrwcustmp mb-0"><?php echo $h['quotes']?></p>
            <a href="<?php echo $h['button_url']?>">
            <p class="mainrwcustmps py-1">
                <span><?php echo $h['button_text']?></span>
                <span class="Bump-link-symbol">→</span>
            </p>
            </a>
            
            </div>
        </div>
        </div>
        <?php }?>
     
 
    </div>
    
    </div>
</section>
<!-- gallery -->
<!-- customer stories -->