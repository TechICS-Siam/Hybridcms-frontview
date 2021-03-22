<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Section Eleven Configuration</li>
</ol>

<h1><span class="text-primary">Section Eleven Configuration</span></h1>

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
        <div data-label="Section Eleven Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/home-page/update-section-eleven') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">
                    
                    <div class="col-md-4 form-group">
                        <label for="header">Header <span class="text-danger">*</span></label>
                        <input type="text" name="header" id="header" class="form-control" placeholder="Enter Header" autocomplete="off" value="<?= $model->header ?>">
                    </div>
                    
                    <div class="col-md-4 form-group">
                        <label for="sub_header_one">Sub Header One<span class="text-danger">*</span></label>
                        <input type="text" name="sub_header" id="sub_header" class="form-control" placeholder="Enter Sub Header" autocomplete="off" value="<?= $model->sub_header ?>">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="sub_header_two">Sub Header Two <span class="text-danger">*</span></label>
                        <input type="text" name="sub_header_two" id="sub_header_two" class="form-control" placeholder="Enter Sub Header Two" autocomplete="off" value="<?= $model->sub_header_two ?>">
                    </div>

                    <div class="col-md-3 form-group">
                        <label for="service_one">Service One<span class="text-danger">*</span></label>
                        <input type="text" name="service_one" id="service_one" class="form-control" placeholder="Enter Service One" autocomplete="off" value="<?= $model->service_one ?>">
                    </div>

                    <div class="col-md-3 form-group">
                        <label for="service_one_url">Service One Url<span class="text-danger">*</span></label>
                        <input type="text" name="service_one_url" id="service_one_url" class="form-control" placeholder="Enter Service One" autocomplete="off" value="<?= $model->service_one_url ?>">
                    </div>

                    <div class="col-md-3 form-group">
                        <label for="service_two">Service Two<span class="text-danger">*</span></label>
                        <input type="text" name="service_two" id="service_two" class="form-control" placeholder="Enter Service Two" autocomplete="off" value="<?= $model->service_two ?>">
                    </div>

                    <div class="col-md-3 form-group">
                        <label for="service_two_url">Service Two Url<span class="text-danger">*</span></label>
                        <input type="text" name="service_two_url" id="service_two_url" class="form-control" placeholder="Enter Service Two Url" autocomplete="off" value="<?= $model->service_two_url ?>">
                    </div>
                   
                    <div class="col-md-3 form-group">
                        <label for="service_three">Service Three<span class="text-danger">*</span></label>
                        <input type="text" name="service_three" id="service_three" class="form-control" placeholder="Enter Service Three" autocomplete="off" value="<?= $model->service_three ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="service_three_url">Service Three Url<span class="text-danger">*</span></label>
                        <input type="text" name="service_three_url" id="service_three_url" class="form-control" placeholder="Enter Service Three Url" autocomplete="off" value="<?= $model->service_three_url ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="service_four">Service Four<span class="text-danger">*</span></label>
                        <input type="text" name="service_four" id="service_four" class="form-control" placeholder="Enter Service Four" autocomplete="off" value="<?= $model->service_four ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="service_four">Service Four url<span class="text-danger">*</span></label>
                        <input type="text" name="service_four_url" id="service_four_url" class="form-control" placeholder="Enter Service Four Url" autocomplete="off" value="<?= $model->service_four_url ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="service_five">Service Five<span class="text-danger">*</span></label>
                        <input type="text" name="service_five" id="service_five" class="form-control" placeholder="Enter Service Five" autocomplete="off" value="<?= $model->service_five ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="service_five_url">Service Five Url<span class="text-danger">*</span></label>
                        <input type="text" name="service_five_url" id="service_five_url" class="form-control" placeholder="Enter Service Five Url" autocomplete="off" value="<?= $model->service_five_url ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="service_six">Service Six<span class="text-danger">*</span></label>
                        <input type="text" name="service_six" id="service_six" class="form-control" placeholder="Enter Service Six" autocomplete="off" value="<?= $model->service_six ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="service_six_url">Service Six Url<span class="text-danger">*</span></label>
                        <input type="text" name="service_six_url" id="service_six_url" class="form-control" placeholder="Enter Service Six Url" autocomplete="off" value="<?= $model->service_six_url ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="service_seven">Service Seven<span class="text-danger">*</span></label>
                        <input type="text" name="service_seven" id="service_seven" class="form-control" placeholder="Enter Service Seven" autocomplete="off" value="<?= $model->service_seven ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="service_seven_url">Service Seven Url<span class="text-danger">*</span></label>
                        <input type="text" name="service_seven_url" id="service_seven_url" class="form-control" placeholder="Enter Service Seven Url" autocomplete="off" value="<?= $model->service_one_url ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="service_eight">Service Eight<span class="text-danger">*</span></label>
                        <input type="text" name="service_eight" id="service_eight" class="form-control" placeholder="Enter Service Eight" autocomplete="off" value="<?= $model->service_eight ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="service_eight_url">Service Eight Url<span class="text-danger">*</span></label>
                        <input type="text" name="service_eight_url" id="service_eight_url" class="form-control" placeholder="Enter Service Eight Url" autocomplete="off" value="<?= $model->service_eight_url ?>">
                    </div>

                    <div class="col-md-3 form-group">
                        <label for="service_nine">Service Nine<span class="text-danger">*</span></label>
                        <input type="text" name="service_nine" id="service_nine" class="form-control" placeholder="Enter Service Nine" autocomplete="off" value="<?= $model->service_nine ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="service_nine_url">Service Nine Url<span class="text-danger">*</span></label>
                        <input type="text" name="service_nine_url" id="service_nine_url" class="form-control" placeholder="Enter Service Nine Url" autocomplete="off" value="<?= $model->service_nine_url ?>">
                    </div>

                    <div class="col-md-3 form-group">
                        <label for="button_text">Button Text <span class="text-danger">*</span></label>
                        <input type="text" name="button_text" id="button_text" class="form-control" placeholder="Enter Button Text" autocomplete="off" value="<?= $model->button_text ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="button_text_url">Button Text url<span class="text-danger">*</span></label>
                        <input type="text" name="button_text_url" id="button_text_url" class="form-control" placeholder="Enter Button Text Url" autocomplete="off" value="<?= $model->button_text_url ?>">
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