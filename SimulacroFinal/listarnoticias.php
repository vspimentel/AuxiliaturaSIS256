<?php
    include('conexion.php');
    $sql = "SELECT * FROM noticias";
    $resultado = $con->query($sql);
?>

<table border="1">
    <tr>
        <th>Imagen</th>
        <th>Titulo</th>
        <th>Texto</th>
        <th>Fecha</th>
        <th>Comentarios</th>
    </tr>
    <?php while($noticia = $resultado->fetch_assoc()){ ?>
        <tr>
            <td><img src="images/<?php echo $noticia['imagen'] ?>" height=70px></td>
            <td><?php echo $noticia['titulo'] ?></td>
            <td><?php echo $noticia['texto'] ?></td>
            <td><?php echo substr($noticia['fecha'], 0, 10) ?></td>
            <?php
                $sql2 = "SELECT * FROM comentarios WHERE idnoticia = $noticia[id]";
                $resultado2 = $con->query($sql2);
            ?>
            <td>
                <div class="comentarios">
                    <?php while($comentario = $resultado2->fetch_assoc()){ ?>
                        <div>-<?php echo $comentario['comentario'] ?></div>
                    <?php } ?>
                    <div class="comentario_button" onclick="getFormComentario(<?php echo $noticia['id'] ?>)">
                        Insertar comentario
                    </div>
                </div>
                
                
            </td>
        </tr>
    <?php } ?>
</table>