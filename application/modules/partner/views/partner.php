<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Partner Configuration</li>
</ol>
<!-- partner section one -->
<div class="row">
  <h1><span class="text-primary">Partner Section One Configuration</span></h1>
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
        <div data-label="Blog Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/partner/partner-first-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">

                    <!-- title -->
                    <div class="col-md-12 form-group">
                        <label for="title_one">Title<span class="text-danger">*</span></label>
                        <input type="text" name="title_one" id="title_one" class="form-control" value="<?= $model_first['title_one'] ?>" required>
                    </div>
                    
                    <!-- description -->
                    <div class="col-md-12 form-group">
                        <label for="des_one">Description<span class="text-danger">*</span></label>
                        <textarea name="des_one" id="description" class="form-control" placeholder="Enter Description" cols="30" rows="3"><?= $model_first['des_one'] ?></textarea>
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
    <div class="col-md-12 text-right">
        <a href="<?= site_url('admin/partner/partner-one-create') ?>">
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
        <div data-label="partner section one Configuration" class="df-example demo-table" > 
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
                    <?php $i = 1; foreach($models_one as $model):  ?>
                        <tr>
                        
                            <td><?= $i ?></td>
                            <td><b><?= date('d F, Y', strtotime($model->date)) ?></b> <br> <?= date('h:i:s A', strtotime($model->date)) ?> </td>
                            <td><img style="width:100px;" src="<?= base_url() ?>uploads/sub_menu/<?= $model->image?>" alt="<?= $model->title?>" ></td>
                            <td>
                                <span class="badge badge-<?= $model->status == 1 ? 'success' : 'warning'?>"><?= $model->status == 1 ? 'Active' : 'Inactive'?></span>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/partner/partner-one-edit/'.$model->id) ?>">
                                    <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                                <a href="<?= site_url('admin/partner/partner-one-delete/'.$model->id) ?>" class="delete-on-confirm">
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

<!-- partner setion one -->

<!-- partner section two -->
<div class="container">
<div class="row">
  <h1><span class="text-primary">Partner Section Two Configuration</span></h1>
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
        <div data-label="Blog Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/partner/partner-second-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">

                    <!-- title -->
                    <div class="col-md-12 form-group">
                        <label for="title_two">Title<span class="text-danger">*</span></label>
                        <input type="text" name="title_two" id="title_two" class="form-control" value="<?= $model_second['title_two'] ?>" required>
                    </div>
                    
                    <!-- description -->
                    <div class="col-md-12 form-group">
                        <label for="description">Description <span class="text-danger">*</span></label>
                        <textarea name="des_two" id="des_two" class="form-control" placeholder="Enter Description" cols="30" rows="3"><?= $model_second['des_two'] ?></textarea>
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
    <div class="col-md-12 text-right">
        <a href="<?= site_url('admin/partner/partner-two-create') ?>">
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
        <div data-label="partner section two Configuration" class="df-example demo-table" > 
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-sm" id="content_management_table_t">
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
                    <?php $i = 1; foreach($models_two as $model):  ?>
                        <tr>
                        
                            <td><?= $i ?></td>
                            <td><b><?= date('d F, Y', strtotime($model->date)) ?></b> <br> <?= date('h:i:s A', strtotime($model->date)) ?> </td>
                            <td><img style="width:100px;" src="<?= base_url() ?>uploads/sub_menu/<?= $model->image?>" alt="<?= $model->title?>" ></td>
                            <td>
                                <span class="badge badge-<?= $model->status == 1 ? 'success' : 'warning'?>"><?= $model->status == 1 ? 'Active' : 'Inactive'?></span>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/partner/partner-two-edit/'.$model->id) ?>">
                                    <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                                <a href="<?= site_url('admin/partner/partner-two-delete/'.$model->id) ?>" class="delete-on-confirm">
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

</div>
<!-- partner section two -->

<!-- partner section three -->
<div class="container">
<div class="row">
  <h1><span class="text-primary">Partner Section Three Configuration</span></h1>
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
        <div data-label="Blog Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/partner/partner-third-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">

                    <!-- title -->
                    <div class="col-md-12 form-group">
                        <label for="title_three">Title<span class="text-danger">*</span></label>
                        <input type="text" name="title_three" id="title_three" class="form-control" value="<?= $model_third['title_three'] ?>" required>
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
    <div class="col-md-12 text-right">
        <a href="<?= site_url('admin/partner/partner-three-create') ?>">
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
        <div data-label="partner section three Configuration" class="df-example demo-table" > 
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-sm" id="content_management_table_th">
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
                    <?php $i = 1; foreach($models_three as $model):  ?>
                        <tr>
                        
                            <td><?= $i ?></td>
                            <td><b><?= date('d F, Y', strtotime($model->date)) ?></b> <br> <?= date('h:i:s A', strtotime($model->date)) ?> </td>
                            <td><img style="width:100px;" src="<?= base_url() ?>uploads/sub_menu/<?= $model->image?>" alt="<?= $model->dp_name?>" ></td>
                            <td>
                                <span class="badge badge-<?= $model->status == 1 ? 'success' : 'warning'?>"><?= $model->status == 1 ? 'Active' : 'Inactive'?></span>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/partner/partner-three-edit/'.$model->id) ?>">
                                    <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                                <a href="<?= site_url('admin/partner/partner-three-delete/'.$model->id) ?>" class="delete-on-confirm">
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

</div>
<!-- partner section three -->

<!-- partner section four -->
<div class="container">
<div class="row">
  <h1><span class="text-primary">Partner Section Four Configuration</span></h1>
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
        <div data-label="Blog Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/partner/partner-fourth-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">

                    <!-- title -->
                    <div class="col-md-12 form-group">
                        <label for="title_four">Title<span class="text-danger">*</span></label>
                        <input type="text" name="title_four" id="title_four" class="form-control" value="<?= $model_fourth['title_four'] ?>" required>
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
    <div class="col-md-12 text-right">
        <a href="<?= site_url('admin/partner/partner-four-create') ?>">
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
        <div data-label="partner section four Configuration" class="df-example demo-table" > 
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-sm" id="content_management_table_f">
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
                    <?php $i = 1; foreach($models_four as $model):  ?>
                        <tr>
                        
                            <td><?= $i ?></td>
                            <td><b><?= date('d F, Y', strtotime($model->date)) ?></b> <br> <?= date('h:i:s A', strtotime($model->date)) ?> </td>
                            <td><img style="width:100px;" src="<?= base_url() ?>uploads/sub_menu/<?= $model->image?>" alt="<?= $model->rating?>" ></td>
                            <td>
                                <span class="badge badge-<?= $model->status == 1 ? 'success' : 'warning'?>"><?= $model->status == 1 ? 'Active' : 'Inactive'?></span>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/partner/partner-four-edit/'.$model->id) ?>">
                                    <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                                <a href="<?= site_url('admin/partner/partner-four-delete/'.$model->id) ?>" class="delete-on-confirm">
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

</div>
<!-- partner section four -->
<!-- partner section five -->
<div class="container">
<div class="row">
  <h1><span class="text-primary">Partner Section five Configuration</span></h1>
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
        <div data-label="Blog Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/partner/partner-fifth-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">

                    <!-- title -->
                    <div class="col-md-12 form-group">
                        <label for="title_five">Title<span class="text-danger">*</span></label>
                        <input type="text" name="title_five" id="title_five" class="form-control" value="<?= $model_fifth['title_five'] ?>" required>
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
    <div class="col-md-12 text-right">
        <a href="<?= site_url('admin/partner/partner-five-create') ?>">
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
        <div data-label="partner section five Configuration" class="df-example demo-table" > 
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-sm" id="content_management_table_fv">
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
                            <td><img style="width:100px;" src="<?= base_url() ?>uploads/sub_menu/<?= $model->image?>" alt="<?= $model->status?>" ></td>
                            <td>
                                <span class="badge badge-<?= $model->status == 1 ? 'success' : 'warning'?>"><?= $model->status == 1 ? 'Active' : 'Inactive'?></span>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/partner/partner-five-edit/'.$model->id) ?>">
                                    <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                                <a href="<?= site_url('admin/partner/partner-five-delete/'.$model->id) ?>" class="delete-on-confirm">
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

</div>
<!-- partner section five -->


<!-- partner section six -->
<div class="container">
<div class="row">
  <h1><span class="text-primary">Partner Section Six Configuration</span></h1>
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
        <div data-label="Blog Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/partner/partner-sixth-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">

                    <!-- title -->
                    <div class="col-md-12 form-group">
                        <label for="title_six">Title<span class="text-danger">*</span></label>
                        <input type="text" name="title_six" id="title_six" class="form-control" value="<?= $model_sixth['title_six'] ?>" required>
                    </div>
                    
                    <!-- button one -->
                    <div class="col-md-3 form-group">
                        <label for="button_text_one">Button Text One<span class="text-danger">*</span></label>
                        <input type="text" name="button_text_one" id="button_text_one" class="form-control" value="<?= $model_sixth['button_text_one'] ?>" required>
                    </div>
                    
                    <!-- button one url -->
                    <div class="col-md-3 form-group">
                        <label for="button_url_one">Button Url One<span class="text-danger">*</span></label>
                        <input type="text" name="button_url_one" id="button_url_one" class="form-control" value="<?= $model_sixth['button_url_one'] ?>" required>
                    </div>
                    
                    <!-- button_text_one -->
                    <div class="col-md-3 form-group">
                        <label for="button_text_two">Button Text Two<span class="text-danger">*</span></label>
                        <input type="text" name="button_text_two" id="button_text_two" class="form-control" value="<?= $model_sixth['button_text_two'] ?>" required>
                    </div>
                    
                    <!-- button two url -->
                    <div class="col-md-3 form-group">
                        <label for="button_url_two">Button Url Two<span class="text-danger">*</span></label>
                        <input type="text" name="button_url_two" id="button_text_two" class="form-control" value="<?= $model_sixth['button_url_two'] ?>" required>
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
    <div class="col-md-12 text-right">
        <a href="<?= site_url('admin/partner/partner-six-create') ?>">
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
        <div data-label="partner section six Configuration" class="df-example demo-table" > 
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-sm" id="content_management_table_s">
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
                    <?php $i = 1; foreach($models_six as $model):  ?>
                        <tr>
                        
                            <td><?= $i ?></td>
                            <td><b><?= date('d F, Y', strtotime($model->date)) ?></b> <br> <?= date('h:i:s A', strtotime($model->date)) ?> </td>
                            <td><img style="width:100px;" src="<?= base_url() ?>uploads/sub_menu/<?= $model->image?>" alt="<?= $model->title?>" ></td>
                            <td>
                                <span class="badge badge-<?= $model->status == 1 ? 'success' : 'warning'?>"><?= $model->status == 1 ? 'Active' : 'Inactive'?></span>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/partner/partner-six-edit/'.$model->id) ?>">
                                    <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                                <a href="<?= site_url('admin/partner/partner-six-delete/'.$model->id) ?>" class="delete-on-confirm">
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

</div>
<!-- partner section six -->


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
        $('#content_management_table_t').DataTable({
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
        $('#content_management_table_th').DataTable({
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
        $('#content_management_table_f').DataTable({
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
        $('#content_management_table_fv').DataTable({
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
        $('#content_management_table_s').DataTable({
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
<?php } ?>