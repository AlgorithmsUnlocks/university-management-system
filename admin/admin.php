<?php 
include ('security.php');
include ('../Database/config.php');

if(isset($_POST['registeradmin'])){

    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_photo = $_POST['user_photo'];
    $user_password = $_POST['user_password'];
    $user_cfpassword = $_POST['user_cfpassword'];
    
    if(($user_password === $user_cfpassword) && (!empty($user_name) && !empty( $user_email) && !empty($user_photo) && !empty($user_password) && !empty($user_cfpassword))){

        $query = "INSERT INTO `admin`(`user_name`, `email`, `photo`, `password`) VALUES ('$user_name','$user_email','$user_photo','$user_password')";
        
        $query_run = mysqli_query($db_conn,$query);

        if($query_run){
            $_SESSION['success'] = "Admin Profile is added";
            header('Location: register.php');
        }
        else{
            $_SESSION['success'] = "Admin Profile is not added";
            header('Location: register.php');
        }
    }else{
        $_SESSION['success'] = "Value is not Valid for register";
        header('Location: register.php');
    }
     
}


// Update admin

if(isset($_POST['update_btn'])){

    $id = $_POST['edit_id'];
    $edit_user_name = $_POST['edit_user_name'];
    $edit_user_email = $_POST['edit_user_email'];
    $edit_user_photo = $_POST['edit_user_photo'];
    $edit_user_password = $_POST['edit_user_password'];

    $query = "UPDATE `admin` SET `user_name`='$edit_user_name',`email`='$edit_user_email',`photo`='$edit_user_photo',`password`='$edit_user_password' WHERE id= '$id'";

    $query_run = mysqli_query($db_conn,$query);

    if($query_run){
       // echo "<script>alert('Success')</script>";
        $_SESSION['success'] = "Admin is update successfully";
        header ('Location: register.php');
    }else{
        $_SESSION['success'] = "Data is not Updated";
        header ('Location: register.php');
    }

    
}



//delete Id 

if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `admin` WHERE `id`= '$id' ";
    $query_run = mysqli_query($db_conn,$query);
    if($query_run){
        $_SESSION['delete'] = "Admin is Delete Successfully";
        header('Location: register.php');
    }else{
        $_SESSION['delete'] = "Error while delete";
        header('Location: register.php');
    }
}




//Admin Login System 

if(isset($_POST['admin_login_btn'])){
    $login_email = $_POST['login_email'];
    $login_password = $_POST['login_password'];

    $query = "SELECT * FROM `admin` WHERE email = '$login_email' AND password = ' $login_password'";
    $query_run = mysqli_query($db_conn,$query);

    if(mysqli_num_rows( $query_run)> 0){
        $_SESSION['email'] = $login_email;
        header('Location: index.php');
    }else{
        $_SESSION['status'] = "Email id / password is invalid";
        header('Location: login.php');
    }
}
?>