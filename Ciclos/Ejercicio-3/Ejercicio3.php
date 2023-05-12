<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        if(empty($_REQUEST)){
        ?>
        <form action="" method="POST">
            <label for="">Ingrese el numero que desea multiplicar</label>
            <input type="number" name="numero">
            <br>
            <br>
            <input type="submit" value="Multiplicar">
        </form>
    <?php
        }else if(isset($_REQUEST['numero'])){
            $numero = $_REQUEST['numero'];
            for($i = 1; $i <= 10; $i++){
                $resultado = $numero*$i;
        ?>

            <p><?= $numero, " x ", $i, " = ", $resultado ;?> </p>

        <?php
            }
        }
    ?>
</body>
</html>