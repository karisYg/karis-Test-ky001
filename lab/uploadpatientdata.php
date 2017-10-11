<?php
$msg = new \Plasticbrain\FlashMessages\FlashMessages();
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  # code...
  $patientid=mysqli_real_escape_string($conn,$_POST['patientcardnumber']);
  $diagnostics=mysqli_real_escape_string($conn,$_POST['labdiagnosis']);
  // $laboratorist=$_SESSION['laboratorist'];
  $laboratorist="karis";
  $location="no document attached";
  if (!empty($_FILES['attacheddocument'])) {
    //$fileName = time().'_'.basename($_FILES["document1"]["name"]);
    foreach ($_FILES['attacheddocument']['name'] as $key => $name) {
      # code...
      $newfilename=time()."_".$key.$_FILES['attacheddocument']['name'][$key];
      move_uploaded_file($_FILES['attacheddocument']['tmp_name'][$key],"documentsattached/".$newfilename);
      $location="documentsattached/".$newfilename;
      $files[]=$location;
      // $location=array();
      // array_push($onelocation);
      // echo $newfilename;
    }
    $onelocation=implode(",",$files);
    $sql="INSERT INTO `patientlabresults` (`patientid`, `diagnostics`, `laboratorist`, `documentlocation`)
    VALUES ('$patientid', '$diagnostics', '$laboratorist', '$onelocation')";
    if (mysqli_query($conn,$sql)) {
      $msg->success("Patient record was successfully updated");
    }else{
      $msg->error("Action could not be performed".mysqli_error($conn));
    }

  }

}







 ?>
