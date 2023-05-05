<?php
    include("conexion.php");
    $sql = "SELECT H.id, F.fotografia, H.nro, T.descripcion, H.banoprivado, H.espacio, H.precio FROM habitaciones H INNER JOIN tipo_habitaciones T ON H.idtipohabitacion = T.id INNER JOIN fotos_habitaciones F ON H.id = F.id_habitacion";
    $consulta = mysqli_query($con, $sql);
?>
<table border="1">
    <tr>
        <th>Imagen</th>
        <th>Nro.</th>
        <th>Tipo</th>
        <th>Baño Privado</th>
        <th>Espacio</th>
        <th>Precio</th>
        <th colspan=2>Operaciones</th>
    </tr>
    <?php while($habitaciones = mysqli_fetch_array($consulta)){ ?>
        <tr>
            <td><img src="img/<?php echo $habitaciones["fotografia"] ?>" height=50px></td>
            <td><?php echo $habitaciones["nro"]; ?></td>
            <td><?php echo $habitaciones["descripcion"]; ?></td>
            <td><?php echo $habitaciones["banoprivado"] == 1? "Si":"No" ?></td>
            <td><?php echo $habitaciones["espacio"]; ?></td>
            <td><?php echo $habitaciones["precio"]; ?></td>
            <td><a href="editar_habitaciones_form.php?id=<?php echo $habitaciones["id"] ?>">Editar</a></td>
            <td><a href="eliminar_habitaciones.php?id=<?php echo $habitaciones["id"] ?>">Eliminar</a></td>
        </tr>
    <?php } ?>
</table>
<a href="insertar_habitaciones_form.php">Insertar</a>