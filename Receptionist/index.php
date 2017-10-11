<?php
// echo sha1("password");
session_start();
session_regenerate_id(true);
include '../inc/dbconnect.php';
include '../inc/functions.php';
include '../inc/FlashMessages.php';
$msg = new \Plasticbrain\FlashMessages\FlashMessages();
include 'insertnewpatient.php';
if (!isset($_SESSION['receptionist-names'])&&
!isset($_SESSION['receptionist-email'])&&
!isset($_SESSION['receptionist-id'])&&
!isset($_SESSION['receptionist-phonenumber'])&&
!isset($_SESSION['receptionist-account-birth'])) {
  # code...
  $msg->error("You need to be logged in as a Receptionist to access that Part of the system",
    'http://localhost/erps/hospitalmanagementsystem/login.php');
}


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
                       <span class="section">New Patient Registration Form</span>

                       <div class="item form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Names<span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="col-md-4">
                             <input type="text" name="firstname" class="form-control">
                             <small >Firstname</small>
                           </div>
                           <div class="col-md-4">
                             <input type="text" name="middlename" class="form-control">
                             <small >Middle Name</small>
                           </div>
                           <div class="col-md-4">
                             <input type="text" name="lastname" class="form-control">
                             <small >Lastname</small>
                           </div>
                           <!-- <input id="name" class="form-control col-md-7 col-xs-12"

                           name="fullnames" required="required" type="text" placeholder="enter patient Full names" maxlength="100"> -->
                         </div>
                       </div>
                       <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                            Sex<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="col-md-12">
                              <select class="form-control col-md-12" name="gender">
                                <option value=""></option>
                                <option value="male">male</option>
                                <option value="female">female</option>
                                <option value="not Applicable">not Applicable</option>
                              </select>
                              <small>Gender</small>
                            </div>
                          </div>
                        </div>
                      <div class="item form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date Of Birth<span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="col-md-4">
                             <select class="form-control" name="month" required>
                               <option value="january">january</option>
                               <option value="february">february</option>
                               <option value="march">march</option>
                               <option value="april">april</option>
                               <option value="may">may</option>
                               <option value="June">June</option>
                               <option value="july">july</option>
                               <option value="august">august</option>
                               <option value="september">september</option>
                               <option value="october">october</option>
                               <option value="november">november</option>
                               <option value="december">december</option>
                             </select>
                             <small>month</small>
                           </div>
                           <div class="col-md-4">
                             <select class="form-control" name="day" required>
                               <option value=""></option>
                              <?php 
                               for ($i=1; $i <31 ; $i++) { 
                                 # code...
                                echo "<option value='$i'>$i</option>";
                               }


                                ?>

                             </select>
                             <!-- <input type="number" name="day" min="1" max="31" class="form-control"> -->
                             <small>day</small>
                           </div>
                           <div class="col-md-4">
                             <select class="form-control" name="year" required>
                               <option value=''></option>
                               <?php 
                               for ($i=1900; $i <2050 ; $i++) { 
                                 # code...
                                echo "<option value='$i'>$i</option>";
                               }


                                ?>

                             </select>
                             <small>year</small>
                           </div>
                         </div>
                       </div>
                       <div class="item form-group">
                         <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">
                           Heigth(inches)<span>*</span></label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="col-md-12">
                             <input type="text" name="height" class="form-control col-md-7 col-xs-12" required="required">
                             <small>height(inches)</small>
                           </div>
                         </div>
                       </div><hr>

                       <div class="item form-group">
                         <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">
                          Contact Number</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="col-md-12">
                             <input type="text" name="phonenumber"
                             class="form-control col-md-7 col-xs-12" >
                             <small>phone number e.g +254712169695</small>
                           </div>
                         </div>
                       </div>
                       <div class="item form-group">
                         <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">
                          Address</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="col-md-6">
                             <input type="text" name="city"
                             class="form-control col-md-7 col-xs-12" >
                             <small>city</small>
                           </div>
                           <div class="col-md-6">
                             <input type="text" name="country"
                             class="form-control col-md-7 col-xs-12" >
                             <small>Country</small>
                           </div>
                         </div>
                       </div><hr>
                       <div class="item form-group">
                         <p for="" class="control-label col-md-4  col-sm-12 col-xs-12">
                           incase of emergency</p>
                       </div>




                       <div class="item form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" >
                           Emergency Contact<span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="col-md-12">
                              <div class="col-md-6">
                                <input type="text" name="emergency-c-firstname"class="form-control col-md-7 col-xs-12" required>
                                <small>firstname</small>
                              </div>
                              <div class="col-md-6">
                                <input type="text" name="emergency-c-lastname" class="form-control col-md-7 col-xs-12" required>
                                <small>Lastname</small>
                              </div>
                            </div>
                         </div>
                       </div>
                       <div class="item form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Number</label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="col-md-12">
                             <input type="text" name="emergency-c-phonenumber" class="form-control col-md-7 col-xs-12">
                             <small>phonenumber</small>
                           </div>

                         </div>
                       </div><hr>
                       <div class="item form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">
                           Card Number
                            <span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="col-md-12">
                             <div class="col-md-6">
                                <input type="text"  name="nhifnumber" required="required" class="form-control col-md-7 col-xs-12">
                                <small>NHIF</small>
                             </div>
                             <div class="col-md-6">
                                <input type="text"  name="insuranceCardNo" required="required" class="form-control col-md-7 col-xs-12">
                                <small>INSURANCE</small>
                             </div>
                           </div>

                         </div>
                       </div><hr>

                       <div class="item form-group">
                         <label class="control-label col-md-3">Taking any Medications,currenty? <span>*</span></label><br>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="col-md-12">
                             <input type="radio" name="inmedications" value="YES">&nbsp&nbsp<span>Yes</span><br>
                             <input type="radio" name="inmedications" value="NO">&nbsp&nbsp<span>NO</span><br>
                           </div>
                         </div>
                       </div>
                       <div class="item form-group">
                         <label class="control-label col-md-3">If Yes,Please List them here<span>*</span></label><br>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <div class="col-md-12">
                             <textarea name="medicationlist" rows="8" cols="80"  class="form-control col-md-7 col-xs-12"
                             style="resize:none;"></textarea>

                           </div>
                         </div>
                       </div>
                       <div class="ln_solid"></div>
                       <div class="form-group">
                         <div class="col-md-6 col-md-offset-3">
                           <input type="reset" class="btn btn-info" value="reset form">
                           <button type="submit" class="btn btn-success">Add Patient</button>

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
