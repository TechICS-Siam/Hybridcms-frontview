<div class="col-sm-6 col-lg-6 my-2">
    <!-- Card -->
    <div class="card my-2 <?= $new_count != 1 ? 'blog-small-card' : 'blog-big-card' ?> ">

        <!-- Card image -->
        <div class="view overlay why-choose">


            <?php if (!empty($new_data['image'])) { ?>
                <img class="card-img-top" src="<?= site_url('uploads/sub_menu/' . $new_data['image']); ?>"
                     alt="<?= $new_data['alt_tag'] ?>">
            <?php } else { ?>

                <img class="card-img-top" src="<?php echo base_url(); ?>uploads/blog/default.png" alt="<?= $new_data['alter_tag'] ?>">
            <?php } ?>


        </div>

        <!-- Social buttons -->
        <div class="card-share">

            <div style="display:none;" class="socialMediaLinks" id="social_card_<?= $new_data['id'] ?>">
                <a target="_blank"
                   href="https://www.facebook.com/sharer/sharer.php?u=<?= site_url('blog') . '/' . ($new_data['id']) . '/' . seo_friendly_string($new_data['title']) ?>"
                   class="fab fa-facebook"></a>
                <a target="_blank"
                   href="https://twitter.com/intent/tweet?url=<?= urlencode(site_url('blog') . '/' . ($new_data['id']) . '/' . seo_friendly_string($new_data['title'])) ?>"
                   class="fab fa-twitter"></a>
                <a target="_blank"
                   href="https://www.linkedin.com/shareArticle?mini=true&url=<?= site_url('blog') . '/' . ($new_data['id']) . '/' . seo_friendly_string($new_data['title']) ?>"
                   class="fab fa-linkedin-in"></a>
            </div>

            <!-- Button action -->
            <a data-id="<?= $new_data['id'] ?>"
               class="btn-floating btn-action share-toggle btn-danger ml-auto mr-4 float-right "><i
                        class="fas fa-share-alt"></i></a>
        </div>

        <!-- Card content -->
        <div class="card-body">

            <!-- Title -->


            <?php if ($new_count == 1): ?>
                <a href="<?= site_url('blog') . '/' . $new_data['slug'] ?>"><h4
                            class="card-title text-muted"><?= $new_data['title'] ?></h4></a>
                <hr>
                <!-- Text -->
            <?php endif ?>


            <div class="card-text" style="text-align:justify;color: black">
                <?php if ($new_count != 1): ?>

                    <a style="color: black;"
                       href="<?= site_url('blog') . '/' . ($new_data['id']) . '/' . seo_friendly_string($new_data['title']) ?>"><?= $new_data['title'] ?></a>
                    <br>
                    <a href="<?= site_url('blog') . '/' . $new_data['slug'] ?>"
                       class="btn  btn-danger btn-rounded btn-rounded waves-effect btn-sm float-right">
                        <i class="far fa-sun fa-sm pr-2 d-none" aria-hidden="true"></i> Click to read
                    </a>

                <?php endif ?>

                <?php if ($new_count == 1): ?>


                    <?php
                    $html = nl2br($new_data['description']);
                    $content = substr($html, 0, 500);
                    echo strip_tags($content, "<p>, <b>");
                    ?>
                    <br>
                    <a href="<?= site_url('blog') . '/' . $new_data['slug'] ?>"
                       class="btn  btn-danger btn-rounded btn-rounded waves-effect btn-sm float-right">
                        <i class="far fa-sun fa-sm pr-2 d-none" aria-hidden="true"></i> Click to read
                    </a>
                    <!-- will be replaced With Description -->
                <?php endif ?>

                <?php if (!null == $this->input->get('tag')): ?>
                    <p class="mt-2">Tag : <span class="text-info"><?= $this->input->get('tag') ?></span></p>
                <?php endif ?>
            </div>


        </div>


    </div>
    <!-- Card -->
</div>