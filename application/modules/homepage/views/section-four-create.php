<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?= site_url('admin/home-page/section-four') ?>">Section Four</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
</ol>

<div class="row mb-3">
    <div class="col-md-8">
        <h1><span class="text-primary">Create New Section Four</span></h1>
    </div>
    <div class="col-md-4 text-right">
        <a href="<?= site_url('admin/home-page/section-four') ?>">
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
        <div data-label="Create a New Section Four" class="df-example demo-table">
            <form action="<?= site_url('admin/home-page/section-four-store') ?>" method="post" id="user_form" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-md-12 alert alert-primary" role="alert">
                        Please Take Icons from <a style="color:red;font-weight:bold;" target="_blank" href="https://fontawesome.com/icons?d=gallery">Font Awosome</a>. You have to use full code here.
                    </div>

                    <!-- icon -->
                    <div class="col-md-6 form-group">
                        <label for="icon">Icon <span class="text-danger">*</span></label>
                        <input type="text" name="icon" id="icon" class="form-control" placeholder="Enter Icon" required>
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

                    <!-- button text -->
                    <div class="col-md-4 form-group">
                        <label for="button_text">Button Text <span class="text-danger">*</span></label>
                        <input type="text" name="button_text"  id="button_text" class="form-control" required placeholder="Enter Button Text">
                    </div>

                    <div class="col-md-4 form-group">
                        <label for="button_url">Button URL <span class="text-danger">*</span></label>
                        <input type="text" name="button_url" id="button_url" class="form-control" required placeholder="Enter Button URL"> 
                    </div>

                   
                    <div class="col-md-4 form-group">
                        <label for="button_open">Do you want to open this link on a new tab? <span class="text-danger">*</span></label>
                        <select name="button_open" id="button_open" class="form-control select">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="feature_title">Feature Title <span class="text-danger">*</span></label>
                        <input type="text" name="feature_title" id="feature_title" class="form-control" placeholder="Enter Feature Title" required>
                    </div>

                    <div class="col-md-6 form-group">
                        <label for="status">Status <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-control select">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>


                    <div class="col-md-12 mt-4 form-group">
                        <div class="field_wrapper">
                            <div class="row">
                                <div class="col-md-4 mx-auto">
                                    <a href="javascript:void(0);" class="add_button" title="Add field">
                                        <button type="button" class="btn btn-outline-success btn-block btn-icon">
                                            <i data-feather="plus"></i> &nbsp; Add New Features
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
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

        $(document).ready(function(){
            var maxField = 25; 
            var addButton = $('.add_button'); 
            var wrapper = $('.field_wrapper'); 
            var fieldHTML = '<div class="row mt-2"><div class="col-md-10"><input type="text" name="features[]" placeholder="Enter Product Feature" class="form-control" value=""/></div><div class="col-md-2"><a href="javascript:void(0);" class="remove_button"><button type="button" class="btn btn-outline-danger btn-block btn-icon"><i class="fa fa-trash" aria-hidden="true"></i></button></a></div>';
            var x = 1; 
            
            $(addButton).click(function(){
                if(x < maxField){ 
                    x++; 
                    $(wrapper).append(fieldHTML); 
                }
            });
            
            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    </script>
<?php } ?>