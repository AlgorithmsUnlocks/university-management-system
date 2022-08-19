<?php 
include ('includes/header.php');
?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-lg-12 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-6 m-auto">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Admin</h1>
                                        <?php 
                                        session_start();
                                            if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
                                                echo '<h5 class="text-center text-white bg-success p-3">'. $_SESSION['success'].'</h5>';
                                                unset($_SESSION['success']);
                                            
                                            }
                                         ?>
                                    </div>
                                    
                                    <form action="loginAction.php" method="POST">
                                        <div class="form-group">
                                            <input type="login_email" class="form-control form-control-user" placeholder="Email Address " name="admin_email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                placeholder="Password" name="admin_password">
                                        </div>
                                         
                                       <button class="btn btn-primary btn-user btn-block" name="admin_login_btn">
                                            Login
                                        </button>
                                            
                                    </form>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

<?php 
include ('includes/script.php');
?>