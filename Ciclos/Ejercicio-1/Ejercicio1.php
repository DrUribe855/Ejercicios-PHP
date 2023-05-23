<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CICLOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
    if(empty($_REQUEST)){
        ?>
            <form action="" method="POST">
                <label class="mt-2 ms-2" for="num">Ingrese la cantidad de clientes</label>
                <input class="form-control form-control-sm w-25 mt-3 ms-2 " for="text" class="form-control mb-3" name="num"></input>
                <input class="mt-2 ms-2 btn btn-primary" type="submit" class="btn btn-outline-warning" name="submit" value="Enviar"></input>
            </form>
            
        <?php

    }elseif(isset($_REQUEST['num'])){
        ?>
            <form action="" method="POST">
            <?php
            
            $num = $_REQUEST['num'];
            for($i=0; $i<$num; $i++){
                ?>

                <label class="mt-2 ms-2" for="">Ingrese la cantidad del cliente <?php echo $i+1;?> </label> 
                <input class="form-control form-control-sm w-25 mt-3 ms-2 " type="number" class="form-control" name="cantidad[]" value=""/>

                <br>
                <?php
            }

        ?>
            <input type="submit" class="mt-2 ms-2 btn btn-primary" value="Enviar"/>    
            
            </form>

        <?php

    }else{
        foreach($_REQUEST['cantidad'] as $cantidad){
            echo "<br>";
            echo "Cantidad: ", $cantidad, '<br>';
            $valornaranja=5000;
            $descuento=0;
       
            if($cantidad>10){
                $valorcompra=$cantidad*$valornaranja;
                $descuento=$valorcompra*0.15;
                $totalcliente=$valorcompra-$descuento;
                echo "Obtiene descuento". '<br>';
                echo "El cliente compro: ",$cantidad, " kilos de naranja.", '<br>';
                echo "El valor de la compra fue: ",$valorcompra, " pesos.", '<br>';
                echo "El valor del descuento fue: ",$descuento, " pesos.", '<br> ';
                echo "El total de la compra es: ",$totalcliente, " pesos.", '<br>';
                '<br>';
            } else{
                echo "No tiene Descuento", '<br>';
                $valorcompra=$cantidad*$valornaranja;
                $totalcliente=$valorcompra-$descuento;
                echo "El cliente compro: ",$cantidad, " kilos de naranja.", '<br>';
                echo "El valor de la compra fue: ",$valorcompra, " pesos.", '<br>';
                echo "El valor del descuento fue: ",$descuento, " pesos.", '<br> ';
                echo "El total de la compra es: ",$totalcliente, " pesos.", '<br>';
                '<br>';
            }

        }
        $total=$totalcliente+$totalcliente;

        echo "EL TOTAL DE LA VENTA FUE: ",$total;
    }

?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


