

<?php 

$conn=mysqli_connect("localhost","radmin","*3u_vi3WU77jm72i","selvamcol");

// if($con){
//     echo "connection successful";
// }
// else{
//     die(mysqli_error($con));
// }


if($conn){
    // echo "successfully  connected";


    if(isset ($_POST['submit'])){

        $fac_name=$_POST['FIELDNAME_1'];
        $dep_name= $_POST['FIELDNAME_2'];
        $clg_name=$_POST['FIELDNAME_3'];
        $course_title= $_POST['FIELDNAME_4'];
        $course_code=$_POST['FIELDNAME_5'];
        $email_address= $_POST['FIELDNAME_6'];
        $first_q=$_POST['fiq'];
        $second_q= $_POST['seq'];
        $third_q=$_POST['thq'];
        $fourth_q= $_POST['foq'];
        $fifth_q=$_POST['fivq'];
        $sixth_q= $_POST['siq'];
        $seventh_q=$_POST['sevq'];
        $eigth_q= $_POST['eiq'];
        $ninth_q=$_POST['niq'];
        $tenth_q= $_POST['teq'];

      $sql="INSERT INTO `feedbacktask` (faculty_name, department_name, college_name, course_title, course_code, email_address, first_question, second_question, third_questoin, fourth_question, fifth_question, sixth_question, seventh_question, eighth_question, ninth_question, tenth_question) 
                                VALUES ('$fac_name', '$dep_name', '$clg_name', '$course_title', '$course_code', '$email_address', '$first_q', '$second_q', '$third_q', '$fourth_q', '$fifth_q', '$sixth_q', '$seventh_q', '$eigth_q', '$ninth_q', '$tenth_q')";
      

       $result=mysqli_query($conn,$sql);

        if($result){
         echo "data inserted successfully";
        }
        else{
         die(mysqli_error($conn));
        }
    } 
}

else{
    die(mysqli_error($con));
}

?> 
