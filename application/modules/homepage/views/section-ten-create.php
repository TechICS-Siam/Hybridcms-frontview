<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?= site_url('admin/home-page/section-ten') ?>">Section Ten</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
</ol>

<div class="row mb-3">
    <div class="col-md-8">
        <h1><span class="text-primary">Create New Section Ten</span></h1>
    </div>
    <div class="col-md-4 text-right">
        <a href="<?= site_url('admin/home-page/section-ten') ?>">
            <button type="button" class="btn btn-xs btn-primary">Back &nbsp; <i class="ml-2" data-feather="arrow-left-circle"></i></button>
        </a>
    </div>
</div>

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
        <div data-label="Create a New Section Ten" class="df-example demo-table">
            <form action="<?= site_url('admin/home-page/section-ten/store') ?>" method="post" id="user_form" enctype="multipart/form-data">
                <div class="row">

                    <!-- photo -->
                    <div class="col-md-12 form-group">
                        <label for="photo">Photo <span class="text-danger">*</span></label>
                        <input type="file" name="photo" id="photo" class="form-control dropify" required>
                    </div>

                    <!-- alt_tag -->
                    <div class="col-md-6 form-group">
                        <label for="alt_tag">Ater Tag</label>
                        <input type="text" name="alt_tag" id="alt_tag" class="form-control" placeholder="Enter Photo Alt Tag" autocomplete="off">
                    </div>

                    <!-- title_one -->
                    <div class="col-md-6 form-group">
                        <label for="title_one">Title One <span class="text-danger">*</span></label>
                        <input type="text" name="title_one" id="title_one" class="form-control" placeholder="Enter Title One" autocomplete="off">
                    </div>
                    
                    <!-- title_two -->
                    <div class="col-md-4 form-group">
                        <label for="title_two">Title Two <span class="text-danger">*</span></label>
                        <input type="text" name="title_two" id="title_two" class="form-control" placeholder="Enter Title Two" autocomplete="off">
                    </div>
                    
                    <!-- percentages -->
                    <div class="col-md-4 form-group">
                        <label for="percentages">Percentages <span class="text-danger">*</span></label>
                        <input type="text" name="percentages" id="percentages" class="form-control" placeholder="Enter Percentages" autocomplete="off">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="status">Status <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-control select">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="col-md-4 mx-auto">
                        <button type="submit" class="btn btn-xs btn-block btn-primary pd-x-20">
                            Create &nbsp; <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php function pageRequiredScript(){ ?>
    <script type="text/javascript">
        $('#user_form').parsley();
        $('.select').select2({width:'100%'});
        $('.dropify').dropify();
    </script>
<?php } ?>