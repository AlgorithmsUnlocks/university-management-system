<?php

//Student Registration of LU

include ('admin/security.php');
include ('Database/config.php');
?>

<?php

if(isset($_POST['register_student'])){

    $student_name = $_POST['student_name'];
    $student_email = $_POST['student_email'];
    $student_phone = $_POST['student_phone'];
    $student_id = $_POST['student_id'];
    $student_department = $_POST['student_department'];
    $student_dob = $_POST['student_dob'];
    $student_password = $_POST['student_password'];
    $student_cfpassword = $_POST['student_cfpassword'];
    $student_avater = $_FILES['student_avater'];


    $imageLocation = $_FILES['student_avater']['tmp_name'];
    $imageName = $_FILES['student_avater']['name'];
    $image_des = "upload/".$imageName;

    $phone_rgex = "/(\+88)?-?01[3-9]\d{8}/";
    $email_regx = "/([a-z\d][a-z\d_\-.]+[a-z\d]){1,10}@lus.ac.bd/";

    $duplicate_student_id = mysqli_query($db_conn,"SELECT `st_id` FROM `student_panel` WHERE `st_id` ='$student_id'");
    $duplicate_student_email = mysqli_query($db_conn,"SELECT `email` FROM `student_panel` WHERE `email` = '$student_email'");
    $duplicate_student_phone = mysqli_query($db_conn,"SELECT `phone` FROM `student_panel` WHERE `phone` = '$student_phone'");





    if(!empty($student_name) && !empty($student_email) && !empty($student_phone) && !empty($student_id) && !empty($student_department) && !empty($student_dob) && !empty($student_password) && !empty($student_cfpassword) && !empty($student_avater)){

       if(!preg_match($phone_rgex,$student_phone)){

        $_SESSION['empty'] = "Phone number is not accepted";
        header('Location: student_register_form.php');

       }else if(mysqli_num_rows($duplicate_student_id)){
        $_SESSION['empty'] = "Student id is already used";
        header('Location: student_register_form.php');

       }else if(mysqli_num_rows($duplicate_student_email)){
        $_SESSION['empty'] = "Student email is already used";
        header('Location: student_register_form.php');

       }else if(mysqli_num_rows($duplicate_student_phone)){
        $_SESSION['empty'] = "Student phone number is already used";
        header('Location: student_register_form.php');

       }else if($student_password !== $student_cfpassword){
        $_SESSION['empty'] = "Password and Confirm password is not match";
        header('Location: student_register_form.php');

       }else if(!preg_match($email_regx,$student_email)){

        $_SESSION['empty'] = "Email is not valid";
        header('Location: student_register_form.php');

       }
       else{

            $query = "INSERT INTO `student_panel`(`name`, `email`, `phone`, `st_id`, `department`, `dob`, `password`, `profile`) VALUES ('$student_name','$student_email','$student_phone','$student_id','$student_department','$student_dob','$student_password','$image_des')";

            $query_run = mysqli_query($db_conn,$query);
        
            if($query_run){
                move_uploaded_file($imageLocation,$image_des);

                $_SESSION['status'] = "Congratulations, Your registration is completed";
                header('Location: student_login.php');
            }else{
                echo "<script>alert('Stuent Registtration is failed');</script>";
                header('Location: student_register_form.php');
            }
       }


         
    }else{

        $_SESSION['empty'] = "Opps, You have enter wrong details";
        header('Location: student_register_form.php');
    }
     
}




// Student Login Actions

if(isset($_POST['login_student'])){

    $student_id = $_POST['student_id'];
    $student_password = $_POST['student_password'];
   
    $query = mysqli_query($db_conn,"SELECT * FROM `student_panel` WHERE `st_id` = '$student_id' AND `password` = '$student_password'");

    if(!empty($student_id) && !empty($student_password)){

        if(mysqli_num_rows($query) > 0){
          
            $_SESSION['st_id'] = $student_id;
            $_SESSION['password'] = $student_password;
                      
            $_SESSION['login_success'] = "Congratulation, You have successfully logged in";
            header('Location: student/index.php');

        }else{
            $_SESSION['login_error'] = "Student id and password is not match our server";
            header('Location: student_login.php'); 
        }

    }else{
        $_SESSION['login_error'] = "Opps, something is wrong";
        header('Location: student_login.php');
    }

}


// Student Profile Data Update

if(isset($_POST['update_student'])){

    $student_id = $_SESSION['st_id'];
    $student_name = $_POST['student_name'];
    $student_email = $_POST['student_email'];
    $student_phone = $_POST['student_phone'];
    $student_id = $_POST['student_id'];
    $student_department = $_POST['student_department'];
    $student_dob = $_POST['student_dob'];
    $student_password = $_POST['student_password'];
    $student_cfpassword = $_POST['student_cfpassword'];
    $student_avater = $_FILES['student_avater'];


    $imageLocation = $_FILES['student_avater']['tmp_name'];
    $imageName = $_FILES['student_avater']['name'];
    $image_des = "upload/".$imageName;

    $query = "UPDATE `student_panel` SET `name`='$student_name',`email`='$student_email',`phone`='$student_phone',`st_id`='$student_id',`department`='$student_department',`dob`='$student_dob',`password`='$student_password',`profile`='$image_des' WHERE `st_id` = '$student_id'";

    $query_run = mysqli_query($db_conn, $query);

    if($query_run){

        move_uploaded_file($imageLocation,$image_des);

        $_SESSION['success'] = "Profile data is updated";
        header('Location: student/student_profile.php');
    }
    else{
        $_SESSION['success'] = " Profile data is not updated";
        header('Location: student/student_profile.php');
    }

}
 


?>