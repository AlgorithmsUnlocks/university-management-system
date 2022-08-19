
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
          <h6 class="m-0 font-weight-bold text-primary">Update Admin</h6>    
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
                    $query = "SELECT * FROM `admin` WHERE id='$id'";
                    $query_run = mysqli_query($db_conn,$query);

                    foreach($query_run as $row)
                    {
                        ?>
                        <form action="admin.php" method="post"> 
                                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                <div class="form-group">
                                    <input type="text" class='form-control' value="<?php echo $row['user_name'] ?>" name='edit_user_name' placeholder='Username'>
                                </div>
                                <div class="form-group">
                                    <input type="email" class='form-control' value="<?php echo $row['email'] ?>" name='edit_user_email' placeholder='Email Address'>
                                </div>
                                <div class="form-group">
                                    <input type="file" class='form-control' value="<?php echo $row['photo'] ?>" name='edit_user_photo' placeholder='photo'>
                                    <label for="user_photo">Please upload profile photo</label>
                                </div>
                                <div class="form-group">
                                    <input type="password" class='form-control' value="<?php echo $row['password'] ?>" name='edit_user_password' placeholder='Password'>
                                </div>

                                <button type='submit' class='btn btn-primary' name='update_btn'> Update </button>
                                
                        </form>
                         
                        <a href='./register.php'><button type='submit' class='btn btn-warning'> CANCEL </button></a>
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