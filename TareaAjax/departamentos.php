<?php
    include("conexion.php");
    $sql = "SELECT * FROM departamento";
    $consulta = mysqli_query($con, $sql);
    $departamentos = array();
    while($departamento = mysqli_fetch_array($consulta)){
        array_push($departamentos, array(
            "id" => $departamento['id'],
            "nombre" => $departamento['nombre']
        ));
    }
    echo json_encode($departamentos);
?>