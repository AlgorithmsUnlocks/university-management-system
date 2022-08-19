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
                        <h1 class="h3 mb-0 text-gray-800">Faculty of Leading University</h1>
                          <!-- Page Heading  
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                                -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        

                        <!--   -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Faculty</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                               <a href='modern_science.php'>
                                                <button class='btn btn-success'>
                                                    Faculty of Modern Science
                                                    </button>
                                               </a>
                                            </div>
                                        </div>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--   -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Faculty
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <a href='business_admin.php'>
                                                            <button class='btn btn-info'>
                                                            Faculty of Business Administration
                                                        </button>
                                                    </a>
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--   -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               Faculty</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <a href='modern_lang.php'>
                                                <button class='btn btn-warning'>
                                                Faculty of Arts and Modern Language
                                                </button>
                                            </a>
                                            </div>
                                        </div>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               Faculty</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <a href='social_science.php'>
                                                <button class='btn btn-warning'>
                                                Faculty of Social Science
                                                </button>
                                                </a>
                                            </div>
                                        </div>
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

 

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-center">FACULTY ARE</h1>
     





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