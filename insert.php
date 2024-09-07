<?php 
include 'connect.php';
$sql= "INSERT INTO student(name,age,email) VALUES('John',25,'john@gmail.com'),
('Doe',30,'doe@gmail.com'),
('Smith',35,'smith@gmail.com')
";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Data inserted successfully";
}
else{
    echo "Data insertion failed: ".mysqli_error($conn);
}
?>