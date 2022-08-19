<?php
include ('../Database/config.php');
include '../stu_security.php';
include ('includes/header.php');
include ('includes/navbar.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <img src="upload/label.png" alt="" srcset="">
                        <h2 class="h3 mb-0 text-gray-800">Faculty Member of CSE</h2>
                          <!-- Page Heading  
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                                -->
                    </div>

                   

                    <!-- Content Row -->

     

    <!-- Page Heading -->
    <h2 class="h3 mb-2 text-gray-800 text-center p-3 ">Faculty Members of<br/><span class="text-success">
    Computer Science and Engineering 
    </span> </h2>
     





    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Teacher of CSE</h6>
        
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
        $query = "SELECT * FROM `cse_teacher`";
        $query_run = mysqli_query($db_conn,$query);
    ?>
            <table class="table table-bordered" id="datatablesapi" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Profile</th>
                        <th>Teacher Name</th>
                        <th>Title of Teacher</th>
                        <th>Email Address</th>
                        <th>Cell Phone</th>
                        
                       
                         
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Profile</th>
                        <th>Teacher Name</th>
                        <th>Title of Teacher</th>
                        <th>Email Address</th>
                        <th>Cell Phone</th>
                         
                        
                    </tr>
                </tfoot>
                <tbody>
                    
                     <?php

                     if(mysqli_num_rows($query_run) > 0){
                        while($row = mysqli_fetch_assoc($query_run)){
                            ?>
                    <tr>
                        <td>       
                            <?php
                            if($row['teacher_photo'] != null ){
                                 echo '<img src= "../admin/'.$row['teacher_photo'].'" alt="Dean Image" width="100px" style="border-radius: 100%; border: 3px dashed green; padding: 5px ">';?>
                                 <?php
                            }else{
                                echo '<img src="admin/upload/profile.png" alt="Dean Image" width="100px" style="border-radius: 100%; border: 3px dashed green; padding: 5px ">';     
                            }
                            ?>
                            
                        </td>
                        
                        <td><?php echo $row['teacher_name']; ?></td>
                        <td><?php echo $row['teacher_title']; ?></td>
                      <td><?php echo $row['teacher_eamil']; ?></td>
                         
                        <td>
                            <?php echo $row['teacher_cell']; ?>
                        </td>
                        
                        
                      
                            
                                      
                    </tr>    
                           
                            <?php
                        }

                     }else{
                        echo "<h2 class='bg-warning text-center text-white'>No Teacher Found in CSE</h2>";
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