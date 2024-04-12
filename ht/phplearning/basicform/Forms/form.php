<?php


if($_SERVER['REQUEST_METHOD']="POST"){


  $name=$_POST['fname'];
  $email=$_POST['femail'];
  $password=$_POST['fpassword'];
 

    $con=new mysqli("localhost","root","","sct");

    if($con){
          $sql="INSERT INTO basicform (dbname,dbemail,dbpassword) VALUES('$name','$email','$password')";

          $result=mysqli_query($con,$sql);
          
    }
    else{
         die(mysqli_error($con,$sql));
    }
}
else{
  echo"failed";
}



?>