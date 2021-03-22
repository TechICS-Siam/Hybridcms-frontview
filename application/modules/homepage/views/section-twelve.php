<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Section Twelve Configuration</li>
</ol>

<h1><span class="text-primary">Section Twelve Product Link</span></h1>

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
        <div data-label="Section Eight Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/home-page/update-section-twelve') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">
                    
                    <!-- link -->
                    <div class="col-md-6 form-group ">
                    <label for="link_one">Link one image</label>
                        <input type="file" name="link_one" id="link_one" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->link_one ?>">
                    </div>
                    <div class="col-md-6 form-group m-auto">
                        <label for="link_one_url">Link one url <span class="text-danger">*</span></label>
                        <input type="text" name="link_one_url" id="link_one_url" class="form-control" value="<?= $model->link_one_url ?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                    <label for="link_two">Link two image</label>
                         <input type="file" name="link_two" id="link_two" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->link_two ?>">
                    </div>
                    <div class="col-md-6 form-group m-auto">
                        <label for="link_two_url">Link two url <span class="text-danger">*</span></label>
                        <input type="text" name="link_two_url" id="link_two_url" class="form-control" value="<?= $model->link_two_url ?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="link_three">Link three image<span class="text-danger">*</span></label>
                        <input type="file" name="link_three" id="link_three" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->link_three ?>">
                    </div>
                    <div class="col-md-6 form-group m-auto">
                        <label for="link_three_url">Link three url <span class="text-danger">*</span></label>
                        <input type="text" name="link_three_url" id="link_one_url" class="form-control" value="<?= $model->link_three_url ?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="link_four">Link four image<span class="text-danger">*</span></label>
                        <input type="file" name="link_four" id="link_four" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->link_four ?>">

                    </div>
                    <div class="col-md-6 form-group m-auto">
                        <label for="link_four_url">Link four url <span class="text-danger">*</span></label>
                        <input type="text" name="link_four_url" id="link_four_url" class="form-control" value="<?= $model->link_four_url ?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="link_five">Link five image<span class="text-danger">*</span></label>
                        <input type="file" name="link_five" id="link_five" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->link_five ?>">
                    </div>
                    <div class="col-md-6 form-group m-auto">
                        <label for="link_five_url">Link five url <span class="text-danger">*</span></label>
                        <input type="text" name="link_five_url" id="link_one_url" class="form-control" value="<?= $model->link_five_url ?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="link_six">Link six image<span class="text-danger">*</span></label>
                        <input type="file" name="link_six" id="link_six" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->link_six ?>">
                    </div>
                    <div class="col-md-6 form-group m-auto">
                        <label for="link_six_url">Link six url <span class="text-danger">*</span></label>
                        <input type="text" name="link_six_url" id="link_six_url" class="form-control" value="<?= $model->link_six_url ?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="link_seven">Link seven image<span class="text-danger">*</span></label>
                        <input type="file" name="link_seven" id="link_seven" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->link_seven ?>">
                    </div>
                    <div class="col-md-6 form-group m-auto">
                        <label for="link_seven_url">Link seven url <span class="text-danger">*</span></label>
                        <input type="text" name="link_seven_url" id="link_seven_url" class="form-control" value="<?= $model->link_seven_url ?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="link_eight">Link eight image<span class="text-danger">*</span></label>
                        <input type="file" name="link_eight" id="link_eight" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->link_eight ?>">
                    </div>
                    <div class="col-md-6 form-group m-auto">
                        <label for="link_eight_url">Link eight url <span class="text-danger">*</span></label>
                        <input type="text" name="link_eight_url" id="link_eight_url" class="form-control" value="<?= $model->link_eight_url ?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="link_nine">Link nine image<span class="text-danger">*</span></label>
                        <input type="file" name="link_nine" id="link_nine" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->link_nine ?>">
                    </div>
                    <div class="col-md-6 form-group m-auto">
                        <label for="link_nine_url">Link nine url <span class="text-danger">*</span></label>
                        <input type="text" name="link_nine_url" id="link_nine_url" class="form-control" value="<?= $model->link_nine_url ?>" required>
                    </div>
                    <h1 class="col-md-12"><span class="text-primary">Section Twelve Second Part</span></h1>           
                    <!-- title -->
                    <div class="col-md-6 form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" value="<?= $model->title ?>" required>
                    </div>

                    <!-- icon -->
                    <div class="col-md-6 form-group">
                        <label for="icon">Icon <span class="text-danger">*</span></label>
                        <input value="<?= htmlentities($model->icon) ?>" type="text" name="icon" id="icon" class="form-control" placeholder="Enter Icon" required>
                    </div>

                    <!-- description -->
                    <div class="col-md-12 form-group">
                        <label for="description"> Description </label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="5"><?= $model->description ?></textarea>
                    </div>
                    <!-- title two -->
                    <div class="col-md-4 form-group">
                        <label for="title_two">Title two<span class="text-danger">*</span></label>
                        <input type="text" name="title_two" id="title_two" class="form-control" value="<?= $model->title_two ?>" required>
                    </div>
                    <!-- button_text -->
                    <div class="col-md-4 form-group">
                        <label for="button_text">Button Text <span class="text-danger">*</span></label>
                        <input type="text" name="button_text" id="button_text" class="form-control" value="<?= $model->button_text ?>" required>
                    </div>

                    <!-- button_url -->
                    <div class="col-md-4 form-group">
                        <label for="button_text_url">Button URL <span class="text-danger">*</span></label>
                        <input type="text" name="button_text_url" id="button_text_url" class="form-control" value="<?= $model->button_text_url ?>" required>
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
        $('.select').select2({height:'94px'});
        $('.dropify').dropify();
    </script>
<?php } ?>

<style>
.dropify-wrapper {
    height: 94px;
}
</style>