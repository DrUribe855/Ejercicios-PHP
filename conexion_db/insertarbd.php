<?php
   
   include_once("conexion.php");

    $conexion->query("insert into persona(nombre,apellido,cedula, correo, contrasenia) values ('$_REQUEST[nombre]','$_REQUEST[apellidos]',$_REQUEST[cedula],'$_REQUEST[correo]',$_REQUEST[contrasenia])");


    echo "El alumno ha sido ingresado";
?>