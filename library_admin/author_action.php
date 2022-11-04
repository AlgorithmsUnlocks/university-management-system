<?php
include ('../Database/config.php');
include ('security.php');
?>

<?php 

// Add 

if(isset($_POST['add_author'])){

    $author_name = $_POST['author_name'];
     
  
 
if(!empty($author_name)){

    $query = "INSERT INTO `books_authors`(`name`) VALUES ('$author_name')";

    $query_run = mysqli_query($db_conn, $query);
    

    if($query_run){

        $_SESSION['message'] = "Author is Added Successfully";
        header('Location: author_manage.php');
     
    }
    else{
        $_SESSION['message_error'] = "Author is not added";
        header('Location: author_manage.php');
    }

}else{
    $_SESSION['message_error'] = "Empty Data is not Accepted";
    header('Location: author_manage.php');
} 
   
}


// Edit 

if(isset($_POST['update_author'])){

    $id = $_POST['edit_id'];  
    $author_name = $_POST['author_name'];

    $query = "UPDATE `books_authors` SET `name`='$author_name' WHERE id = '$id'";

    $query_run = mysqli_query($db_conn, $query);
    

    if($query_run){

        $_SESSION['message'] = "Author is Updated Successfully";
        header('Location: author_manage.php');
     
    }
    else{
        $_SESSION['message'] = "Author is not Updated Successfully";
        header('Location: author_manage.php');
     
    }

}
   

// Delete Teacher

if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `books_authors` WHERE `id`= '$id' ";
    $query_run = mysqli_query($db_conn,$query);
    if($query_run){
        $_SESSION['message_error'] = " Author is Delete Successfully";
        header('Location: author_manage.php');
    }else{
        $_SESSION['message_error'] = "Something Wrong";
        header('Location: author_manage.php');
    }
}



?>

