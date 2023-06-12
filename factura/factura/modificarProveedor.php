<?php
    include_once("conexion2.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        $telefono = ($_GET['telefonoProv']);
        $nombre = ($_GET['nombreProv']);
        $direccion = ($_GET['direccionProv']);
        $producto = ($_GET['productos']); ?>
    
        <form action="editarProveedor.php" method="POST">
            <tr>
                <td><input type="text" name="nombre" value="<?php echo $nombre; ?>" required></td>
                <td><input type="text" name="direccion" value="<?php echo $direccion; ?>" required></td>
                <td><input type="text" name="telefono" value="<?php echo $telefono; ?>" required></td>
                <td><input type="text" name="producto" value="<?php echo $producto; ?>" required></td>
                <input type="submit" value="Editar">
            </tr>
        </form>

             
        

</body>
</html>