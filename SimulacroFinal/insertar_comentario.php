<?php
    include('conexion.php');
    $sql = "INSERT INTO comentarios (idnoticia, comentario) VALUES ($_POST[id], '$_POST[comentario]')";
    $resultado = $con->query($sql);
?>