<?php
    include("conexion.php");
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $rol = isset($_POST["rol"])? 1:2;
    $sql = "INSERT INTO usuarios (correo, password, nombres, apellidos, idrol) VALUES ('$correo', SHA1('$contrasena'), '$nombres', '$apellidos', $rol)";
    echo $sql;
    mysqli_query($con, $sql);
    header("Location: listar_usuarios.php");
?>