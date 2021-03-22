<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Section Eight Configuration</li>
</ol>

<h1><span class="text-primary">Section Eight Configuration</span></h1>

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
            <form action="<?= site_url('admin/home-page/update-section-eight') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">
                    
                    <!-- photo -->
                    <div class="col-md-12 form-group">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" id="photo" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->photo ?>">
                    </div>

                    <!-- title -->
                    <div class="col-md-6 form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" value="<?= $model->title ?>" required>
                    </div>

                    <!-- alt_tag -->
                    <div class="col-md-6 form-group">
                        <label for="alt_tag">Alter Tag <span class="text-danger">*</span></label>
                        <input type="text" name="alt_tag" id="alt_tag" class="form-control" value="<?= $model->alt_tag ?>" required>
                    </div>

                    <!-- button_text -->
                    <div class="col-md-4 form-group">
                        <label for="button_text">Button Text <span class="text-danger">*</span></label>
                        <input type="text" name="button_text" id="button_text" class="form-control" value="<?= $model->button_text ?>" required>
                    </div>

                    <!-- button_url -->
                    <div class="col-md-4 form-group">
                        <label for="button_url">Button URL <span class="text-danger">*</span></label>
                        <input type="text" name="button_url" id="button_url" class="form-control" value="<?= $model->button_url ?>" required>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="button_open">Do You Want to Open This Link On a New Tab?</label>
                        <select name="button_open" id="button_open" class="form-control select">
                            <option <?= $model->button_open == 1 ? 'selected' : '' ?> value="1">Yes</option>
                            <option <?= $model->button_open == 1 ? 'selected' : '' ?> value="0">No</option>
                        </select>
                    </div>

                    <!-- description -->
                    <div class="col-md-12 form-group">
                        <label for="description">Description <span class="text-danger">*</span></label>
                        <textarea name="description" id="description" class="form-control" placeholder="Enter Description" cols="30" rows="5"><?= $model->description ?></textarea>
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