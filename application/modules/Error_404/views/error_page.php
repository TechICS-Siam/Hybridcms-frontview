<?php $this->load->view('link/template/header_link'); ?>

<body>

<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Container -->
            <div class="flex-fill">

                <!-- Error title -->
                <div class="text-center mb-3 error">
                    <h1 class="error-title">404</h1>
                    <h5>Oops, an error has occurred. Page not found !</h5>
                </div>
                <!-- /error title -->


                <!-- Error content -->
                <div class="row">
                    <div class="col-xl-4 offset-xl-4 col-md-8 offset-md-2">

                        <!-- Buttons -->
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-sm-4">
                                <a href="<?php echo site_url('dashboard'); ?>" style="color: #ffffff !important;" class="btn btn-primary btn-block btn-block bg-blue"><i class="icon-home2 mr-2"></i> Back to Home</a>
                            </div>

                        </div>
                        <!-- /buttons -->

                    </div>
                </div>
                <!-- /error wrapper -->

            </div>
            <!-- /container -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
        <?php $this->load->view('link/template/footer'); ?>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->
<?php $this->load->view('link/template/footer_link'); ?>
</body>

</html>
