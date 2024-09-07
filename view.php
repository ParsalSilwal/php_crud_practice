<?php 
include 'connect.php';
$sql="SELECT * FROM student";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "ID: ".$row['id']." Name: ".$row['name']." Age: ".$row['age']." Email: ".$row['email']."<br>";
    }
}
else{
    echo "No data found";
}
?>