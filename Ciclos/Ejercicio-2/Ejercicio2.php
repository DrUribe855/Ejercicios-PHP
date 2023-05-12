<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        if(empty($_REQUEST)){
    ?>
        <form action="" method="POST">
            <label for="num">Ingrese la cantidad de estudiantes</label>
            <input type="number" name="cantidad">
            <br>
            <input type="submit" value="Continuar">
        </form>
    
    <?php
        }else if(isset($_REQUEST['cantidad'])){
            $cantidadEstudiantes = $_REQUEST['cantidad'];
        ?>

        <form action="" method="POST">
            <input type="text" name="cantidadEstudiantes" value="<?= $cantidadEstudiantes ?>">
            <?php
                $cantidad = $_REQUEST['cantidad'];
                for($i = 0; $i < $cantidad; $i++){
            ?>
            
            <p>Ingrese la información del estudiante <?php echo $i;?></p>
            <br>
            <p>Código de estudiante</p>
            <input type="number" name="codigo[]">
            <br>
            <p>Nombre del estudiante</p>
            <input type="text" name="nombre[]">
            <br>
            <p>Nota 1</p>
            <input type="number" step="any" name="nota1[]">
            <br>
            <p>Nota 2</p>
            <input type="number" step="any" name="nota2[]">
            <br>
            <p>Nota 3</p>
            <input type="number" step="any" name="nota3[]">
            <br>
            <br>

            <?php
                }
            ?>

            <input type="submit" value="Calcular">
                
        </form>

            <?php
        }else{
            $codigo = $_REQUEST['codigo'];
            $nombre = $_REQUEST['nombre'];
            $nota1 = $_REQUEST['nota1'];
            $nota2 = $_REQUEST['nota2'];
            $nota3 = $_REQUEST['nota3'];
            $cantidadEstudiantes = $_REQUEST['cantidadEstudiantes'];
            $promedioMayor = 0;
            $posicionPromedioMayor = 0;
            for($i = 0; $i < $cantidadEstudiantes; $i++){
                $promedios[$i] = ($nota1[$i] + $nota2[$i] + $nota3[$i])/3;
                if($promedios[$i] > $promedioMayor){
                    $promedioMayor = $promedios[$i];
                    $posicionPromedioMayor = $i;
                }    
            }
            ?>

            <p>Nombre del estudiante: <?= $nombre[$posicionPromedioMayor];?></p>
            <p>Promedio: <?= $promedioMayor;?></p>
            <?php
        }
        ?>
        
</body>
</html>