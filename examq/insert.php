<?php
$server='localhost';
$user='root';
$password="";
$db="parsal";

$conn=mysqli_connect($server,$user,$password,$db);
if(!$conn){
    die("connection failed!".mysqli_connect_error());
}
$sql="insert into student values
(2,'aa','bb','aa','a@gmail.com','9811111111'),
(3,'aa','bb','aa','a@gmail.com','9811111111'),
(4,'aa','bb','aa','a@gmail.com','9811111111')
";
$result=mysqli_query($conn,$sql);
if($result){
    echo"Inserted successfully";
}
else{
    echo"Insertion failed!".mysqli_error($conn);
}