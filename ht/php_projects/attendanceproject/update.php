
<?php

include 'connect.php'; 

$id=$_GET['updateid'];


$sql="SELECT * FROM `crudop` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$uname=$row['name'];
$uemail=$row['email'];
$uphoneno=$row['phoneno'];


if(isset($_POST['submit'])){

   
    $name=$_POST['name'];
    $email=$_POST['semail'];
    $phoneno=$_POST['sphoneno'];
    
  

    $sql="UPDATE `crudop`SET id='$id',name='$name',email='$email',phoneno='$phoneno' where id='$id'";
    $result=mysqli_query($con,$sql);
     
      if($result){
          #echo "data updated successsfully";
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
    
    <h1>Update page</h1>

    <div class="container">
       
    <form method="post">

        <!--   Student's  Name      --> 
        <div class="mb-3">
           <label for="Username" class="form-label">Name</label>
          <input type="text" class="form-control" id="Username"name="name"value=<?php echo ($uname); ?> placeholder="Enter your updated name"Autocomplete="off"Required>
    
        </div>

        <!--   Student's  Email        --> 

        <div class="mb-3">
           <label for="Email" class="form-label">email</label>
           <input type="text" class="form-control" id="Email"name="semail" value=<?php echo ($uemail); ?>  placeholder="Enter your updated email"Autocomplete="off"Required>
        </div>

        <!--   Student's  phone no        --> 

        <div class="mb-3">
            <label for="Phone" class="form-label">Phone No</label>
            <input type="text" class="form-control" id="Phone"name="sphoneno" value=<?php echo ($uphoneno); ?>  placeholder="Enter your updated phone no"Autocomplete="off"Required>
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

        <button type="submit" class="btn btn-danger"name="submit">update</button>

    </form>

    </div>


 

    
  </body>
  <!--    Department details         --> 
</html>


