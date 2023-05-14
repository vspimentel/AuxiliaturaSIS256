<?php
    include("conexion.php");
    session_start();
    $sql = "SELECT U.id, U.correo, U.nombres, U.apellidos, R.descripcion, U.estado FROM usuarios U INNER JOIN roles R ON U.idrol = R.id";
    $consulta = mysqli_query($con, $sql);
?>
<div>Nombre: <?php echo $_SESSION["nombre"] ?></div>
<div>Rol: <?php echo $_SESSION["rol"] ?></div>
<table border="1">
    <tr>
        <th>Correo</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Rol</th>
        <th>Estado</th>
        <th colspan=2>Operaciones</th>
    </tr>
    <?php while($usuarios = mysqli_fetch_array($consulta)){ ?>
        <tr>
            <td><?php echo $usuarios["correo"]; ?></td>
            <td><?php echo $usuarios["nombres"]; ?></td>
            <td><?php echo $usuarios["apellidos"]; ?></td>
            <td><?php echo $usuarios["descripcion"] ?></td>
            <td><?php echo $usuarios["estado"]; ?></td>
            <td><a href="editar_usuario_form.php?id=<?php echo $usuarios["id"] ?>">Editar</a></td>
            <td><a href="eliminar_usuario.php?id=<?php echo $usuarios["id"] ?>">Eliminar</a></td>
        </tr>
    <?php } ?>
</table>
<a href="insertar_usuario_form.html">Insertar</a>