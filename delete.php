<?php
include "connection.php";


$id=$_GET['id'];
$sql="DELETE FROM infomation WHERE id='$id'";
$query=mysqli_query($conn,$sql);


if($query){
    header("location:display.php");
}else{
    echo $conn->error;
}


?>