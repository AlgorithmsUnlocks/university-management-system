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
            <th> Category Name </th>
            <th> Status </th>
            <th> Creation Date </th>
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
        header('content-description: Book Category');
        header("Content-Disposition: attachment; filename=Books_Category.xls");
        echo $output;
    }
}else if(isset($_POST['pdf_btn'])){

     require('vendor/vendor/autoload.php');
     
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
            <td> '.$row['id'].' </td>
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

    $mpdf = new \Mpdf\Mpdf();
    $mpdf -> WriteHTML($html);
    $file ='Books Category '.time().'.pdf';
    $mpdf -> output($file,'I');
    // D,I,F
}else if(isset($_POST['xlsx_author_btn'])){
   
  $query = "SELECT * FROM `books_authors`";
  $query_run = mysqli_query($db_conn,$query);
  $output = '';

  if(mysqli_num_rows($query_run) > 0){
   
    $output .= '
     <table class="table">
       <tr>
         <th> ID </th>
         <th> Author Name </th>
       </tr>

    ';
    while($row = mysqli_fetch_array($query_run)){
      $output .= '
        <tr> 
          <td> '.$row['id'].'</td>
          <td> '.$row['name'].'</td>
        </tr>
      ';
    }
    $output .= '
      </table>
    ';

    header('Content_Type: application/xls');
    header('Content-Description: Books Author');
    header('Content-Disposition: attachment; filename="Books Authors.xls"');
    echo $output;
  }else{
    echo "Data is Not Found ";
  }

}else if(isset($_POST['pdf_author_btn'])){

  require('vendor/vendor/autoload.php');
  
  $query = "SELECT * FROM `books_authors`";
  $query_run = mysqli_query($db_conn,$query);
  $output = '';

  if(mysqli_num_rows($query_run) > 0){
   
    $output .= '
     <table class="table">
       <tr>
         <th> ID </th>
         <th> Author Name </th>
       </tr>

    ';
    while($row = mysqli_fetch_array($query_run)){
      $output .= '
        <tr> 
          <td> '.$row['id'].'</td>
          <td> '.$row['name'].'</td>
        </tr>
      ';
    }
    $output .= '
      </table>
    ';
   
    $mpdf =new \Mpdf\Mpdf();
    $mpdf -> WriteHTML($output);
    $file = 'Books Authors '.time().'.pdf';
    $mpdf -> output($file,'I');

  }
}else if(isset($_POST['xlsx_books_btn'])){
   
  $query = "SELECT * FROM `books_list`";
  $query_run = mysqli_query($db_conn,$query);
  $output = '';

  if(mysqli_num_rows($query_run) > 0){
   
    $output .= '
     <table class="table">
       <tr>
        <th> ID </th>
        <th> Book Name</th>
        <th> ISBN Number </th>
        <th>Author Name</th>
        <th>Books Cateory</th>
        <th>creation_date</th>
       </tr>

    ';
    while($row = mysqli_fetch_array($query_run)){
      $output .= '
        <tr> 
          <td> '.$row['id'].'</td>
          <td> '.$row['book_name'].'</td>
          <td> '.$row['isbn_number'].'</td>
          <td> '.$row['book_author'].'</td>
          <td> '.$row['book_category'].'</td>
          <td> '.$row['creation_date'].'</td>
        </tr>
      ';
    }
    $output .= '
      </table>
    ';

    header('Content_Type: application/xls');
    header('Content-Description: Books Author');
    header('Content-Disposition: attachment; filename="Books List.xls"');
    echo $output;
  }else{
    echo "Data is Not Found ";
  }

}else if(isset($_POST['pdf_books_btn'])){

  require('vendor/vendor/autoload.php');
  
  $query = "SELECT * FROM `books_list`";
  $query_run = mysqli_query($db_conn,$query);
  $output = '';

  if(mysqli_num_rows($query_run) > 0){
   
    $output .= '
     <table class="table">
       <tr>
        <th> ID </th>
        <th> Book Name</th>
        <th> ISBN Number </th>
        <th>Author Name</th>
        <th>Books Cateory</th>
        <th>creation_date</th>
       </tr>

    ';
    while($row = mysqli_fetch_array($query_run)){
      $output .= '
      <tr> 
        <td> '.$row['id'].'</td>
        <td> '.$row['book_name'].'</td>
        <td> '.$row['isbn_number'].'</td>
        <td> '.$row['book_author'].'</td>
        <td> '.$row['book_category'].'</td>
        <td> '.$row['creation_date'].'</td>
       </tr>
      ';
    }
    $output .= '
      </table>
    ';
   
    $mpdf =new \Mpdf\Mpdf();
    $mpdf -> WriteHTML($output);
    $file = 'Books Authors '.time().'.pdf';
    $mpdf -> output($file,'I');

  }
}





?>