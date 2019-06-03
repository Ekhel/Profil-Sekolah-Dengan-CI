<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/img/KabJayapura.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/normalize.css">
    <!-- form CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/form.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/style1.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- login Start-->
    <div class="login-form-area mg-t-30 mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                <?php echo form_open('login/login_proses'); ?>
                <form id="adminpro-form" class="adminpro-form">
                    <div class="col-lg-4">
                        <div class="login-bg">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="logo">
                                        <a href="#"><img src="<?php echo base_url()?>assets/img/logo/logo.png" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-title">
                                        <div class="container">
                                          <h3>Silahkan Login!</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>User name</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="text" name="nama" />
                                        <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="login-input-head">
                                        <p>Sandi</p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="login-input-area">
                                        <input type="password" name="sandi" />
                                        <i class="fa fa-lock login-user"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="forgot-password">
                                                <a href="#">Lupa Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-keep-me">
                                                <label class="checkbox">
                                                    <input type="checkbox" name="remember" checked><i></i>Simpan Akun ini
                                                </label>
                                            </div>
                                        </div>
                                    </div>!-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">

                                </div>
                                <div class="col-lg-8">
                                    <div class="login-button-pro">
                                        <button type="submit" class="login-button login-button-lg btn-block">Masuk</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?php echo form_close();?>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>
    <!-- login End-->
    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/jquery.form.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/form-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/main.js"></script>
</body>

</html>
