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
                         
                        <h1 class="h3 mb-0 text-success">Library Manger Dashboard</h1>
                      
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
                                                Total Registered Category </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            <?php
                                
                                               $query = "SELECT `id` FROM `books_category` ORDER BY `id`";
                                               $query_run= mysqli_query($db_conn,$query);
                                               $row = mysqli_num_rows($query_run); 
                                                                                          
                                            ?>
                                                <h4><?php echo '<h5> Books Category ( '.$row.' )	</h5>';  ?></h4>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-book fa-2x text-gray-300"></i>
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
                                                Total Registered Authors </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            <?php
                                
                                               $query = "SELECT `id` FROM `books_authors` ORDER BY `id`";
                                               $query_run= mysqli_query($db_conn,$query);
                                               $row = mysqli_num_rows($query_run); 
                                                                                          
                                            ?>
                                                <h4><?php echo '<h5> Books Author ( '.$row.' )	</h5>';  ?></h4>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                          
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Total Registered Books </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                            <?php
                                
                                               $query = "SELECT `id` FROM `books_list` ORDER BY `id`";
                                               $query_run= mysqli_query($db_conn,$query);
                                               $row = mysqli_num_rows($query_run); 
                                                                                          
                                            ?>
                                                <h4><?php echo '<h5> Total Books ( '.$row.' )	</h5>';  ?></h4>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-book fa-2x text-gray-300"></i>
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



 
