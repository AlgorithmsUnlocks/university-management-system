<?php
include ('../Database/config.php');
include ('security.php');
include ('includes/header.php');
include ('includes/navbar.php');
?>

<?php 
/* Books Category */

$query = "SELECT * FROM `issue_book";
$query_run = mysqli_query($db_conn,$query);



?>
<style>
     
      
     .wrapper .table-content{
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 25px 0;
     }
     .wrapper .table-content form button{
        width: 250px;
        padding: 10px 0;
        font-size: 18px;
        line-height: 22px;
     }
     
</style>


<div class="container-fluid manage_items m-3">
 
 <h4 class="text-center text-primary border p-2 m-3">
    All Isse Books
 </h4>
 <h4 class="text-center">
  <?php 
   if(isset($_SESSION['update']) && $_SESSION['update'] != ''){
    echo '<h4 class="text-success text-center">'.$_SESSION['update'].'</h4>';
    unset($_SESSION['update']);
   }
  
  ?>

 </h4>

<div class="table-responsive">

<div class="wrapper">
        <div class="table-content">

            <form action="xlsx_pdf_action.php" method="post">
               <button type="submit" class="btn btn-success" name="xlsx_isse_books_btn">Download XLSX</button> 
            </form>
            <form action="xlsx_pdf_action.php" method="post">
               <button type="submit" class="btn btn-primary" name="pdf_isse_books_btn">Download PDF</button>
            </form>
            
     </div>
   </div>



 <table class="table table-bordered" cellspacing="0" width="100%" id="datatablesapi">

    <?php 
     
     if(isset($_SESSION['message']) && $_SESSION['message'] != ''){
        echo '<h4 class="message_text">'.$_SESSION['message'].'</h4>';
        unset($_SESSION['message']);
     }
     else if(isset($_SESSION['message_error']) && $_SESSION['message_error'] != ''){
        echo '<h4 class="message_Text_error">'.$_SESSION['message_error'].'</h4>';
        unset($_SESSION['message_error']);
     }
    
    ?> 

    <thead class="table_head">
     <tr>
        <th> ID </th>
        <th> Book Name</th>
        <th> Student Name </th>
        <th>Book Assign Date</th>
        <th>Book Return Date</th>
        <th>Message</th>
        <th>Action</th>
     </tr>
    </thead>
    <tfoot class="table_foot">
        <tr>
            <th> ID </th>
            <th> Book Name</th>
            <th> Student Name </th>
            <th>Book Assign Date</th>
            <th>Book Return Date</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
    </tfoot>
    <tbody>


     <?php 
     
     // fetch table data 

     if(mysqli_num_rows($query_run) > 0){
        while($row = mysqli_fetch_assoc($query_run)){
            ?>

       <tr>
        <td> <?php echo $row['id']; ?> </td>
        <td> <?php echo $row['name']; ?></td>
        <td> <?php  echo $row['student_name']; ?></td>
        <td> <?php echo $row['assign_date']; ?> </td>
        <td> <?php echo $row['return_date']; ?></td>
        <td> <?php
         
         if($row['message'] == 'Return'){
            ?>
            <span style="color: green; font-weight: 600"><i class="fa-solid fa-circle-check"> 
            </i> <?php echo $row['message']; ?> </span>
            <?php
         }else{
            ?>
            <span style="color: red; font-weight: 600"><i class="fa-solid fa-circle-xmark"> 
            </i> <?php echo $row['message']; ?> </span>
            <?php
         }
        
        ?> </td>
        <td>
            <div class="action-form">
                <form action="issue_book_action.php" method="POST">
                    <input type="hidden" class="form-control" name="delete_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" class="btn btn-danger" name="delete_btn">
                        <i class="fa-sharp fa-solid fa-delete-left"> </i>
                    </button>
                </form>  
                <form action="issue_books_edit.php" method="POST">
                    <input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>"> 
                    <button type="submit" class="btn btn-warning" name="edit_btn">
                    <i class="fa-solid fa-pen-to-square">  </i>
                    </button>
                </form>
            </div>
            
        </td>
       </tr>
       
       <?php
        }
     }else{
        echo 'Data is not found';
     }
     
     ?>

    </tbody>


  </table>
 </div>
</div>
 



<style>
    .action-form{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row-reverse;
    }
    .action-form form{
        margin-right: 10px;
    }
    .action-form form:first-child{
        margin-right: 0;
    }
    .manage_items{
        box-shadow: 0 0.15rem 1.75rem 0 rgb(58 59 69 / 10%) !important;
        background: white;
        border-radius: 20px;
        margin-bottom: 15px;
        padding: 20px;
    }
    .message_text{
        color: Green;
        text-align: center;
        padding: 15px 0;
        font-weight: 700;
        font-size: 22px;
    }
    .message_Text_error{
        color: red;
        text-align: center;
        padding: 15px 0;
        font-weight: 700;
        font-size: 22px;
    }
    thead.table_head{
        background: #2653d4a8;
        border: none;
        color: white;
    }
    tfoot.table_foot{
        background: #2653d4a8;
        border: none;
        color: white;
    }
</style>

<?php
include ('includes/script.php');
include ('includes/footer.php');
?>