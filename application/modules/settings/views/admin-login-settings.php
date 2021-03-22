<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Admin Login Page Settings</li>
</ol>

<div class="row mb-3">
    <div class="col-md-8">
        <h1><span class="text-primary">Admin Login Page Settings </span></h1>
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
            <form action="<?= site_url('admin/settings/administrator-login-update') ?>" method="post" enctype="multipart/form-data">
                <div class="row">

                    <!-- main_image -->
                    <div class="col-md-12 form-group">
                        <label for="main_image">Main Image</label>
                        <input data-default-file="<?= $main_image != '' ? base_url() . 'uploads/'. $main_image : base_url() . 'assets/backend/images/1.png'?>" type="file" name="main_image" id="main_image" class="form-control dropify">
                    </div>

                    <!-- header -->
                    <div class="col-md-6 form-group">
                        <label for="header">Header</label>
                        <input type="text" name="header" id="header" class="form-control" placeholder="Enter Page Header" value="<?= $header ?>">
                    </div>

                    <!-- email_username_label_text -->
                    <div class="col-md-6 form-group">
                        <label for="email_username_label_text">Email/Username Label Text</label>
                        <input type="text" name="email_username_label_text" id="email_username_label_text" class="form-control" placeholder="Enter Email/Username Label Text" value="<?= $email_username_label_text ?>">
                    </div>

                    <!-- email_username_input_field_placeholder -->
                    <div class="col-md-6 form-group">
                        <label for="email_username_input_field_placeholder">Email/Username Label Field Placeholder</label>
                        <input type="text" name="email_username_input_field_placeholder" id="email_username_input_field_placeholder" class="form-control" placeholder="Enter Email/Username Label Field Placeholder" value="<?= $email_username_input_field_placeholder ?>">
                    </div>

                    <!-- password_label_text -->
                    <div class="col-md-6 form-group">
                        <label for="password_label_text">Password Label Text</label>
                        <input type="text" name="password_label_text" id="password_label_text" class="form-control" placeholder="Enter Password Label Text" value="<?= $password_label_text ?>">
                    </div>

                    <!-- email_username_label_text -->
                    <div class="col-md-6 form-group">
                        <label for="email_username_label_text">Email/Username Label Text</label>
                        <input type="text" name="email_username_label_text" id="email_username_label_text" class="form-control" placeholder="Enter Email/Username Label Text" value="<?= $email_username_label_text ?>">
                    </div>

                    <!-- password_input_field_placeholder -->
                    <div class="col-md-6 form-group">
                        <label for="password_input_field_placeholder">Password Input Field Placeholder</label>
                        <input type="text" name="password_input_field_placeholder" id="password_input_field_placeholder" class="form-control" placeholder="Enter Password Input Field Placeholder" value="<?= $password_input_field_placeholder ?>">
                    </div>

                    <!-- show_password_text -->
                    <div class="col-md-6 form-group">
                        <label for="show_password_text">Show Password Text</label>
                        <input type="text" name="show_password_text" id="show_password_text" class="form-control" placeholder="Enter Show Password Text" value="<?= $show_password_text ?>">
                    </div>

                    <!-- hide_password_text -->
                    <div class="col-md-6 form-group">
                        <label for="hide_password_text">Hide Password Text</label>
                        <input type="text" name="hide_password_text" id="hide_password_text" class="form-control" placeholder="Enter Hide Password Text" value="<?= $hide_password_text ?>">
                    </div>

                    <!-- button_text -->
                    <div class="col-md-6 form-group">
                        <label for="button_text">Button Text</label>
                        <input type="text" name="button_text" id="button_text" class="form-control" placeholder="Enter Button Text" value="<?= $button_text ?>">
                    </div>

                    <!-- footer_text -->
                    <div class="col-md-6 form-group">
                        <label for="footer_text">Footer Text</label>
                        <input type="text" name="footer_text" id="footer_text" class="form-control" placeholder="Enter Footer Text" value="<?= $footer_text ?>">
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