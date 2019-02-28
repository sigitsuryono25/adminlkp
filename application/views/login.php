<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Login Administrator</title>
        <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
          <![endif]-->
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Favicon icon -->
        <link rel="icon" href="<?php echo base_url() ?>assets/images/favicon.ico" type="image/x-icon">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap/css/bootstrap.min.css">
        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icon/themify-icons/themify-icons.css">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/icon/icofont/css/icofont.css">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
    </head>

    <body class="fix-menu">
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="loader-track">
                <div class="loader-bar"></div>
            </div>
        </div>
        <!-- Pre-loader end -->

        <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
            <!-- Container-fluid starts -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Authentication card start -->
                        <div class="login-card card-block auth-body mr-auto ml-auto">
                            <form class="md-float-material" id="form-login">
                                <div class="auth-box">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-left txt-primary">Masuk</h3>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="input-group">
                                        <input type="text" name="username" class="form-control" placeholder="Your Email Address">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                        <span class="md-line"></span>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="button" id="login-btn" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- end of form -->
                        </div>
                        <!-- Authentication card end -->
                    </div>
                    <!-- end of col-sm-12 -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container-fluid -->
        </section>
        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
        <!-- Warning Section Ends -->
        <!-- Required Jquery -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/popper.js/popper.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap/js/bootstrap.min.js"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/modernizr/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/modernizr/css-scrollbars.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/common-pages.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/sweetalert2.all.js"></script
    </body>

    <script>
        $("#login-btn").click(function () {
            var data = $('#form-login').serialize();
            console.log(data);
            $.ajax({
                data: data,
                type: 'POST',
                url: "<?php echo site_url('infront/process') ?>",
                success: function (response) {
                    if(response == '0'){
                        swal({
                            title: 'Login Berhasil',
                            type: 'success',
                            confirmButtonText: 'Okay'
                            }).then((result)=>{
                                if (result.value) {
                                    window.location.assign('<?php echo site_url("dash/add_class/!#kelas") ?>');
                                } else if (result.dismiss === Swal.DismissReason.cancel) {

                                }
                            });
                    }else{
                        swal('Login Gagal', '', 'warning');
                    }
                },
                error: function (response) {
                    swal(response, '', 'error');
                }
            });
        });
    </script>
</html>
