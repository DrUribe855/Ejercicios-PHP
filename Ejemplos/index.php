<?php
    $documento = $_REQUEST['documento'];
    $nombres = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $edad = $_REQUEST['edad'];
    $correo = $_REQUEST['correo'];
    $genero = $_REQUEST['genero'];
    $ciudad = $_REQUEST['ciudad'];
    $perfil = $_REQUEST['perfil'];

    echo "Numero de documento: ", $documento."</br>";
    echo "Nombres del usuario: ", $nombres."</br>";
    echo "Apellidos del usuario: ", $apellido."</br>";
    echo "Correo electronico: ", $correo."</br>";
    echo "Género: ", $genero."</br>";
    echo "Ciudad: ", $ciudad."</br>";
    echo "Perfil laboral: ", $perfil."</br>";


?>