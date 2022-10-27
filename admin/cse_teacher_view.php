<?php
include ('../Database/config.php');
include ('security.php');
include ('includes/header.php');
include ('includes/navbar.php');
?>

<div class="container">

   <?php 
    if(isset($_POST['view_id'])){
        $id = $_POST['view_id'];
        $query = "SELECT * From `cse_teacher` Where id = '$id'";
        $query_run = mysqli_query($db_conn,$query);
        foreach($query_run as $row ){

            ?>
             
    <div class="teacher-profile">
        <div class="row align-items-center justify-content-center">
            <div class="profile-photo">
               <?php echo '<img src='.$row['teacher_photo'].' alt='.$row['teacher_name'].'>' 
               
               ?>
            </div>
        </div>
       
        <div class="row align-items-center justify-content-between m-3 p-3">
            <div class="profile-info">
               <h3>Profile Informations</h3>
               <hr>
               <h5><?php echo $row['teacher_name']; ?></h5>
               <h5><?php echo $row['teacher_title']; ?></h5>
            </div>
            <div class="profile-info">
                <h3>Contact Informations</h3>
                <hr>
                <div class="row align-items-center justify-content-between">
                    <h5>Cell Phone : </h5>
                    <h5> <?php echo $row['teacher_cell']; ?></h5>
                </div>
                <div class="row align-items-center justify-content-between">
                    <h5>Email Address : </h5>
                    <h5> <?php echo $row['teacher_eamil']; ?></h5>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between m-3 p-3">
            <div class="education-info">
               <h3>Educational Background</h3>
               <hr>
                
               <h5>
                <?php echo $row['education_bg']; ?>
               </h5>
            </div>
            
        </div>
        <div class="row align-items-center justify-content-between m-3 p-3">
            <div class="conduct-course-info">
               <h3>Conduct Courses</h3>
               <hr>
                
               <h5>
                 <?php echo $row['conduct_course']; ?>
               </h5>
            </div>
            
        </div>
 


        <div class="row align-items-center justify-content-around p-3 m-3">
            <div class="profile-edit">
                    <a href="#">
                                    <form action="cse_teacher_edit.php" method="post" class="ml-3">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" class='btn btn-warning' name='edit_btn'>
                                        <i class="fa-solid fa-pen-to-square"> Edit </i>
                                        </button> 
                                    </form>
                    </a>
            </div>
            <div class="profile-cancel">
                    <a href="cse_teacher.php">
                                   
                                        <button type="submit" class='btn btn-primary' name='edit_btn'>
                                        <i class="fa-solid fa-angles-left"> Back Now </i>
                                        </button> 
                                    
                    </a>
            </div>
        </div>

         
    </div>



    <?php
        }
    }
   ?>
</div>
 


<!-- 
=================

Teacher View Page Css
=================
-->
<style>

    .teacher-profile{
        background: linear-gradient(83deg, rgba(34,193,195,1) 0%, rgba(28,200,138,0.5550595238095238) 100%);
        padding: 25px 10x;
        margin: 25px 0;
    }
    .teacher-profile .profile-photo img{
        height: 170px;
        width: 170px;
        border: 2px solid white;
        margin: 25px 0;
        box-shadow: 0 0.15rem 1.75rem 0 rgb(58 59 69 / 15%) !important;
    }
    .teacher-profile h3,h4,span,hr{
        color: white;
    }
    .teacher-profile h5{
        color: black;
    }
     
     
     
</style>

<?php
include ('includes/script.php');
include ('includes/footer.php');
?>