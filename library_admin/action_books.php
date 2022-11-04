<?php
include ('../Database/config.php');
include ('security.php');
?>

<?php 

// Add 

if(isset($_POST['register_book'])){
     
    $book_name = $_POST['book_name'];
    $book_author = $_POST['book_author'];
    $book_category = $_POST['book_category'];
    $isbn_number = $_POST['isbn_number'];
    $book_price = $_POST['book_price'];
    $book_photo = $_FILES['book_photo'];
   
    $imageLocation = $_FILES['book_photo']['tmp_name'];
    $imageName = $_FILES['book_photo']['name'];
    $image_des = "upload/".$imageName;
   
    if(!empty($book_name) && !empty($book_author) && !empty($book_category) && !empty($isbn_number) && !empty($book_price)){
       
       $query3 = "INSERT INTO `books_list`(`book_name`, `book_author`, `book_category`, `isbn_number`, `books_price`, `book_photo`) VALUES ('$book_name','$book_author','$book_category','$isbn_number','$books_price','$image_des')";
   
       $query_run3 = mysqli_query($db_conn,$query3);
       if($query_run3){
   
           move_uploaded_file($imageLocation,$image_des);
   
          $_SESSION['message'] = "Book has been Register Successfully";
           header('Location: add_books.php');
       }else{
            $_SESSION['message'] = " Books is not added";
           header('Location: add_books.php');
       }
   
    }else{
        $_SESSION['message'] = "Feild is empty";
       header('Location: add_books.php');
    }
   
   }else{
       echo '<script>alert("Wrong Details"); </script>';
   }


// Edit 

if(isset($_POST['update_book'])){

    $id = $_POST['edit_id'];  
    $book_name = $_POST['book_name'];
    $book_author = $_POST['book_author'];
    $book_category = $_POST['book_category'];
    $isbn_number = $_POST['isbn_number'];
    $book_photo = $_FILES['book_photo'];
   
    $imageLocation = $_FILES['book_photo']['tmp_name'];
    $imageName = $_FILES['book_photo']['name'];
    $image_des = "upload/".$imageName;

    $query = "UPDATE `books_list` SET `book_name`='$book_name',`book_author`='$book_author',`book_category`='$book_category',`isbn_number`='$isbn_number', `book_photo`='$image_des' WHERE `id` ='$id'";

    $query_run = mysqli_query($db_conn, $query);
    

    if($query_run){

        $_SESSION['message'] = "Books is Updated Successfully";
        header('Location: manage_books.php');
     
    }
    else{
        $_SESSION['message'] = "Books is not Updated Successfully";
        header('Location: manage_books.php');
     
    }

}
   

// Delete Teacher

if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `books_list` WHERE `id`= '$id' ";
    $query_run = mysqli_query($db_conn,$query);
    if($query_run){
        $_SESSION['message_error'] = " Books is Delete Successfully";
        header('Location: manage_books.php');
    }else{
        $_SESSION['message_error'] = "Something Wrong";
        header('Location: manage_books.php');
    }
}



?>

