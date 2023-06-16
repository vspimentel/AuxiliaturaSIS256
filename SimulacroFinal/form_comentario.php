<?php
    include('conexion.php');
    $sql = "SELECT * FROM noticias WHERE id = $_GET[id]";
    $resultado = $con->query($sql);
    $noticia = $resultado->fetch_assoc();
?>

<div>
    <h2><?php echo $noticia["titulo"]?></h2>
    <div><?php echo $noticia["texto"]?></div><br>
    <form action="javascript:insertarComentario()" method="POST" id="form_comentario">
        <input type="hidden" value="<?php echo $noticia["id"] ?>" name="id">
        <label for="comentario">Comentario</label><br>
        <textarea name="comentario" cols="30" rows="4"></textarea><br>
        <input type="submit" value="Comentar"><br>
    </form>
</div>