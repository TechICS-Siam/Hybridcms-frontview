<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?= site_url('admin/website-pages/help') ?>">Help</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
</ol>

<div class="row mb-3">
    <div class="col-md-8">
        <h1><span class="text-primary">Create New Help</span></h1>
    </div>
    <div class="col-md-4 text-right">
        <a href="<?= site_url('admin/website-pages/help') ?>">
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
        <div data-label="Create a New Help" class="df-example demo-table">
            <form action="<?= site_url('admin/website-pages/help-store') ?>" method="post" id="user_form" enctype="multipart/form-data">
                <div class="row">

                    <!-- Menu -->
                    <div class="col-md-12 form-group">
                        <label for="menu">Menu<span class="text-danger">*</span></label>
                        <input type="text" name="menu" id="menu" class="form-control"  required>
                    </div>

                    <!-- Submenu one -->
                    <div class="col-md-6 form-group">
                        <label for="quotes">Submenu One<span class="text-danger">*</span></label>
                        <input type="text" name="submenu_one" id="submenu_one" class="form-control"  required>
                    </div>

                    
                    <!-- Submenu one link-->
                    <div class="col-md-6 form-group">
                        <label for="quotes">Submenu One Link<span class="text-danger">*</span></label>
                        <input type="text" name="submenu_one_link" id="submenu_one_link" class="form-control"  required>
                    </div>
  

                    <!-- Submenu two -->
                    <div class="col-md-6 form-group">
                        <label for="quotes">Submenu Two<span class="text-danger">*</span></label>
                        <input type="text" name="submenu_two" id="submenu_two" class="form-control"  required>
                    </div>

                    
                    <!-- Submenu one link-->
                    <div class="col-md-6 form-group">
                        <label for="quotes">Submenu Two Link<span class="text-danger">*</span></label>
                        <input type="text" name="submenu_two_link" id="submenu_two_link" class="form-control"  required>
                    </div>


                    <!-- Submenu three -->
                    <div class="col-md-6 form-group">
                        <label for="quotes">Submenu Three<span class="text-danger">*</span></label>
                        <input type="text" name="submenu_three" id="submenu_three" class="form-control" required>
                    </div>

                    
                    <!-- Submenu three link-->
                    <div class="col-md-6 form-group">
                        <label for="quotes">Submenu Three Link<span class="text-danger">*</span></label>
                        <input type="text" name="submenu_three_link" id="submenu_three_link" class="form-control" required>
                    </div>
  
                    <div class="col-md-12 form-group">
                        <label for="status">Status <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-control select">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
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