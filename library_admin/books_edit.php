<?php
include ('../Database/config.php');
include ('security.php');
include ('includes/header.php');
include ('includes/navbar.php');
?>


<?php 

/* Books Category */

$query = "SELECT * FROM `books_category";
$query_run = mysqli_query($db_conn,$query);

/* Books Authors */

$query2 = "SELECT * FROM `books_authors";
$query_run2 = mysqli_query($db_conn,$query2);


 


?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-end mb-4">
                        
                        <h1 class="h4 mb-0 text-success">Edit Books</h1>
                         
                    </div>

                   

                    <!-- Content Row -->

    <div class="container addBox">


    <?php 
                // Edit Button Actions 
                if(isset($_POST['edit_btn'])){
                    $id = $_POST['edit_id'];
                    $query3 = "SELECT * FROM `books_list` WHERE id = '$id'";
                    $query_run3 = mysqli_query($db_conn,$query3);
                

                    foreach($query_run3 as $row3)
                    {
                        ?>


      <form action="action_books.php" method="post" enctype="multipart/form-data">
        <div class="form first">
            <div class="details_books">
                <span class="title text-center"> Books Details
                <?php 
                     if(isset($_SESSION['message']) && $_SESSION['message'] != ''){
                        echo '<br> <h4 class="text-danger">'.$_SESSION['message'].'</h4>';
                        unset($_SESSION['message']);
                     }
                    ?>
                     
                </span>
                
                <div class="feilds">

                    <div class="form-group">
                        <label for=""> Book Name </label>
                        <input type="text" name="book_name" class="form-control" value="<?php echo $row3['book_name']; ?>">
                        <small>*** Full name of book</small>
                    </div>
                    <div class="form-group">
                        <label for="">Book Authors</label>
                        <select name="book_author" class="form-control">
                            <?php while($row = mysqli_fetch_array($query_run2)):; ?>
                            <option><?php echo $row[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                        <small>*** Book author name </small>
                    </div>
                    <div class="form-group">
                        <label for="">Book Category</label>
                        <select name="book_category" class="form-control">
                            <?php while($row = mysqli_fetch_array($query_run)):; ?>
                            <option><?php echo $row[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                        <small>*** Book category name </small>
                    </div>
                    <div class="form-group">
                        <label for=""> ISBN Number </label>
                        <input type="text" name="isbn_number" class="form-control" value="<?php echo $row3['isbn_number']; ?>"> 
                        <small>*** International Standard Books Number</small>
                    </div>
                   
                    <div class="form-group">
                            <label for="">Book Cover Photo</label>
                           <input type="file" class='form-control' name='book_photo' value="<?php echo $row3['book_photo']; ?>">
                            <small>Please uploada cover photo</small>
                     </div>

                </div>
                <div class="save_feild text-center">
                    <input type="hidden" name="edit_id" value="<?php echo $row3['id']; ?>">
                    <button type="submit" class="btn btn-warning" name="update_book"><i class="fa-solid fa-book"> Update Books </i></button>
                </div>

            </div>
        </div>
      </form>


        <?php

       }
     }

    ?>
     </div>



 

<!--
    Add Category Page Css
 -->
  
   <style>
    .addBox {
        background-color: #36b9cc;
        padding: 25px 15px;
        border-radius: 25px 75px 25px 75px;
        border: none;

    }
    .form .details_books .title {
        color: white;
        font-size: 25px;
        font-weight: 600;
        line-height: 25px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: space-around;
        border: 2px dashed;
        border-radius: 25px 75px 25px 75px;
        padding: 10px 20px;
        margin-bottom: 25px;
    }
    .form .details_books .feilds{
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        color: white;
    }
    .form .details_books .feilds .form-group{
        width: calc(100% / 2 - 15px);
    }
    .save_feild button {
        width: calc(100% / 2);
        height: 46px;
        font-weight: 600;
    }
    
   </style>


<?php
include ('includes/script.php');
include ('includes/footer.php');
?>