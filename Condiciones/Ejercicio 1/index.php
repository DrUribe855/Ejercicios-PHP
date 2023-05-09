<?php
    $valorVentas = $_REQUEST['valor_ventas'];
    $precioVentas = $_REQUEST['precio_venta'];

    if($valorVentas > 10000000 && $precioVentas == 2){
        echo "Su comision es del 10%";
    }else if($valorVentas > 10000000 && $precioVentas == 1){
        echo "Su comision es del 4%";
    }else if($valorVentas < 10000000 && $valorVentas > 0 && $precioVentas == 2){
        echo "Su comision es del 4%";
    }else if($valorVentas < 10000000 && $valorVentas > 0 && $precioVentas == 1){
        echo "Su comision será del 1%";
    }else{
        echo "Su comision es del 0%";
    }
?>