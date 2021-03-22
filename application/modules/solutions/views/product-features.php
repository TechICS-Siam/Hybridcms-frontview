<div class="container">

    <ol class="breadcrumb df-breadcrumbs mg-b-10">
        <li class="breadcrumb-item">
            <a href="<?= base_url() ?>dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Product Features Section One</li>
    </ol>

    <!-- section first -->

    <div class="row">
    <h1><span class="text-primary">Product Features Section One</span></h1>
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
            <!-- <div data-label="Blog Configuration" class="df-example demo-table" > -->
                <form action="<?= site_url('admin/solutions/product-features-first-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                    <div class="row">

                        <!-- title -->
                        <div class="col-md-12 form-group">
                            <label for="title_two">Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control" value="<?= $model['title'] ?>" required>
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

    <div class="row my-3">
        <div class="col-md-8">
            <h1 class="mb-3"><span class="text-primary"></span></h1>
        </div>
        <div class="col-md-4 text-right">
            <a href="<?= site_url('admin/solutions/product-features-one-create') ?>">
                <button type="button" class="btn btn-xs btn-primary">Create &nbsp; <i data-feather="plus-square"></i></button>
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

        </div>     
        <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-sm" id="content_management_table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; foreach($models as $model):  ?>
                
                    <tr>                        
                        <td><?= $i ?></td>
                        <td><b><?= date('d F, Y', strtotime($model->date)) ?></b> <br> <?= date('h:i:s A', strtotime($model->date)) ?> </td>
                        <td><?= $model->title?></td>
                        <td>
                            <span class="badge badge-<?= $model->status == 1 ? 'success' : 'warning'?>"><?= $model->status == 1 ? 'Active' : 'Inactive'?></span>
                        </td>
                        <td>
                            <a href="<?= site_url('admin/solutions/product-features-one-edit/'.$model->id) ?>">
                                <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                    <i data-feather="edit"></i>
                                </button>
                            </a>
                            <a href="<?= site_url('admin/solutions/product-features-one-delete/'.$model->id) ?>" class="delete-on-confirm">
                                <button type="button" class="btn btn-outline-danger btn-xs btn-icon">
                                    <i data-feather="trash-2"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                <?php $i++; endforeach; ?>
                </tbody>
            </table>
        </div>   
    </div>


    <!-- second first -->

    <!-- section second -->
    <div class="row mt-5">
      <h1><span class="text-primary">Product Features Section Two</span></h1>
        <div class="col-md-12">
            <?php
            $success = $this->session->flashdata('success');
            $warning = $this->session->flashdata('warning');
            if (isset($success)) {?>
                <div class="alert session_alert alert-outline alert-success" role="alert">
                    <strong>Well Dtwo!</strong>  <?php echo $success; ?>
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
            <!-- <div data-label="Blog Configuration" class="df-example demo-table" > -->
                <form action="<?= site_url('admin/solutions/product-features-second-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                    <div class="row">

                        <!-- title -->
                        <div class="col-md-12 form-group">
                            <label for="title_two">Title<span class="text-danger">*</span></label>
                            <input type="text" name="title_two" id="title_two" class="form-control" value="<?= $model_two['title_two'] ?>" required>
                        </div>

                        <!-- description -->
                        <div class="col-md-12 form-group">
                            <label for="short_des_two">Description<span class="text-danger">*</span></label>
                            <input type="text" name="short_des_two" id="short_des_two" class="form-control" value="<?= $model_two['short_des_two'] ?>" required>
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

    <div class="container">
    <div class="row my-3">
            <div class="col-md-8">
                <h1 class="mb-3"><span class="text-primary"></span></h1>
            </div>
            <div class="col-md-4 text-right">
                <a href="<?= site_url('admin/solutions/product-features-two-create') ?>">
                    <button type="button" class="btn btn-xs btn-primary">Create &nbsp; <i data-feather="plus-square"></i></button>
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
                        <strong>Well Dtwo!</strong>  <?php echo $success; ?>
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

            </div>     
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-sm" id="content_management_table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; foreach($models_two as $model):  ?>
                    
                        <tr>                        
                            <td><?= $i ?></td>
                            <td><b><?= date('d F, Y', strtotime($model->date)) ?></b> <br> <?= date('h:i:s A', strtotime($model->date)) ?> </td>
                            <td><?= $model->title?></td>
                            <td>
                                <span class="badge badge-<?= $model->status == 1 ? 'success' : 'warning'?>"><?= $model->status == 1 ? 'Active' : 'Inactive'?></span>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/solutions/product-features-two-edit/'.$model->id) ?>">
                                    <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                                <a href="<?= site_url('admin/solutions/product-features-two-delete/'.$model->id) ?>" class="delete-on-confirm">
                                    <button type="button" class="btn btn-outline-danger btn-xs btn-icon">
                                        <i data-feather="trash-2"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </div>   
        </div> 

    </div>
    
    <!-- section second -->

    <!-- section third -->
    <div class="container">
     <div class="row mt-5">
      <h1><span class="text-primary">Product Features Section Three</span></h1>
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
            <!-- <div data-label="Blog Configuration" class="df-example demo-table" > -->
                <form action="<?= site_url('admin/solutions/product-features-third-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                    <div class="row">

                        <!-- title -->
                        <div class="col-md-12 form-group">
                            <label for="title_three">Title<span class="text-danger">*</span></label>
                            <input type="text" name="title_three" id="title_three" class="form-control" value="<?= $model_three['title_three'] ?>" required>
                        </div>

                        <!-- description -->
                        <div class="col-md-12 form-group">
                            <label for="short_des_three">Description<span class="text-danger">*</span></label>
                            <input type="text" name="short_des_three" id="short_des_three" class="form-control" value="<?= $model_three['short_des_three'] ?>" required>
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
        <div class="row my-3">
            <div class="col-md-8">
                <h1 class="mb-3"><span class="text-primary"></span></h1>
            </div>
            <div class="col-md-4 text-right">
                <a href="<?= site_url('admin/solutions/product-features-three-create') ?>">
                    <button type="button" class="btn btn-xs btn-primary">Create &nbsp; <i data-feather="plus-square"></i></button>
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
                        <strong>Well Dthree!</strong>  <?php echo $success; ?>
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

            </div>     
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-sm" id="content_management_table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; foreach($models_three as $model):  ?>
                    
                        <tr>                        
                            <td><?= $i ?></td>
                            <td><b><?= date('d F, Y', strtotime($model->date)) ?></b> <br> <?= date('h:i:s A', strtotime($model->date)) ?> </td>
                            <td><?= $model->title?></td>
                            <td>
                                <span class="badge badge-<?= $model->status == 1 ? 'success' : 'warning'?>"><?= $model->status == 1 ? 'Active' : 'Inactive'?></span>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/solutions/product-features-three-edit/'.$model->id) ?>">
                                    <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                                <a href="<?= site_url('admin/solutions/product-features-three-delete/'.$model->id) ?>" class="delete-on-confirm">
                                    <button type="button" class="btn btn-outline-danger btn-xs btn-icon">
                                        <i data-feather="trash-2"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </div>   
        </div> 

    </div>



    
    <!-- section third -->








    <!-- section fourth -->
    <div class="container">
      <div class="row mt-5">
      <h1><span class="text-primary">Product Features Section Four</span></h1>
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
            <!-- <div data-label="Blog Configuration" class="df-example demo-table" > -->
                <form action="<?= site_url('admin/solutions/product-features-fourth-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                    <div class="row">
                        <!-- photo -->
                        <div class="col-md-12 form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/sub_menu/<?= $model_four['image'] ?>">
                        </div>
                        <!-- short title -->
                        <div class="col-md-6 form-group">
                            <label for="short_title_four">Short Title<span class="text-danger">*</span></label>
                            <input type="text" name="short_title_four" id="short_title_four" class="form-control" value="<?= $model_four['short_title_four'] ?>" required>
                        </div>
                        <!-- title -->
                        <div class="col-md-6 form-group">
                            <label for="title_four">Title<span class="text-danger">*</span></label>
                            <input type="text" name="title_four" id="title_four" class="form-control" value="<?= $model_four['title_four'] ?>" required>
                        </div>

            
                        <!-- description -->
                        <div class="col-md-12 form-group">
                            <label for="des_four">Description <span class="text-danger">*</span></label>
                            <textarea name="des_four" id="des_four" class="form-control editor" placeholder="Enter Description" cols="30" rows="3"><?= $model_four['des_four'] ?></textarea>
                        </div>
                      
                        <!-- button text-->
                        <div class="col-md-6 form-group">
                            <label for="button_text">Button Text<span class="text-danger">*</span></label>
                            <input type="text" name="button_text" id="button_text" class="form-control" value="<?= $model_four['button_text'] ?>" required>
                        </div>

                        <!-- button url-->
                        <div class="col-md-6 form-group">
                            <label for="button_url">Button Url<span class="text-danger">*</span></label>
                            <input type="text" name="button_url" id="button_url" class="form-control" value="<?= $model_four['button_url'] ?>" required>
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

    
    <!-- sectio fourth -->
    <!-- section five -->
    <div class="container">
     <div class="row mt-5">
      <h1><span class="text-primary">Product Features Section Five</span></h1>
        <div class="col-md-12">
            <?php
            $success = $this->session->flashdata('success');
            $warning = $this->session->flashdata('warning');
            if (isset($success)) {?>
                <div class="alert session_alert alert-outline alert-success" role="alert">
                    <strong>Well Dtwo!</strong>  <?php echo $success; ?>
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
            <!-- <div data-label="Blog Configuration" class="df-example demo-table" > -->
                <form action="<?= site_url('admin/solutions/product-features-fifth-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                    <div class="row">
                    

                        <!-- short title -->
                        <div class="col-md-6 form-group">
                            <label for="short_title_five">Short Title <span class="text-danger">*</span></label>
                            <input type="text" name="short_title_five" id="short_title_five" class="form-control" value="<?= $model_five['short_title_five'] ?>" required>
                        </div>
                        <!-- title -->
                        <div class="col-md-6 form-group">
                            <label for="title_five">Title<span class="text-danger">*</span></label>
                            <input type="text" name="title_five" id="title_five" class="form-control" value="<?= $model_five['title_five'] ?>" required>
                        </div>

                        <!-- description -->
                        <div class="col-md-12 form-group">
                            <label for="des_five">Description <span class="text-danger">*</span></label>
                            <textarea name="des_five" id="des_five" class="form-control" placeholder="Enter Description" cols="30" rows="3"><?= $model_five['des_five'] ?></textarea>
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
       <div class="container">
      <div class="row my-3">
            <div class="col-md-8">
                <h1 class="mb-3"><span class="text-primary"></span></h1>
            </div>
            <div class="col-md-4 text-right">
                <a href="<?= site_url('admin/solutions/product-features-five-create') ?>">
                    <button type="button" class="btn btn-xs btn-primary">Create &nbsp; <i data-feather="plus-square"></i></button>
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
                        <strong>Well Dtwo!</strong>  <?php echo $success; ?>
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

            </div>     
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-sm" id="content_management_table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; foreach($models_five as $model):  ?>
                    
                        <tr>                        
                            <td><?= $i ?></td>
                            <td><b><?= date('d F, Y', strtotime($model->date)) ?></b> <br> <?= date('h:i:s A', strtotime($model->date)) ?> </td>
                            <td><img style="width:100px;" src="<?= base_url() ?>uploads/sub_menu/<?= $model->image?>"></td>
                            <td>
                                <span class="badge badge-<?= $model->status == 1 ? 'success' : 'warning'?>"><?= $model->status == 1 ? 'Active' : 'Inactive'?></span>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/solutions/product-features-five-edit/'.$model->id) ?>">
                                    <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                                <a href="<?= site_url('admin/solutions/product-features-five-delete/'.$model->id) ?>" class="delete-on-confirm">
                                    <button type="button" class="btn btn-outline-danger btn-xs btn-icon">
                                        <i data-feather="trash-2"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </div>   
        </div> 

    </div>
    </div>
    
    
    
    
    
    
    
    
    <!-- section five -->

  
    </div>
    </div>
    </div>



<?php function pageRequiredScript(){ ?>
    <script>
        $('#content_management_table').DataTable({
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

        $('a.delete-on-confirm').click(function (event) {
            event.preventDefault();
            url = $(this).attr('href');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if(result.value
                )
                {
                    window.location.href = url;
                }
            })
            ;
        });
    </script>

<script>
    $('.editor').summernote({
             height:400
     });
    </script>
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