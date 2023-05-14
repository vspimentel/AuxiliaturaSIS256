<?php
    include("conexion.php");
    $sql = "SELECT * FROM tipo_habitaciones";
    $consulta = mysqli_query($con, $sql);
    $sql1 = "SELECT H.id, F.fotografia, H.nro, T.id AS idhabitacion, H.banoprivado, H.espacio, H.precio FROM habitaciones H INNER JOIN tipo_habitaciones T ON H.idtipohabitacion = T.id INNER JOIN fotos_habitaciones F ON H.id = F.id_habitacion WHERE H.id = $_GET[id]";
    $consulta1 = mysqli_query($con, $sql1);
    $habitacion = mysqli_fetch_array($consulta1);
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
    <form action="editar_habitacion.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $habitacion["id"]; ?>">
        <label for="fotografia">Imagen</label>
        <input type="file" name="fotografia">
        <br>
        <label for="nro">Nro.</label>
        <input type="number" name="nro" value="<?php echo $habitacion["nro"]; ?>">
        <br>
        <label for="tipo">Tipo</label>
        <select name="tipo">
            <?php while($tipos = mysqli_fetch_array($consulta)){ ?>
                <option value="<?php echo $tipos["id"] ?>" <?php echo $habitacion["idhabitacion"] == $tipos["id"]? "selected":"" ?>><?php echo $tipos["descripcion"]; ?></option>
            <?php } ?>
        </select>
        <br>
        <label for="banoprivado">Tiene baño privado:</label>
        <input type="checkbox" name="banoprivado" <?php echo $habitacion["banoprivado"] == 1? "checked":"" ?>>
        <br>
        <label for="espacio">Espacio</label>
        <input type="number" name="espacio" value="<?php echo $habitacion["espacio"]; ?>">
        <br>
        <label for="precio">Precio</label>
        <input type="number" name="precio" value="<?php echo $habitacion["precio"]; ?>" >
        <br>
        <input type="submit" value="Editar">
    </form>
</body>
</html>