<?php
    session_start();
    if(isset($_SESSION["nivel"])){
        $nivel = $_SESSION["nivel"];
        include('conexion.php');
        $sql = "SELECT id, correo, nombrecompleto, nivel FROM usuarios";
        $resultado = $con->query($sql);
    ?>

    <table border="1">
        <tr>
            <th>Correo</th>
            <th>Nombre Completo</th>
            <th>Nivel</th>
            <?php if($nivel == 1){ ?>
                <th>Operacion</th>
            <?php } ?>
        </tr>
    <?php while($usuario = $resultado->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $usuario['correo'] ?></td>
            <td><?php echo $usuario['nombrecompleto'] ?></td>
            <td><?php echo $usuario['nivel'] == 1 ? "Administrador" : "Usuario" ?></td>
            <?php if($nivel == 1){ ?>
                <td><div class="operacion<?php echo $usuario['nivel'] == 1 ? 1 : 2 ?>" onclick="cambiarNivel(<?php echo $usuario['nivel'] == 1 ? 0 : 1 ?>, <?php echo $usuario['id'] ?>)"><?php echo $usuario['nivel'] == 1 ? "Cambiar a usuario" : "Cambiar a administrador" ?></div></td>
            <?php } ?>
        </tr>
<?php } 
    } else {
        echo "No esta logueado";
    }
?>