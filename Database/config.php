<?php
 $server_name = "localhost";
 $user_name = "root";
 $user_password = "";
 $database_name = "project-thesis-manager";

 $db_conn = mysqli_connect($server_name,$user_name,$user_password,$database_name);

 if(!$db_conn){
    die("Database Connections is failed".mysqli_connect_error());
 }else{
   // echo "<script> alert('Database Connection is successfull')</script>";
 }

?>