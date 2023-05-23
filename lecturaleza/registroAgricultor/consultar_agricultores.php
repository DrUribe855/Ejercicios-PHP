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
                <th>Cedula</th>
                <th>Télefono</th>
                <th>Direccion</th>
                <th>Correo Electronico</th>

            </tr>
        </thead>
        <tbody>
            <?php 
                include_once("conexion.php");
                $consulta = $conexion->query ("select * from agricultores");

                while($row = $consulta-> fetch_array()){
            ?>
           <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['cedula']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td><?php echo $row['direccion']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                
            <?php } ?>
           </tr>
        </tbody>
    </table>
</body>
</html>