<?php
    include("conexion.php");
    $imagen = $_FILES["fotografia"]["tmp_name"];
    $ext = pathinfo($_FILES["fotografia"]["name"], PATHINFO_EXTENSION);
    $imagen_nombre = $_FILES["fotografia"]["name"];
    $nro = $_POST["nro"];
    $id_tipo = $_POST["tipo"];
    $banoprivado = isset($_POST["banoprivado"])? 1:0;
    $espacio = $_POST["espacio"];
    $precio = $_POST["precio"];
    $sql1 = "INSERT INTO habitaciones (nro, idtipohabitacion, banoprivado, espacio, precio) VALUES ($nro, $id_tipo, $banoprivado, $espacio, $precio)";
    mysqli_query($con, $sql1);
    $sql2 = "SELECT id FROM habitaciones ORDER BY id DESC LIMIT 1";
    $consulta = mysqli_query($con, $sql2);
    $habitacion = mysqli_fetch_array($consulta);
    $id = $habitacion["id"];
    $sql3 = "INSERT INTO fotos_habitaciones (fotografia, id_habitacion) VALUES ('habitacion-$nro.$ext', $id)";
    mysqli_query($con, $sql3);
    copy($imagen, "img/habitacion-$nro.$ext");
    header("Location: listar_habitaciones.php");
?>