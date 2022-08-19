<?php 
session_start();
session_unset();
session_destroy();

$_SESSION['login_error'] = "Opps, you are logout";
header('Location: student_login.php');

?>