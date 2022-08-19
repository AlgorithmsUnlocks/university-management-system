<?php
include ('../Database/config.php');
include '../stu_security.php';
include ('includes/header.php');
include ('includes/navbar.php');

$student_id = $_SESSION['st_id'];
$query = mysqli_query($db_conn,"SELECT * FROM `student_panel` WHERE `st_id` = '$student_id'") or die('query failed');
 if(mysqli_num_rows($query) > 0){
    $fetch = mysqli_fetch_assoc($query);
}
?>

<div class="container">
        <form action="../student_action.php" method="post" enctype="multipart/form-data">
                  <div class="register-form">
                      <div class="form-group">
                        <input type="text" class='form-control' name='student_name' value="<?php echo $fetch['name'] ?>" require>
                        
                      </div>
                      <div class="form-group">

                      <input type="email" class='form-control' name='student_email' value="<?php echo $fetch['email'] ?>" require>
                      </div>
                      <div class="form-group">
                    
                        <input type="text" class='form-control' name='student_phone' value="<?php echo $fetch['phone'] ?>" require>
                      </div>
                      <div class="form-group">
                    
                        <input type="text" class='form-control' name='student_id' value="<?php echo $fetch['st_id'] ?>" require>
                      </div>

                      <div class="form-group">
                      <select name="student_department" class='form-control' value="<?php echo $fetch['department'] ?>">
                        <option value="">Choose Your Department</option>
                        <option value="Computer Science and Engineering"> CSE </option>
                        <option value="EEE">EEE</option>
                        <option value="Civil">Civil</option>
                        <option value="BBA">BBA</option>
                        <option value="Architecture">Architecture</option>
                        <option value="Islamic Studies">Islamic Studies</option>
                        <option value="Law">Law</option>
                        <option value="English">English</option>
                      </select>
                      </div>  
                      <div class="form-group">
                        <input type="date" class='form-control' name='student_dob' value="<?php echo $fetch['dob'] ?>" require>
                      </div>                               
                      <div class="form-group">               
                        <input type="text" class='form-control' name='student_password' value="<?php echo $fetch['password'] ?>" require>
                      </div>
                      
                      <div class="form-group col">
                          <label for="user_avater">Upload Your Profile Picture</label>
                          <input type="file" class='form-controls-file' name='student_avater' value="<?php echo $fetch['profile'] ?>" require> 
                      </div>    
                      <div class="submit-regiter text-center">
                        <button type='submit' name='update_student' id='register-btn' class="btn btn-danger">Updated Profile Data</button>
                      </div> 
                    </div>
    </form>
</div>


 
  
<?php
include ('includes/script.php');
include ('includes/footer.php');
?>