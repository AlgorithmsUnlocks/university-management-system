<?php
include('../Database/config.php');
include('security.php');

?>

<?php 

// xlsx download 

if(isset($_POST['xlsx_btn'])){

    $query = "SELECT * FROM `books_category`";
    $query_run = mysqli_query($db_conn,$query);
    $output = '';
    
    if(mysqli_num_rows($query_run) > 0){
        $output .= '
         <table class="table">
          <tr>
            <th> ID </th>
            <th> Category Name</th>
            <th>Status</th>
            <th>Creation Date</th>
          </tr>
        ';
        while($row = mysqli_fetch_array($query_run)){
            $output .= '
               <tr>
                <td>'.$row['id'].' </td>
                <td> '.$row['name'].'</td>
                <td> '.$row['status'].'</td>
                <td> '.$row['creation_date'].'</td>
               </tr>
            ';
        }
        $output .= '</table> <small> From University Management System (by -> Ruman Ahmed & Sazia Akter Epti)</small>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=Books_Category.xls");
        echo $output;
    }
}else{
     
}


// pdf download 
require('vendor/vendor/autoload.php');

if(isset($_POST['pdf_btn'])){

    $query = "SELECT * FROM `books_category`";
    $query_run = mysqli_query($db_conn,$query);

    if(mysqli_num_rows($query_run) > 0){

        $html = '
           <style> </style> <table class="table">
        '; 
        $html .= '
         <tr>
           <th> ID </th>
           <th> Category Name</th>
           <th>Status</th>
           <th>Creation Date</th>
         </tr>
       ';
       while($row = mysqli_fetch_assoc($query_run)){
        $html .= '
           <tr>
            <td>'.$row['id'].' </td>
            <td> '.$row['name'].'</td>
            <td> '.$row['status'].'</td>
            <td> '.$row['creation_date'].'</td>
           </tr>
        ';
        }
        $html .= '</table> <small> From University Management System (by -> Ruman Ahmed & Sazia Akter Epti)</small>';

    }else{
        echo "Data is Not Found ";
    }

}else{
   
}
$mpdf = new \Mpdf\Mpdf();
$mpdf -> WriteHTML($html);
$file =time().'.pdf';
$mpdf -> output($file,'D');
// D,I,F


?>