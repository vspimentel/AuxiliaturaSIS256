<?php
    session_start();
    include("conexion.php");
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $sql = "SELECT U.nombres, U.idrol, R.descripcion FROM usuarios U INNER JOIN roles R ON U.idrol = R.id WHERE correo = '$correo' AND password = SHA1($contrasena)";
    $consulta = mysqli_query($con, $sql);
    $usuario = mysqli_query($consulta);
    if($usuario != null){
        $_SESSION["nombre"] = $usuario["nombres"];
        $_SESSION["idrol"] = $usuario["idrol"];
        $_SESSION["rol"] = $usuario["descripcion"]; 
        header("Location: listar_usuarios.php");
    }else{
        header("Location: login_form.html");
    }
?>