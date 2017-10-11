<?php
session_start();
session_regenerate_id(true);
include '../inc/dbconnect.php';
include '../inc/functions.php';
include '../inc/FlashMessages.php';
$msg = new \Plasticbrain\FlashMessages\FlashMessages();
include 'insertnewpatient.php';


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
     <link rel="stylesheet" href="css/styles.css">
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
     <style>
                     input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
  border:2px solid #03b1ce ;}
  .tital{ font-size:16px; font-weight:500;}
   .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}  
     </style>
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
                   <li><a href="index.php"><i class="fa fa-home"></i> Dashboard</a>
                   </li>
                   <li><a href="#search"><i class="fa fa-search"></i> Search Patient</a></li>
                   <li><a><i class="fa fa-desktop"></i> Departments <span class="fa fa-chevron-down"></span></a>
                       <ul class="nav child_menu">
                         <li><a href="">Laboratory</a></li>
                         <li><a href="">Nursing</a></li>
                         <li><a href="">Pharmacy</a></li>
                         <li><a href="">Finance</a></li>
                         <li><a href="">Human Resource</a></li>
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
               <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
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
                 <h3>Customer care Desk </h3>
               </div>

               <div class="title_right">
                 <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <form method="get" action="">
                   <div class="input-group">
                     <input type="text" id="search" name="patientid" class="form-control" placeholder="Search for patient records...">
                     <span class="input-group-btn">
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
               <?php 
               if ($_SERVER["REQUEST_METHOD"]=="GET") {
                 # code...
                $patientid=mysqli_real_escape_string($conn,$_GET['patientid']);
                $sql="SELECT * FROM patientsrecords WHERE id ='$patientid'";
                $result=mysqli_query($conn,$sql);

                
               }
                ?>  

    <div class="container">
  <div class="">
    <h2 class="text-center">Patient Information For Receptionist</h2>
        
        
       <div class="col-md-8 col-md-offset-2 ">
 <?php while($row=mysqli_fetch_assoc($result)): ?>
<div class="panel panel-default">
  <div class="panel-heading">  <h4 >Patient  Profile</h4></div>
   <div class="panel-body">
       
    <div class="">
       
            <div class="box-body">
              <div class="col-sm-6">
                   <div  align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
              
                 <input id="profile-image-upload" class="hidden" type="file">
                   <div style="color:#999;" >click here to change profile image</div>
              <!--Upload Image Js And Css-->                     
                   </div>
                  
                  <br>
        
                  <!-- /input-group -->
              </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;">Patient System ID number: </h4></span>
              <span><p><?php echo $row['id']; ?></p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">

               
                            
              <div class="col-sm-5 col-xs-6 tital " >Full Names:</div>
              <div class="col-sm-7 col-xs-6 "><?php echo $row['fullnames']; ?></div>
                   <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " >Age:</div><div class="col-sm-7"> 
                <?php echo $row['age']; ?></div>
                <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " >City of Residence:</div><div class="col-sm-7">
               <?php echo $row['cityofresidence']; ?></div>
                <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " >Next of Kin:</div><div class="col-sm-7">
                <?php echo $row['nextofkin']; ?></div>

                <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " >Relationship:</div><div class="col-sm-7">
                <?php echo $row['relationship']; ?></div>

                <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " >Next of Kin Contact:</div><div class="col-sm-7">
                <?php echo $row['nextofkinphonenumber']; ?>
              </div>

               <div class="clearfix"></div>
              <div class="bot-border"></div>

              <div class="col-sm-5 col-xs-6 tital " >Patient Nationality:</div>
              <div class="col-sm-7">Kenyan</div>
              <?php endwhile; ?>
               <div class="clearfix"></div>
              <div class="bot-border"></div>


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
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
         <script>
    $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
          });
      });       
              </script>  
   </body>
 </html>
