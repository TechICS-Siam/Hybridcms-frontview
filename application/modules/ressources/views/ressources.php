<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Blog info Configuration</li>
</ol>

<div class="row">
  <h1><span class="text-primary">Blog Info Configuration</span></h1>
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
            <form action="<?= site_url('admin/ressources/product-features-one-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">

                    <!-- title -->
                    <div class="col-md-12 form-group">
                        <label for="title_two">Title<span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" value="<?= $model['title'] ?>" required>
                    </div>
                    
                    <!-- description -->
                    <div class="col-md-12 form-group">
                        <label for="description">Description <span class="text-danger">*</span></label>
                        <textarea name="description" id="description" class="form-control" placeholder="Enter Description" cols="30" rows="3"><?= $model['description'] ?></textarea>
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
<div class="row mt-3">
    <div class="col-md-8">
        <h1 class="mb-3"><span class="text-primary">Blog</span></h1>
    </div>
    <div class="col-md-4 text-right">
        <a href="<?= site_url('admin/ressources/product-features-create') ?>">
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
        <div data-label="blog Configuration" class="df-example demo-table" >
            <!-- <form action="<?= site_url('admin/ressources/product-features') ?>" method="post" enctype="multipart/form-data" id="user_form"> 
            </form> -->
        </div>
        <div data-label="List of blog" class="df-example demo-table">
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
                    <?php $i = 1; foreach($models as $model):  ?>
                    
                        <tr>                        
                            <td><?= $i ?></td>
                            <td><b><?= date('d F, Y', strtotime($model->date)) ?></b> <br> <?= date('h:i:s A', strtotime($model->date)) ?> </td>
                            <td><img style="width:100px;" src="<?= base_url() ?>uploads/sub_menu/<?= $model->image?>" alt="<?= $model->alt_tag?>" ></td>
                            <td>
                                <span class="badge badge-<?= $model->status == 1 ? 'success' : 'warning'?>"><?= $model->status == 1 ? 'Active' : 'Inactive'?></span>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/website-pages/blog-edit/'.$model->id) ?>">
                                    <button type="button" class="btn btn-outline-primary btn-xs btn-icon">
                                        <i data-feather="edit"></i>
                                    </button>
                                </a>
                                <a href="<?= site_url('admin/website-pages/blog-delete/'.$model->id) ?>" class="delete-on-confirm">
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
<?php } ?>