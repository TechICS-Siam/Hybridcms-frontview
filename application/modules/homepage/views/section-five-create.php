<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?= site_url('admin/home-page/section-four') ?>">Section Five</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
</ol>

<div class="row mb-3">
    <div class="col-md-8">
        <h1><span class="text-primary">Create New Section Five</span></h1>
    </div>
    <div class="col-md-4 text-right">
        <a href="<?= site_url('admin/home-page/section-five') ?>">
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
        <div data-label="Create a New Section Five" class="df-example demo-table">
            <form action="<?= site_url('admin/home-page/section-five-store') ?>" method="post" id="user_form" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-md-12 form-group">
                        <label for="icon">Icon <span class="text-danger">*</span></label>
                        <input value="" type="text" name="icon" id="icon" class="form-control" placeholder="Enter Icon" required>
                    </div>

                    <!-- alt_tag -->
                    <div class="col-md-6 form-group">
                        <label for="alt_tag">Alter Tag <span class="text-danger">*</span></label>
                        <input type="text" name="alt_tag" id="alt_tag" class="form-control" placeholder="Enter Alter Tag" required>
                    </div>
                    
                    <!-- title -->
                    <div class="col-md-6 form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title" required>
                    </div>

                    <!-- description -->
                    <div class="col-md-12 form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Enter Description" cols="30" rows="5" required></textarea>
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