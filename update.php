<?php 
include 'connect.php';
$sql="UPDATE student SET name='Parsal' WHERE name='Doe'";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Data updated successfully";
}
else{
    echo "Data updation failed: ".mysqli_error($conn);
}
?>