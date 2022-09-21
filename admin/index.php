<?php 
include '../Database/config.php';
include 'security.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Content Wrapper -->
 
                <!-- Begin Page Content -->
                <div class="container-fluid">
          
                    <div class="d-sm-flex align-items-center justify-content-end mb-4">
                         
                        <h1 class="h3 mb-0 text-success">Dashboard</h1>
                      
                    </div>
 

                    
                    <!-- Content Row -->
                    <div class="row">

                         
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Registered Student </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            <?php
                                
                                               $query = "SELECT `id` FROM `student_panel` ORDER BY `id`";
                                               $query_run= mysqli_query($db_conn,$query);
                                               $row = mysqli_num_rows($query_run); 
                                                                                          
                                            ?>
                                                <h4><?php echo '<h4> Student ( '.$row.' )	</h4>';  ?></h4>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-graduation-cap fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Number of Faculty </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            <?php
                                
                                               $query = "SELECT `id` FROM `faculty` ORDER BY `id`";
                                               $query_run= mysqli_query($db_conn,$query);
                                               $row = mysqli_num_rows($query_run); 
                                                                                          
                                            ?>
                                                <h4><?php echo '<h4> Faculty ( '.$row.' )</h4>';  ?></h4>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-building fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total faculty Member of CSE</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                    
                                                    $query = "SELECT `id` FROM `cse_teacher` ORDER BY `id`";
                                                    $query_run= mysqli_query($db_conn,$query);
                                                    $row = mysqli_num_rows($query_run); 
                                                                                            
                                                ?>
                                                 <h6><?php echo '<h4>CSE Teacher ( '.$row.' )</h4>';  ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-chalkboard-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    
                    </div>

 
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


    <?php
    include 'includes/script.php';
    include 'includes/footer.php';
    ?>



 
