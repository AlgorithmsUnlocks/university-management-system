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


<!-- Page Heading -->
 

<div class="container-fluid student-profile-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="profile-card">
                    <div class="profile-card-inner">
                        <div class="error-message">
                        <?php 
                                if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
                                    echo '<h4 class="text-center admin-error">'. $_SESSION['success'].'</h4>';
                                    unset($_SESSION['success']);
                                
                                }
                        ?>
                        </div>
                        <div class="profile-image">
                            <?php
                            if($fetch['profile'] == 'upload/'){
                                ?>

                                    <img src="../src/icons/view_profile_icon.png" alt="" srcset="">

                                <?php
                            }else{
                                ?>

                                <img src="../<?php echo $fetch['profile'] ?>" alt="Profile">
                            
                            <?php
                            }
                            ?>

                           <!-- <img src="../<?php echo $fetch['profile'] ?>" alt="Profile"> -->
                            
                        </div>
                        <div class="profile-name">
                            <h4><?php echo $fetch['name']; ?></h4>
                        </div>
                        <div class="profile-info">
                            <div class="row">
                                <div class="col-md-5 m-auto">
                                    <h5>Email Address  </h5>
                                    <hr class="left-hr">
                                    <h5>Phone Number  </h5>
                                    <hr class="left-hr">
                                    <h5>Student ID No.  </h5>
                                    <hr class="left-hr">
                                    <h5>Department </h5>
                                    <hr class="left-hr">
                                    <h5>Date of Birth </h5>
                                    <hr class="left-hr">
                                    <h5>Password  </h5>
                                    <hr class="left-hr">
                                    <h5>Account Creation Date  </h5>
                                    <hr class="left-hr">
                                   
                                     
                                </div>
                                <div class="col-md-7 m-auto">
                                    <h5><?php echo ": ".$fetch['email']; ?></h5>
                                    <hr class="left-hr">
                                    <h5><?php echo ": ".$fetch['phone']; ?></h5>
                                    <hr class="left-hr">
                                    <h5><?php echo ": ".$fetch['st_id']; ?></h5>
                                    <hr class="left-hr">
                                    <h5><?php echo ": ".$fetch['department']; ?></h5>
                                    <hr class="left-hr">
                                    <h5><?php echo ": ".$fetch['dob']; ?></h5>
                                    <hr class="left-hr">
                                    <h5><?php echo ": ".$fetch['password']; ?></h5>
                                    <hr class="left-hr">
                                    <h5><?php echo ": ".$fetch['create_date']; ?></h5>
                                    <hr class="left-hr">
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 m-auto text-center">
                                    <form action="student_profile_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $fetch['id']; ?>">
                                        <button type="submit" class="btn btn-warning text-white" name='edit_btn'> Update Profile</button> 
                                    </form>
                                </div>

                                

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 
  
<?php
include ('includes/script.php');
include ('includes/footer.php');
?>