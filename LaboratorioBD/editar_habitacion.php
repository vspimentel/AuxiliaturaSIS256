<?php
    include("conexion.php");
    if(isset($_FILES["fotografia"])){
        $imagen = $_FILES["fotografia"]["tmp_name"];
        $ext = pathinfo($_FILES["fotografia"]["name"], PATHINFO_EXTENSION);
        $imagen_nombre = $_FILES["fotografia"]["name"];
    }
    $nro = $_POST["nro"];
    $id_tipo = $_POST["tipo"];
    $banoprivado = isset($_POST["banoprivado"])? 1:0;
    $espacio = $_POST["espacio"];
    $precio = $_POST["precio"];
    $sql1 = "UPDATE habitaciones SET nro = $nro, idtipohabitacion = $id_tipo, banoprivado = $banoprivado, espacio = $espacio, precio = $precio WHERE id = $_POST[id]";
    mysqli_query($con, $sql1);
    if(isset($_FILES["fotografia"])){
        $sql3 = "UPDATE fotos_habitaciones SET fotografia = 'habitacion-$nro.$ext' WHERE id_habitacion = $_POST[id]";
        mysqli_query($con, $sql3);
        copy($imagen, "img/habitacion-$nro.$ext");
    }
    header("Location: listar_habitaciones.php");
?>