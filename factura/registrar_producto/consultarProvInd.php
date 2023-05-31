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
        <section>
            <article>
                <form action="" class="position-absolute top-50 start-50 translate-middle">
                    <h2 class="form_title">Información proveedor</h2>
                    <div class="form_container">
                        <div class="form_group">
                            <input type="number" name="telefono" id="telefono" class="form_input" placeholder=" ">
                            <label for="telefono" class="form_label">Ingrese el télefono del proveedor</label>
                            <span class="form_line"></span>
                        </div>
                    </div>
                    <input type="submit" value="Buscar" class="form_submit mt-3">
                </form>
            </article>
        </section>
    </main>
    <?php }else if(isset($_REQUEST['telefono'])){
            include_once("conexion2.php");
            $telefono = $_REQUEST['telefono'];
            $consulta = $conexion2 -> query("select * from proveedores where telefono = '$telefono' ");

            while($row = $consulta->fetch_array()){ ?>
                 <form action="" class="position-absolute top-50 start-50 translate-middle">
                    <h2 class="form_title">Información producto</h2>
                        <div class="form_container">
                            <div class="form_group">
                                <input type="text" name="nombre" id="nombre" class="form_input" placeholder=" " value="<?php echo $row['nombre']; ?>" disabled>
                                <label for="nombre" class="form_label">Nombre</label>
                                <span class="form_line"></span>
                            </div>
                            <div class="form_group">
                                <input type="text" name="direccion" id="direccion" class="form_input" placeholder=" " value="<?php echo $row['direccion']; ?>" disabled>
                                <label for="direccion" class="form_label">Dirección</label>
                                <span class="form_line"></span>
                            </div>
                            <div class="form_group">
                                <input type="text" name="telefono" id="telefono" class="form_input" placeholder=" " value="<?php echo $row['telefono']; ?>" disabled>
                                <label for="telefono" class="form_label">Costo</label>
                                <span class="form_line"></span>
                            </div>
                            <div class="form_group">
                                <input type="text" name="producto" id="producto" class="form_input" placeholder=" " value="<?php echo $row['producto']; ?>" disabled>
                                <label for="producto" class="form_label">Precio</label>
                                <span class="form_line"></span>
                            </div>
                        </div>
                        
                </form>
    <?php }
        
    } ?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>