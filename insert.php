<?php
include("connection.php");
$con=conect();

$identification=$_POST['identification'];
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$number=$_POST['number'];
$profession=$_POST['profession'];



$sql="INSERT INTO people VALUES('$identification','$name','$age','$email','$number','$profession')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: people.php");
    
}else {
}
?>