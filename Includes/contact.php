<?php
include_once 'connect.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$msg = mysqli_real_escape_string($conn, $_POST['msg']);
$sub = mysqli_real_escape_string($conn, $_POST['subject']);

if (isset($_POST['contactsubmit']))
{
    if (empty($msg) || empty($name) || empty($email)) {
      header('location: ../contact.php?con=empty');
      exit();
      
}
    else {
         if (!preg_match("/^[a-zA-Z]*$/",  $name)){
          header('location: ../contact.php?con=charerror');
          exit();
         }
         else{
          $sql= "INSERT into  contactus (name, email, msg, sub) VALUES ('$name', '$email', '$msg', '$sub');";
          $result = mysqli_query($conn, $sql);
          header('location: ../contact.php?con=success');
          exit();
         }

     
}}
else {
     header('location: ../contact.php?con=failed');
     exit();

}
?> 
