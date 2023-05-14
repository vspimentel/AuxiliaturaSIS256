<?php
    if(isset($_POST["contrasena"])){
        include("conexion.php");
        $id = $_POST["id"];
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $rol = isset($_POST["rol"])? 1:2;
        $sql = "UPDATE usuarios SET correo = '$correo', password = SHA1($contrasena), nombres = '$nombres', apellidos = '$apellidos', idrol = '$rol' WHERE id = $id";
        mysqli_query($con, $sql);
        header("Location: listar_tipos.php");
    }
?>