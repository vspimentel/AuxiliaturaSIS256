<?php
    include("conexion.php");
    $sql = "SELECT * FROM tipo_habitaciones";
    $consulta = mysqli_query($con, $sql);
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
    <form action="insertar_habitacion.php" method="post" enctype="multipart/form-data">
        <label for="fotografia">Imagen</label>
        <input type="file" name="fotografia">
        <br>
        <label for="nro">Nro.</label>
        <input type="number" name="nro">
        <br>
        <label for="tipo">Tipo</label>
        <select name="tipo">
            <?php while($tipos = mysqli_fetch_array($consulta)){ ?>
                <option value="<?php echo $tipos["id"] ?>"><?php echo $tipos["descripcion"]; ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="banoprivado">Tiene baño privado:</label>
        <input type="checkbox" name="banoprivado">
        <br>
        <label for="espacio">Espacio</label>
        <input type="number" name="espacio">
        <br>
        <label for="precio">Precio</label>
        <input type="number" name="precio">
        <br>
        <input type="submit" value="Insertar">
    </form>
</body>
</html>