<?php
include ('../Database/config.php');
include ('security.php');
include ('includes/header.php');
include ('includes/navbar.php');
?>


<?php 


/* Books List */

$query = "SELECT * FROM `books_list";
$query_run = mysqli_query($db_conn,$query);


/* Register Student */

$query2 = "SELECT * FROM `student_panel";
$query_run2 = mysqli_query($db_conn,$query2);

/* Books Authors */

$query1 = "SELECT * FROM `books_authors";
$query_run1 = mysqli_query($db_conn,$query1);
 


?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-end mb-4">
                        
                        <h1 class="h4 mb-0 text-success">Assign Books To Register Student</h1>
                         
                    </div>

                   

                    <!-- Content Row -->

    <div class="container addBox">
      <form action="#" method="post" enctype="multipart/form-data">
        <div class="form first">
            <div class="details_books">
                <span class="title text-center"> Assign Books Details
                <?php 
                     if(isset($_SESSION['message']) && $_SESSION['message'] != ''){
                        echo '<br> <h4 class="text-danger">'.$_SESSION['message'].'</h4>';
                        unset($_SESSION['message']);
                     }
                    ?>
                     
                </span>
                
                <div class="feilds">

                    <div class="form-group">
                        <label for="">Book Name</label>
                        <select name="books_list" class="form-control">
                            <?php while($row = mysqli_fetch_array($query_run)):; ?>
                            <option><?php echo $row[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                        <small>*** Book  name </small>
                    </div>
                    <div class="form-group">
                        <label for="">Student Name</label>
                        <select name="book_author" class="form-control">
                            <?php while($row = mysqli_fetch_array($query_run2)):; ?>
                            <option><?php echo $row[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                        <small>*** Regsister student name </small>
                    </div>
                    <div class="form-group">
                        <label for=""> Book Assign Date </label>
                        <input type="date" name="" class="form-control">
                        <small>*** Assign date of book</small>
                    </div>
                    <div class="form-group">
                        <label for=""> Book Return Date </label>
                        <input type="date" name="" class="form-control">
                        <small>*** Return date of book</small>
                    </div>


                </div>
                <div class="save_feild text-center">
                    <button type="submit" class="btn btn-primary" name="register_book"><i class="fa-solid fa-book"> Assign Books </i></button>
                </div>

            </div>
        </div>
      </form>
     </div>



 

<!--
    Add Category Page Css
 -->
  
   <style>
    .addBox {
        background-color: #9136cc;
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