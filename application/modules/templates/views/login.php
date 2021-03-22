<?php
    $this->load->view('link/template/header_link');
    $model = $this->db->from('admin_login_page')->where('id', 1)->get()->row();
    $library = $this->db->from('library')->where('id', 1)->get()->row();
?>
<body>

    <div class="content content-fixed content-auth" style="margin-top: 60px;">
        <div class="container">
            <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
                <div class="media-body align-items-center d-none d-lg-flex">
                    <div class="mx-wd-600">
                        <img src="<?= $model->main_image != null ? base_url() . 'uploads/'. $model->main_image : base_url() . 'assets/backend/images/1.png'  ?>" class="img-fluid" alt="ICS Legal Hybrid cms">
                    </div>
                    <div class="pos-absolute b-0 l-0 tx-12 tx-center tx-color-03" style="margin-bottom: -36px;text-align: center;margin-left: 48px;font-size: 16px;">
                        <?= $model->header ?>
                    </div>
                </div>
                <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
                    <div class="wd-100p">
                        <div class = "col-md-12 text-center mb-3">
                            <img src="<?= $library->logo != null ? base_url() . 'uploads/'. $library->logo : base_url() . 'assets/backend/images/logo-cms.png' ?>" class ="img-fluid">
                        </div>

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

                        <form id="login_form" action="<?= site_url('administrator/login_credential') ?>" method="POST">
                            <div class="form-group">
                                <label id="email_or_username"><?= $model->email_username_label_text ?></label>
                                <input required value="<?php printOldValues('email_or_username'); ?>" autocomplete="off"  name="email_or_username" id="email_or_username" type="text" class="form-control" placeholder="<?= $model->email_username_input_field_placeholder ?>">
                                <span class="text-danger"><?php printError('email_or_username') ?></span>
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between mg-b-5">
                                    <label class="mg-b-0-f"><?= $model->password_label_text ?></label>
                                </div>
                                <input required value="<?php printOldValues('password'); ?>" name="password" id="password" type="password" class="form-control" placeholder="<?= $model->password_input_field_placeholder ?>">
                                <span class="text-danger"><?php printError('password') ?></span>
                            </div>
                            <div class="custom-control custom-checkbox form-group">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label style="cursor: pointer;" class="custom-control-label" for="customCheck1"><span id="checkbox_value"><?= $model->show_password_text ?></span></label>
                            </div>
                            <button type="submit" class="btn btn-brand-02 btn-block"><?= $model->button_text ?></button>
                        </form>
                        <hr>
                        <div class="tx-13 mg-t-20 tx-center"><?= $model->footer_text ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('link/template/footer_link'); ?>
    <script>
        $(function() {
            var show_password_text = '<?= $model->show_password_text?>';
            var hide_password_text = '<?= $model->hide_password_text?>';
            $('#customCheck1').change(function() {
                if(this.checked) {
                    $('#password').attr('type', 'text');
                    $('#checkbox_value').html(hide_password_text);
                } else {
                    $('#password').attr('type', 'password');
                    $('#checkbox_value').html(show_password_text);
                }
            });
        });

        $('#login_form').parsley();
    </script>
</body>
</html>
