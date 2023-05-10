<?php
    $nombreProducto = $_REQUEST['nombre'];
    $claveProducto = $_REQUEST['clave'];
    $precioProducto = $_REQUEST['precio'];

    if($claveProducto == 1){
        $descuento = $precioProducto * 0.1;
        $precioDescuento = $precioProducto-$descuento;
    }else if($claveProducto == 2){
        $descuento = $precioProducto*0.2;
        $precioDescuento = $precioProducto-$descuento;
    }

    echo "Nombre del producto: ", $nombreProducto."<br>";
    echo "Clave del producto: ", $claveProducto."<br>";
    echo "Precio normal: ", $precioProducto."<br>";
    echo "Precio con descuento: ", $precioDescuento;
?>