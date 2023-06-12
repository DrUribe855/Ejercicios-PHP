<?php
    include_once("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $id = ($_GET['id']);
        $nombre = ($_GET['nombres']);
        $costo = intval($_GET['costos']);
        $precio = intval($_GET['precios']);
        $cantInventario = ($_GET['inventario']);
        $descripcion = ($_GET['descripciones']); ?>

        <form action="editarProducto.php" method="POST">
            <tr>
                <td><input type="text" name="id" value="<?php echo $id; ?>" required></td>
                <td><input type="text" name="nombre" value="<?php echo $nombre; ?>" required></td>
                <td><input type="number" name="costo" value="<?php echo $costo; ?>" required></td>
                <td><input type="number" name="precio" required value="<?php echo $precio; ?>"></td>
                <td><input type="text" name="cant_inventario" required value="<?php echo $cantInventario; ?>" ></td>
                <td><input type="text" name="descripcion" required value="<?php echo $descripcion; ?>"></td>
                <input type="submit" value="Editar">
            </tr>
        </form>
</body>
</html>