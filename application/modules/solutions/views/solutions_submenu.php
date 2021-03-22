<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Solutions Menu Configuration</li>
</ol>

<div class="row">
  <h1><span class="text-primary">Solutions Menu Configuration</span></h1>
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
            <form action="<?= site_url('admin/solutions/solutions-submenu-update') ?>" method="post" enctype="multipart/form-data" id="user_form">
                <div class="row">

                    <!-- title -->
                    <div class="col-md-12 form-group">
                        <label for="servs_title">Service Title<span class="text-danger">*</span></label>
                        <input type="text" name="servs_title" id="servs_title" class="form-control" value="<?= $model['servs_title'] ?>" required>
                    </div>
                    
                    <!-- Short description -->
                    <div class="col-md-12 form-group">
                        <label for="short_des">Short Description <span class="text-danger">*</span></label>
                        <textarea name="short_des" id="short_des" class="form-control" placeholder="Enter Description" cols="30" rows="3"><?= $model['short_des'] ?></textarea>
                    </div>
                    
                    <!-- CRM Title -->
                    <div class="col-md-12 form-group">
                        <label for="title">CRM Title<span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" value="<?= $model['title'] ?>" required>
                    </div>
                    
                    <!-- Button Text -->
                    <div class="col-md-6 form-group">
                        <label for="button_text">Button Text<span class="text-danger">*</span></label>
                        <input type="text" name="button_text" id="button_text" class="form-control" value="<?= $model['button_text'] ?>" required>
                     </div>
                    <!-- Button Url -->
                    <div class="col-md-6 form-group">
                        <label for="button_url">Button Url<span class="text-danger">*</span></label>
                        <input type="text" name="button_url" id="button_url" class="form-control" value="<?= $model['button_url'] ?>" required>
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