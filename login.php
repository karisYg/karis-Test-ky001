<?php
//echo sha1("password");
session_start();
session_regenerate_id(true);
include 'inc/dbconnect.php';
include 'inc/functions.php';
include 'inc/FlashMessages.php';
$msg = new \Plasticbrain\FlashMessages\FlashMessages();


    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $nationalid=sanitize_input($_POST['nationalid']);
        $password=sanitize_input($_POST['password']);

        $nationalid=mysqli_real_escape_string($conn,$nationalid);
        $password=mysqli_real_escape_string($conn,$password);
        $password=sha1($password);
        if($result =mysqli_query($conn,"SELECT * FROM admins WHERE nationalidnumber='$nationalid'")){
            if(mysqli_num_rows($result)==1){
              $row =mysqli_fetch_assoc($result);
              if ($row['password']===$password) {
              // var_dump($row);
                  switch ($row['job_title']) {
                    case 'receptionist':
                    $_SESSION['receptionist-names']=$row['fullnames'];
                    $_SESSION['receptionist-email']=$row['email'];
                    $_SESSION['receptionist-id']=$row['nationalidnumber'];
                    $_SESSION['receptionist-phonenumber']=$row['phonenumber'];
                    $_SESSION['receptionist-account-birth']=$row['created_at'];
                    $msg->success('welcome '. $_SESSION['receptionist-names'],
                'http://localhost/oldwindowsfiles/ERPS/hospitalmanagementsystem/Receptionist/');
                      break;

                    default:
                      $msg->error('System Error..Call the Programmer!');
                      break;
                  }
              }else{
              $msg->error('Incorrect Login Password!.');
              }

            }else if(mysqli_num_rows($result)==0){
              $msg->error('Those Login Credentials donot exist in Our System .Contact Supervisor');
            }else{
                $msg->error('Looks like Your ID is being Used By someone Else.Contact Supervisor');
            }
        }else{
          $msg->error('Unknown System error.Contact Adminstrator');
        }
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
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link rel="stylesheet" href="customcss/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body class="login">
    <div>
      <div class="displayerrors">
        <?php

          if ($msg->hasMessages()) {
             $msg->display();
          }

           ?>
      </div>
      <div class="login_wrapper">

        <div class="">
          <h4><center>Administrators Only</center></h4>
        </div>
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

              <h1>Login Form</h1>
              <br/>
              <div>
                <input type="text" name="nationalid" class="form-control"
                 placeholder="Enter National ID" required maxlength="20"/>
              </div>
              <div>
                <input type="password"
                name="password" class="form-control" placeholder="Password" required maxlength="20"/>
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" value="Log in" />
                <a class="reset_pass" href="forgotpassword.php">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> <a href="index.html" style="font-size:25px;">Hospital ERP</a> </h1>
                  <p>©2017 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
