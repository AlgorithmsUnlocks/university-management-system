<?php
include('../Database/config.php');
include('security.php');

?>

<?php
if(isset($_POST['generate_fontPage'])){
 
 $department = $_POST['department'];
 $course_code = $_POST['course_code'];
 $course_title = $_POST['course_title'];
 $title = $_POST['title'];

 $course_teacher = $_POST['course_teacher'];
 $teacher_des = $_POST['teacher_des'];
 $tea_faculty = $_POST['tea_faculty'];

 $stu_name = $_POST['stu_name'];
 $stu_department = $_POST['stu_department'];
 $stu_batch = $_POST['stu_batch'];
 $stu_section = $_POST['stu_section'];
 $stu_id = $_POST['stu_id'];
 $sub_date = $_POST['sub_date'];
 
  

}else{
    echo "Something went wrong ";
}



?>