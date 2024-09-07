<?php 
include 'connect.php';
$sql="DELETE FROM student WHERE id>9";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Data deleted successfully";
}
else{
    echo "Data deletion failed: ".mysqli_error($conn);
}
?>