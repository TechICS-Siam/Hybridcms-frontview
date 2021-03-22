<div class="breadcrumb-line breadcrumb-line-light bg-white breadcrumb-line-component header-elements-md-inline mb-4">
    <div class="d-flex">
        <div class="breadcrumb">
            <a href="#" class="breadcrumb-item"><i class="icon-dots"></i> Update Footer Info</a>
        </div>

        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
    </div>

    <div class="header-elements d-none">
        <div class="breadcrumb">
            <a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
            <a href="#" class="breadcrumb-item"> Update Footer Info</a>
            <!--            <span class="breadcrumb-item active">Breadcrumbs</span>-->
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <!-- Grey background, left button spacing -->
            <?php foreach ($footer_info as $r) { ?>
            <form action="<?php echo site_url('footer/update');?>" method="post" enctype="multipart/form-data">
                    <div class="card">
                            <?php
                            $success = $this->session->flashdata('success');
                            $warning = $this->session->flashdata('warning');

                            if (isset($success)) {
                                ?>

                                <div class="alert alert-success alert-styled-left alert-arrow-left alert-dismissible">
                                    <span class="font-weight-semibold">Well done!</span> <?php echo $success; ?>
                                </div>

                                <?php
                            } elseif (isset($warning)) {
                                ?>

                                <div class="alert alert-warning alert-styled-left alert-dismissible">
                                    <span class="font-weight-semibold">Warning!</span> <?php echo $warning; ?>
                                </div>

                            <?php } ?>
                        <div class="card-header bg-white header-elements-inline">
                            <h6 class="card-title">Update Footer Info</h6>
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
                                        <label>Footer Address:</label>
                                            <textarea class="form-control ckeditor" name="address"> <?php echo $r['address']?> </textarea>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Footer Content:</label>
                                        <textarea class="form-control" name="content" rows="10"> <?php echo $r['content']?> </textarea>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn bg-blue ml-3 bg-teal-400">Update <i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            <?php } ?>
            <!-- /grey background, left button spacing -->
        </div>
    </div>
</div>