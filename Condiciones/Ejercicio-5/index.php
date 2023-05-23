<?php
    $numero1 = $_REQUEST['num1'];
    $numero2 = $_REQUEST['num2'];

    if($numero1 > $numero2){
        echo $numero2, " ", $numero1;
    }else{
        echo $numero1, " ", $numero2;
    }
?>