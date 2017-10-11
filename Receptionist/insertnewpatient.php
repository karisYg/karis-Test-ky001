<?php 


   if ($_SERVER["REQUEST_METHOD"]=="POST") {
   	$firstname=mysqli_real_escape_string($conn,sanitize_input($_POST['firstname']));
      $middlename=mysqli_real_escape_string($conn,sanitize_input($_POST['middlename']));
      $lastname=mysqli_real_escape_string($conn,sanitize_input($_POST['lastname']));

      $fullnames= $firstname." ".$middlename." ".$lastname;
      $gender=mysqli_real_escape_string($conn,
         sanitize_input($_POST['gender']));
      $dateofbirth =$_POST['day']."-".$_POST['month']."-".$_POST['year'];


      $height=mysqli_real_escape_string($conn,
         sanitize_input($_POST['height']));
      $patientphonenumber=mysqli_real_escape_string($conn,
         sanitize_input($_POST['phonenumber']));

   	$city=mysqli_real_escape_string($conn,
   		sanitize_input($_POST['city']));
      $country=mysqli_real_escape_string($conn,
         sanitize_input($_POST['country']));


      $patientaddress=$city.",".$country;

   	$emergency_c_firstname=mysqli_real_escape_string($conn,
   		sanitize_input($_POST['emergency-c-firstname']));

      $emergency_c_lastname=mysqli_real_escape_string($conn,
         sanitize_input($_POST['emergency-c-lastname']));

      $emergency_contact_names=$emergency_c_firstname."  ".$emergency_c_lastname;
   	$emergency_contact_number=mysqli_real_escape_string($conn,
         sanitize_input($_POST['emergency-c-phonenumber']));

   	$nhifnumber=mysqli_real_escape_string($conn,sanitize_input($_POST['nhifnumber']));
   	$insuranceCardNo=mysqli_real_escape_string($conn,
   		sanitize_input($_POST['insuranceCardNo']));

      $patientinmedications=$_POST['inmedications'];

   	$medicationlist=mysqli_real_escape_string($conn,
   		sanitize_input($_POST['medicationlist']));
   if ($result=mysqli_query($conn,"SELECT id FROM patientatregistrationdesk ORDER BY id DESC LIMIT 1")) {
		// $rowcount=mysqli_num_rows($result);
   		$row= mysqli_fetch_assoc($result);
   		// echo $row['id'];
		$count=$row['id']+1;

	}
      $sql="INSERT INTO `patientatregistrationdesk` (`fullnames`, `gender`, `dateofbirth`, `height`, `patientphonenumber`, `patientaddress`, `emergency_contact`, `emergency_phonenumber`, `inmedications`, `othermedicationslist`, `nhifnumber`, `insuranceCardNo`) VALUES ('$fullnames', '$gender', '$dateofbirth', '$height', '$patientphonenumber', '$patientaddress','$emergency_contact_names',                          '$emergency_contact_number','$patientinmedications','$medicationlist','$nhifnumber','$insuranceCardNo')";
		if (mysqli_query($conn, $sql)) {
		$msg->success('New patient record Added. Hospital ID Number for <em>'.$fullnames.'</em> &nbsp is <strong>' .$count.'</strong>');		     
		} else {
		    $msg->error("Error: " . mysqli_error($conn));
		}

   }



 ?>