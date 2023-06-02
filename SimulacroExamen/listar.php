<?php
    include('conexion.php');
    $sql = "SELECT * FROM libros INNER JOIN editoriales ON libros.ideditorial = editoriales.id";
    $resultado = $con->query($sql);
?>

<table border="1">
    <tr>
        <th>Imagen</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Editorial</th>
        <th>Año</th>
    </tr>
    <?php while($libro = $resultado->fetch_assoc()){ ?>
        <tr>
            <td><img src="images/<?php echo $libro['imagen'] ?>" height=70px></td>
            <td><?php echo $libro['titulo'] ?></td>
            <td><?php echo $libro['autor'] ?></td>
            <td><?php echo $libro['editorial'] ?></td>
            <td><?php echo $libro['anio'] ?></td>
        </tr>
    <?php } ?>
</table>