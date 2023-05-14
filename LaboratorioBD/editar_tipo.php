<?php
    include("conexion.php");
    $id = $_POST["id"];
    $descripcion = $_POST["descripcion"];
    $numero_camas = $_POST["nro_camas"];
    $sql = "UPDATE tipo_habitaciones SET descripcion = '$descripcion', numero_camas = $numero_camas WHERE id = $id";
    mysqli_query($con, $sql);
    header("Location: listar_usuarios.php");
?>