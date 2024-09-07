<?php 
$server="localhost";
$user="root";
$pass="";
$db="form";
$conn=mysqli_connect($server,$user,$pass,$db);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$sql= "INSERT INTO info VALUES('$name','$age','$email')
";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Data inserted successfully";
}
else{
    echo "Data insertion failed: ".mysqli_error($conn);
}
?>