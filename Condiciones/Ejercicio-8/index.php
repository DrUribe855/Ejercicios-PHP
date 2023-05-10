<?php
    $precioCamisa = $_REQUEST['precio'];
    $cantidadCamisa = $_REQUEST['cantidad'];
    $valorCompra = $cantidadCamisa*$precioCamisa;

    if($cantidadCamisa >= 3){
        $descuento = $valorCompra*0.2;
        $valorCompra-= $descuento;
    }else{
        $descuento = $valorCompra*0.1;
        $valorCompra-= $descuento;
    }

    echo "El valor de la compra es de: ",$valorCompra;
?>