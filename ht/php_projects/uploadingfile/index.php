<?php
        #connecting to database

$con=mysqli_connect("localhost","radmin","*3u_vi3WU77jm72i","ragavanat");

if($con){
    #echo "connectoin successful;";
}
else{
    die(mysqli_error($con));
}


      #insering dat to that db table
/*

    if(isset($_POST['submit'])){

        
       $name=$_FILES['name'];
        $file=$_FILES['file'];

       // echo $file;


        $sql="INSERT INTO studentpic (name,img)values('$name','$file')";

     $result=mysqli($con,$sql);

     if($result){
        echo"data inserted successfully";
     }
     else{
        die(mysqli_error($con));
     }




    }*/

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Uploading files</title>
  </head>
  <body>

    <h1>Upload Files</h1>

    <form action="upload\upload.php"method="POST"enctype="multipart/form-data">


        <!-- <div>
           <label for="name" class="form-label ">Name</label>
            <input class="form-control form-control-sm  " id="name" type="text"name="name"autocomplete="off">
        </div> -->

        <div>
            <label for="formFileLg " class="form-label ">Picture</label>
            <input type="file" class="form-control form-control-sm  " id="formFileLg" name="files"autocomplete="off">
        </div>

        <button  class="btn btn-warning my-5" type="submit"name="submit">Upload</button>
   
    </form>

  </body>
</html>

