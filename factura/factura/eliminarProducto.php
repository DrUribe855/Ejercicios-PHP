<?php
    include_once("conexion.php");
    $id = $_GET['id'];

    $conexion -> query("DELETE FROM productos WHERE id='$id'");
    header("Location: consultarProducto.php");
?>