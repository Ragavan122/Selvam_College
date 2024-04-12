<?php

include 'connect.php';




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Display Page</title>
  </head>
  <body>
    <h1>Display page</h1>

    <div class="d-grid gap-2 d-md-block m-5">
  <button class="btn btn-primary" type="button"><a class="text-light"href="sign.php">Add user<a></button>
  
</div>


    <div class="container mt-5">
   
    <table class="table">
  <thead>

 
  <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone no</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>

    <?php
    
    $sql="SELECT * FROM `crudop`";

    $result=mysqli_query($con,$sql);

    if($result){

       
       
      while($row=mysqli_fetch_assoc($result)){
    
          $id=$row['id'];
          $name=$row['name'];
          $email=$row['email'];
          $phoneno=$row['phoneno'];
  
           echo"
           <tr>
            <td >$id</td>
            <td >$name</td>
            <td >$email</td>
            <td>$phoneno</td>
          
            <td>

              <button class='btn btn-danger'> <a href='delete.php? deleteid=$id'class='text-light''> Delete</a></button>
              <button class='btn btn-primary'>  <a href='update.php? updateid=$id'class='text-light''> update</a></button>

            </td>
            
         </tr>";
         

        }
        
     }

    ?>
 
   
   
     
  </tbody>
</table>    



    </div>
    
  </body>
</html>