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
            <input type="text" = name="cantidadClientes" value="<?= $cantidadClientes> ?>">
            <?php
                $cantidad = $_REQUEST['clientes'];
                for($i = 0; $i < $clientes; $i++){
                ?>

                <label for="">Ingrese el monto total de la compra</label>
                <input type="number" name="montoTotal" id="">
                <label for=""></label>

                }
        </form>
        }
        
</body>
</html>