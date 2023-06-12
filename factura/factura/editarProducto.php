<?php
    include_once("conexion.php");

    $id = ($_POST['id']);
    $nombre = ($_POST['nombre']);
    $costo = ($_POST['costo']);
    $precio = ($_POST['precio']);
    $cantInventario = ($_POST['cant_inventario']);
    $descripcion = ($_POST['descripcion']);

    $conexion -> query("UPDATE productos SET id='$id', nombre='$nombre', costo='$costo', precio='$precio',cant_inventario = '$cantInventario', descripcion='$descripcion' WHERE id='$id'");
    header("Location: consultarProducto.php");

?>