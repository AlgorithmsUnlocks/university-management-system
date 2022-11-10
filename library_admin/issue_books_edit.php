<?php
include('../Database/config.php');
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


      <!-- Begin Page Content -->
      <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-end mb-4">
    
    <h1 class="h4 mb-0 text-success">Issue Books Edit</h1>
    
     
</div>



<!-- Content Row -->

<div class="container addBox">

<?php 
 if(isset($_POST['edit_btn'])){
  $id = $_POST['edit_id'];
  $query = "SELECT * FROM `issue_book` WHERE `id` = '$id'";
  $query_run = mysqli_query($db_conn,$query);

  foreach($query_run as $row){

    ?>

 
    <form action="issue_book_action.php" method="POST" enctype="multipart/form-data">
        <div class="form first">
            <div class="details_books">
            <span class="title text-center"> Issue Books Edit
            </span>

            <div class="feilds">

            <div class="form-group">
               <label for="">Select Action </label>
               <select name="update_issue" id="" class="form-control">
                <option value="<?php echo $row['message']; ?>">
                <?php
                  echo $row['message'];
                ?>
                </option>
                <?php 
                 if($row['message'] == 'Return'){
                    echo $row['message'] = "Not Return";
                    ?>
                    <option value="<?php echo $row['message'] = "Not Return"; ?>"><?php echo $row['message'] = "Not Return"; ?>  </option>
                    <?php
                 }else{
                    ?>
                     <option value="<?php echo $row['message'] = "Return"; ?>"><?php echo $row['message'] = "Return"; ?>  </option>
                    <?php
                 }
                ?>     
               
               </select>

            </div>
            <div class="form-group">
                <label for="">*** Click the button for update</label>
                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
               <input type="submit" value="Edit Action" class="form-control btn btn-warning" name="update_issue_book">
            </div>




            </div>
            </div>
          
        </div>
    </form>


    <?php
  }

 }else{
    echo "Something went wrong";
 }

?>
</div>





<!--
Add Category Page Css
-->

<style>
    .addBox {
    background-color: #009688;
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
 include('includes/script.php');
 include('includes/footer.php');
 ?>