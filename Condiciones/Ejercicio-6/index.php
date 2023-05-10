<?php
    $actividad = $_REQUEST['actividad'];
    $cantMinutos = $_REQUEST['minutos'];

    if($actividad == 1){
        $calorias = $cantMinutos*1.08;
        echo "La cantidad de calorias quemadas fueron: ", $calorias;
    }else if($actividad == 2){
        $calorias = $cantMinutos*1.66;
        echo "La cantidad de calorias quemadas fueron: ", $calorias;
    }else if($actividad == ""){
        echo "Selecciona una actividad";
    }else if($cantMinutos == ""){
        echo "Ingrese los minutos";
    }   
?>