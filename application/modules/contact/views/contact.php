<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Conatct Configuration</li>
</ol>

<h1><span class="text-primary">Conatct Configuration</span></h1>

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
        <div data-label="Contact Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/website-pages/contact-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">
                     <!-- Heading -->
                     <div class="col-md-12 form-group">
                        <label for="heading">Heading<span class="text-danger">*</span></label>
                        <input type="text" name="heading" id="heading" class="form-control" value="<?= $model['heading'] ?>" required>
                    </div>
                     <!-- Title -->
                    <div class="col-md-12 form-group">
                        <label for="heading">Title<span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" value="<?= $model['title'] ?>" required>
                    </div>

                    <!-- photo -->
                    <div class="col-md-12 form-group">
                        <label for="photo">Image</label>
                        <input type="file" name="image" id="image" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/sub_menu/<?= $model['image'] ?>">
                    </div>
               

                    <!-- description -->
                        <div class="col-md-12 form-group">
                        <label for="description">Description <span class="text-danger">*</span></label>
                        <textarea name="description" id="description" class="form-control editor" placeholder="Enter Description" cols="30" rows="3"><?= $model['description'] ?></textarea>
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
     <script>
    $('.editor').summernote({
             height:400
     });
    </script>
<?php } ?>