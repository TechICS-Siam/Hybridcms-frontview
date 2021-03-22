<div class="breadcrumb-line breadcrumb-line-light bg-white breadcrumb-line-component header-elements-md-inline mb-4">
    <div class="d-flex">
        <div class="breadcrumb">
            <a href="#" class="breadcrumb-item"><i class="icon-dots"></i> User Settings</a>
        </div>

        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>

    <div class="header-elements d-none">
        <div class="breadcrumb">
            <a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
            <a href="#" class="breadcrumb-item">Update User Settings</a>
            <!--            <span class="breadcrumb-item active">Breadcrumbs</span>-->
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <!-- Grey background, left button spacing -->
            <form action="<?php echo site_url('user/update_password');?>" method="post">

                <div class="card">
                    <?php
                        $success = $this->session->flashdata('success');
                        $warning = $this->session->flashdata('warning');

                        if (isset($success))
                            {?>

                            <div class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible">
                                <span class="font-weight-semibold">Well done!</span> <?php echo $success; ?>
                            </div>

                            <?php }
                        elseif (isset($warning))
                            {?>

                            <div class="alert alert-warning alert-styled-left alert-dismissible">
                                <span class="font-weight-semibold">Warning!</span> <?php echo $warning; ?>
                            </div>

                    <?php } ?>

                    <div class="card-header bg-white header-elements-inline">
                        <h6 class="card-title">Update User Settings</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Old Password:</label>
                                    <input  type="text" class="form-control" placeholder="Old Password" name="old_password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>New Password:</label>
                                    <input type="password" class="form-control" placeholder="New Password" name="new_password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Confirm Password:</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="reset" class="btn btn-light">Cancel</button>
                            <button type="submit" class="btn bg-blue ml-3 bg-teal-400">Update <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </div>


                </div>
            </form>

        </div>
    </div>
</div>