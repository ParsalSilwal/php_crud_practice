<?php
$server='localhost';
$username="root";
$password="";
$db="entry";
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("connection failed!".mysqli_connect_error());
}

// $conn=mysqli_connect($server,$username,$password);
// $sql="create database entry";
// $result=mysqli_query($conn,$sql);
// $sql="create table data(
// name varchar(10),
// roll int,
// address varchar(20)
// );";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo"Table created successfully";
// }
$name=$_POST['name'];
$roll=$_POST['roll'];
$address=$_POST['addr'];
$sql="insert into data values
('$name','$roll','$address')
";
$result=mysqli_query($conn,$sql);
if($result){
    echo"added";
}

?>