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
        <div class="card-header py-3 bg-primary">
          <h6 class="m-0 font-weight-bold text-center text-white">Update Teacher Info</h6>    
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
                    $query = "SELECT * FROM `cse_teacher` WHERE id = '$id'";
                    $query_run = mysqli_query($db_conn,$query);
                

                    foreach($query_run as $row)
                    {
                        ?>
                         <form action="action.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <input type="text" class='form-control'name='teacher_name' placeholder='Teacher Name' value="<?php echo $row['teacher_name']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class='form-control'name='teacher_title' placeholder='Title of Teacher' value="<?php echo $row['teacher_title']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" class='form-control'name='teacher_eamil' placeholder='Email Address' value="<?php echo $row['teacher_eamil']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="tel" class='form-control'name='teacher_cell' placeholder='Cell Phone' value="<?php echo $row['teacher_cell']; ?>">
                            </div>
                            <div class="form-group">
                                <textarea name="education_bg" cols="30" rows="3" class='form-control' placeholder='Education Background' value="<?php echo $row['education_bg']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <textarea name="conduct_course" cols="30" rows="3" class='form-control' placeholder='Conduct Courses' value="<?php echo $row['conduct_course']; ?>"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" class='form-control'name='teacher_photo' placeholder='photo' value="<?php echo $row['teacher_photo']; ?>">
                                <label for="teacher_photo">Please upload profile photo</label>
                            </div>
                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                            <button type='submit' class='btn btn-primary' name='update_btn'> Update </button>
                            
                        </form>
                         <br>
                         <div class="d-flex justify-content-start">
                         <a href='cse_teacher.php'><button type='submit' class='btn btn-primary '> CANCEL </button></a>
                         </div>
                         
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
include ('includes/script.php');
include ('includes/footer.php');
?>