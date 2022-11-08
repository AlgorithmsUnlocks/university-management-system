<?php
include ('../Database/config.php');
include '../stu_security.php';
include ('includes/header.php');
include ('includes/navbar.php');
?>
 


 <div class="container addBox">
      <form action="font_page_automation.php" method="post" enctype="multipart/form-data">
        <div class="form first">
            <div class="details_books">
                <span class="title text-center"> Font Page Details For Single Student
                     
                </span>

                <h4 class="text-white text-center m-3">
                    Basic Information
                </h4>
                
                <div class="feilds">

                    <div class="form-group">
                        <label for="">Choose Your Department</label>
                        <select name="department" class="form-control">
                            <option value="">Seect Department</option>
                            <option value="Computer Science and Engineering">CSE</option>
                            <option value="Eectric and Eectronic Engineering">EEE</option>
                        </select>
                        <small>*** Choose your department </small>
                    </div>
                    <div class="form-group">
                         <label for=""> Course Code </label>
                        <input type="text" name="course_code" class="form-control" placeholder="course code">
                        <small>*** Enter your course code </small>
                    </div>
                    <div class="form-group">
                        <label for=""> Course Title </label>
                        <input type="text" name="course_title" class="form-control" placeholder="course title">
                        <small>*** Enter your course title </small>
                    </div>
                    <div class="form-group">
                        <label for=""> Title </label>
                        <input type="text" name="title" class="form-control" placeholder="title">
                        <small>*** Enter your task title </small>
                    </div>

                </div>


                <h4 class="text-warning text-center m-3">
                           Teacher Information
                        </h4>
                        
                        <div class="feilds">

                            
                            <div class="form-group">
                                <label for=""> Teacher Name </label>
                                <input type="text" name="course_teacher" class="form-control" placeholder="course teacher name">
                                <small>*** Enter your course teacher name </small>
                            </div>
                            <div class="form-group">
                                <label for=""> Teacher Designation </label>
                                <input type="text" name="teacher_des" class="form-control" placeholder="course teacher designation">
                                <small>*** Enter your course teacher designation</small>
                            </div>
                            <div class="form-group">
                                <label for=""> Teacher Faculty </label>
                                <select name="tea_faculty" class="form-control">
                                  <option value="">Seect Facuty</option>
                                   <option value="Modern Science">Facuty of Modern Science</option>
                                   <option value="Socia Science">Facuty of Socia Science</option>
                                </select>
                                <small>*** Choose teacher faculty </small>
                            </div>
                             
                    </div>

                       <h4 class="text-danger text-center m-3">
                           Student Information
                        </h4>

                        <div class="feilds">

                            <div class="form-group">
                                <label for=""> Student Name </label>
                                <input type="text" name="stu_name" class="form-control" placeholder="student name">
                                <small>*** Enter your  name </small>
                            </div>
                            <div class="form-group">
                                <label for=""> Student Department </label>
                                <input type="text" name="stu_department" class="form-control"placeholder="student department"> 
                                <small>*** Enter your department</small>
                            </div>
                            <div class="form-group">
                                <label for=""> Student Batch </label>
                                <input type="text" name="stu_batch" class="form-control" placeholder="student batch">
                                <small>*** Enter your batch</small>
                            </div>
                            <div class="form-group">
                                <label for=""> Student Section </label>
                                <input type="text" name="stu_section" class="form-control" placeholder="student section">
                                <small>*** Enter your section</small>
                            </div>
                            <div class="form-group">
                                <label for=""> Student ID. </label>
                                <input type="text" name="stu_id" class="form-control" placeholder="student id">
                                <small>*** Enter your student id</small>
                            </div>
                            <div class="form-group">
                                <label for=""> Submission Date</label>
                                <input type="date" name="sub_date" class="form-control" >
                                <small>*** Select submission date</small>
                            </div>


                      </div>

 

                <div class="save_feild text-center">
                    <button type="submit" class="btn btn-warning" name="generate_fontPage"><i class="fa-solid fa-pen"> </i>
                    Generate Font Page 
                </button>
                </div>

            </div>
        </div>
      </form>
     </div>



 

<!--
    Add Category Page Css
 -->
  
   <style>
    .addBox {
        background-color: #36b9cc;
        padding: 25px 15px;
        border-radius: 25px 75px 25px 75px;
        border: none;

    }
    .form .details_books .title {
        color: white;
        font-size: 25px;
        font-weight: 600;
        line-height: 25px;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: space-around;
        border: 2px dashed;
        border-radius: 25px 75px 25px 75px;
        padding: 10px 20px;
        margin-bottom: 25px;
    }
    .form .details_books .feilds{
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        color: white;
    }
    .form .details_books .feilds .form-group{
        width: calc(100% / 2 - 15px);
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