<!-- news page -->

<section>
<?php foreach ($privacy_update as $h) {?>
  <div class="">
    <div class="row mx-auto ">
        <div class="col-lg-12 p-0 newsroom-bnr">
        <img src="<?= base_url() ?>uploads/sub_menu/<?php echo $h['image']?>" width="100%" alt="">
            <div class="mx-auto">
                <h1>
                <?php echo $h['heading']?>
                </h1>
            </div>
        </div>
    </div>
  </div>
  <div class="container-page py-4">
    <div class="row mx-auto">
        <div class="col-lg-7 mx-auto">
        <?php echo $h['description']?>
        </div>
    </div>
  </div>
  <?php }?>
</section>

<!-- news page -->