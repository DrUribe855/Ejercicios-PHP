<?php

    include_once("conexion2.php");

    $nombre = ($_POST['nombre']);
    $direccion = ($_POST['direccion']);
    $telefono = ($_POST['telefono']);
    $producto = ($_POST['producto']);

    $conexion2 -> query("UPDATE proveedores set nombre='$nombre', direccion='$direccion', telefono='$telefono', producto='$producto' ");
    header("Location: consultarProveedor.php");

?>