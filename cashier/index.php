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
     <link rel="stylesheet" href="../customcss/styles.css">
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
                 <img src="../images/img.jpg" alt="..." class="img-circle profile_img">
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
                     <img src="../images/img.jpg" alt=""><?php echo $_SESSION['receptionist-names']; ?>
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
                 <div class="x_panel">
                   <div class="x_title">
                     <h2>Add New Patient else Search Patient in our record.
                      </h2>
                     <ul class="nav navbar-right panel_toolbox">
                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                       </li>
                       <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                         <ul class="dropdown-menu" role="menu">
                           <li><a href="#">Settings 1</a>
                           </li>
                           <li><a href="#">Settings 2</a>
                           </li>
                         </ul>
                       </li>
                       <li><a class="close-link"><i class="fa fa-close"></i></a>
                       </li>
                     </ul>
                     <div class="clearfix"></div>
                   </div>
                   <div class="x_content">

                     <form class="form-horizontal form-label-left" method="post">
                       <p>Donec vitae leo at sem
                         lobortis porttitor eu consequat
                          risus. Mauris sed congue orci.
                           Donec ultrices faucibus rutrum.
                            Donec vitae leo at sem lobortis p
                            orttitor eu consequat risus. Mauris
                            sed congue orci. Donec ultrices faucibus rutrum.
                       </p>
                       <span class="section">Personal Info</span>
                       <!-- registration fees -->
                        <div class="item form-group">
                           <label for="registrationfees"
                           class="control-label col-md-3 col-sm-3 col-xs-12">Names</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input  type="text" name="patientid"
                             class="form-control col-md-7 col-xs-12" required="required">
                             <small>Add Patient fullnames</small>
                           </div>
                        </div><br>
                        <!-- registration fees -->
                        <!-- registration fees -->
                        <div class="item form-group">
                           <label for="registrationfees" class="control-label col-md-3 col-sm-3 col-xs-12">Registration</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input  type="text" name="registrationfees"  class="form-control col-md-7 col-xs-12" required="required">
                             <small>Registration Fees Paid</small>
                           </div>
                        </div><br>
                        <!-- registration fees -->
                        <!-- Laboratory fees -->
                        <div class="item form-group">
                           <label for="registrationfees" class="control-label col-md-3 col-sm-3 col-xs-12">Laboratory</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input  type="text" name="laboratoryfees"  class="form-control col-md-7 col-xs-12">
                             <small>Lab fees</small>
                           </div>
                        </div><br>
                        <!-- laboratory fees -->
                        <!-- Examination fees -->
                        <div class="item form-group">
                           <label for="examinationfees" class="control-label col-md-3 col-sm-3 col-xs-12">Examination</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input  type="text" name="examinationfees"  class="form-control col-md-7 col-xs-12">
                             <small>examination fees</small>
                           </div>
                        </div>
                        <!-- Examination fees -->

                        <!-- Drug fees -->
                        <div class="item form-group">
                           <label for="drugfees" class="control-label col-md-3 col-sm-3 col-xs-12">Drugs&Prescriptions</label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input  type="text" name="drugfees"  class="form-control col-md-7 col-xs-12">
                             <small>presciption fees</small>
                           </div>
                        </div>
                        <!-- Examination fees -->
                       <div class="ln_solid"></div>
                       <div class="form-group">
                         <div class="col-md-6 col-md-offset-3">
                           <button type="submit" class="btn btn-success">Update Patient Records</button>

                         </div>
                       </div>
                     </form>

                     <section class="content invoice">
                       <!-- title row -->

                    <br/>

                       <!-- Table row -->

                       <!-- /.row -->
                     </section>
                   </div>
                 </div>
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
     <script src="js/mains.js"></script>
   </body>
 </html>
