<?php
 session_start();

 if(!$_SESSION['st_id']){
   
  echo "<script>alert('You not Allow for this action'); </script>";
  //echo "<script>location.href='../student_login.php'; </script>";
  header('location: ../student_login.php');

 }

?>