<?php




$username="radmin";
$password="*3u_vi3WU77jm72i";
$hostname="localhost";
$dbname="sct";

$con=mysqli_connect($hostname,$username,$password,$dbname);


if($con){
    

    echo "connection successful";
}
else{
    die(mysqli_error($con));
}





?>