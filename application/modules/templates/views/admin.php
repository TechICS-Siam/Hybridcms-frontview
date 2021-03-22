<?php  $this->load->view('link/template/header_link'); ?>
<body class="page-profile">
    <?php 
        $segmentOne = $this->uri->segment(1);
        $this->load->view('link/template/header'); 
        $this->load->view('link/template/left_nav');
    ?>

    <div class="content content-components">
        <div class="container">
            <?php if (isset($view_file)) {
                $this->load->view($view_module . '/' . $view_file);
            } ?>

            <?php $this->load->view('link/template/footer'); ?>

        </div>
    </div>

    <?php $this->load->view('link/template/footer_link'); ?>
</body>
</html>