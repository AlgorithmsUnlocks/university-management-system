<?php 
if(isset($_POST['generate_fontPage'])){
  

    // Fetch Basic Information

    $department = $_POST['department'];

    $course_code = $_POST['course_code'];
    $course_title = $_POST['course_title'];
    $title = $_POST['title'];

    // Fetch Teacher Information

    $course_teacher = $_POST['course_teacher'];
    $teacher_des = $_POST['teacher_des'];
    $tea_faculty = $_POST['tea_faculty'];

    // Fetch Student Information

    $stu_name = $_POST['stu_name'];
    $stu_department = $_POST['stu_department'];
    $stu_batch = $_POST['stu_batch'];
    $stu_section = $_POST['stu_section'];
    $stu_id = $_POST['stu_id'];
    $sub_date = $_POST['sub_date'];


   header("content-type:image/png");

   $image = imagecreatefrompng("final_certificate.png");
   $bg = imagecolorallocate($image,0,0,0);
   $tx = imagecolorallocate($image,0,0,0);
   $font = realpath("Poppins-Regular.ttf");

   $department = $department;

   $course_code = $course_code;
   $course_title = $course_title;
   $title = $title;
   
   $course_teacher = $course_teacher;
   $teacher_des = $teacher_des;
   $tea_faculty =$tea_faculty;
   
   
   $stu_name = $stu_name;
   $stu_department = $stu_department;
   $stu_batch = $stu_batch;
   $stu_section = $stu_section;
   $stu_id = $stu_id;
   $sub_date = $sub_date;

   imagettftext($image,14,0,200,210,$tx,$font,$department);  

    imagettftext($image,12,0,210,268,$tx,$font,$course_code); 
    imagettftext($image,12,0,210,297,$tx,$font,$course_title); 
    imagettftext($image,12,0,210,326,$tx,$font,$title); 

    imagettftext($image,10,0,170,477,$tx,$font,$course_teacher); 
    imagettftext($image,10,0,170,506,$tx,$font,$teacher_des); 
    imagettftext($image,10,0,170,535,$tx,$font,$tea_faculty); 

    imagettftext($image,10,0,180,690,$tx,$font,$stu_name); 
    imagettftext($image,10,0,180,713,$tx,$font,$stu_department); 
    imagettftext($image,10,0,180,738,$tx,$font,$stu_batch); 
    imagettftext($image,10,0,180,760,$tx,$font,$stu_section); 
    imagettftext($image,10,0,400,760,$tx,$font,$stu_id); 

    imagettftext($image,12,0,305,804,$tx,$font,$sub_date); 

   imagepng($image);
   imagedestroy($image);




}else{
    echo "Cick is not accepted";
}



?>