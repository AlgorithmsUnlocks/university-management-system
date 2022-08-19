<?php
 session_start();

 if(!$_SESSION['st_id']){
   
   $_SESSION['login_error'] = "Opps, something is wrong";
   header('Location: student_login.php');
 }

?>