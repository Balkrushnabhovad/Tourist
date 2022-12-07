<?php
include_once 'connect.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$number = mysqli_real_escape_string($conn, $_POST['number']);
$msg = mysqli_real_escape_string($conn, $_POST['msg']);
$packageid = "01";

if (isset($_POST['bookingsubmit']))
{
    if (empty($msg) || empty($name) || empty($number)) {
      header('location: ../destination_details.php?booking=empty');
      exit();
      
}
    else {
         if (!preg_match("/^[a-zA-Z]*$/",  $name)){
          header('location: ../destination_details.php?booking=charerror');
          exit();
         }
         else{
          $sql= "INSERT into  booking (name, number, msg, packageid) VALUES ('$name', '$number', '$msg', '$packageid');";
          $result = mysqli_query($conn, $sql);
          header('location: ../destination_details.php?booking=success');
          exit();
         }

     
}}
else {
     header('location: ../destination_details.php?booking=failed');
     exit();

}
?> 
