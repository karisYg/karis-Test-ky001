<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	# code...
	$physician=mysqli_real_escape_string($conn,sanitize_input($_POST['physician']));
	$patient=mysqli_real_escape_string($conn,sanitize_input($_POST['patient']));
	$cardnumber=mysqli_real_escape_string($conn,sanitize_input($_POST['cardnumber']));
	$prescription=mysqli_real_escape_string($conn,sanitize_input($_POST['prescription']));
	$surgicalprocedures=mysqli_real_escape_string($conn,sanitize_input($_POST['surgicalprocedures']));
	$minorillness=mysqli_real_escape_string($conn,sanitize_input($_POST['illness']));
	$vaccination=mysqli_real_escape_string($conn,sanitize_input($_POST['vaccinations']));

	$sql="INSERT INTO `examinationroomrecords` (`cardnumber`, `physician`, `patientnames`, `currentprescription`, `surgicalprocedures`, `majorillness`, `vaccination`) VALUES ('$cardnumber','$physician', '$patient',      '$prescription', '$surgicalprocedures', '$minorillness', '$vaccination')";
	if (mysqli_query($conn,$sql)) {
		# code...
		$msg->success('New record Added. for <em>'.$patient.'</em>');	

	}else{
		$msg->error("Error: " . mysqli_error($conn));
	}


}


 ?>