

<?php
    include_once("conexion2.php");
    $telefono = $_GET['telefono'];

    $conexion2 -> query("DELETE FROM proveedores WHERE telefono = '$telefono' ");

    header("Location: consultarProveedor.php");

?>