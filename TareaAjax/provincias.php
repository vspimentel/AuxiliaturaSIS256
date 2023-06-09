<?php
    include("conexion.php");
    $sql = "SELECT * FROM provincia WHERE iddepartamento = $_GET[id]";
    $consulta = mysqli_query($con, $sql);
    $provincias = array();
    while($provincia = mysqli_fetch_array($consulta)){
        array_push($provincias, array(
            "id" => $provincia['id'],
            "nombre" => $provincia['nombre']
        ));
    }
    echo json_encode($provincias);
?>