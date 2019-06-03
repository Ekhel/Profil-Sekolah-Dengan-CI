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
                            <li class="nav-item"><a href="#" class="nav-link">Dashboard</a>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-item dropdown-toggle">Web Services <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                <div role="menu" class="dropdown-menu animated flipInX">
                                    <a href="#" class="dropdown-item">RPJMD</a>
                                    <a href="#" class="dropdown-item">Renstra</a>
                                    <a href="#" class="dropdown-item">Renja</a>
                                </div>
                            </li>
                            <li class="nav-item"><a href="#" class="nav-link">FAQ</a>
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs custom-menu-wrap">
                    <li class="active"><a data-toggle="tab" href="#Home">Home</a>
                    </li>
                    <li><a data-toggle="tab" href="#mailbox">Mailbox</a>
                    </li>
                    <li><a data-toggle="tab" href="#Interface">Interface</a>
                    </li>
                    <li><a data-toggle="tab" href="#Miscellaneous">Miscellaneous</a>
                    </li>
                    <li><a data-toggle="tab" href="#Charts">Charts</a>
                    </li>
                    <li><a data-toggle="tab" href="#Tables">Tables</a>
                    </li>
                    <li><a data-toggle="tab" href="#Forms">Forms</a>
                    </li>
                    <li><a data-toggle="tab" href="#Appviews">App views</a>
                    </li>
                    <li><a data-toggle="tab" href="#Page">Page</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Home" class="tab-pane in active tab-custon-menu-bg animated flipInX">
                        <ul class="main-menu-dropdown">
                            <li><a href="dashboard.html">Dashboard v.1</a>
                            </li>
                            <li><a href="dashboard-2.html">Dashboard v.2</a>
                            </li>
                            <li><a href="analytics.html">Analytics</a>
                            </li>
                            <li><a href="widgets.html">Widgets</a>
                            </li>
                        </ul>
                    </div>
                    <div id="mailbox" class="tab-pane tab-custon-menu-bg animated flipInX">
                        <ul class="main-menu-dropdown">
                            <li><a href="inbox.html">Inbox</a>
                            </li>
                            <li><a href="view-mail.html">View Mail</a>
                            </li>
                            <li><a href="compose-mail.html">Compose Mail</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Miscellaneous" class="tab-pane tab-custon-menu-bg animated flipInX">
                        <ul class="main-menu-dropdown">
                            <li><a href="profile.html">Profile</a>
                            </li>
                            <li><a href="contact-client.html">Contact Client</a>
                            </li>
                            <li><a href="contact-client-v.1.html">Contact Client v.1</a>
                            </li>
                            <li><a href="project-list.html">Project List</a>
                            </li>
                            <li><a href="project-details.html">Project Details</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Interface" class="tab-pane tab-custon-menu-bg animated flipInX">
                        <ul class="main-menu-dropdown">
                            <li><a href="google-map.html">Google Map</a>
                            </li>
                            <li><a href="data-maps.html">Data Maps</a>
                            </li>
                            <li><a href="pdf-viewer.html">Pdf Viewer</a>
                            </li>
                            <li><a href="x-editable.html">X-Editable</a>
                            </li>
                            <li><a href="code-editor.html">Code Editor</a>
                            </li>
                            <li><a href="tree-view.html">Tree View</a>
                            </li>
                            <li><a href="preloader.html">Preloader</a>
                            </li>
                            <li><a href="images-cropper.html">Images Cropper</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Appviews" class="tab-pane tab-custon-menu-bg animated flipInX">
                        <ul class="main-menu-dropdown">
                            <li><a href="notifications.html">Notifications</a>
                            </li>
                            <li><a href="alerts.html">Alerts</a>
                            </li>
                            <li><a href="modals.html">Modals</a>
                            </li>
                            <li><a href="buttons.html">Buttons</a>
                            </li>
                            <li><a href="tabs.html">Tabs</a>
                            </li>
                            <li><a href="accordion.html">Accordion</a>
                            </li>
                            <li><a href="tab-menus.html">Tab Menus</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Page" class="tab-pane tab-custon-menu-bg animated flipInX">
                        <ul class="main-menu-dropdown">
                            <li><a href="login.html">Login</a>
                            </li>
                            <li><a href="register.html">Register</a>
                            </li>
                            <li><a href="captcha.html">Captcha</a>
                            </li>
                            <li><a href="checkout.html">Checkout</a>
                            </li>
                            <li><a href="contact.html">Contacts</a>
                            </li>
                            <li><a href="review.html">Review</a>
                            </li>
                            <li><a href="order.html">Order</a>
                            </li>
                            <li><a href="comment.html">Comment</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Forms" class="tab-pane tab-custon-menu-bg animated flipInX">
                        <ul class="main-menu-dropdown">
                            <li><a href="basic-form-element.html">Basic Form Elements</a>
                            </li>
                            <li><a href="advance-form-element.html">Advanced Form Elements</a>
                            </li>
                            <li><a href="password-meter.html">Password Meter</a>
                            </li>
                            <li><a href="multi-upload.html">Multi Upload</a>
                            </li>
                            <li><a href="tinymc.html">Text Editor</a>
                            </li>
                            <li><a href="dual-list-box.html">Dual List Box</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Tables" class="tab-pane tab-custon-menu-bg animated flipInX">
                        <ul class="main-menu-dropdown">
                            <li><a href="static-table.html">Static Table</a>
                            </li>
                            <li><a href="data-table.html">Data Table</a>
                            </li>
                        </ul>
                    </div>
                    <div id="Charts" class="tab-pane tab-custon-menu-bg animated flipInX">
                        <ul class="main-menu-dropdown">
                            <li><a href="bar-charts.html">Bar Charts</a>
                            </li>
                            <li><a href="line-charts.html">Line Charts</a>
                            </li>
                            <li><a href="area-charts.html">Area Charts</a>
                            </li>
                            <li><a href="rounded-chart.html">Rounded Charts</a>
                            </li>
                            <li><a href="c3.html">C3 Charts</a>
                            </li>
                            <li><a href="sparkline.html">Sparkline Charts</a>
                            </li>
                            <li><a href="peity.html">Peity Charts</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                        <p>Copyright &#169; 2016 - 2020 Penlap Bappeda Kab. Jayapura Template by <a href="https://colorlib.com">Colorlib</a>.</p>
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
