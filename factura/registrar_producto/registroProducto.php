<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Registro</title>
</head>
<body>

    <?php if(empty($_REQUEST)){ ?>
        <main>
            <section>
                    <form action="" class="position-absolute top-50 start-50 translate-middle mt-1">
                        <h2 class="form_title">Registro Productos</h2>
                        <div class="form_container">
                            <div class="form_group">
                                <input type="number" name="id" id="id" class="form_input" placeholder=" ">
                                <label for="id" class="form_label">ID:</label>
                                <span class="form_line"></span>

                            </div>
                            <div class="form_group">
                                <input type="text" name="nombre" id="nombre" class="form_input" placeholder=" ">
                                <label for="nombre" class="form_label">Nombre:</label>
                                <span class="form_line"></span>

                            </div>
                            <div class="form_group">
                                <input type="number" name="costo" id="costo" class="form_input" placeholder=" ">
                                <label for="costo" class="form_label">Costo:</label>
                                <span class="form_line"></span>

                            </div>
                            <div class="form_group">
                                <input type="number" name="precio" id="precio" class="form_input" placeholder=" ">
                                <label for="precio" class="form_label">Precio:</label>
                                <span class="form_line"></span>

                            </div>
                            <div class="form_group">
                                <input type="number" name="inventario" id="inventario" class="form_input" placeholder=" ">
                                <label for="inventario" class="form_label">Cantidad Inventario:</label>
                                <span class="form_line"></span>

                            </div>
                            <div class="form_group">
                                <textarea name="descripcion" cols="50" rows="3" id="descripcion" class="form_input"></textarea>
                                <label for="descripcion" class="form_label">Descripción:</label>
                                <span class="form_line"></span>

                            </div>
                        </div>
                        
                        <input type="submit" value="Registrar" class="form_submit">
                    </form>
            </section>
        </main>
    <?php }else if(isset($_REQUEST['id'])){
        include_once("conexion.php");
        $conexion -> query("insert into productos(id,nombre,costo,precio,cant_inventario,descripcion) values ('$_REQUEST[id]','$_REQUEST[nombre]','$_REQUEST[costo]','$_REQUEST[precio]','$_REQUEST[inventario]','$_REQUEST[descripcion]')");
        echo "El usuario ha sido registrado en la base de datos";
    } ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>