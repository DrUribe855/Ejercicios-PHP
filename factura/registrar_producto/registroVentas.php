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
    <?php if(empty($_REQUEST)){
        include_once("conexion4.php");
        $consulta = $conexion4 -> query("select * from ventas");
        }?>
        <main>
            <section>
                <article class="position-absolute top-0 start-50 translate-middle-x">
                    <h2 class="form_title mt-3">Proveedores</h2>
                    <br>
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>ID venta</th>
                                <th>Nombre producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($row = $consulta -> fetch_array()){?>
                                    <tr>
                                        <td><?php echo $row['id-venta']; ?></td>
                                        <td><?php echo $row['nombre']; ?></td>
                                        <td><?php echo $row['cantidad']; ?></td>
                                        <td><?php echo $row['precio']; ?></td>
                                        <td><?php echo $row['total']; ?></td>
                                    </tr>
                               <?php }?>
                        </tbody>
                    </table>
                </article>
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>