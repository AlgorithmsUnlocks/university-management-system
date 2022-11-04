<?php
include ('../Database/config.php');
include ('security.php');
include ('includes/header.php');
include ('includes/navbar.php');
?>

<?php 
// Select the table data

 $query = "SELECT * FROM `books_authors`";
 $query_run = mysqli_query($db_conn,$query);

?>


<div class="container manage_items">
<div class="table-responsive">
 <table class="table table-bordered" cellspacing="0" width="100%">

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
        <th> Author Name</th>
        <th>Creation Date</th>
        <th>Action</th>
     </tr>
    </thead>
    <tfoot class="table_foot">
        <tr>
        <th> ID </th>
        <th> Author Name</th>
        <th>Creation Date</th>
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
       
        <td> <?php  echo $row['creation_date']; ?></td>
        <td>
            <div class="action-form">
                <form action="author_action.php" method="POST">
                    <input type="hidden" class="form-control" name="delete_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" class="btn btn-danger" name="delete_btn">
                        <i class="fa-sharp fa-solid fa-delete-left"> </i>
                    </button>
                </form>
                
                <form action="author_edit.php" method="POST">
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