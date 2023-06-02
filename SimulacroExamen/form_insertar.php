<?php
    include("conexion.php");
    $sql = "SELECT * FROM editoriales";
    $consulta = mysqli_query($con, $sql);
?>

<form action="javascript:insertarLibro()" id="form_insertar">
    <input type="file" name="imagen">
    <br>
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo">
    <br>
    <label for="autos">Autor</label>
    <input type="text" name="autor">
    <br>
    <label for="editorial">Editorial</label>
    <select name="editorial">
        <?php while($editorial = mysqli_fetch_array($consulta)){ ?>
            <option value="<?php echo $editorial['id'] ?>"><?php echo $editorial['editorial'] ?></option>
        <?php } ?>
    </select>
    <br>
    <label for="anio">Año</label>
    <input type="number" name="anio">
    <br>
    <input type="submit" value="Insertar">
</form>