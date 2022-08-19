<?php
include ('../Database/config.php');
include '../stu_security.php';
?>

<?php 

// Add Faculty

if(isset($_POST['register_dean'])){

    $faculty_name = $_POST['faculty_name'];
    $dean_name = $_POST['dean_name'];
    $dean_title = $_POST['dean_title'];
    $dean_tel = $_POST['dean_tel'];
    $dean_cell = $_POST['dean_cell'];
    $dean_email = $_POST['dean_email'];
    $dean_photo = $_FILES['dean_photo'];

    $image_location = $_FILES['dean_photo']['tmp_name'];
    $image_name = $_FILES['dean_photo']['name'];
    $image_des = "upload/".$image_name;



if(!empty($faculty_name) && !empty($dean_name) &&!empty($dean_title) &&!empty($dean_tel) &&!empty($dean_cell) &&!empty($dean_email) &&!empty($dean_photo)){

    $query = "INSERT INTO `faculty`(`faculty_name`, `dean_name`, `dean_title`, `dean_tel`, `dean_cell`, `dean_email`, `dean_photo`) VALUES ('$faculty_name','$dean_name','$dean_title','$dean_tel','$dean_cell','$dean_email','$image_des')";

    $query_run = mysqli_query($db_conn, $query);

    if($query_run){
         
        move_uploaded_file($image_location,$image_des);

        $_SESSION['status'] = "Faculty is added";
        header('Location: faculty.php');
    }
    else{
        $_SESSION['status'] = " Faculty is not added";
        header('Location: faculty.php');
    }

}else{
  $_SESSION['status'] = "Something is wrong here";
  header('Location: faculty.php');
} 
   
}







// Update Faculty

if(isset($_POST['update_btn'])){

    $id = $_POST['edit_id'];
    $faculty_name = $_POST['faculty_name'];
    $dean_name = $_POST['dean_name'];
    $dean_title = $_POST['dean_title'];
    $dean_tel = $_POST['dean_tel'];
    $dean_cell = $_POST['dean_cell'];
    $dean_email = $_POST['dean_email'];
    $dean_photo = $_FILES['dean_photo'];

    $image_location = $_FILES['dean_photo']['tmp_name'];
    $image_name = $_FILES['dean_photo']['name'];
    $image_des = "upload/".$image_name;

    $query = "UPDATE `faculty` SET `faculty_name`='$faculty_name',`dean_name`='$dean_name',`dean_title`='$dean_title',`dean_tel`='$dean_tel',`dean_cell`='$dean_cell',`dean_email`='$dean_email',`dean_photo`='$image_des' WHERE id = '$id'";

    $query_run = mysqli_query($db_conn,$query);

    if($query_run){

        move_uploaded_file($image_location,$image_des);
       // echo "<script>alert('Success')</script>";
        $_SESSION['success'] = "Faculty is update successfully";
        header ('Location: faculty.php');
    }else{
        $_SESSION['success'] = "Data is not Updated";
        header ('Location: faculty.php');
    }
    
}


// Delete Faculty

if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `faculty` WHERE `id`= '$id' ";
    $query_run = mysqli_query($db_conn,$query);
    if($query_run){
        $_SESSION['delete'] = "Faculty is Delete Successfully";
        header('Location: faculty.php');
    }else{
        $_SESSION['delete'] = "Error while delete";
        header('Location: faculty.php');
    }
}




?>
