<!-- help page -->
<!-- support page -->
<!-- topbar -->
<section class="navigationbg sticky-top" >
<?php foreach ($help_info as $h) {?>
    <div class="nav-containersp ">
        <div class="row mx-auto ">
            <div class="col-lg-6">
                <div class="">
                    <h4 class="m-0 py-3 text-white">
                    
                    <?php echo $h['title'] ?>
                    
                    </h4>
                </div>
            </div>
            <div class="col-lg-6"></div>
        </div>
    </div>  
  <?php }?>
</section>
<!-- topbar -->
<!-- search box -->
<section>
  <div class="navigationbg py-3 bdr-navigation">
    <div class="nav-containersp">
    <div class="row mx-auto">
    <?php foreach ($help_info as $h) {?>
      <div class="col-md-12">
        <h3 class=" text-white titlesptop">


        <?php echo $h['title_two'] ?>
        </h3>
        <div class="row">
        <div class="col-md-12 py-3 d-flex">
          <div class="dropdown droposptexbg d-inline-block ">
            <a class="dropdown-toggle droposptexti" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="text-dark droposptext">Hybrid CMS Help</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>       
          <div class="frmbassup">
          <form action="" class="d-flex">
          <input type="search" name="" class="frmbassupin d-inline-block " placeholder="Search your content...">
          <button class="btnsubsearch d-inline-block ">
             <i class="icon ion-android-search"></i>
          </button>


          </form>

           </div>
        </div>
        </div>
      </div>
    <?php }?>
    </div>
  </div>
  </div>
</section>
<!-- search box -->
<section>
  <div class="nav-containersp">
    <div class="row mx-auto my-5">
      <div class="col-lg-3 col-sm-6">
        <h6 class="pl-2 py-2 font-weight-bold">
           Home
        </h6>
        <div class="accordion"> 
        <?php foreach ($help_menu as $h) {?>  
            <div class="card m-0 cardeplyprsp ">
                <a class="card-header collapsed collapser cardeplyprtnsp">
                <h5>
                <?php echo $h['menu']?>
                </h5>
                </a>
                <div class="collapse">
                <div class="card-body py-0">
                <ul class="list-unstyled mb-0 cardeplyprulsp">
                  <li class="py-1">
                  <a href="<?php echo $h['submenu_one_link']?>" class="text-dark">
                  <?php echo $h['submenu_one']?>
                  </a>
                  </li>
                  <li class="py-1">
                  <a href="<?php echo $h['submenu_two_link']?>" class="text-dark">
                  <?php echo $h['submenu_two']?>
                  </a>
                  </li>
                  <li class="py-1">
                  <a href="<?php echo $h['submenu_three_link']?>" class="text-dark">
                  <?php echo $h['submenu_three']?>
                  </a>
                  </li>
                </ul>
                </div>
                </div>
            </div>
        <?php }?>  
        </div>
      </div>

      <?php foreach ($help_info as $h) {?>
        <?php echo $h['description'] ?>
      <?php }?>
</div>
</section>
<!-- support page -->