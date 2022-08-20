<?php

//Student Registration of LU

//include ('admin/security.php');

session_start();

include ('Database/config.php');
?>


<?php

if(isset($_GET['email']) && isset($_GET['verification_code'])){

    $query = "SELECT * FROM `student_panel` WHERE `email` = '$_GET[email]' AND `verification_code` = '$_GET[verification_code]'";

    $query_run = mysqli_query($db_conn,$query);
    if($query_run){
        if(mysqli_num_rows($query_run) == 1){
            $fetch_data = mysqli_fetch_assoc($query_run);

            if($fetch_data['is_verify']==0){
                
                $update_query = "UPDATE `student_panel` SET `is_verify`='1' WHERE `email` = '$fetch_data[email]'";

                if(mysqli_query($db_conn,$update_query)){

                    $_SESSION['status'] = "Email Verification is Successfull";
                    header('Location: student_login.php');

                }else{
                    $_SESSION['empty'] = "Problem in Query";
                    header('Location: student_register_form.php');
                }

            }else{

                $_SESSION['empty'] = "Email is already register";
                header('Location: student_register_form.php');
            }
           
        }else{

            $_SESSION['empty'] = "No data Found";
            header('Location: student_register_form.php');
        }
    }else{

        $_SESSION['empty'] = "Verify Query is not run";
        header('Location: student_register_form.php');
    }


}


?>

