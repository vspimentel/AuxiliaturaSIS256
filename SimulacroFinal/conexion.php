<?php
    $con = new mysqli("localhost","root","","bd_noticias");
    if($con->connect_error)
    {
        die("Conexion fallida ".$con->connect_error);
    }
?>