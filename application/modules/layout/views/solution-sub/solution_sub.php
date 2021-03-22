<!DOCTYPE html>
<html lang="en">

    <head>

        <?php $this->load->view('layout/include/header_link.php'); ?>

    </head>

    <body>

        <?php $this->load->view('layout/include/header.php'); ?>
        <?php $this->load->view('layout/include/body_fst_sec.php'); ?>
        
        <?php include 'solution_sub_body.php'; ?>

        <?php $this->load->view('layout/include/footer.php'); ?>

        <?php $this->load->view('layout/include/footer_link.php'); ?>

    </body>
    
    
</html>