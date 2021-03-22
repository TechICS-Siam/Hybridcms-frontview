<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Investor Relation Info Configuration</li>
</ol>

<div class="row">
  <h1><span class="text-primary">Investor Relation Info Configuration</span></h1>
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
            <form action="<?= site_url('admin/industries/investor-relation-top-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">
                    <!-- photo -->
                    <div class="col-md-12 form-group">
                        <label for="photo">Interim Photo</label>
                        <input type="file" name="image" id="image" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/sub_menu/<?= $model['image'] ?>">
                    </div>
                    <!-- heading -->
                    <div class="col-md-12 form-group">
                        <label for="heading">Heading<span class="text-danger">*</span></label>
                        <input type="text" name="heading" id="heading" class="form-control" value="<?= $model['heading'] ?>" required>
                    </div>
                    
                    <!-- short_des -->
                    <div class="col-md-12 form-group">
                        <label for="short_des">Short Description<span class="text-danger">*</span></label>
                        <textarea name="short_des" id="short_des" class="form-control" placeholder="Enter short_des" cols="30" rows="3"><?= $model['short_des'] ?></textarea>
                    </div>
                    <!-- button_one -->
                    <div class="col-md-3 form-group">
                        <label for="button_one">First Tag<span class="text-danger">*</span></label>
                        <input type="text" name="button_one" id="button_one" class="form-control" value="<?= $model['button_one'] ?>" required>
                    </div>

                  
                    <!-- button_one_url -->
                    <div class="col-md-3 form-group">
                        <label for="button_one_url">First Tag Url<span class="text-danger">*</span></label>
                        <input type="text" name="button_one_url" id="button_one_url" class="form-control" value="<?= $model['button_one_url'] ?>" required>
                    </div>

                    <!-- button_two -->
                    <div class="col-md-3 form-group">
                        <label for="button_two">Second Tag<span class="text-danger">*</span></label>
                        <input type="text" name="button_two" id="button_two" class="form-control" value="<?= $model['button_two'] ?>" required>
                    </div>

                    <!-- button_two_url -->
                    <div class="col-md-3 form-group">
                        <label for="button_two_url">Second Tag Url<span class="text-danger">*</span></label>
                        <input type="text" name="button_two_url" id="button_two_url" class="form-control" value="<?= $model['button_two_url'] ?>" required>
                    </div>

                    <!-- button_three -->
                    <div class="col-md-3 form-group">
                        <label for="button_three">Third Tag<span class="text-danger">*</span></label>
                        <input type="text" name="button_three" id="button_three" class="form-control" value="<?= $model['button_three'] ?>" required>
                    </div>

                    <!-- button_three_url -->
                    <div class="col-md-3 form-group">
                        <label for="button_three_url">Third Tag Url<span class="text-danger">*</span></label>
                        <input type="text" name="button_three_url" id="button_three_url" class="form-control" value="<?= $model['button_three_url'] ?>" required>
                    </div>

                    <!-- button_four -->
                    <div class="col-md-3 form-group">
                        <label for="button_four">Fourth Tag<span class="text-danger">*</span></label>
                        <input type="text" name="button_four" id="button_four" class="form-control" value="<?= $model['button_four'] ?>" required>
                    </div>

                    <!-- button_four_url -->
                    <div class="col-md-3 form-group">
                        <label for="button_four_url">Fourth Tag Url<span class="text-danger">*</span></label>
                        <input type="text" name="button_four_url" id="button_four_url" class="form-control" value="<?= $model['button_four_url'] ?>" required>
                    </div>


                    <!-- project_title -->
                    <div class="col-md-6 form-group">
                        <label for="project_title">Project Title<span class="text-danger">*</span></label>
                        <input type="text" name="project_title" id="project_title" class="form-control" value="<?= $model['project_title'] ?>" required>
                    </div>

                    <!-- project_short_des -->
                    <div class="col-md-6 form-group">
                        <label for="project_short_des">Project Description<span class="text-danger">*</span></label>
                        <input type="text" name="project_short_des" id="project_short_des" class="form-control" value="<?= $model['project_short_des'] ?>" required>
                    </div>

                    <!-- Press Release -->
                    <div class="col-md-6 form-group">
                        <label for="file_one">Press Release</label>
                        <input type="file" name="file_one" id="file_one" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/sub_menu/<?= $model['file_one'] ?>">
                    </div>

                    <!-- Presentation -->
                    <div class="col-md-6 form-group">
                        <label for="file_two">Presentation</label>
                        <input type="file" name="file_two" id="file_two" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/sub_menu/<?= $model['file_two'] ?>">
                    </div>

                    <!-- Booklet -->
                    <div class="col-md-6 form-group">
                        <label for="file_three">Booklet</label>
                        <input type="file" name="file_three" id="file_three" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/sub_menu/<?= $model['file_three'] ?>">
                    </div>

                    <!-- Transcript -->
                    <div class="col-md-6 form-group">
                        <label for="file_four">Transcript</label>
                        <input type="file" name="file_four" id="file_four" class="form-control dropify" data-default-file="<?= base_url() ?>uploads/sub_menu/<?= $model['file_four'] ?>">
                    </div>

                    <!-- middle_des -->
                    <div class="col-md-12 form-group">
                        <label for="middle_des">Middle Description<span class="text-danger">*</span></label>
                        <textarea name="middle_des" id="middle_des" class="form-control editor" placeholder="Enter middle_des" cols="30" rows="3"><?= $model['middle_des'] ?></textarea>
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

<!-- investor relation section one -->

<div class="container my-4">
<div class="row">
  <h1><span class="text-primary">Investor Relation Second Section</span></h1>
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
        <div data-label="Section Two Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/industries/investor-relation-first-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">
                    <!-- title_two -->
                    <div class="col-md-12 form-group">
                        <label for="title_two">Title<span class="text-danger">*</span></label>
                        <input type="text" name="title_two" id="title_two" class="form-control" value="<?= $model_two['title_two'] ?>" required>
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
        <a href="<?= site_url('admin/industries/investor-relation-one-create') ?>">
            <button type="button" class="btn btn-xs btn-primary">Create &nbsp; <i data-feather="plus-square"></i></button>
        </a>
    </div>
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
        <div data-label="blog Configuration" class="df-example demo-table" >
           
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
                                <a href="<?= site_url('admin/industries/investor-relation-one-edit/'.$model->id) ?>">
                                    <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                                <a href="<?= site_url('admin/industries/investor-relation-one-delete/'.$model->id) ?>" class="delete-on-confirm">
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
<!-- investor relation section one -->

<!-- investor relation section two -->

<div class="container my-4">
<div class="row">
  <h1><span class="text-primary">Investor Relation Third Section</span></h1>
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
        <div data-label="Section Two Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/industries/investor-relation-second-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">
                    <!-- title_two -->
                    <div class="col-md-12 form-group">
                        <label for="title_three">Title<span class="text-danger">*</span></label>
                        <input type="text" name="title_three" id="title_three" class="form-control" value="<?= $model_three['title_three'] ?>" required>
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
        <a href="<?= site_url('admin/industries/investor-relation-two-create') ?>">
            <button type="button" class="btn btn-xs btn-primary">Create &nbsp; <i data-feather="plus-square"></i></button>
        </a>
    </div>
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
        <div data-label="blog Configuration" class="df-example demo-table" >
           
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-sm" id="content_management_table_o">
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
                                <a href="<?= site_url('admin/industries/investor-relation-two-edit/'.$model->id) ?>">
                                    <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                                <a href="<?= site_url('admin/industries/investor-relation-two-delete/'.$model->id) ?>" class="delete-on-confirm">
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

<!-- investor relation section two -->


<!-- investor relation section three -->

<div class="container my-4">
<div class="row">
  <h1><span class="text-primary">Investor Relation Fourth Section</span></h1>
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
        <div data-label="Section Two Configuration" class="df-example demo-table" >
            <form action="<?= site_url('admin/industries/investor-relation-third-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">
                    <!-- title_four -->
                    <div class="col-md-12 form-group">
                        <label for="title_four">Title<span class="text-danger">*</span></label>
                        <input type="text" name="title_four" id="title_four" class="form-control" value="<?= $model_four['title_four'] ?>" required>
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
        <a href="<?= site_url('admin/industries/investor-relation-three-create') ?>">
            <button type="button" class="btn btn-xs btn-primary">Create &nbsp; <i data-feather="plus-square"></i></button>
        </a>
    </div>
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
        <div data-label="blog Configuration" class="df-example demo-table" >
           
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-sm" id="content_management_table_t">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Tag</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; foreach($models_three as $model):  ?>
                    
                        <tr>                        
                            <td><?= $i ?></td>
                            <td><b><?= date('d F, Y', strtotime($model->date)) ?></b> <br> <?= date('h:i:s A', strtotime($model->date)) ?> </td>
                            <td><?= $model->tag?></td>
                            <td>
                                <span class="badge badge-<?= $model->status == 1 ? 'success' : 'warning'?>"><?= $model->status == 1 ? 'Active' : 'Inactive'?></span>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/industries/investor-relation-three-edit/'.$model->id) ?>">
                                    <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                                <a href="<?= site_url('admin/industries/investor-relation-three-delete/'.$model->id) ?>" class="delete-on-confirm">
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

<!-- investor relation section three -->
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
        $('#content_management_table_o').DataTable({
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
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    </script>
<?php } ?>