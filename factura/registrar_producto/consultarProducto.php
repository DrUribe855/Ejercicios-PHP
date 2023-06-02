<?php
    include_once("conexion.php");
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
                <h2>PRODUCTOS</h2>
                <center>
                    <form action="" method="POST">
                        <input type="number" placeholder="Ingrese el ID" autocomplete="off" name="buscar" class="form-control mt-4 mb-4">
                        <input type="submit" value="Buscar" class="form-control btn btn-primary mb-4">
    
                    </form>
                </center>
                <br>
                <table class="table table-bordered">
                    
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Costo</th>
                        <th>Precio</th>
                        <th>Cantidad inventario</th>
                        <th>Descripcion</th>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($_POST['buscar'])){
                            $buscar = $_POST['buscar'];
                            $consulta = $conexion -> query("SELECT * FROM productos WHERE id LIKE '%$buscar%' ORDER BY nombre");
                            }else{
                                $consulta = $conexion -> query("SELECT * FROM productos");
                            }
                            
                            while($row = $consulta -> fetch_array()){ 
                                $cod = $row['id'];    
                            ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['costo']; ?></td>
                                <td><?php echo $row['precio']; ?></td>
                                <td><?php echo $row['cant_inventario']; ?></td>
                                <td><?php echo $row['descripcion']; ?></td>
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