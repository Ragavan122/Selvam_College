


<?php

// $num= rand(1,4);

// switch($num){

//     case 1:  $imagefile="Pictures\computerstudent.jpg";
//     break;
//     case 2:  $imagefile="Pictures\collegepic.jpg";
//     break;
//     case 3:  $imagefile="Pictures\library.jpg";
//     break;
//     case 4:  $imagefile="Pictures\try.jpg";
//     break;

// }


// echo "Random image :  <img scr=$imagefile/>";

// include('index.php');

if($_REQUEST['name']|| $_REQUEST['age']){


    echo  'Your name is :  '.$_REQUEST['name'] .'<br> ';
    echo  'Your age is :  '.$_REQUEST['age'] . '<br>';

    exit();


}


// if($_POST['locat']){

// $location=$_POST['locat'];

// header( "Location: $location" );


// }




?>


<html>
<body>


  <!-- <form action="<?php $_PHP_SELF ?>"method="POST">

   <p>Choode to visit:</p>
<select name="locat" id="">

 <option value="https://www.w3schools.com/php/default.asp">w3schools</option>
 <option value="https://www.javatpoint.com/php-tutorial">javatpoint</option>

</select> 

<input type="submit">  -->



<form action="<?php $_PHP_SELF ?>"method="POST">

name <input type="text"name="name"><br><br>
age <input type="text"name="age"><br><br>
<input type="submit">



  </form>



</body>
</html>