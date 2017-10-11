<?php
// echo sha1("password");
session_start();
session_regenerate_id(true);
include '../inc/dbconnect.php';
include '../inc/functions.php';
include '../inc/FlashMessages.php';
include 'uploadpatientdata.php';
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
     <link rel="stylesheet" href="css/styles.css">
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
                 <h3>Welcome in the  Laboratory</h3>
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
                     <h2><button id="patientresults" data-toggle="modal" data-target="#myModal">
                     Enter Patient Results</button>
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
                    <!-- Modal -->
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title text-center" id="exampleModalLabel">Enter Patient Lab Results Here</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
      <div class="row main">
        <div class="main-login main-center">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">

            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Patient Number</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="patientcardnumber" id="name"
                  placeholder="Enter patient card Number"/>
                </div>
              </div>
            </div>

            <div class="form-group">

              <div class="cols-sm-10">
                <div class="input-group">
                  <input type="hidden" class="form-control" name="laboratorist" />
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Enter Comments /Patient Diagnosis</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <textarea type="text" class="form-control" name="labdiagnosis"
                  style="resize: none; width:446px; overflow: auto;"  rows="5"> </textarea>
                </div>
              </div>
            </div>



            <div class="form-group">
              <label for="image" class="cols-sm-2 control-label">Include file</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon">
                    <i class="fa fa-file" aria-hidden="true"></i></span>
                  <input type="file" class="form-control" name="attacheddocument[]" multiple/>
                </div>
              </div>
            </div>



        </div>
      </div>
    </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save Record</button>
                                    </form>
                            </div>
                          </div>
                        </div>
                      </div>

                    <!-- lab manenos -->
                    <!-- lab manenos -->
                    <div id="featured">
                      <div>
                        <div class="article">
                          <h2> Mission Hospital Diagnostic Center</h2>
                          <img src="images/diagnostic-center.jpg" alt="">
                          <p>
                            In many countries there are mainly three types of Medical Laboratories as per the types of investigations carried out. 1. Clinical Pathology: Haematology, Histopathology, Cytology, Routine Pathology2. Clinical Microbiology: Bacteriology, Mycobacteriology, Virology, Mycology, Parasitology, Immunology, Serology.3
                          </p>
                          <p>
                           Laboratory equipment refers to the various tools and equipment used by scientists working in a laboratory: The classical equipment includes tools such as Bunsen burners and microscopes as well as specialty equipment such as operant conditioning chambers, spectrophotometers and calorimeters.
                          </p>
                          <p>
                            A room or building equipped for scientific experimentation or research. b. An academic period devoted to work or study in such a place. 2. A place where drugs and chemicals are manufactured.
                          </p>
                        </div>
                        <ul>
                          <li>
                            <h3>hematology</h3>
                            <div>
                              <p>
                                Blood extraction using seismic energy for painless testing.
                              </p>
                              <a href="blog.html" class="more">read more</a>
                            </div>
                            <img src="images/hematology.jpg" alt="">
                          </li>
                          <li>
                            <h3>urine &amp; drug testing</h3>
                            <div>
                              <p>
                                Accurate and secure testing of urine for diseases and drugs and medicines.
                              </p>
                              <a href="blog.html" class="more">read more</a>
                            </div>
                            <img src="images/urine-and-drug-testing.jpg" alt="">
                          </li>
                          <li>
                            <h3>x-ray</h3>
                            <div>
                              <p>
                                Fast and clear x-ray results. You’ll be assisted by our friendly staff all the way.
                              </p>
                              <a href="blog.html" class="more">read more</a>
                            </div>
                            <img src="images/x-ray.jpg" alt="">
                          </li>
                          <li>
                            <h3>pathology and dna</h3>
                            <div>
                              <p>
                                State of the art testing for DNA that’s sure to be have fast and accurate results.
                              </p>
                              <a href="blog.html" class="more">read more</a>
                            </div>
                            <img src="images/pathology-and-dna.jpg" alt="">
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- lab manenos -->
                    <!-- lab manenos -->



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
