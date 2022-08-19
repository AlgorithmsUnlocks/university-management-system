<?php
include ('../Database/config.php');
include ('security.php');
include ('includes/header.php');
include ('includes/navbar.php');
?>
 <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <img src="upload/label.png" alt="" srcset="">
                        <h1 class="h3 mb-0 text-gray-800">Admin of Leading University</h1>
                          <!-- Page Heading  
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                                -->
                    </div>
 </div>
 <div class="container">
                     
         <!-- Button trigger modal -->
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
        Click to Add Admin 
        </button>

    

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="admin.php" method="POST">
                <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class='form-control'name='user_name' placeholder='Username'>
                            </div>
                            <div class="form-group">
                                <input type="email" class='form-control'name='user_email' placeholder='Email Address'>
                            </div>
                            <div class="form-group">
                                <input type="file" class='form-control'name='user_photo' placeholder='photo'>
                                <label for="user_photo">Please upload profile photo</label>
                            </div>
                            <div class="form-group">
                                <input type="password" class='form-control'name='user_password' placeholder='Password'>
                            </div>
                            <div class="form-group">
                                <input type="password" class='form-control'name='user_cfpassword' placeholder='Confrim Password'>   
                            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name='registeradmin'>Save Changes</button>
                </div>
            </form>

            </div>
     
        </div>
        </div>
       </div>




        <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 text-center">ADMIN AREA</h1>
     

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Admin</h6>
        
    </div>
    <div class="card-body">

        <?php 
                if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
                    echo '<h4 class="text-center admin-error">'. $_SESSION['success'].'</h4>';
                    unset($_SESSION['success']);
                   
                }
                else if(isset($_SESSION['delete']) && $_SESSION['delete'] !=''){
                    echo '<h4 class="text-center admin-error">'. $_SESSION['delete'].'</h4>';
                    unset($_SESSION['delete']);
                   
                }


        ?>
        <div class="table-responsive">    

    <?php 
        $query = "SELECT * FROM `admin`";
        $query_run = mysqli_query($db_conn,$query);
    ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Photo</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    
                     <?php

                     if(mysqli_num_rows($query_run) > 0){
                        while($row = mysqli_fetch_assoc($query_run)){
                            ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['user_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['photo']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td>
                            <form action="register_edit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" class='btn btn-success' name='edit_btn'>Edit</button> 
                            </form>
                        </td>
                         
                        <td>
                            <form action="admin.php" method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" class='btn btn-danger' name='delete_btn'>Delete</button>
                            </form>
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
    include 'includes/script.php';
    include 'includes/footer.php';
?>
