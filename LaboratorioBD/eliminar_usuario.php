<?php
    include("conexion.php");
    $id = $_GET["id"];
    $sql = "UPDATE usuarios SET estado = 'E' WHERE id = $id";
    mysqli_query($con, $sql);
    header("Location: listar_usuarios.php");
?>