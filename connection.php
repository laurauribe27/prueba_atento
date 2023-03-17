<?php
    function conect(){
        $host="localhost";
        $user="root";
        $pass="";

        $bd="prueba_atento";
        $con=mysqli_connect($host,$user,$pass);

        mysqli_select_db($con,$bd);

        return $con;
    }
?>