<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Social Settings</li>
</ol>

<div class="row mb-3">
    <div class="col-md-8">
        <h1><span class="text-primary">Social Settings </span></h1>
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
        <div data-label="Software Settings" class="df-example demo-table">
            <form action="<?= site_url('admin/settings/update-social-settings') ?>" method="post">
                <div class="row">
                    <!-- Footer Title -->
                    <div class="col-md-12 form-group">
                        <label for="footer_title">Footer Title</label>
                        <input type="text" name="footer_title" id="footer_title" class="form-control" placeholder="Enter Footer Title" value="<?= $footer_title ?>">
                    </div>

                    <!-- Facebook -->
                    <div class="col-md-6 form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Enter Facebook URL" value="<?= $facebook ?>">
                    </div>

                    <!-- Twitter -->
                    <div class="col-md-6 form-group">
                        <label for="twitter">Twitter</label>
                        <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Enter Twitter URL" value="<?= $twitter ?>">
                    </div>

                    <!-- LinkedIn -->
                    <div class="col-md-6 form-group">
                        <label for="linkedin">LinkedIn</label>
                        <input type="text" name="linkedin" id="linkedin" class="form-control" placeholder="Enter LinkedIn URL" value="<?= $linkedin ?>">
                    </div>

                    <!-- Youtube -->
                    <div class="col-md-6 form-group">
                        <label for="youtube">Youtube</label>
                        <input type="text" name="youtube" id="youtube" class="form-control" placeholder="Enter Youtube URL" value="<?= $youtube ?>">
                    </div>

                    <div class="col-md-4 mx-auto">
                        <button type="submit" class="btn btn-xs btn-block btn-primary pd-x-20">
                            Update &nbsp; <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php function pageRequiredScript(){ ?>
    <script type="text/javascript">
        $('.dropify').dropify();
        $('#software_seeting_form').parsley();
    </script>
<?php } ?>