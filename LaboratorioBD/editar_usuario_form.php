<?php
    include("conexion.php");
    $sql = "SELECT id, correo, nombres, apellidos, idrol FROM usuarios WHERE id = $_GET[id]";
    $consulta = mysqli_query($con, $sql);
    $usuario = mysqli_fetch_array($consulta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editar_usuario.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
        <label for="correo">Correo</label>
        <input type="email" name="correo" value="<?php echo $usuario["correo"] ?>">
        <br>
        <label for="contrasena">Contraseña</label>
        <input type="password" name="contrasena">
        <br>
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" value="<?php echo $usuario["nombres"] ?>">
        <br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?php echo $usuario["apellidos"] ?>">
        <br>
        <label for="rol">Administrador:</label>
        <input type="checkbox" name="rol" <?php echo $usuario["idrol"] == 1? "checked":"" ?>>
        <br>
        <input type="submit" value="Editar">
    </form>
</body>
</html>