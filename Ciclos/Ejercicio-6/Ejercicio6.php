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
                <label>Ingrese la cantidad de estudiantes</label>
                <input type="number" name="cantidadEstudiantes">
                <br>
                <br>
                <input type="submit" name="Enviar">
            </form>
    <?php } ?>


    <?php if(isset($_REQUEST['cantidadEstudiantes'])){
            $cantidadEstudiantes = $_REQUEST['cantidadEstudiantes'];
    ?>
            <form action="" method="POST">
                <input type="hidden" name="cantidadEstudiantes" value="<?php echo $cantidadEstudiantes; ?>">
                <?php for($i = 0; $i < $cantidadEstudiantes; $i++) { ?>
                    
                    <label for="">Estudiante <?php echo $i+1; ?></label>
                    <br>   
                    <label for="">Ingrese el código del estudiante</label>
                    <input type="number" name="codigo[]">
                    <br>
                    <label for="">Ingrese el nombre del estudiante</label>
                    <input type="text" name="nombres[]">
                    <br>
                    <label for="">Ingrese el indicador de logro del estudiante</label>
                    <input type="number" name="indicador[]">
                    <br>
                    <br>
                <?php } ?>
                
    
                <input type="submit" value="Enviar">
            </form>
    <?php } ?>   
    <?php
        if(isset($_REQUEST['codigo'])){
            $estudiantes = $_REQUEST['cantidadEstudiantes'];
            $codigo = $_REQUEST['codigo'];
            $nombre = $_REQUEST['nombres'];
            $indicador = $_REQUEST['indicador'];
            echo "Hola mundo";
            for($i = 0; $i < $estudiantes; $i++){
                $codigoTemp = $codigo[$i];
                if($codigoTemp >= 0 and $codigoTemp <= 10){
                ?>
                <p>Código del estudiante: <?php echo $codigoTemp; ?> </p>
                <p>Nombre del estudiante: <?php echo $nombre[$i]; ?></p>
                <p>Indicador del estudiante: <?php echo "DEFICIENTE - ",$indicador[$i]; ?></p>

                <?php   
                }else if($codigoTemp >= 11 and $codigoTemp <= 30){
                ?>
                <p>Código del estudiante: <?php echo $codigoTemp; ?> </p>
                <p>Nombre del estudiante: <?php echo $nombre[$i]; ?></p>
                <p>Indicador del estudiante: <?php echo "INSUFICIENTE - ",$indicador[$i]; ?></p> 
                
                <?php
                }else if($codigoTemp >= 31 and $codigoTemp <= 50){
                ?>
                <p>Código del estudiante: <?php echo $codigoTemp; ?> </p>
                <p>Nombre del estudiante: <?php echo $nombre[$i]; ?></p>
                <p>Indicador del estudiante: <?php echo "ACEPTABLE - ",$indicador[$i]; ?></p>
                
                <?php
                }else if($codigoTemp >= 51 and $codigoTemp <= 70){
                ?>
                <p>Código del estudiante: <?php echo $codigoTemp; ?> </p>
                <p>Nombre del estudiante: <?php echo $nombre[$i]; ?></p>
                <p>Indicador del estudiante: <?php echo "BUENO - ",$indicador[$i]; ?></p>

                <?php
                }else if($codigoTemp >= 71 and $codigoTemp <= 90){
                ?>
                <p>Código del estudiante: <?php echo $codigoTemp; ?> </p>
                <p>Nombre del estudiante: <?php echo $nombre[$i]; ?></p>
                <p>Indicador del estudiante: <?php echo "SOBRESALIENTE - ",$indicador[$i]; ?></p>

                <?php
                }else if($codigoTemp > 91){
                ?>
                <p>Código del estudiante: <?php echo $codigoTemp; ?> </p>
                <p>Nombre del estudiante: <?php echo $nombre[$i]; ?></p>
                <p>Indicador del estudiante: <?php echo "EXCELENTE - ",$indicador[$i]; ?></p>
                
                <?php
                }
            }    
        }
        ?>


</body>
</html>