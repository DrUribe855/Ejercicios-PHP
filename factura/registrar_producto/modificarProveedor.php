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
        $telefono = ($_GET['telefono']);
        $consulta = $conexion2 -> query("SELECT * FROM proveedores WHERE telefono = '%$telefono%'");
        while($row = $consulta -> fetch_array()){?>
            <form action="editarProveedor.php" method="POST">
                <tr>
                    <td><input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"></td>
                    <td><input type="text" name="direccion" value="<?php echo $row['direccion']; ?>"></td>
                    <td><input type="text" name="telefono" value="<?php echo $telefono; ?>"></td>
                    <td><input type="text" name="producto" value="<?php echo $row['producto']; ?>"></td>
                    <input type="submit" value="Editar">
                </tr>
            </form>

       <?php } ?>        
        

</body>
</html>