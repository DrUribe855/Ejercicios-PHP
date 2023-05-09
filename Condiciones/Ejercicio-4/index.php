<?php

    $cantidadProductos = $_REQUEST['cantidad'];
    $precioProductos = $_REQUEST['precio'];

    $valorCompra = $cantidadProductos * $precioProductos;

    if($valorCompra > 100000){
        $descuento = $valorCompra*0.2;
        $valorCompra-= $descuento;
    }

    echo "El total de la compra es: ", $valorCompra;

?>