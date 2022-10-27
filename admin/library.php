<?php
include ('../Database/config.php');
include ('security.php');
include ('includes/header.php');
include ('includes/navbar.php');

if(isset($_POST['submit'])){
    
    $str = $_POST['str'];
    $query = "SELECT * FROM `cse_teacher` WHERE `teacher_name` like '%$str%' ";
    $query_run = mysqli_query($db_conn,$query);
    

   if($query_run){
        if(mysqli_num_rows($query_run)>0){
         while($row = mysqli_fetch_assoc($query_run)> 0){
            echo "<pre>";
            echo $row['teacher_name'];
         }

        }else{
            echo "Data is Not Found";
        }

   }else{
    echo "Your Database Query Is Create Error";
   }
}

?>



 <div class="container">

    <form action="" method="post">
        <div class="form-group">
            <input type="textbox" name="str" class="form-control" require placeholder="Search with CSE Teacher Name"><br>
            <input type="submit" class="btn btn-primary" name="submit" value="Search" >
        </div>
    </form>
 </div> 


<?php
include ('includes/script.php');
include ('includes/footer.php');
?>