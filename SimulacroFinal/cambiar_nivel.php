<?php
    include('conexion.php');
    $sql = "UPDATE usuarios SET nivel = $_POST[nivel] WHERE id = $_POST[id]";
    $resultado = $con->query($sql);
?>