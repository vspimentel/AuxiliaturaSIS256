<?php
    include("conexion.php");
    $sql = "SELECT * FROM tipo_habitaciones WHERE id = $_GET[id]";
    $consulta = mysqli_query($con, $sql);
    $tipo = mysqli_fetch_array($consulta)
?>
<form action="editar_tipo.php" method="post">
    <input type="hidden" name="id" value="<?php echo $tipo["id"] ?>">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" value="<?php echo $tipo["descripcion"] ?>">
    <br>
    <label for="nro_camas">Nro. de camas</label>
    <input type="number" name="nro_camas" value="<?php echo $tipo["numero_camas"] ?>">
    <br>
    <input type="submit" value="Editar">
</form>