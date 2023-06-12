<?php
    include_once("conexion4.php");
    $id = $_GET['id'];

    $conexion4 -> query("DELETE FROM ventas WHERE id_venta='$id'");
    header("Location: registroVentas.php");
?>