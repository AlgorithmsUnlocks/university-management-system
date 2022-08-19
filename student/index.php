<?php 
include '../Database/config.php';
include '../stu_security.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Content Wrapper -->
 
                <!-- Begin Page Content -->
                <div class="container-fluid">
          
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <img src="upload/label.png" alt="" srcset="">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                          <!-- Page Heading  
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                                -->
                    </div>
 

                    
                    <!-- Content Row -->
                    <div class="row">

                         
                      
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
                                                <h4><?php echo '<h3> Faculty &#123; '.$row.' &#125;	</h3>';  ?></h4>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
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
                                                 <h4><?php echo '<h3> Teacher &#123; '.$row.' &#125;</h3>';  ?></h4>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>

                    <!-- Content Row -->
 
 

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


    <?php
    include 'includes/script.php';
    include 'includes/footer.php';
    ?>



 
