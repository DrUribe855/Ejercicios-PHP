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
                    <h2 class="form_title">Registro Proveedor</h2>
                        <div class="form_container">
                            <div class="form_group">
                                <input type="text" name="nombre" id="nombre" class="form_input" placeholder=" ">
                                <label for="nombre" class="form_label">Nombre:</label>
                                <span class="form_line"></span>

                            </div>
                            <div class="form_group">
                                <input type="text" name="direccion" id="direccion" class="form_input" placeholder=" ">
                                <label for="direccion" class="form_label">Direccion</label>
                                <span class="form_line"></span>

                            </div>
                            <div class="form_group">
                                <input type="number" name="telefono" id="telefono" class="form_input" placeholder=" ">
                                <label for="telefono" class="form_label">Télefono:</label>
                                <span class="form_line"></span>

                            </div>
                            <div class="form_group">
                                <select name="producto" id="producto" class="form_input" placeholder=" ">
                                    <?php 
                                        include_once("conexion.php");
                                        $productos = $conexion->query("select * from productos");
                                        while($row = $productos->fetch_array()){ ?>
                                            <option value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></option>

                                    <?php } ?>
                                </select>
                                <label for="producto" class="form_label">Producto:</label>
                                <span class="form_line"></span>

                            </div>
                        </div>
                        <input type="submit" value="Registrar" class="form_submit mt-5">
                    </form>
                    <button class="btn btn-primary"><a href="principal.php">Volver</a></button>
                </article>
            </section>
        </main>

    <?php }else if(isset($_REQUEST['nombre'])){
        include_once("conexion2.php");
        $conexion2 -> query("insert into proveedores(nombre,direccion,telefono,producto) values ('$_REQUEST[nombre]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[producto]')");
        echo "El proveedor se ha registrado con exito";
    } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>