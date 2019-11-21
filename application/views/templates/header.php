<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $judul ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/vendors/bootstrap/dist/css/spacing.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>asset/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>asset/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?php echo base_url('teacher'); ?>" class="site_title text-center"><span><img
                                    src="<?php echo base_url(); ?>asset/image/logo.png" width="120" alt=""></span></a>
                    </div>

                    <!-- menu profile quick info -->

                    <div class="profile clearfix">
                        <div class="text-center">
                            <img src="<?php echo base_url('asset/image/') . $user['image']; ?>" alt="..."
                                class="img-circle profile_img" alt="..." width="100">
                            <div class="profile_info text-center">
                                <h2><?php echo $user['nama']; ?></h2>
                                <span>MAN Yogyakarta 2</span>
                            </div>
                        </div>
                    </div>


                    <!-- /menu profile quick info -->

                    <br />