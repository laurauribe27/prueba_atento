<?php

include("connection.php");
$con=conect();

$identification=$_POST['identification'];
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$number=$_POST['number'];
$profession=$_POST['profession'];

$sql="UPDATE people SET  identification='$identification',name='$name',age='$age',email='$email',email='$email',profession='$profession' WHERE identification='$identification'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: people.php");
    }
?>