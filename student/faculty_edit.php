
<?php
include ('../Database/config.php');
include ('security.php');
include ('includes/header.php');
include ('includes/navbar.php');
?>


<div class="cotainer-fluid">

<div class="container">
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Update Faculty</h6>    
       </div>
        
       <div class="container">
        <div class="card-body">

        <?php 
                if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
                    echo '<h4 class="text-center admin-error">'. $_SESSION['success'].'</h4>';
                    unset($_SESSION['success']);
                   
                }
        ?>
          
            <?php 
                // Edit Button Actions 
                if(isset($_POST['edit_btn'])){
                    $id = $_POST['edit_id'];
                    $query = "SELECT * FROM `faculty` WHERE id='$id'";
                    $query_run = mysqli_query($db_conn,$query);

                    foreach($query_run as $row)
                    {
                        ?>
                         <form action="add_faculty.php" method="POST">

                            

                            <div class="form-group">
                                <input type="text" class='form-control'name='faculty_name' placeholder='Faculty Name' value="<?php echo $row['faculty_name']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class='form-control'name='dean_name' placeholder='Name of Dean' value="<?php echo $row['dean_name']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class='form-control'name='dean_title' placeholder='Title of Dean' value="<?php echo $row['dean_title']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="tel" class='form-control'name='dean_tel' placeholder='Tel. Office' value="<?php echo $row['dean_tel']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class='form-control'name='dean_cell' placeholder='Cell Number' value="<?php echo $row['dean_cell']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" class='form-control'name='dean_email' placeholder='Dean Email' value="<?php echo $row['dean_email']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="file" class='form-control'name='dean_photo' placeholder='photo' value="<?php echo $row['dean_photo']; ?> ">
                                <label for="dean_photo">Please upload profile photo</label>
                            </div>
                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                            <button type='submit' class='btn btn-primary' name='update_btn'> Update </button>
                            
                        </form>
                         
                        <a href='./faculty.php'><button type='submit' class='btn btn-warning'> CANCEL </button></a>
                        <?php

                    }
                }
                
            ?>

                 
        </div>

       </div>
       

  </div>
 </div>

</div>
 



  

<?php
    include 'includes/script.php';
    include 'includes/footer.php';
?>