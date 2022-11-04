<?php 
include ('includes/header.php');
?>
<div class="wrapper">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center admin-login">

            <div class="col-xl-12 col-lg-12 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-7 m-auto">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LUMS -> Library Manger Login Access</h1>
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
    <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>

    </div>

    <style>
        .admin-login{
            padding: 200px 0;
        }
        .card{
            background-color: #fff3!important;
        }
        
    .none-t{
     padding: 200px 0;
     }
    .wrapper{
    background-color: rgba(255, 255, 255, 0.315);
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
    background: hsla(183, 56%, 42%, 1);
    background: linear-gradient(270deg, hsla(183, 56%, 42%, 1) 22%, hsla(224, 55%, 62%, 1) 100%);
    }
    .box div{
      height: 65px;
      width: 65px;
      position: absolute;
      background-color: transparent;
      border: 4px solid white;
      animation: animate 5s infinite;
      border-radius: 50px;
    }
    .box div:nth-child(1){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 90%;
      left: 65%;
      background-color: transparent;
      border: 3px solid white;
      animation: animate 7s infinite;
    }
    .box div:nth-child(2){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 50%;
      left: 65%;
      background-color: transparent;
      border: 3px solid white;
      animation: animate 8s infinite;
    }
    .box div:nth-child(3){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 50%;
      left: 25%;
      background-color: transparent;
      border: 3px solid white;
      animation: animate 11s infinite;
    }
    .box div:nth-child(4){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 10%;
      left: 80%;
      background-color: transparent;
      border: 3px dashed white;
      animation: animate 12s infinite;
    }
    .box div:nth-child(5){
      height: 100px;
      width: 100px;
      position: absolute;
      top: 20%;
      left: 30%;
      background-color: transparent;
      border: 3px dotted white;
      animation: animate 15s infinite;
    }
    .box div:nth-child(6){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 90%;
      left: 10%;
      background-color: transparent;
      border: 3px dotted white;
      animation: animate 5s infinite;
    }
    .box div:nth-child(7){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 65%;
      left: 5%;
      background-color: transparent;
      border: 3px dashed white;
      animation: animate 5s infinite;
    }
    .box div:nth-child(8){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 50%;
      left: 50%;
      background-color: transparent;
      border: 3px dashed white;
      animation: animate 5s infinite;
    }
    .box div:nth-child(9){
      height: 65px;
      width: 65px;
      position: absolute;
      top: 80%;
      left: 85%;
      background-color: transparent;
      border: 3px solid white;
      animation: animate 5s infinite;
    }
    @keyframes animate{
      0%{
        transform: scale(0.5);

      }
      100%{
        transform: scale(1);
       
        opacity: 0;
      }
    }
    


   </style>
     
    <script>

        var preloader = document.getElementById("site-loader");
        function myFunction(){
            preloader.style.display = "none";
        }

</script>

<?php 
include ('includes/script.php');
?>

