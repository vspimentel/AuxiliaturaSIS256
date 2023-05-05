<?php
    include("conexion.php");
    $sql = "SELECT * FROM tipo_habitaciones";
    $consulta = mysqli_query($con, $sql);
?>
<table border="1">
    <tr>
        <th>Descripcion</th>
        <th>Nro. de camas</th>
        <th colspan=2>Operaciones</th>
    </tr>
    <?php while($tipos = mysqli_fetch_array($consulta)){ ?>
        <tr>
            <td><?php echo $tipos["descripcion"]; ?></td>
            <td><?php echo $tipos["numero_camas"]; ?></td>
            <td><a href="editar_tipos_form.php?id=<?php echo $tipos["id"] ?>">Editar</a></td>
            <td><a href="eliminar_tipo.php?id=<?php echo $tipos["id"] ?>">Eliminar</a></td>
        </tr>
    <?php } ?>
</table>
<a href="insertar_tipos_form.html">Insertar</a>