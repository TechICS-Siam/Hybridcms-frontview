<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?= site_url('admin/company/customer-stories') ?>">Customer Stories</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Update</li>
</ol>

<div class="row mb-3">
    <div class="col-md-8">
        <h1><span class="text-primary">Update Customer Stories</span></h1>
    </div>
    <div class="col-md-4 text-right">
        <a href="<?= site_url('admin/company/customer-stories') ?>">
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
        <div data-label="Update blog" class="df-example demo-table">
     
            <form action="<?= site_url('admin/company/customer-stories-update/'.$model['id']) ?>" method="post" id="user_form" enctype="multipart/form-data">
                <div class="row">
  <!-- photo -->
  <div class="col-md-12 form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/sub_menu/<?= $model['image'] ?>">
                    </div>

                    <!-- title -->
                    <div class="col-md-12 form-group">
                        <label for="title">Title one<span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" value="<?= $model['title'] ?>" required>
                    </div>

                    <!-- Quotes -->
                      <div class="col-md-12 form-group">
                        <label for="quotes">Quotes<span class="text-danger">*</span></label>
                        <input type="text" name="quotes" id="quotes" class="form-control" value="<?= $model['quotes'] ?>" required>
                    </div>
                    
                     <!-- button_text -->
                     <div class="col-md-6 form-group">
                        <label for="button_text">Button Text<span class="text-danger">*</span></label>
                        <input type="text" name="button_text" id="button_text" class="form-control" value="<?= $model['button_text'] ?>"  required>
                    </div>
                    <!-- button_url -->
                    <div class="col-md-6 form-group">
                        <label for="button_url">Button Url<span class="text-danger">*</span></label>
                        <input type="text" name="button_url" id="button_url" class="form-control" value="<?= $model['button_url'] ?>"  required>
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
            $(document).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    </script>
<?php } ?>