<?php
    include_once("conexion2.php");
?>

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
        <main>
            <section class="position-absolute top-0 start-50 translate-middle-x">
                <h2 class="form_title mt-3">PROVEEDORES</h2>
                <form action="" method="POST">
                    <input type="number" name="telefono" class="form-control mt-4 mb-4" placeholder="Ingrese el teléfono">
                    <input type="submit" value="Consultar" class="form-control btn btn-primary">
                </form>
                <br>
                <table class="table table-bordered ">
                    <thead>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Télefono</th>
                        <th>Producto</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        <?php
                           if(!empty($_POST['telefono'])){
                                $telefono = $_POST['telefono'];
                                $consulta = $conexion2 -> query("SELECT * FROM proveedores WHERE telefono = '%$telefono%'");
                           }else{
                                $consulta = $conexion2 -> query("SELECT * FROM proveedores");
                           }

                           while($row = $consulta -> fetch_array()){
                            ?>
                                <tr>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['direccion']; ?></td>
                                    <td><?php echo $row['telefono']; ?></td>
                                    <td><?php echo $row['producto']; ?></td>
                                    <td><a href="modificarProveedor.php?
                                    telefonoProv=<?php echo $row['telefono'];?> & 
                                    nombreProv=<?php echo $row['nombre']; ?> & 
                                    direccionProv=<?php echo $row['direccion'];?> &
                                    productos=<?php echo $row['producto']; ?>"  class="btn btn-success">Modificar</a></td>
                                    <td><a href="eliminarProveedor.php?telefono=<?php echo $row['telefono']; ?>" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </section>
            <button class="btn btn-primary"><a href="principal.php">Volver</a></button>
        </main>      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>