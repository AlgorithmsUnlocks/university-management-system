
<?php 
include('../Database/config.php');
include('security.php');
?>

<?php

if(isset($_POST['issue_book'])){
   
    $books_list = $_POST['books_list'];
    $student_name = $_POST['student_name'];
    if(isset($_POST['assign_date'])){
        $assign_date = $_POST['assign_date'];
    }else{
        echo "Not seleted";
    }
    if(isset($_POST['return_date'])){
        $return_date = $_POST['return_date'];
    }else{
        echo "Not seleted";
    }

    // echo $books_list.$book_author.$assign_date.'THIS is '.$return_date;    
    if($books_list == null || $student_name == null || $assign_date == null || $return_date == null){
       
        $_SESSION['missing'] ='Missing details. Please enter all fields';
        header('location: add_issue_books.php');
    }else{
        $query = "INSERT INTO `issue_book`(`name`, `student_name`, `assign_date`, `return_date`) VALUES ('$books_list','$student_name','$assign_date','$return_date')";

        $query_run = mysqli_query($db_conn,$query);
        if($query_run){
            echo "<script>alert('Issue book is assign success')</script>";
            echo "<script>location.href='add_issue_books.php';</script>";
        }else{
            echo "Database Query Problem";
        }
    }
    
}else if(isset($_POST['update_issue_book'])){
    $id = $_POST['edit_id'];
    $update_issue = $_POST['update_issue'];
    $query = "UPDATE `issue_book` SET `message`= '$update_issue' WHERE `id` = '$id'";
    $query_run = mysqli_query($db_conn,$query);
    if($query_run){
       $_SESSION['update'] ='Issue Book is Update Successfully with id = '.$id;
       header('location: manage_issue_books.php');
    }
}



?>