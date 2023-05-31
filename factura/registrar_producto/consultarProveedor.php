<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <?php if(empty($_REQUEST)){ ?>

        <main>
            <section class="position-absolute top-0 start-50 translate-middle-x">
                <h2 class="form_title mt-3">Proveedores</h2>
                <br>
                <table class="table ">
                    <thead>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Télefono</th>
                        <th>Producto</th>
                    </thead>
                    <tbody>
                        <?php
                            include_once("conexion2.php");
                            $consulta = $conexion2 -> query("select * from proveedores");
    
                            while($row = $consulta -> fetch_array()){ ?>
                                <tr>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['direccion']; ?></td>
                                    <td><?php echo $row['telefono']; ?></td>
                                    <td><?php echo $row['producto']; ?></td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </section>
        </main>
    <?php } ?>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>