<?php
    $admin_email = "luadmin@gmail.com";
    $admin_password  = "luadmin";

    session_start();

     if(isset($_POST['admin_login_btn']))
     {
        if(!empty($admin_email) && !empty($admin_password)){
            if($_POST['admin_email'] == $admin_email && $_POST['admin_password'] == $admin_password){
                    $_SESSION['admin_email'] = $admin_email;
                    header("Location: index.php");
            }
            else{       
                  $_SESSION['success'] = "Incorrect Details";
                  header("Location: login.php");
            }
    
        }else{
                $_SESSION['success'] = "Email / password is empty";
                header("Location: login.php");
        }     
    }else{
            header("Location: login.php");
    }
  
   
?>
  