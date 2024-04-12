
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <h1>Signin Page</h1>

    <div class="container">
       
    <form method="post"action="">
        <div class="mb-3">
           <label for="Username" class="form-label">User Name</label>
          <input type="text" class="form-control" id="Username"name="susername" placeholder="Enter your name">
    
        </div>

        <div class="mb-3">
           <label for="Password" class="form-label">Password</label>
           <input type="password" class="form-control" id="Password"name="spassword" placeholder="Enter your password -> minimum 8 characters">
        </div>

        <div class="mb-3">
           <label for="Email" class="form-label">email</label>
           <input type="text" class="form-control" id="Email"name="semail" placeholder="Enter your  email">
        </div>

        <div class="mb-3">
            <label for="Phone" class="form-label">Phone No</label>
            <input type="text" class="form-control" id="Phone"name="sphoneno" placeholder="Enter your valid phone no">
        </div>
  
      <button type="submit" class="btn btn-primary"name="submit">Submit</button>

    </form>

    </div>




    
  </body>
</html>


