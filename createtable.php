<?php 
include 'connect.php';
$sql="CREATE TABLE student(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(30) NOT NULL
)";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Table created successfully";
}
else{
    echo "Table creation failed: ".mysqli_error($conn);
}
?>