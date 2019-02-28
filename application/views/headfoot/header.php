<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Administrator</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
        <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
        <meta name="author" content="codedthemes">
        <!-- Favicon icon -->
        <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.ico" type="image/x-icon">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap/css/bootstrap.min.css">
        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icon/themify-icons/themify-icons.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icon/font-awesome/css/font-awesome.min.css">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icon/icofont/css/icofont.css">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/jquery.mCustomScrollbar.css">
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.maskMoney.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/sweetalert2.all.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
        <script src="<?php echo base_url('assets/ckfinder/ckfinder.js') ?>"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <style>
        .pointer {cursor: pointer;}
    </style>
    <body>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="loader-track">
                <div class="loader-bar"></div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">

                <nav class="navbar header-navbar pcoded-header">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo">
                            <a class="mobile-menu" id="mobile-collapse" href="#!">
                                <i class="ti-menu"></i>
                            </a>
                            <a href="index.html">
                                <img class="img-fluid" src="<?php echo base_url() ?>assets/images/logo.png" alt="Theme-Logo" />
                            </a>
                            <a class="mobile-options">
                                <i class="ti-more"></i>
                            </a>
                        </div>

                        <div class="navbar-container container-fluid">
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                </li>
                            </ul>
                            <ul class="nav-right">

                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        <img src="<?php echo base_url() ?>assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span><?php echo $this->session->userdata('nama') ?></span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        <li onclick="window.location.assign('<?php echo site_url('setting/settings/!#settings') ?>')">
                                            <a>
                                                <i class="ti-layout-sidebar-left"></i> Pengaturan Akun
                                            </a>
                                        </li>
                                        <li onclick="window.location.assign('<?php echo site_url('infront/off') ?>')">
                                            <a>
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <nav class="pcoded-navbar">
                            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                            <div class="pcoded-inner-navbar main-menu">

                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Kontent</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li id="kelas" class="">
                                        <a href="<?php echo site_url('dash/add_class/!#kelas') ?>">
                                            <span class="pcoded-micon"><i class="ti-home"></i></span>
                                            <span class="pcoded-mtext">Kelas</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li id="profile" class="">
                                        <a href="<?php echo site_url('dash/add_profile/!#profile') ?>">
                                            <span class="pcoded-micon"><i class="ti-home"></i></span>
                                            <span class="pcoded-mtext">Profile</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li id="news" class=" ">
                                        <a href="<?php echo site_url('dash/add_news_blog/!#news') ?>">
                                            <span class="pcoded-micon"><i class="fa fa-newspaper-o"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">News & Blog</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li id="team" class=" ">
                                        <a href="<?php echo site_url('dash/add_team/!#team') ?>">
                                            <span class="pcoded-micon"><i class="ti-target"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Team</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li id="testimoni" class=" ">
                                        <a href="<?php echo site_url('dash/add_testimoni/!#testimoni') ?>">
                                            <span class="pcoded-micon"><i class="ti-comments"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Testimoni</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li id="sidebar" class=" ">
                                        <a href="<?php echo site_url('dash/add_side_bar/!#sidebar') ?>">
                                            <span class="pcoded-micon"><i class="ti-layout-sidebar-right"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Sidebar Infor</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li id="video" class=" ">
                                        <a href="!#video">
                                            <span class="pcoded-micon"><i class="ti-video-camera"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Video</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li id="slide" class=" ">
                                        <a href="!#slide">
                                            <span class="pcoded-micon"><i class="ti-layout-slider-alt"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Slide show</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Gallery & Portofolio</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li id="gallery">
                                        <a href="<?php echo site_url('dash/add_gallery/!#gallery') ?>">
                                            <span class="pcoded-micon"><i class="fa fa-photo"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Gallery</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li id="portofolio">
                                        <a href="<?php echo site_url('dash/add_portofolio/!#portofolio') ?>">
                                            <span class="pcoded-micon"><i class="fa fa-codepen"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Project & Portofolio</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                </ul>

                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Pengaturan</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-pin-alt"></i></span>
                                            <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Kategori</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li id="tambah-kat" class=" ">
                                                <a class="pointer">
                                                    <span class="pcoded-micon"><i class="ti-plus"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tambah Kategori</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li id="edit-kat" class=" ">
                                                <a href="breadcrumb.html">
                                                    <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Daftar kategori</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                            <li id="edit-kat" class=" ">
                                                <a href="breadcrumb.html">
                                                    <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Edit kategori</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="posisi">
                                        <a class="pointer" id="tambah-posisi">
                                            <span class="pcoded-micon"><i class="ti-layout-grid2"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Tambah Posisi</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </nav>
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">

                                        <div class="page-body">

                                            <script>
                                                var url = window.location.href;
                                                var id = url.split('!');
                                                var getActive = id[1];
                                                $(getActive).addClass("active");
                                                $(getActive).css("active");

                                                $("#tambah-kat").click(function () {
                                                    $('.tambah-modal').modal('show');
                                                });
                                                $("#tambah-posisi").click(function () {
                                                    $('.tambah-posisi').modal('show');
                                                });
                                            </script>
