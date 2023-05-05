<?php
    include("conexion.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM tipo_habitaciones WHERE id = $id";
    mysqli_query($con, $sql);
    header("Location: listar_tipos.php");
?>