<?php
include ('../Database/config.php');
include '../stu_security.php';
include ('includes/header.php');
include ('includes/navbar.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading   <img src="upload/label.png" alt="" srcset=""> -->
                    <div class="d-sm-flex align-items-center justify-content-center mb-4">
                        
                        <h1 class="h3 mb-0 text-gray-800">Faculty of Leading University</h1>
                          <!-- Page Heading  
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                                -->
                    </div>

                   
                    <!-- Content Row -->

 

    <!-- Page Heading -->
     
  
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Faculty</h6>
        
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
                    echo '<h4 class="text-center admin-error">'. $_SESSION['success'].'</h4>';
                    unset($_SESSION['success']);
                   
                }


        ?>
        <div class="table-responsive">    

    <?php 
        $query = "SELECT * FROM `faculty`";
        $query_run = mysqli_query($db_conn,$query);
    ?>
            <table id="datatablesapi" class="table table-bordered" id="datatablesapi" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      
                        <th>Faculty Name</th>
                        <th>Name of Dean</th>
                        <th>Tiftle of Dean</th>
                        <th>Tel. Office</th>
                        <th>Cell</th>
                        <th>Email</th>
                        <th>Profile</th>
                       
                         
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    
                        <th>Faculty Name</th>
                        <th>Name of Dean</th>
                        <th>Tiftle of Dean</th>
                        <th>Tel. Office</th>
                        <th>Cell</th>
                        <th>Email</th>
                        <th>Profile</th>
                     
                    </tr>
                </tfoot>
                <tbody>
                    
                     <?php

                     if(mysqli_num_rows($query_run) > 0){
                        while($row = mysqli_fetch_assoc($query_run)){
                            ?>
                    <tr>
                       
                        <td><?php echo $row['faculty_name']; ?></td>
                        <td><?php echo $row['dean_name']; ?></td>
                        <td><?php echo $row['dean_title']; ?></td>
                        <td><?php echo $row['dean_tel']; ?></td>
                        <td><?php echo $row['dean_cell']; ?></td>
                         
                        <td>
                            <?php echo $row['dean_email']; ?>
                        </td>
                        <td>                            
                            <?php echo '<img src="../admin/'.$row['dean_photo'].'" alt="Dean Image" width="100px" style="border-radius: 100%; border: 3px dashed green; padding: 5px ">'; ?>
                        </td>
                        
                       
                            
                                      
                    </tr>    
                           
                            <?php
                        }

                     }else{
                        echo "Not Admin Found";
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