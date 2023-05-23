<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <?php
        if(empty($_REQUEST)){
    ?>
        <form action="" method="POST">
            <label class="mt-2 ms-2" for="num">Ingrese la cantidad de estudiantes</label>
            <input class="form-control form-control-sm w-25 mt-3 ms-2 " type="number" name="cantidad">
            <br>
            <input class="mt-2 ms-2 btn btn-primary" type="submit" value="Continuar">
        </form>
    
    <?php
        }else if(isset($_REQUEST['cantidad'])){
            $cantidadEstudiantes = $_REQUEST['cantidad'];
        ?>

        <form action="" method="POST">
            <input type="hidden" name="cantidadEstudiantes" value="<?= $cantidadEstudiantes ?>">
            <?php
                $cantidad = $_REQUEST['cantidad'];
                for($i = 0; $i < $cantidad; $i++){
            ?>
            
            <p class="mt-2 ms-2">Ingrese la información del estudiante <?php echo $i+1;?></p>
            <p class="mt-2 ms-2">Código de estudiante</p>
            <input class="form-control form-control-sm w-25 mt-3 ms-2 " type="number" name="codigo[]">
            <br>
            <p class="mt-2 ms-2">Nombre del estudiante</p>
            <input class="form-control form-control-sm w-25 mt-3 ms-2 " type="text" name="nombre[]">
            <br>
            <p class="mt-2 ms-2">Nota 1</p>
            <input class="form-control form-control-sm w-25 mt-3 ms-2 " type="number" step="any" name="nota1[]">
            <br>
            <p class="mt-2 ms-2">Nota 2</p>
            <input class="form-control form-control-sm w-25 mt-3 ms-2 " type="number" step="any" name="nota2[]">
            <br>
            <p class="mt-2 ms-2">Nota 3</p>
            <input class="form-control form-control-sm w-25 mt-3 ms-2 " type="number" step="any" name="nota3[]">
            <br>
            <br>

            <?php
                }
            ?>

            <input class="mt-2 ms-2 btn btn-primary" type="submit" value="Calcular">
                
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

            <p class="mt-2 ms-2">Nombre del estudiante: <?= $nombre[$posicionPromedioMayor];?></p>
            <p class="mt-2 ms-2">Promedio: <?= $promedioMayor;?></p>
            <?php
        }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>