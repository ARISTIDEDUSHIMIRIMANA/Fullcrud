<?php
$host="localhost";
$user="root";
$password="";
$db="collaboration";
$conn=mysqli_connect($host,$user,$password,$db);

if($conn){
    echo "Databse connected";
}else{
    $conn->error;
}


?>