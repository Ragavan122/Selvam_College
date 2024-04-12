<?php

include 'connect.php'; 

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['semail'];
    $phoneno=$_POST['sphoneno'];
    
  

    $sql="insert into `crudop`(name,email,phoneno)values('$name','$email','$phoneno')";

    $result=mysqli_query($con,$sql);
     
      if($result){
      #echo "data inserted successsfully";
      header('location:display.php');
      }
      else{

        die(mysqli_error($con));

      }


    }


?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Students Daily Attendace Status</title>
  </head>
  <body>
    
    <h1>Signin Page</h1>

    <div class="container">
       
    <form method="post"action="sign.php">

        <!--   Student's  Name      --> 
        <div class="mb-3">
           <label for="Username" class="form-label">Name</label>
          <input type="text" class="form-control" id="Username"name="name" placeholder="Enter your name"Autocomplete="off"Required>
    
        </div>

        <!--   Student's  Email        --> 

        <div class="mb-3">
           <label for="Email" class="form-label">email</label>
           <input type="text" class="form-control" id="Email"name="semail" placeholder="Enter your  email"Autocomplete="off"Required>
        </div>

        <!--   Student's  phone no        --> 

        <div class="mb-3">
            <label for="Phone" class="form-label">Phone No</label>
            <input type="text" class="form-control" id="Phone"name="sphoneno" placeholder="Enter your valid phone no"Autocomplete="off"Required>
        </div>

        <!--   Student's  Department detail        
        <label for="Phone" class="form-label">Department </label>
        <select class="form-select" aria-label="Default select example" Autocomplete="off"Required>

         
            
            <option value="1" name="mech" autocomplete="off">MECH</option>
            <option value="2" name="bio" >BIO</option>
            <option value="3" name="eee" >EEE</option>
            <option value="4" name="ece" >ECE</option>
            <option selected></option>  -->

        </select><br><br>

        <button type="submit" class="btn btn-danger"name="submit">Register</button>

    </form>

    </div>


 

    
  </body>
  <!--    Department details         --> 
</html>


