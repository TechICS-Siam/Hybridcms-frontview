<?php
$library = $this->db->from('library')->where('id', 1)->get()->row();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Favicon -->
	    <link rel="icon" href="<?= $library->favicon != '' ? base_url() .'uploads/'. $library->favicon : base_url(). 'assets/images/favicon.png' ?>">
        <title> <?= isset($page_title) ? $page_title : '' ?> | HYBRID CMS</title>

        <!-- DashForge CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/dashforge.auth.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/page.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/ionicons.min.css" >
        <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/jquery.dataTables.min.css" >
        <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/responsive.dataTables.min.css" >
        <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/select2.min.css" >
        <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/dashforge.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/dashforge.demo.css" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" integrity="sha512-pDpLmYKym2pnF0DNYDKxRnOk1wkM9fISpSOjt8kWFKQeDmBTjSnBZhTd41tXwh8+bRMoSaFsRnznZUiH9i3pxA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" />
    </head>
    