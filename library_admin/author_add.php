<?php
include ('../Database/config.php');
include ('security.php');
include ('includes/header.php');
include ('includes/navbar.php');
?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-end mb-4">
                        
                        <h1 class="h4 mb-0 text-success">Add Books Author</h1>
                         
                    </div>

                   

                    <!-- Content Row -->

    <div class="container addBox">
        <div class="row">
            <div class="col-md-8 m-auto">
                
                <form action="author_action.php" method="POST" enctype="multipart/form-data">
                    <div class="add_category_group">
                        <div class="form-group">
                            <input type="text" class='form-control'name='author_name' placeholder='Enter Author Name'>
                        </div>
        
                    </div>
                    <div class="save_feild text-center">
                        <button type="submit" class="btn btn-primary " name='add_author'>
                            <span> <i class="fa-solid fa-plus"> Add Author </i></span>
                        </button>
                    </div>
                </form>
            
            </div>
        </div>
       </div>



 

<!--
    Add Category Page Css
 -->
  
   <style>
    .addBox {
        background-color: #36b9cc;
        padding: 25px 5px;
        border-radius: 25px 75px 25px 75px;
        border: none;
    }
    .save_feild button {
        width: calc(100% / 2);
        height: 46px;
        font-weight: 600;
    }
    
   </style>


<?php
include ('includes/script.php');
include ('includes/footer.php');
?>