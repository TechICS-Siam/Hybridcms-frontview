<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Section Nine Configuration</li>
</ol>

<h1><span class="text-primary">Section Nine Configuration</span></h1>

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
        <form action="<?= site_url('admin/home-page/update-section-nine') ?>" method="post" enctype="multipart/form-data" id="user_form">

            <div data-label="Tab One Configuration" class="df-example demo-table" >
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="tab_one_icon">Tab One Icon <span class="text-danger">*</span></label>
                        <input type="text" name="tab_one_icon" id="tab_one_icon" class="form-control" autocomplete="Enter Tab One Icon" value="<?= htmlentities($model->tab_one_icon) ?>">
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="tab_one_title">Tab One Title <span class="text-danger">*</span></label>
                        <input type="text" name="tab_one_title" id="tab_one_title" class="form-control" autocomplete="Enter Tab One Title" value="<?= $model->tab_one_title ?>">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="tab_one_photo">Tab One Photo</label>
                        <input type="file" name="tab_one_photo" id="tab_one_photo" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->tab_one_photo?>">
                    </div>

                    <!-- tab_one_header -->
                    <div class="col-md-6 form-group">
                        <label for="tab_one_header">Header <span class="text-danger">*</span></label>
                        <input type="text" name="tab_one_header" id="tab_one_header" class="form-control" value="<?= $model->tab_one_header ?>" autocomplete="off" placeholder="Enter Tab One Header">
                    </div>

                    <!-- tab_one_alt_tag -->
                    <div class="col-md-6 form-group">
                        <label for="tab_one_alt_tag">Alter Tag <span class="text-danger">*</span></label>
                        <input type="text" name="tab_one_alt_tag" id="tab_one_alt_tag" class="form-control" value="<?= $model->tab_one_alt_tag ?>" autocomplepe="off" placeholder="Enter Image Alter Tag">
                    </div>

                    <!-- tab_one_link_text -->
                    <div class="col-md-4 form-group">
                        <label for="tab_one_link_text">Tab One Link Text <span class="text-danger">*</span></label>
                        <input type="text" name="tab_one_link_text" id="tab_one_link_text" class="form-control" value="<?= $model->tab_one_link_text ?>" autocomplete="off" placeholder="Enter Tab One Link Text">
                    </div>
                    
                    <!-- tab_one_link_url -->
                    <div class="col-md-4 form-group">
                        <label for="tab_one_link_url">Tab One Link URL <span class="text-danger">*</span></label>
                        <input type="text" name="tab_one_link_url" id="tab_one_link_url" class="form-control" value="<?= $model->tab_one_link_url ?>" autocomplete="off" placeholder="Enter Tab One Link URL">
                    </div>

                    <!-- tab_one_link_open -->
                    <div class="col-md-4 form-group">
                        <label for="tab_one_link_open">Do You Want To Open This Link On Another Link <span class="text-danger">*</span></label>
                        <select name="tab_one_link_open" id="tab_one_link_open" class="form-control select">
                            <option <?= $model->tab_one_link_open == 1 ? 'selected' : '' ?> value="1">Yes</option>
                            <option <?= $model->tab_one_link_open == 0 ? 'selected' : '' ?> value="0">No</option>
                        </select>
                    </div>

                    <!-- tab_one_description -->
                    <div class="col-md-12 form-group">
                        <label for="tab_one_description">Tab One Description <span class="text-danger">*</span></label>
                        <textarea name="tab_one_description" id="tab_one_description" class="form-control" placeholder="Enter Tab One Description" cols="30" rows="7"><?= $model->tab_one_description ?></textarea>
                    </div>
                </div>
            </div>

            <div data-label="Tab Two Configuration" class="df-example demo-table" >
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="tab_two_icon">Tab Two Icon <span class="text-danger">*</span></label>
                        <input type="text" name="tab_two_icon" id="tab_two_icon" class="form-control" autocomplete="Enter Tab Two Icon" value="<?= htmlentities($model->tab_two_icon) ?>">
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="tab_two_title">Tab Two Title <span class="text-danger">*</span></label>
                        <input type="text" name="tab_two_title" id="tab_two_title" class="form-control" autocomplete="Enter Tab Two Title" value="<?= $model->tab_two_title ?>">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="tab_two_photo">Tab Two Photo</label>
                        <input type="file" name="tab_two_photo" id="tab_two_photo" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->tab_two_photo ?>">
                    </div>

                    <!-- tab_two_header -->
                    <div class="col-md-6 form-group">
                        <label for="tab_two_header">Header <span class="text-danger">*</span></label>
                        <input type="text" name="tab_two_header" id="tab_two_header" class="form-control" value="<?= $model->tab_two_header ?>" autocomplete="off" placeholder="Enter Tab Two Header">
                    </div>

                    <!-- tab_two_alt_tag -->
                    <div class="col-md-6 form-group">
                        <label for="tab_two_alt_tag">Alter Tag <span class="text-danger">*</span></label>
                        <input type="text" name="tab_two_alt_tag" id="tab_two_alt_tag" class="form-control" value="<?= $model->tab_two_alt_tag ?>" autocomplepe="off" placeholder="Enter Image Alter Tag">
                    </div>

                    <!-- tab_two_link_text -->
                    <div class="col-md-4 form-group">
                        <label for="tab_two_link_text">Tab Two Link Text <span class="text-danger">*</span></label>
                        <input type="text" name="tab_two_link_text" id="tab_two_link_text" class="form-control" value="<?= $model->tab_two_link_text ?>" autocomplete="off" placeholder="Enter Tab Two Link Text">
                    </div>
                    
                    <!-- tab_two_link_url -->
                    <div class="col-md-4 form-group">
                        <label for="tab_two_link_url">Tab Two Link URL <span class="text-danger">*</span></label>
                        <input type="text" name="tab_two_link_url" id="tab_two_link_url" class="form-control" value="<?= $model->tab_two_link_url ?>" autocomplete="off" placeholder="Enter Tab Two Link URL">
                    </div>

                    <!-- tab_two_link_open -->
                    <div class="col-md-4 form-group">
                        <label for="tab_two_link_open">Do You Want To Open This Link On Another Link <span class="text-danger">*</span></label>
                        <select name="tab_two_link_open" id="tab_two_link_open" class="form-control select">
                            <option <?= $model->tab_two_link_open == 1 ? 'selected' : '' ?> value="1">Yes</option>
                            <option <?= $model->tab_two_link_open == 0 ? 'selected' : '' ?> value="0">No</option>
                        </select>
                    </div>

                    <!-- tab_two_description -->
                    <div class="col-md-12 form-group">
                        <label for="tab_two_description">Tab Two Description <span class="text-danger">*</span></label>
                        <textarea name="tab_two_description" id="tab_two_description" class="form-control" placeholder="Enter Tab Two Description" cols="30" rows="7"><?= $model->tab_two_description ?></textarea>
                    </div>
                </div>
            </div>

            <div data-label="Tab Three Configuration" class="df-example demo-table" >
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="tab_three_icon">Tab Three Icon <span class="text-danger">*</span></label>
                        <input type="text" name="tab_three_icon" id="tab_three_icon" class="form-control" autocomplete="Enter Tab Three Icon" value="<?= htmlentities($model->tab_three_icon) ?>">
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="tab_three_title">Tab Three Title <span class="text-danger">*</span></label>
                        <input type="text" name="tab_three_title" id="tab_three_title" class="form-control" autocomplete="Enter Tab Three Title" value="<?= $model->tab_three_title ?>">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="tab_three_photo">Tab Three Photo</label>
                        <input type="file" name="tab_three_photo" id="tab_three_photo" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->tab_three_photo ?>">
                    </div>

                    <!-- tab_three_header -->
                    <div class="col-md-6 form-group">
                        <label for="tab_three_header">Header <span class="text-danger">*</span></label>
                        <input type="text" name="tab_three_header" id="tab_three_header" class="form-control" value="<?= $model->tab_three_header ?>" autocomplete="off" placeholder="Enter Tab Three Header">
                    </div>

                    <!-- tab_three_alt_tag -->
                    <div class="col-md-6 form-group">
                        <label for="tab_three_alt_tag">Alter Tag <span class="text-danger">*</span></label>
                        <input type="text" name="tab_three_alt_tag" id="tab_three_alt_tag" class="form-control" value="<?= $model->tab_three_alt_tag ?>" autocomplepe="off" placeholder="Enter Image Alter Tag">
                    </div>

                    <!-- tab_three_link_text -->
                    <div class="col-md-4 form-group">
                        <label for="tab_three_link_text">Tab Three Link Text <span class="text-danger">*</span></label>
                        <input type="text" name="tab_three_link_text" id="tab_three_link_text" class="form-control" value="<?= $model->tab_three_link_text ?>" autocomplete="off" placeholder="Enter Tab Three Link Text">
                    </div>
                    
                    <!-- tab_three_link_url -->
                    <div class="col-md-4 form-group">
                        <label for="tab_three_link_url">Tab Three Link URL <span class="text-danger">*</span></label>
                        <input type="text" name="tab_three_link_url" id="tab_three_link_url" class="form-control" value="<?= $model->tab_three_link_url ?>" autocomplete="off" placeholder="Enter Tab Three Link URL">
                    </div>

                    <!-- tab_three_link_open -->
                    <div class="col-md-4 form-group">
                        <label for="tab_three_link_open">Do You Want To Open This Link On Another Link <span class="text-danger">*</span></label>
                        <select name="tab_three_link_open" id="tab_three_link_open" class="form-control select">
                            <option <?= $model->tab_three_link_open == 1 ? 'selected' : '' ?> value="1">Yes</option>
                            <option <?= $model->tab_three_link_open == 0 ? 'selected' : '' ?> value="0">No</option>
                        </select>
                    </div>

                    <!-- tab_three_description -->
                    <div class="col-md-12 form-group">
                        <label for="tab_three_description">Tab Three Description <span class="text-danger">*</span></label>
                        <textarea name="tab_three_description" id="tab_three_description" class="form-control" placeholder="Enter Tab Three Description" cols="30" rows="7"><?= $model->tab_three_description ?></textarea>
                    </div>
                </div>
            </div>

            <div data-label="Tab Four Configuration" class="df-example demo-table" >
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="tab_four_icon">Tab Four Icon <span class="text-danger">*</span></label>
                        <input type="text" name="tab_four_icon" id="tab_four_icon" class="form-control" autocomplete="Enter Tab Four Icon" value="<?= htmlentities($model->tab_four_icon) ?>">
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="tab_four_title">Tab Three Title <span class="text-danger">*</span></label>
                        <input type="text" name="tab_four_title" id="tab_four_title" class="form-control" autocomplete="Enter Tab Four Title" value="<?= $model->tab_four_title ?>">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="tab_four_photo">Tab Four Photo</label>
                        <input type="file" name="tab_four_photo" id="tab_four_photo" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->tab_four_photo ?>">
                    </div>

                    <!-- tab_four_header -->
                    <div class="col-md-6 form-group">
                        <label for="tab_four_header">Header <span class="text-danger">*</span></label>
                        <input type="text" name="tab_four_header" id="tab_four_header" class="form-control" value="<?= $model->tab_four_header ?>" autocomplete="off" placeholder="Enter Tab Four Header">
                    </div>

                    <!-- tab_four_alt_tag -->
                    <div class="col-md-6 form-group">
                        <label for="tab_four_alt_tag">Alter Tag <span class="text-danger">*</span></label>
                        <input type="text" name="tab_four_alt_tag" id="tab_four_alt_tag" class="form-control" value="<?= $model->tab_four_alt_tag ?>" autocomplepe="off" placeholder="Enter Image Alter Tag">
                    </div>

                    <!-- tab_four_link_text -->
                    <div class="col-md-4 form-group">
                        <label for="tab_four_link_text">Tab Four Link Text <span class="text-danger">*</span></label>
                        <input type="text" name="tab_four_link_text" id="tab_four_link_text" class="form-control" value="<?= $model->tab_four_link_text ?>" autocomplete="off" placeholder="Enter Tab Four Link Text">
                    </div>
                    
                    <!-- tab_four_link_url -->
                    <div class="col-md-4 form-group">
                        <label for="tab_four_link_url">Tab Four Link URL <span class="text-danger">*</span></label>
                        <input type="text" name="tab_four_link_url" id="tab_four_link_url" class="form-control" value="<?= $model->tab_four_link_url ?>" autocomplete="off" placeholder="Enter Tab Four Link URL">
                    </div>

                    <!-- tab_four_link_open -->
                    <div class="col-md-4 form-group">
                        <label for="tab_four_link_open">Do You Want To Open This Link On Another Link <span class="text-danger">*</span></label>
                        <select name="tab_four_link_open" id="tab_four_link_open" class="form-control select">
                            <option <?= $model->tab_four_link_open == 1 ? 'selected' : '' ?> value="1">Yes</option>
                            <option <?= $model->tab_four_link_open == 0 ? 'selected' : '' ?> value="0">No</option>
                        </select>
                    </div>

                    <!-- tab_four_description -->
                    <div class="col-md-12 form-group">
                        <label for="tab_four_description">Tab Four Description <span class="text-danger">*</span></label>
                        <textarea name="tab_four_description" id="tab_four_description" class="form-control" placeholder="Enter Tab Four Description" cols="30" rows="7"><?= $model->tab_four_description ?></textarea>
                    </div>
                </div>
            </div>

            <div data-label="Tab Five Configuration" class="df-example demo-table" >
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="tab_five_icon">Tab Five Icon <span class="text-danger">*</span></label>
                        <input type="text" name="tab_five_icon" id="tab_five_icon" class="form-control" autocomplete="Enter Tab Five Icon" value="<?= htmlentities($model->tab_five_icon) ?>">
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="tab_five_title">Tab Five Title <span class="text-danger">*</span></label>
                        <input type="text" name="tab_five_title" id="tab_five_title" class="form-control" autocomplete="Enter Tab Five Title" value="<?= $model->tab_five_title ?>">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="tab_five_photo">Tab Five Photo</label>
                        <input type="file" name="tab_five_photo" id="tab_five_photo" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/home-page/<?= $model->tab_five_photo ?>">
                    </div>

                    <!-- tab_five_header -->
                    <div class="col-md-6 form-group">
                        <label for="tab_five_header">Header <span class="text-danger">*</span></label>
                        <input type="text" name="tab_five_header" id="tab_five_header" class="form-control" value="<?= $model->tab_five_header ?>" autocomplete="off" placeholder="Enter Tab Five Header">
                    </div>

                    <!-- tab_five_alt_tag -->
                    <div class="col-md-6 form-group">
                        <label for="tab_five_alt_tag">Alter Tag <span class="text-danger">*</span></label>
                        <input type="text" name="tab_five_alt_tag" id="tab_five_alt_tag" class="form-control" value="<?= $model->tab_five_alt_tag ?>" autocomplepe="off" placeholder="Enter Image Alter Tag">
                    </div>

                    <!-- tab_five_link_text -->
                    <div class="col-md-4 form-group">
                        <label for="tab_five_link_text">Tab Five Link Text <span class="text-danger">*</span></label>
                        <input type="text" name="tab_five_link_text" id="tab_five_link_text" class="form-control" value="<?= $model->tab_five_link_text ?>" autocomplete="off" placeholder="Enter Tab Five Link Text">
                    </div>
                    
                    <!-- tab_five_link_url -->
                    <div class="col-md-4 form-group">
                        <label for="tab_five_link_url">Tab Five Link URL <span class="text-danger">*</span></label>
                        <input type="text" name="tab_five_link_url" id="tab_five_link_url" class="form-control" value="<?= $model->tab_five_link_url ?>" autocomplete="off" placeholder="Enter Tab Five Link URL">
                    </div>

                    <!-- tab_five_link_open -->
                    <div class="col-md-4 form-group">
                        <label for="tab_five_link_open">Do You Want To Open This Link On Another Link <span class="text-danger">*</span></label>
                        <select name="tab_five_link_open" id="tab_five_link_open" class="form-control select">
                            <option <?= $model->tab_five_link_open == 1 ? 'selected' : '' ?> value="1">Yes</option>
                            <option <?= $model->tab_five_link_open == 0 ? 'selected' : '' ?> value="0">No</option>
                        </select>
                    </div>

                    <!-- tab_five_description -->
                    <div class="col-md-12 form-group">
                        <label for="tab_five_description">Tab Five Description <span class="text-danger">*</span></label>
                        <textarea name="tab_five_description" id="tab_five_description" class="form-control" placeholder="Enter Tab Five Description" cols="30" rows="7"><?= $model->tab_five_description ?></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mx-auto">
                <button type="submit" class="btn btn-xs btn-block btn-primary pd-x-20">
                    Update &nbsp;&nbsp; <i data-feather="send"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<?php function pageRequiredScript(){ ?>
    <script>
        $('.select').select2({width:'100%'});
        $('.dropify').dropify();
    </script>
<?php } ?>