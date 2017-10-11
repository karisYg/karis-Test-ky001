<?php
//ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/tmp'));
session_start();
// remove all session variables
session_unset();
// destroy the session
session_destroy();
$url='http://localhost/ERPS/hospitalmanagementsystem/login.php';
  header('location:'.$url);
?>