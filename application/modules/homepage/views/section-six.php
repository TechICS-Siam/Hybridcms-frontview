<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Section Six Configuration</li>
</ol>

<h1><span class="text-primary">Section Six Configuration</span></h1>

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
        <div data-label="Section Six Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/home-page/update-section-six') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="photo">Image <span class="text-danger">*</span></label>
                        <input data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->photo ?>" type="file" class="form-control dropify" name="photo" id="photo">
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="alt_tag">Image Alter Tag <span class="text-danger">*</span></label>
                        <input required type="text" placeholder="Enter Image Alter Tag" autocomplete="off" class="form-control" name="alt_tag" id="alt_tag" value="<?= $model->alt_tag ?>">
                        <span class="text-danger"><?php printError('alt_tag') ?></span>
                    </div>
                    
                    <div class="col-md-6 form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input required type="text" placeholder="Enter Title" autocomplete="off" class="form-control" name="title" id="title" value="<?= $model->title ?>">
                        <span class="text-danger"><?php printError('title') ?></span>
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="description"> Description </label>
                        <textarea placeholder="Enter Description" name="description" id="description" class="form-control" cols="30" rows="5"><?= $model->description ?></textarea>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="option_one">Option One</label>
                        <input value="<?= $model->option_one ?>" type="text" name="option_one" id="option_one" class="form-control" placeholder="Enter Option One" required>
                    </div>
                    
                    <div class="col-md-4 form-group">
                        <label for="option_two">Option Two</label>
                        <input value="<?= $model->option_two ?>" type="text" name="option_two" id="option_two" class="form-control" placeholder="Enter Option Two" required>
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="option_three">Option Three</label>
                        <input value="<?= $model->option_three ?>" type="text" name="option_three" id="option_three" class="form-control" placeholder="Enter Option Three" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="option_four">Option Four</label>
                        <input value="<?= $model->option_four ?>" type="text" name="option_four" id="option_four" class="form-control" placeholder="Enter Option Four" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="option_five">Option Five</label>
                        <input value="<?= $model->option_five ?>" type="text" name="option_five" id="option_five" class="form-control" placeholder="Enter Option Five" required>
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