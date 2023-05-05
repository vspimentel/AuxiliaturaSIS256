<?php
    include("conexion.php");
    $descripcion = $_POST["descripcion"];
    $numero_camas = $_POST["nro_camas"];
    $sql = "INSERT INTO tipo_habitaciones (descripcion, numero_camas) VALUES ('$descripcion', $numero_camas)";
    mysqli_query($con, $sql);
    header("Location: listar_tipos.php");
?>