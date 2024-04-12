<?php

include 'connect.php'; 

if($_GET('deleteid')){


    $id=$_GET['deleteid'];

    $sql=" DELETE * FROM `crudop` where id='$id ' ";

   $result=mysqli_connect($con,$sql);

   if($result){
      #echo "datas deleted successfully";
      header('location:display.php');
   }
   else{
      die(mysqli_error($con));
   }





}











?>