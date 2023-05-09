<?php
    $cantidadDiurnas = $_REQUEST['horas_diurnas'];
    $cantidadNocturnas = $_REQUEST['horas_nocturnas'];
    $turno = $_REQUEST['turno'];
    $diasFestivos = $_REQUEST['festivos'];

    if($turno == 1){
        $valorHoras = $cantidadDiurnas*50000;

    }else if($turno == 2){
        $valorHoras = $cantidadNocturnas*80000;
    }else{
        $diurnas = $cantidadDiurnas*50000;
        $valorHoras += $diurnas;
        $nocturnas = $cantidadNocturnas*80000;
        $valorHoras+= $nocturnas;
    }

    if($valorHoras > 800000){
        $descuento = $valorHoras*0.1;
        $valorHoras-= $descuento;
    }

    if($diasFestivos == "Si"){
        $valorHoras*=1.15;
    }

    echo ("Su salario es de: "), $valorHoras;

?>