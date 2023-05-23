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
            <?php
                for($i = 0; $i < 2; $i++){
             ?>     
                    <label>Trabajador <?php echo $i; ?></label>
                    <br>
                    <label>Ingrese las horas trabajadas</label>
                    <input type="number" name="horasTrabajadas[]">
                    <br>
                    <br>
                    <label>Ingrese su sueldo por hora</label>
                    <input type="number" name="salarioHora[]">
                    <br>
                    <br>
                    <label>Seleccione su trabajo</label>
                    <select name="trabajador[]">
                        <option selected></option>
                        <option value="1">Digitador</option>
                        <option value="2">Diseñador</option>
                    </select>
                    <br>
                    <br>
           
            <?php   
                }
            ?>
            <input type="submit" value="Enviar"> 
        </form>
    <?php
        }else if(isset($_REQUEST['horasTrabajadas'])){
            $totalDigitadores = 0;
            $totalDiseñadores = 0;
            $horasTrabajadas = $_REQUEST['horasTrabajadas'];
            $salarioHora = $_REQUEST['salarioHora'];
            $trabajador = $_REQUEST['trabajador'];
            
            for ($i=0; $i < 2; $i++) { 
                $tipoTrabajador = $trabajador[$i];
                $salario = $salarioHora[$i]*$horasTrabajadas[$i];
                if($tipoTrabajador == 1 and $salario >= 1000000){
                    $impuestoSalario = $salario*0.12;
                    $salario-= $impuestoSalario; 
                    $totalDigitadores += $salario;
                    ?>
                    <p>Recibe descuento por impuestos</p>
                    <p>Su salario es: <?php echo $salario; ?></p>
                <?php
                }else if($tipoTrabajador == 2 and $salario >= 1000000){
                    $impuestoSalario = $salario*0.1;
                    $salario -= $impuestoSalario;
                    $totalDiseñadores+= $salario;
                    ?>
                    <p>Recibe descuento por impuesto</p>
                    <p>Su salario es: <?php echo $salario; ?></p>
                <?php
                }else{
                    ?>
                    <p>No paga impuestos</p>
                <?php
                }
            }
    ?>
    <?php
        }
    ?>
</body>
</html>