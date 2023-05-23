<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(empty($_REQUEST)){
        ?>
        <form action="" method="POST">
            <label for="">Ingrese la cantidad de clientes</label>
            <input type="number" name="clientes">
            <br>
            <br>
            <input type="submit" value="Enviar">
        </form>
    <?php
        }else if(isset($_REQUEST['clientes'])){
            $cantidadClientes = $_REQUEST['clientes'];
        ?>

        <form action="" method="POST">
            <input type="hidden" name="cantidadClientes" value="<?= $cantidadClientes ?>">
            <?php
                
                for($i = 0; $i < $cantidadClientes; $i++){
                ?>
                    <label for="">Ingrese el monto total de la compra</label>
                    <input type="number" name="monto[]" id="">
                    <br>
                    <br>    
                    <label>Ingrese la cantidad recibida</label>
                    <input type="number" name="recibida[]">
                    <br>
                    <br>
                <?php
                }
            ?>
            <input type="submit" name="Enviar">
            <br>
            <br>
        </form>
        <?php
        }else{
            $clientes = $_REQUEST['cantidadClientes'];
            $clientesAtendidos = 0;
            $totalVentas = 0;
            $monto = $_REQUEST['monto'];
            $recibida = $_REQUEST['recibida'];
            
            for($i = 0; $i < $clientes; $i++){
                $montoIva = $monto[$i]*1.19;
                $cambio = $recibida[$i]-$monto[$i];
                $clientesAtendidos++;
                $totalVentas += $montoIva;
            ?>   

                <p>Cliente: <?php echo $i;?></p>
                <p>Total a pagar: <?php echo $monto[$i]; ?></p>
                <p>Total a pagar con IVA: <?php echo $montoIva; ?></p>
                <p>Recibido: <?php echo $recibida[$i];?></p>
                <p>Cambio: <?php echo $cambio;?></p>

        <?php
            }
        ?>
        <p>Clientes atendidos: <?php echo $clientesAtendidos; ?></p>
        <p>Total ventas: <?php echo $totalVentas; ?></p>

    <?php
        }
    ?>
        
</body>
</html>