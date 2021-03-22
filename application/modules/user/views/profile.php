<ol class="breadcrumb df-breadcrumbs mg-b-10">
    <li class="breadcrumb-item">
        <a href="<?= base_url() ?>dashboard">Dashboard</a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">My Profile</li>
</ol>

<h1 class="df-title"><span class="text-primary">My Profile</span></h1>

<div class="row">
    <div class="col-md-12">
        <?php
        $success = $this->session->flashdata('success');
        $warning = $this->session->flashdata('warning');
        if (isset($success)) {?>
            <div class="alert alert-outline alert-success" role="alert">
                <strong>Well Done!</strong>  <?php echo $success; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <?php } elseif (isset($warning)) { ?>
            <div class="alert alert-outline alert-danger" role="alert">
                <strong>Warning!</strong>  <?php echo $warning; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span class="text-danger" aria-hidden="true">×</span>
                </button>
            </div>
        <?php } ?>
        <div data-label="Update My Profile Information" class="df-example demo-table">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cover Photo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Password</a>
                </li>
            </ul>
            <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form action="<?= site_url('admin/update-profile') ?>" method="post" id="profile_form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="first_name">First Name <span class="text-danger">*</span></label>
                                <input autocomplete="off" type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter Your First Name" value="<?= $user->first_name ?>" required>
                                <span class="text-danger"><?php printError('first_name') ?></span>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                <input autocomplete="off" type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter Your Last Name" value="<?= $user->last_name ?>" required>
                                <span class="text-danger"><?php printError('last_name') ?></span>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input autocomplete="off" type="text" name="phone" id="phone" class="form-control" placeholder="Enter Your Phone" value="<?= $user->phone ?>" required>
                                <span class="text-danger"><?php printError('phone') ?></span>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="username">Username <span class="text-danger">*</span></label>
                                <input autocomplete="off" type="text" name="username" id="username" class="form-control" placeholder="Enter Your Username" value="<?= $user->username ?>" required>
                                <span class="text-danger"><?php printError('username') ?></span>
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input autocomplete="off" type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email" value="<?= $user->email ?>" required>
                                <span class="text-danger"><?php printError('eamil') ?></span>
                            </div>

                            <div class="col-md-4 mx-auto ">
                                <button type="submit" class="btn btn-xs btn-block btn-primary pd-x-20">
                                    Update Information <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="<?= site_url('admin/update-profile-picture') ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="photo">Cover Photo </label>
                                <input data-default-file="<?= $user->photo == null ? 'https://via.placeholder.com/500' : base_url() . 'uploads/users/'. $user->photo ?>" type="file" name="photo" class="form-control dropify" id="photo">
                            </div>

                            <div class="col-md-4 mx-auto ">
                                <button type="submit" class="btn btn-xs btn-block btn-primary pd-x-20">
                                    Update Information <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <h6>Contact</h6>
                    <p>...</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php function pageRequiredScript(){ ?>
    <script type="text/javascript">
        $('#profile_form').parsley();
        $('.dropify').dropify();
    </script>
<?php } ?>