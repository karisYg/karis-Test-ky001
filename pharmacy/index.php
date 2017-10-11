<?php
// echo sha1("password");
session_start();
session_regenerate_id(true);
include '../inc/dbconnect.php';
include '../inc/functions.php';
include '../inc/FlashMessages.php';
$msg = new \Plasticbrain\FlashMessages\FlashMessages();
// include 'insertnewpatient.php';
// if (!isset($_SESSION['receptionist-names'])&&
// !isset($_SESSION['receptionist-email'])&&
// !isset($_SESSION['receptionist-id'])&&
// !isset($_SESSION['receptionist-phonenumber'])&&
// !isset($_SESSION['receptionist-account-birth'])) {
//   # code...
//   $msg->error("You need to be logged in as a Receptionist to access that Part of the system",
//     'http://localhost/erps/hospitalmanagementsystem/login.php');
// }


 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     <!-- Meta, title, CSS, favicons, etc. -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Hospital ERP | </title>

     <!-- Bootstrap -->
     <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Font Awesome -->
     <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <!-- NProgress -->
     <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

     <!-- Custom styling plus plugins -->
     <link href="../build/css/custom.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/adminpanel.css">
     <link rel="stylesheet" type="text/css" href="css/all-skins.min.css">
   </head>

   <body class="nav-md">
     <div class="container body">
       <div class="main_container">
         <div class="col-md-3 left_col">
           <div class="left_col scroll-view">
             <div class="navbar nav_title" style="border: 0;">
               <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Hospital ERP</span></a>
             </div>

             <div class="clearfix"></div>

             <!-- menu profile quick info -->
             <div class="profile clearfix">
               <div class="profile_pic">
                 <img src="images/img.jpg" alt="..." class="img-circle profile_img">
               </div>
               <div class="profile_info">
                 <span>Welcome,</span>
                 <h2><?php echo $_SESSION['receptionist-names']; ?></h2>
               </div>
             </div>
             <!-- /menu profile quick info -->

             <br />

             <!-- sidebar menu -->
             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
               <div class="menu_section">
                 <h3>General</h3>
                 <ul class="nav side-menu">
                   <li><a><i class="fa fa-home"></i> Dashboard</a>
                   </li>
                   <li><a href="#search"><i class="fa fa-search"></i> Search Patient</a></li>
                   <li><a><i class="fa fa-desktop"></i> Departments <span class="fa fa-chevron-down"></span></a>
                       <ul class="nav child_menu">
                         <li><a href="../login.php">Laboratory</a></li>
                         <li><a href="../login.php">Nursing</a></li>
                         <li><a href="../login.php">Pharmacy</a></li>
                         <li><a href="../login.php">Finance</a></li>
                         <li><a href="../login.php">Human Resource</a></li>
                       </ul>
                     </li>
                 </ul>
               </div>

             </div>
             <!-- /sidebar menu -->

             <!-- /menu footer buttons -->
             <div class="sidebar-footer hidden-small">
               <a data-toggle="tooltip" data-placement="top" title="Settings">
                 <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
               </a>
               <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                 <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
               </a>
               <a data-toggle="tooltip" data-placement="top" title="Lock">
                 <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
               </a>
               <a data-toggle="tooltip" data-placement="top" title="Logout" href="../inc/logout.php">
                 <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
               </a>
             </div>
             <!-- /menu footer buttons -->
           </div>
         </div>

         <!-- top navigation -->
         <div class="top_nav">
           <div class="nav_menu">
             <nav>
               <div class="nav toggle">
                 <a id="menu_toggle"><i class="fa fa-bars"></i></a>
               </div>

               <ul class="nav navbar-nav navbar-right">
                 <li class="">
                   <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <img src="images/img.jpg" alt=""><?php echo $_SESSION['receptionist-names']; ?>
                     <span class=" fa fa-angle-down"></span>
                   </a>
                   <ul class="dropdown-menu dropdown-usermenu pull-right">
                     <li><a href="javascript:;"> My Profile</a></li>
                     <li>
                       <a href="javascript:;">
                         <span class="badge bg-red pull-right">50%</span>
                         <span>Settings</span>
                       </a>
                     </li>
                     <li><a href="javascript:;">Help</a></li>
                     <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                   </ul>
                 </li>

                 <li role="presentation" class="dropdown">
                   <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                     <i class="fa fa-envelope-o"></i>
                     <span class="badge bg-green">6</span>
                   </a>
                   <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                     <li>
                       <a>
                         <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                         <span>
                           <span>John Smith</span>
                           <span class="time">3 mins ago</span>
                         </span>
                         <span class="message">
                           Film festivals used to be do-or-die moments for movie makers. They were where...
                         </span>
                       </a>
                     </li>
                     <li>
                       <a>
                         <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                         <span>
                           <span>John Smith</span>
                           <span class="time">3 mins ago</span>
                         </span>
                         <span class="message">
                           Film festivals used to be do-or-die moments for movie makers. They were where...
                         </span>
                       </a>
                     </li>
                     <li>
                       <a>
                         <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                         <span>
                           <span>John Smith</span>
                           <span class="time">3 mins ago</span>
                         </span>
                         <span class="message">
                           Film festivals used to be do-or-die moments for movie makers. They were where...
                         </span>
                       </a>
                     </li>
                     <li>
                       <a>
                         <span class="image"><img src="../images/img.jpg" alt="Profile Image" /></span>
                         <span>
                           <span>John Smith</span>
                           <span class="time">3 mins ago</span>
                         </span>
                         <span class="message">
                           Film festivals used to be do-or-die moments for movie makers. They were where...
                         </span>
                       </a>
                     </li>
                     <li>
                       <div class="text-center">
                         <a>
                           <strong>See All Alerts</strong>
                           <i class="fa fa-angle-right"></i>
                         </a>
                       </div>
                     </li>
                   </ul>
                 </li>
               </ul>
             </nav>
           </div>
         </div>
         <!-- /top navigation -->

         <!-- page content -->
         <div class="right_col" role="main">
           <div class="">
             <div class="page-title">
               <div style="margin-top:50px;">
                 <?php

                   if ($msg->hasMessages()) {
                      $msg->display();
                   }

                    ?>
               </div>
               <div class="title_left">
                 <h3>Receptionist </h3>
               </div>

               <div class="title_right">
                 <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <form action="show.php" method="get">
                  <div class="input-group">
                     <input type="text" name="patientid" id="search"  required
                     class="form-control" placeholder="Search for patient records...">
                     <span class="input-group-btn">
                      <!-- <input  class="btn btn-default" value="GO!"> -->
                       <button class="btn btn-default" type="submit">Go!</button>
                     </span>
                   </div>

                  </form>

                 </div>
               </div>
             </div>

             <div class="clearfix"></div>

             <div class="row">
               <div class="col-md-12">
<section class="content">
          <h4 class="page-header">
            AdminLTE Small Boxes
            <small>Small boxes are used for viewing statistics. To create a small box use the class <code>.small-box</code> and mix &amp; match using the <code>bg-*</code> classes.</small>
          </h4>
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>
                    150
                  </h3>
                  <p>
                    New Orders
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>
                    53<sup style="font-size: 20px">%</sup>
                  </h3>
                  <p>
                    Bounce Rate
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>
                    44
                  </h3>
                  <p>
                    User Registrations
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>
                    65
                  </h3>
                  <p>
                    Unique Visitors
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->

          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3>
                    230
                  </h3>
                  <p>
                    Sales
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-cart-outline"></i>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3>
                    80<sup style="font-size: 20px">%</sup>
                  </h3>
                  <p>
                    Conversion Rate
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-briefcase-outline"></i>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-teal">
                <div class="inner">
                  <h3>
                    14
                  </h3>
                  <p>
                    Notifications
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-alarm-outline"></i>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-maroon">
                <div class="inner">
                  <h3>
                    160
                  </h3>
                  <p>
                    Products
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-pricetag-outline"></i>
                </div>
                <a href="#" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->

          <!-- Widgets as boxes -->
          <h4 class="page-header">
            AdminLTE Boxes
            <small>We use the base class <code>.box</code> to create widgets simply.</small>
          </h4>
          <div class="row">
            <div class="col-md-4">
              <!-- Default box -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Default Box (button tooltip)</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  Box class: <code>.box</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <code>.box-footer</code>
                </div><!-- /.box-footer-->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Primary box -->
              <div class="box box-primary">
                <div class="box-header" data-toggle="tooltip" title="" data-original-title="Header tooltip">
                  <h3 class="box-title">Primary Box (header tooltip)</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-primary btn-xs" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-primary</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <code>.box-footer</code>
                </div><!-- /.box-footer-->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Info box -->
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Info Box</h3>
                  <div class="box-tools pull-right">
                    <div class="label bg-aqua">Label</div>
                  </div>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-info</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <code>.box-footer</code>
                </div><!-- /.box-footer-->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-4">
              <!-- Danger box -->
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Danger Box (Loading state)</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-danger btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-danger btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-danger</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
                <!-- Loading (remove the following to stop the loading)-->
                <div class="overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
                <!-- end loading -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Success box -->
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Success Box (toggle buttons)</h3>
                  <div class="box-tools pull-right">
                    <div class="btn-group" data-toggle="btn-toggle">
                      <button type="button" class="btn btn-success btn-xs active" data-toggle="on">Left</button>
                      <button type="button" class="btn btn-success btn-xs" data-toggle="off">Right</button>
                    </div>
                  </div>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-success</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Warning box -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Warning Box</h3>
                  <div class="box-tools pull-right">
                    <ul class="pagination pagination-sm inline">
                      <li><a href="#">«</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-warning</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <h4 class="page-header">
            AdminLTE Solid Boxes
            <small>We use the base class <code>.box</code> and <code>.box-solid</code> to create solid boxes that look like this.</small>
          </h4>
          <!-- Solid boxes -->
          <div class="row">
            <div class="col-md-4">
              <!-- Default box -->
              <div class="box box-solid box-default collapsed-box">
                <div class="box-header">
                  <h3 class="box-title">Default Solid Box</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body" style="display: none;">
                  Box class: <code>.box.box-solid</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Primary box -->
              <div class="box box-solid box-primary collapsed-box">
                <div class="box-header">
                  <h3 class="box-title">Primary Solid Box</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body" style="display: none;">
                  Box class: <code>.box.box-solid.box-primary</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Info box -->
              <div class="box box-solid box-info">
                <div class="box-header">
                  <h3 class="box-title">Info Solid Box</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-solid.box-info</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-4">
              <!-- Danger box -->
              <div class="box box-solid box-danger collapsed-box">
                <div class="box-header">
                  <h3 class="box-title">Danger Solid Box</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-danger btn-sm" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    <button class="btn btn-danger btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body" style="display: none;">
                  Box class: <code>.box.box-solid.box-danger</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Success box -->
              <div class="box box-solid box-success collapsed-box">
                <div class="box-header">
                  <h3 class="box-title">Success Solid Box</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body" style="display: none;">
                  Box class: <code>.box.box-solid.box-success</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Warning box -->
              <div class="box box-solid box-warning collapsed-box">
                <div class="box-header">
                  <h3 class="box-title">Warning Solid Box</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-warning btn-sm" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    <button class="btn btn-warning btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body" style="display: none;">
                  Box class: <code>.box.box-solid.box-warning</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <h4 class="page-header">
            AdminLTE Tiles
            <small>To create a tile we create a solid box and a <code>.bg-*</code> class ( * being the name of the color) to the box.</small>
          </h4>
          <!-- Solid boxes -->
          <div class="row">
            <div class="col-md-4">
              <!-- Navy tile -->
              <div class="box box-solid bg-navy">
                <div class="box-header">
                  <h3 class="box-title">Navy Tile</h3>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-solid.bg-navy</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Primary tile -->
              <div class="box box-solid bg-light-blue">
                <div class="box-header">
                  <h3 class="box-title">Primary Tile</h3>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-solid.bg-light-blue</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Info box -->
              <div class="box box-solid bg-aqua">
                <div class="box-header">
                  <h3 class="box-title">Info Tile</h3>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-solid.bg-aqua</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-4">
              <!-- Danger box -->
              <div class="box box-solid bg-red">
                <div class="box-header">
                  <h3 class="box-title">Danger Tile</h3>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-solid.bg-red</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Success box -->
              <div class="box box-solid bg-green">
                <div class="box-header">
                  <h3 class="box-title">Success Tile</h3>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-solid.bg-green</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Warning box -->
              <div class="box box-solid bg-yellow">
                <div class="box-header">
                  <h3 class="box-title">Warning Tile</h3>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-solid.bg-yellow</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-md-4">
              <!-- Purple tile -->
              <div class="box box-solid bg-purple">
                <div class="box-header">
                  <h3 class="box-title">Purple Tile</h3>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-solid.bg-purple</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Blue tile -->
              <div class="box box-solid bg-blue">
                <div class="box-header">
                  <h3 class="box-title">Blue Tile</h3>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-solid.bg-blue</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Maroon tile -->
              <div class="box box-solid bg-maroon">
                <div class="box-header">
                  <h3 class="box-title">Maroon Tile</h3>
                </div>
                <div class="box-body">
                  Box class: <code>.box.box-solid.bg-maroon</code>
                  <p>
                    amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                    berliner weisse wort chiller adjunct hydrometer alcohol aau!
                    sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                  </p>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section>


               </div>
             </div>
           </div>
         </div>
         <!-- /page content -->

         <!-- footer content -->
         <footer>
           <div class="pull-right">
             Hospital ERP. Terms and Conditions</a>
           </div>
           <div class="clearfix"></div>
         </footer>
         <!-- /footer content -->
       </div>
     </div>

     <!-- jQuery -->

     <script src="../vendors/jquery/dist/jquery.min.js"></script>
     <!-- Bootstrap -->
     <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
     <!-- FastClick -->
     <script src="../vendors/fastclick/lib/fastclick.js"></script>
     <!-- NProgress -->
     <script src="../vendors/nprogress/nprogress.js"></script>

     <!-- Custom Theme Scripts -->
     <script src="../build/js/custom.min.js"></script>
   </body>
 </html>
