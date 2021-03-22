<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Section Three Configuration</li>
</ol>

<h1><span class="text-primary">Section Three Configuration</span></h1>

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
        <div data-label="Section Three Configuration" class="df-example demo-table">
            <form action="<?= site_url('admin/home-page/update-section-three') ?>" method="post" id="user_form" enctype="multipart/form-data">
                <div class="row">

                    <!-- title_one -->
                    <div class="col-md-6 form-group">
                        <label for="title_one">Title One</label>
                        <textarea name="title_one" id="title_one" class="form-control" cols="30" rows="2"><?= $model->title_one ?></textarea>
                    </div>

                    <!-- title_two -->
                    <div class="col-md-6 form-group">
                        <label for="title_two">Title Two</label>
                        <textarea name="title_two" id="title_two" class="form-control" cols="30" rows="2"><?= $model->title_two ?></textarea>
                    </div>
                    
                    <div class="col-md-6 form-group">
                        <label for="description_one"> Description One </label>
                        <textarea name="description_one" id="description_one" class="form-control editor" cols="30" rows="2"><?= $model->description_one ?></textarea>
                    </div>
                    
                    <div class="col-md-6 form-group">
                        <label for="description_two"> Description Two </label>
                        <textarea name="description_two" id="description_two" class="form-control editor" cols="30" rows="2"><?= $model->description_two ?></textarea>
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="video">Youtube Embed Video Code</label>
                        <textarea name="video" id="video" class="form-control" cols="30" rows="3"><?= $model->video ?></textarea>
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
    <script src="https://cdn.tiny.cloud/1/rrl04r5s7wp929v9zatc8sxsq77eeac2rox87yxftj62fhmb/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>    
    <script type="text/javascript">
        tinymce.init({
            selector:'.editor', plugins: "image code", height : "280", 
            menubar: false,
            toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code',
            image_title: true,
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.onchange = function () {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function () {
        
                var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    cb(blobInfo.blobUri(), { title: file.name });
                };
                reader.readAsDataURL(file);
            };
            input.click();
            },
        });

        $('#user_form').parsley();
        $('.select').select2({width:'100%'});
    </script>
<?php } ?>