<?php

include("connection.php");
$con=conect();

$identification=$_GET['id'];

$sql="DELETE FROM people  WHERE identification='$identification'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: people.php");
    }
?>