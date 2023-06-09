<?php
    $con = new mysqli("localhost","root","","base_departamentos");
    if($con->connect_error)
    {
        die("Conexion fallida ".$con->connect_error);
    }
?>