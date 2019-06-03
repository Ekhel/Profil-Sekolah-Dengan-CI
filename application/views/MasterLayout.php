<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/img/KabJayapura.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/adminpro-custon-icon.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/c3.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">
    <script src="<?php echo base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <?php if(isset($map['js'])) echo $map['js'];?>
</head>

<body class="materialdesign">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="admin-logo">
                        <a href="#"><img src="<?php echo base_url()?>assets/img/KabJayapura.png" width="30px" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-0 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav mai-top-nav">
                            <li class="nav-item"><a href="#" class="nav-link">Beranda</a>
                            </li>
                            <li class="nav-item"><a href="<?php echo base_url()?>home/peta_sekolah" class="nav-link">Peta Sekolah</a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">Tentang</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php if ($this->session->userdata('nama') === NULL) {?>
                <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                      <ul class="nav navbar-nav mai-top-nav header-right-menu">
                        <li>
                          <a href="<?php echo base_url()?>Login" role="button" aria-expanded="false" class="nav-link" title="Login">
                            <span class="adminpro-icon adminpro-icon adminpro-locked"></span></a>
                        </li>
                      </ul>
                    </div>
                </div>
              <?php }
              else{?>
                <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
                    <div class="header-right-info">
                      <ul class="nav navbar-nav mai-top-nav header-right-menu">
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                          <div role="menu" class="notification-author dropdown-menu animated flipInX">
                              <div class="notification-single-top">
                                  <h1>Notifikasi</h1>
                              </div>
                              <ul class="notification-menu">
                                  <li>
                                      <a href="#">
                                          <div class="notification-icon">
                                              <span class="adminpro-icon adminpro-checked-pro"></span>
                                          </div>
                                          <div class="notification-content">
                                              <span class="notification-date">16 Sept</span>
                                              <h2>Advanda Cro</h2>
                                              <p>Please done this project as soon possible.</p>
                                          </div>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <div class="notification-icon">
                                              <span class="adminpro-icon adminpro-cloud-computing-down"></span>
                                          </div>
                                          <div class="notification-content">
                                              <span class="notification-date">16 Sept</span>
                                              <h2>Sulaiman din</h2>
                                              <p>Please done this project as soon possible.</p>
                                          </div>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <div class="notification-icon">
                                              <span class="adminpro-icon adminpro-shield"></span>
                                          </div>
                                          <div class="notification-content">
                                              <span class="notification-date">16 Sept</span>
                                              <h2>Victor Jara</h2>
                                              <p>Please done this project as soon possible.</p>
                                          </div>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <div class="notification-icon">
                                              <span class="adminpro-icon adminpro-analytics-arrow"></span>
                                          </div>
                                          <div class="notification-content">
                                              <span class="notification-date">16 Sept</span>
                                              <h2>Victor Jara</h2>
                                              <p>Please done this project as soon possible.</p>
                                          </div>
                                      </a>
                                  </li>
                              </ul>
                              <div class="notification-view">
                                  <a href="#">View All Notification</a>
                              </div>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                            <span class="admin-name"><?php echo $this->session->userdata('nama') ?></span>
                            <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                          </a>
                          <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                            <li><a href="#"><span class="adminpro-icon adminpro-home-admin author-log-ic"></span>Akun</a>
                            </li>
                            <li><a href="<?php echo base_url()?>sekolah"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>Profile Sekolah</a>
                            </li>
                            <li><a href="<?php echo base_url()?>econtrolling"><span class="adminpro-icon adminpro-money author-log-ic"></span>Data Sekolah</a>
                            </li>
                            <li><a href="<?php echo base_url()?>emonitoring"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Lokasi Sekolah</a>
                            </li>
                            <li><a href="<?php echo base_url('Login/logout') ?>"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                </div>
        </div>
    </div>
  </div>
  <div class="main-menu-area mg-t-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <div class="sparkline13-list shadow-reset">
                <div class="sparkline12-graph">
                  <ul class="nav nav-tabs custom-menu-wrap">
                      <li><a href="<?php echo base_url()?>Profil">Indentitas <i class="fa fa-book"></i></a>
                      </li>
                      <li><a href="<?php echo base_url()?>Fasilitas">Sarpras </a>
                      </li>
                      <li><a href="<?php echo base_url()?>Guru">Guru <i class="fa fa-users"></i></a>
                      </li>
                      <li><a href="<?php echo base_url()?>">Data Pendukung</a>
                      </li>
                      <li><a href="<?php echo base_url()?>">Exkul</a>
                      </li>
                      </li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<br/>
  <?php } ?>
    <?php echo $contents ?>
    <!-- Header top area end-->
    <!--<div class="row">
      <div class="col-lg-12">
        <br/>

      </div>
    </div>!-->

    <!-- Footer Start-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copy-right">
                        <p>Copyright &#169; 2018</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
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
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/wow/wow.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/counterup/counterup-active.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url()?>assets/js/jvectormap/jvectormap-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>assets/js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url()?>assets/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url()?>assets/js/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url()?>assets/js/flot/jquery.flot.symbol.js"></script>
    <script src="<?php echo base_url()?>assets/js/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url()?>assets/js/flot/dashtwo-flot-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url()?>assets/js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url()?>assets/js/main.js"></script>
</body>

</html>
