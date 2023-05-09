<?php

 $nota1 = $_REQUEST['nota1'];
 $nota2 = $_REQUEST['nota2'];
 $nota3 = $_REQUEST['nota3'];

 $notaFinal = ($nota1 + $nota2 + $nota3)/3;
 
 if($notaFinal >= 3.5){
    echo ("El estudiante aprobó con un promedio de: ", $notaFinal);
 }else{
    echo ("El estudiante reprobó. Su promedio es: ", $notaFinal);
 }
?>