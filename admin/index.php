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
                                                <h4><?php echo '<h5> Student ( '.$row.' )	</h5>';  ?></h4>
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
                                                <h4><?php echo '<h5> Faculty ( '.$row.' )</h5>';  ?></h4>
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
                                                 <h6><?php echo '<h5>CSE Teacher ( '.$row.' )</h5>';  ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-chalkboard-user fa-2x text-gray-300"></i>
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
                                                Total faculty Member of EEE</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                    
                                                    $query = "SELECT `id` FROM `eee_teacher` ORDER BY `id`";
                                                    $query_run= mysqli_query($db_conn,$query);
                                                    $row = mysqli_num_rows($query_run); 
                                                                                            
                                                ?>
                                                 <h6><?php echo '<h5>EEE Teacher ( '.$row.' )</h5>';  ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-chalkboard-user fa-2x text-gray-300"></i>
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
                                                Total faculty Member of BBA</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                    
                                                    $query = "SELECT `id` FROM `bba_teacher` ORDER BY `id`";
                                                    $query_run= mysqli_query($db_conn,$query);
                                                    $row = mysqli_num_rows($query_run); 
                                                                                            
                                                ?>
                                                 <h6><?php echo '<h5>BBA Teacher ( '.$row.' )</h5>';  ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-chalkboard-user fa-2x text-gray-300"></i>
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
                                                Total faculty Member of English</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                    
                                                    $query = "SELECT `id` FROM `eng_teacher` ORDER BY `id`";
                                                    $query_run= mysqli_query($db_conn,$query);
                                                    $row = mysqli_num_rows($query_run); 
                                                                                            
                                                ?>
                                                 <h6><?php echo '<h5>English Teacher ( '.$row.' )</h5>';  ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-chalkboard-user fa-2x text-gray-300"></i>
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
                                                Total faculty Member of Architecture</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                    
                                                    $query = "SELECT `id` FROM `arch_teacher` ORDER BY `id`";
                                                    $query_run= mysqli_query($db_conn,$query);
                                                    $row = mysqli_num_rows($query_run); 
                                                                                            
                                                ?>
                                                 <h6><?php echo '<h5>Architecture Teacher ( '.$row.' )</h5>';  ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-chalkboard-user fa-2x text-gray-300"></i>
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
                                                Total faculty Member of Civil Engineering</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                    
                                                    $query = "SELECT `id` FROM `civil_teacher` ORDER BY `id`";
                                                    $query_run= mysqli_query($db_conn,$query);
                                                    $row = mysqli_num_rows($query_run); 
                                                                                            
                                                ?>
                                                 <h6><?php echo '<h5>Civil Engineering Teacher ( '.$row.' )</h5>';  ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-chalkboard-user fa-2x text-gray-300"></i>
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
                                                Total faculty Member of Islamic Studies</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                    
                                                    $query = "SELECT `id` FROM `islamic_teacher` ORDER BY `id`";
                                                    $query_run= mysqli_query($db_conn,$query);
                                                    $row = mysqli_num_rows($query_run); 
                                                                                            
                                                ?>
                                                 <h6><?php echo '<h5>Islamic Studies Teacher ( '.$row.' )</h5>';  ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-chalkboard-user fa-2x text-gray-300"></i>
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
                                                Total faculty Member of Publick Health</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                    
                                                    $query = "SELECT `id` FROM `public_teacher` ORDER BY `id`";
                                                    $query_run= mysqli_query($db_conn,$query);
                                                    $row = mysqli_num_rows($query_run); 
                                                                                            
                                                ?>
                                                 <h6><?php echo '<h5>Publick Health Teacher ( '.$row.' )</h5>';  ?></h6>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-chalkboard-user fa-2x text-gray-300"></i>
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
                                                Total faculty Member of Tourism and Host. Management</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                                    
                                                    $query = "SELECT `id` FROM `tourism_teacher` ORDER BY `id`";
                                                    $query_run= mysqli_query($db_conn,$query);
                                                    $row = mysqli_num_rows($query_run); 
                                                                                            
                                                ?>
                                                 <h6><?php echo '<h5>Tourism and Host. Management Teacher ( '.$row.' )</h5>';  ?></h6>
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



 
