<?php
$servername="localhost";
$username="root";
$password="";
$database="pubg1";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn){
   // echo "connection was successfully ";
}
else{
    echo "connect was not successfully";
}


?>

