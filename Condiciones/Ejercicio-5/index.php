<?php
    $numero1 = $_REQUEST['num1'];
    $numero2 = $_REQUEST['num2'];

    if($numero1 > $numero2){
        echo $numero1, " ", $numero2;
    }else{
        echo $numero2, " ", $numero1;
    }
?>