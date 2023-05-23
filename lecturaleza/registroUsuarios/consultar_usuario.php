<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo Electronico</th>
                <th>Cédula</th>
                <th>Télefono</th>
                <th>Direccion</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once("conexion1.php");
                include_once("conexion2.php");
                $consulta1 = $conexion1->query("select * from registro_inicial");
                $consulta2 = $conexion2->query("select * from segundo_registro");

                while($row = $consulta1->fetch_array()){ ?>
                    <tr>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
                        <?php
                        while($row = $consulta2 -> fetch_array()){ ?>
                            <td><?php echo $row['cedula']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td><?php echo $row['direccion']; ?></td>
                            <td><?php echo $row['edad']; ?></td>
                            <?php break ?>

                    <?php   }
                    }
                    ?>

                    </tr>
        </tbody>
    </table>
</body>
</html>