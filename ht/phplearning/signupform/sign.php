<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
}
  
$username=$_POST['username'];
$password=$_POST['password'];

$sql="INSERT INTO regis"



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>

<div class="container">

    <form method="POST"action="connect.php">
        <div class="mb-3 container">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="type" class="form-control" placeholder="Enter your name"name="username">
          </div>
        <div class="mb-3 container">
          <label for="exampleInputEmail1" class="form-label">password </label>
          <input type="" class="form-control" placeholder="password"name="password">
          
        </div>
        
        
        <button type="submit" class="btn btn-primary " >Submit</button>
    </form>
  
</div>


</body>
</html>