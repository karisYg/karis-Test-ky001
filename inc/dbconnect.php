<?php
define('servername', 'localhost');
define('username', 'root');
define('password', '');
define('database', 'hospitalmanagementsystem');
$conn=mysqli_connect(servername,username,password,database);
if (!$conn) {
  # code...
  echo "connection was unsuccessful".mysqli_connect_error();
}
//echo sha1('password');
 ?>
