<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Section One Configuration</li>
</ol>

<h1><span class="text-primary">Section One Configuration</span></h1>

<div class="row">
    <div class="col-md-12">
        <?php
        $success = $this->session->flashdata('success');
        $warning = $this->session->flashdata('warning');
        if (isset($success)) {?>
            <div class="alert session_alert alert-outline alert-success" role="alert">
                <strong>Well Done!</strong>  <?php echo $success; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <?php } elseif (isset($warning)) { ?>
            <div class="alert session_alert alert-outline alert-danger" role="alert">
                <strong>Warning!</strong>  <?php echo $warning; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span class="text-danger" aria-hidden="true">×</span>
                </button>
            </div>
        <?php } ?>
        <div data-label="Section One Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/home-page/update-section-one') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="background_image">Image <span class="text-danger">*</span></label>
                        <input data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->background_image ?>" type="file" class="form-control dropify" name="background_image" id="background_image">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="image_alt_tag">Image Alter Tag <span class="text-danger">*</span></label>
                        <input required type="text" placeholder="Enter Image Alter Tag" autocomplete="off" class="form-control" name="image_alt_tag" id="image_alt_tag" value="<?= $model->image_alt_tag ?>">
                        <span class="text-danger"><?php printError('image_alt_tag') ?></span>
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="header"> Header </label>
                        <textarea placeholder="Enter Header" name="header" id="header" class="form-control" cols="30" rows="2"><?= $model->header ?></textarea>
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="sub_header"> Sub Header </label>
                        <textarea placeholder="Enter Sub Header" name="sub_header" id="sub_header" class="form-control" cols="30" rows="2"><?= $model->sub_header ?></textarea>
                    </div>
                    
                    <div class="col-md-4 form-group">
                        <label for="learn_more_text"> Learn More Text </label>
                        <input type="text" name="learn_more_text" id="learn_more_text" class="form-control" value="<?= $model->learn_more_text ?>">
                    </div>
                    
                    <div class="col-md-4 form-group">
                        <label for="learn_more_url"> Learn More Button URL </label>
                        <input type="text" name="learn_more_url" id="learn_more_url" class="form-control" value="<?= $model->learn_more_url ?>">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="learn_more_open">Learn More URL Open in a new tab? </label>
                        <select name="learn_more_open" id="learn_more_open" class="form-control select">
                            <option <?= $model->learn_more_open == 1 ? 'selected' : '' ?> value="1">Yes</option>
                            <option <?= $model->learn_more_open == 0 ? 'selected' : '' ?> value="0">No</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="learn_more_text_two"> Learn More Text For Video </label>
                        <input type="text" name="learn_more_text_two" id="learn_more_text_two" class="form-control" value="<?= $model->learn_more_text_two ?>">
                    </div>  
                    <div class="col-md-6 form-group">
                        <label for="watch_custom_video_text"> Watch Custom Video Text </label>
                        <input type="text" name="watch_custom_video_text" id="watch_custom_video_text" class="form-control" value="<?= $model->watch_custom_video_text ?>">
                    </div>  

                    <div class="col-md-12 form-group">
                        <label for="video_embed_link"> Video Embed Code </label>
                        <textarea placeholder="Enter Sub Header" name="video_embed_link" id="video_embed_link" class="form-control" cols="30" rows="2"><?= $model->video_embed_link ?></textarea>
                    </div>

                    <div class="col-md-4 mx-auto">
                        <button type="submit" class="btn btn-xs btn-block btn-primary pd-x-20">
                            Update &nbsp;&nbsp; <i data-feather="send"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php function pageRequiredScript(){ ?>
    <script>
        $('.select').select2({width:'100%'});
        $('.dropify').dropify();
    </script>
<?php } ?>