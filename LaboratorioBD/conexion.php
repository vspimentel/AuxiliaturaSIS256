<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "bd_hotel";
    $con = new mysqli($host, $user, $password, $db);
    if($con->connect_error)
        die("Conexion fallida: ".$con->connect_error);
?>