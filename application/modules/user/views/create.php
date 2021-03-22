<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?= site_url('admin/users') ?>">User</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
</ol>

<div class="row mb-3">
    <div class="col-md-8">
        <h1><span class="text-primary">Create New User</span></h1>
    </div>
    <div class="col-md-4 text-right">
        <a href="<?= site_url('admin/users') ?>">
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
        <div data-label="Create a New User" class="df-example demo-table">
            <form action="<?= site_url('admin/user/store') ?>" method="post" id="user_form">
                <div class="row">
                    <!-- First Name -->
                    <div class="col-md-6 form-group">
                        <label for="first_name">First Name <span class="text-danger">*</span></label>
                        <input type="text" autocomplete="off" class="form-control" name="first_name" id="first_name" value="" required placeholder="Enter User First Name">
                        <span class="text-danger"><?php printError('first_name') ?></span>
                    </div>

                    <!-- Last Name -->
                    <div class="col-md-6 form-group">
                        <label for="last_name">Last Name <span class="text-danger">*</span></label>
                        <input type="text" autocomplete="off" class="form-control" name="last_name" id="last_name" value="" required placeholder="Enter User Last Name">
                        <span class="text-danger"><?php printError('last_name') ?></span>
                    </div>

                    <!-- Phone -->
                    <div class="col-md-6 form-group">
                        <label for="phone">Phone <span class="text-danger">*</span></label>
                        <input type="text" autocomplete="off" class="form-control" name="phone" id="phone" value="" required placeholder="Enter User Phone">
                        <span class="text-danger"><?php printError('phone') ?></span>
                    </div>

                    <!-- Username -->
                    <div class="col-md-6 form-group">
                        <label for="username">Username <span class="text-danger">*</span></label>
                        <input type="text" autocomplete="off" class="form-control" name="username" id="username" value="" required placeholder="Enter User Username">
                        <span class="text-danger"><?php printError('username') ?></span>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 form-group">
                        <label for="email">Email <span class="text-danger">*</span></label>
                        <input type="email" autocomplete="off" class="form-control" name="email" id="email" value="" required placeholder="Enter User Email">
                        <span class="text-danger"><?php printError('email') ?></span>
                    </div>

                    <!-- Password -->
                    <div class="col-md-6 form-group">
                        <label for="password">Password <span class="text-danger">*</span></label>
                        <input type="password" autocomplete="off" class="form-control" name="password" id="password" value="" required placeholder="Enter User Password">
                        <span class="text-danger"><?php printError('password') ?></span>
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
    </script>
<?php } ?>