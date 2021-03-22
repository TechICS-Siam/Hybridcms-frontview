<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Software Settings</li>
</ol>

<div class="row mb-3">
    <div class="col-md-8">
        <h1><span class="text-primary">Software Settings </span></h1>
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
        <div data-label="Software Se" class="df-example demo-table">
            <form action="<?= site_url('admin/settings/update-software-settings') ?>" method="post" enctype="multipart/form-data" id="software_seeting_form">
                <div class="row">
                    <!-- Telephone -->
                     <div class="col-md-6 form-group">
                            <label for="telephone">Telephone</label>
                            <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Enter telephone" value="<?= $telephone ?>">
                        </div>

                    <!-- Email -->
                        <div class="col-md-6 form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter email" value="<?= $email ?>">
                        </div>

                    <!-- Button Text -->
                     <div class="col-md-6 form-group">
                            <label for="button_text">Button Text</label>
                            <input type="text" name="button_text" id="button_text" class="form-control" placeholder="Enter Button Text" value="<?= $button_text ?>">
                        </div>

                    <!-- Button url -->
                        <div class="col-md-6 form-group">
                            <label for="button_url">Button Url</label>
                            <input type="text" name="button_url" id="button_url" class="form-control" placeholder="Enter Button Url" value="<?= $button_url ?>">
                        </div>
                    <div class="col-md-6 form-group">
                        <label for="logo">Logo </label>
                        <input  data-default-file="<?= $logo != null ? base_url() . 'uploads/' . $logo : base_url() . 'assets/backend/images/logo-cms.png' ?>" type="file" name="logo" id="logo" class="form-control dropify">
                        <span class="text-danger">Image Width = 260 PIXEL Image Height = 60 PIXEL </span>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="favicon">Favicon </label>
                        <input data-default-file="<?= $favicon != null ? base_url() . 'uploads/' . $favicon : base_url() . 'assets/backend/images/favicon.png' ?>"  type="file" name="favicon" id="favicon" class="form-control dropify">
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