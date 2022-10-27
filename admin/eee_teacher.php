<?php
include ('../Database/config.php');
include ('security.php');
include ('includes/header.php');
include ('includes/navbar.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-end mb-4">
                        
                        <h1 class="h4 mb-0 text-success">Faculty Member of EEE</h1>
                          <!-- Page Heading  
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                                -->
                    </div>

                   

                    <!-- Content Row -->

    <div class="container">
         <!-- Button trigger modal -->
        <h2 class='text-center title p-3'>
        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#exampleModalLong">
        <i class="fa-solid fa-chalkboard-user"></i> <span>
          Click to Add Teacher 
        </span> 
        </button>
        </h2>  

    

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="e_action.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class='form-control'name='teacher_name' placeholder='Teacher Name'>
                            </div>
                            <div class="form-group">
                                <input type="text" class='form-control'name='teacher_title' placeholder='Title of Teacher'>
                            </div>
                            <div class="form-group">
                                <input type="email" class='form-control'name='teacher_eamil' placeholder='Email Address'>
                            </div>
                            <div class="form-group">
                                <input type="tel" class='form-control'name='teacher_cell' placeholder='Cell Phone'>
                            </div>
                            <div class="form-group">
                                <textarea name="education_bg" cols="30" rows="3" class='form-control' placeholder='Education Background'></textarea>
                            </div>
                            <div class="form-group">
                                <textarea name="conduct_course" cols="30" rows="3" class='form-control' placeholder='Conduct Courses'></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" class='form-control'name='teacher_photo' placeholder='photo'>
                                <label for="teacher_photo">Please upload profile photo</label>
                            </div>
                            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name='register_teacher'>Save Changes</button>
                </div>
            </form>

            </div>
     
        </div>
        </div>
       </div>




        <!-- Begin Page Content -->
    <div class="container-fluid">
 
    <!-- DataTales Example -->
    <div class="card shadow mb-4 ">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success text-center">All Teacher of EEE Department</h6>
        
    </div>
    <div class="card-body">

        <?php 
                if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
                    echo '<h4 class="text-center admin-error">'. $_SESSION['status'].'</h4>';
                    unset($_SESSION['status']);
                   
                }
                else if(isset($_SESSION['delete']) && $_SESSION['delete'] !=''){
                    echo '<h4 class="text-center admin-error">'. $_SESSION['delete'].'</h4>';
                    unset($_SESSION['delete']);
                   
                }else if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
                    echo '<h4 class="text-center text-success">'. $_SESSION['success'].'</h4>';
                    unset($_SESSION['success']);
                   
                }


        ?>
        <div class="table-responsive">    

    <?php 
        $query = "SELECT * FROM `eee_teacher`";
        $query_run = mysqli_query($db_conn,$query);
    ?>
            <table class="table table-bordered" id="datatablesapi" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Teacher Name</th>
                        <th>Title of Teacher</th>
                        <th>Email Address</th>
                        <th>Cell Phone</th>
                        <th>Profile</th>
                        <th>Actions</th>
                       
                         
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Teacher Name</th>
                        <th>Title of Teacher</th>
                        <th>Email Address</th>
                        <th>Cell Phone</th>
                        <th>Profile</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    
                     <?php

                     if(mysqli_num_rows($query_run) > 0){
                        while($row = mysqli_fetch_assoc($query_run)){
                            ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['teacher_name']; ?></td>
                        <td><?php echo $row['teacher_title']; ?></td>
                      <td><?php echo $row['teacher_eamil']; ?></td>
                         
                        <td>
                            <?php echo $row['teacher_cell']; ?>
                        </td>
                        <td>       
                            <?php
                            if($row['teacher_photo'] != null ){
                                echo '<img src='.$row['teacher_photo'].' alt="Dean Image" width="110px" height="110px" style="border-radius: 100%; border: 3px solid rgba(34,193,195,1); padding: 5px">';?>
                                 <?php
                            }else{
                                echo '<img src="upload/profile.png" alt="Dean Image" width="100px" style="border-radius: 100%; border: 3px dashed green; padding: 5px ">';     
                            }
                            ?>
                            
                        </td>
                        
                        <td>

                           
                             <form action="eee_teacher_view.php" method="post">
                                <input type="hidden" name="view_id" value="<?php echo $row['id']; ?>">
                                 <button type="submit" class='btn btn-success' name='view_btn'>
                                 <i class="fa-solid fa-eye"> View </i></button> 
                             </form>
                             <hr>
                             <form action="e_action.php" method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" class='btn btn-danger' name='delete_btn'> 
                                <i class="fa-sharp fa-solid fa-delete-left"> Delete</i>
                                </button>
                            </form>
                            

                              
                        </td>
                            
                                      
                    </tr>    
                           
                            <?php
                        }

                     }else{
                        echo "<h2 class='bg-warning text-center text-white'>No Teacher Found in EEE</h2>";
                     }
                     ?>
                    
                    
                </tbody>
            </table>
        </div>
    </div>
  </div>

</div>


<?php
include ('includes/script.php');
include ('includes/footer.php');
?>