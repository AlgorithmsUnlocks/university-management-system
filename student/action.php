<?php
include ('../Database/config.php');
include ('security.php');
?>

<?php 

// Add Teacher

if(isset($_POST['register_teacher'])){

    $teacher_name = $_POST['teacher_name'];
    $teacher_title = $_POST['teacher_title'];
    $teacher_eamil = $_POST['teacher_eamil'];
    $teacher_cell = $_POST['teacher_cell'];
    $education_bg = $_POST['education_bg'];
    $conduct_course = $_POST['conduct_course'];
    $teacher_photo = $_FILES['teacher_photo'];


    $imageLocation = $_FILES['teacher_photo']['tmp_name'];
    $imageName = $_FILES['teacher_photo']['name'];
    $image_des = "upload/".$imageName;
    
 
if(!empty($teacher_name) && !empty($teacher_title) && !empty($teacher_eamil) && !empty($teacher_cell) &&!empty($education_bg) && !empty($conduct_course) && !empty($teacher_photo)){

    $query = "INSERT INTO `cse_teacher`(`teacher_name`, `teacher_title`, `teacher_eamil`, `teacher_cell`, `education_bg`, `conduct_course`, `teacher_photo`) VALUES ('$teacher_name','$teacher_title','$teacher_eamil','$teacher_cell','$education_bg','$conduct_course','$image_des')";

    $query_run = mysqli_query($db_conn, $query);
    

    if($query_run){

        move_uploaded_file($imageLocation,$image_des);

        $_SESSION['success'] = "Teacher is added";
        header('Location: cse_teacher.php');
    }
    else{
        $_SESSION['success'] = " Teacher is not added";
        header('Location: cse_teacher.php');
    }

}else{
  $_SESSION['success'] = "Something is wrong";
  header('Location: cse_teacher.php');
} 
   
}


// Edit Teacher

if(isset($_POST['update_btn'])){

    $id = $_POST['edit_id'];
    $teacher_name = $_POST['teacher_name'];
    $teacher_title = $_POST['teacher_title'];
    $teacher_eamil = $_POST['teacher_eamil'];
    $teacher_cell = $_POST['teacher_cell'];
    $education_bg = $_POST['education_bg'];
    $conduct_course = $_POST['conduct_course'];
    $teacher_photo = $_FILES['teacher_photo'];


    $imageLocation = $_FILES['teacher_photo']['tmp_name'];
    $imageName = $_FILES['teacher_photo']['name'];
    $image_des = "upload/".$imageName;
    

    $query = "UPDATE `cse_teacher` SET `teacher_name`='$teacher_name',`teacher_title`='$teacher_title',`teacher_eamil`='$teacher_eamil',`teacher_cell`='$teacher_cell',`education_bg`='$education_bg',`conduct_course`='$conduct_course',`teacher_photo`='$image_des' WHERE id = '$id'";

    $query_run = mysqli_query($db_conn, $query);
    

    if($query_run){

        move_uploaded_file($imageLocation,$image_des);

        $_SESSION['success'] = "Teacher is Updated";
        header('Location: cse_teacher.php');
    }
    else{
        $_SESSION['success'] = " Teacher is not Updated";
        header('Location: cse_teacher.php');
    }

}
   

// Delete Teacher

if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `cse_teacher` WHERE `id`= '$id' ";
    $query_run = mysqli_query($db_conn,$query);
    if($query_run){
        $_SESSION['delete'] = "Teacher is Delete Successfully";
        header('Location: cse_teacher.php');
    }else{
        $_SESSION['delete'] = "Error while delete";
        header('Location: cse_teacher.php');
    }
}



?>

