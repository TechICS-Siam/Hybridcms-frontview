<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">About Us Configuration</li>
</ol>

<h1><span class="text-primary">About Us Configuration</span></h1>

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
        <div data-label="About Us Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/website-pages/about-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">

                    <!-- header -->
                    <div class="col-md-12 form-group">
                        <label for="heading">Header<span class="text-danger">*</span></label>
                        <input type="text" name="heading" id="heading" class="form-control" value="<?= $model['heading'] ?>" required>
                    </div>

                    <!-- description -->
                        <div class="col-md-12 form-group">
                        <label for="description">Description <span class="text-danger">*</span></label>
                        <textarea name="description" id="description" class="form-control" placeholder="Enter Description" cols="30" rows="3"><?= $model['description'] ?></textarea>
                    </div>
                    <!-- button_one_text -->
                    <div class="col-md-6 form-group">
                        <label for="button_one_text">Button one <span class="text-danger">*</span></label>
                        <input type="text" name="button_one_text" id="button_one_text" class="form-control" value="<?= $model['button_one_text'] ?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="button_one_text_url">Button one url<span class="text-danger">*</span></label>
                        <input type="text" name="button_one_text_url" id="button_one_text_url" class="form-control" value="<?= $model['button_one_text_url'] ?>" required>
                    </div>
                    <!-- button_two_text -->
                    <div class="col-md-6 form-group">
                        <label for="button_two_text">Button two<span class="text-danger">*</span></label>
                        <input type="text" name="button_two_text" id="button_two_text" class="form-control" value="<?= $model['button_two_text'] ?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="button_two_text_url">Button two url<span class="text-danger">*</span></label>
                        <input type="text" name="button_two_text_url" id="button_two_text_url" class="form-control" value="<?= $model['button_two_text_url'] ?>" required>
                    </div>
                    <h1><span class="text-primary">About Us Section One</span></h1>
                    
                     <!-- photo -->
                     <div class="col-md-12 form-group">
                        <label for="photo">Photo</label>
                        <input type="file" name="image" id="image" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/sub_menu/<?= $model['image'] ?>">
                    </div>

                    <!-- title_one -->
                    <div class="col-md-12 form-group">
                        <label for="title_one">Title one<span class="text-danger">*</span></label>
                        <input type="text" name="title_one" id="title_one" class="form-control" value="<?= $model['title_one'] ?>" required>
                    </div>

                    <!-- description_one -->
                    <div class="col-md-12 form-group">
                        <label for="description">Description one<span class="text-danger">*</span></label>
                        <textarea name="description_one" id="description_one" class="form-control" placeholder="Enter Description" cols="30" rows="3"><?= $model['description_one'] ?></textarea>
                    </div>
                      <!-- title_two -->
                      <div class="col-md-12 form-group">
                        <label for="title_one">Title two<span class="text-danger">*</span></label>
                        <input type="text" name="title_two" id="title_two" class="form-control" value="<?= $model['title_two'] ?>" required>
                    </div>

                     <!-- description_two -->
                     <div class="col-md-12 form-group">
                        <label for="description">Description two<span class="text-danger">*</span></label>
                        <textarea name="description_two" id="description_two" class="form-control" placeholder="Enter Description" cols="30" rows="3"><?= $model['description_two'] ?></textarea>
                    </div>

                     <!-- title_three -->
                     <div class="col-md-12 form-group">
                        <label for="title_three">Title three<span class="text-danger">*</span></label>
                        <input type="text" name="title_three" id="title_three" class="form-control" value="<?= $model['title_three'] ?>" required>
                    </div>

                     <!-- description_three -->
                     <div class="col-md-12 form-group">
                        <label for="description">Description three<span class="text-danger">*</span></label>
                        <textarea name="description_three" id="description_three" class="form-control" placeholder="Enter Description" cols="30" rows="3"><?= $model['description_three'] ?></textarea>
                    </div>

                    <!-- title_three_link -->
                      <div class="col-md-12 form-group">
                        <label for="title_three_link">Title three link<span class="text-danger">*</span></label>
                        <input type="text" name="title_three_link" id="title_three_link" class="form-control" value="<?= $model['title_three_link'] ?>" required>
                    </div>
                    <!-- title_three_url -->
                    <div class="col-md-12 form-group">
                        <label for="title_three_url">Title three url<span class="text-danger">*</span></label>
                        <input type="text" name="title_three_url" id="title_three_url" class="form-control" value="<?= $model['title_three_url'] ?>" required>
                    </div>
                    <h1><span class="text-primary">About Us Section Two</span></h1>   
                    <!-- photo -->
                    <div class="col-md-12 form-group">
                        <label for="photo">Photo</label>
                        <input type="file" name="image_snd" id="image_snd" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/sub_menu/<?= $model['image_snd'] ?>">
                    </div>

                    <!-- title_snd -->
                    <div class="col-md-12 form-group">
                        <label for="title_snd">Title for second section <span class="text-danger">*</span></label>
                        <input type="text" name="title_snd" id="title_snd" class="form-control" value="<?= $model['title_snd'] ?>" required>
                    </div>

                     <!-- description_two -->
                     <div class="col-md-12 form-group">
                        <label for="description_snd">Description for second section<span class="text-danger">*</span></label>
                        <textarea name="description_snd" id="description_snd" class="form-control" placeholder="Enter Description" cols="30" rows="3"><?= $model['description_snd'] ?></textarea>
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