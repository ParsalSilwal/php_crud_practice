<?php 
include 'connect.php';
$sql="CREATE DATABASE test1";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Database created successfully";
}
else{
    echo "Database creation failed: ".mysqli_error($conn);
}
?>