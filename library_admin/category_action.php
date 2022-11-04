<?php
include ('../Database/config.php');
include ('security.php');
?>

<?php 

// Add 

if(isset($_POST['add_category'])){

    $category_name = $_POST['category_name'];
    $category_status = $_POST['category_status'];
  
 
if(!empty($category_name) && !empty($category_status)){

    $query = "INSERT INTO `books_category`(`name`, `status`) VALUES ('$category_name','$category_status')";

    $query_run = mysqli_query($db_conn, $query);
    

    if($query_run){

        $_SESSION['message'] = "Category is Added Successfully";
        header('Location: manage_category.php');
     
    }
    else{
        $_SESSION['message_error'] = "Category is not added";
        header('Location: manage_category.php');
    }

}else{
    $_SESSION['message_error'] = "Empty Data is not Accepted";
    header('Location: manage_category.php');
} 
   
}


// Edit 

if(isset($_POST['update_category'])){

    $id = $_POST['edit_id'];  
    $category_name = $_POST['category_name'];
    $category_status = $_POST['category_status'];
  

    $query = "UPDATE `books_category` SET `name`='$category_name',`status`='$category_status' WHERE id = '$id'";

    $query_run = mysqli_query($db_conn, $query);
    

    if($query_run){

        $_SESSION['message'] = "Category is Updated Successfully";
        header('Location: manage_category.php');
    }
    else{
        $_SESSION['message_error'] = " Category is not Updated";
        header('Location: manage_category.php');
    }

}
   

// Delete Teacher

if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `books_category` WHERE `id`= '$id' ";
    $query_run = mysqli_query($db_conn,$query);
    if($query_run){
        $_SESSION['message_error'] = " Category is Delete Successfully";
        header('Location: manage_category.php');
    }else{
        $_SESSION['message_error'] = "Something Wrong";
        header('Location: manage_category.php');
    }
}



?>

