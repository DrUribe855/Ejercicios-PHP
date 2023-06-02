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
                    <h2 class="form_title">Consultar producto</h2>
                        <div class="form_container">
                            <div class="form_group">
                                <input type="number" name="id" id="id" class="form_input" placeholder=" ">
                                <label for="id" class="form_label">Ingrese el ID del producto</label>
                                <span class="form_line"></span>
                            </div>
                        </div>
                        <input type="submit" value="Buscar" class="form_submit mt-3">
                </form>
            </article>
        </section>
    </main>
    <?php }else if(isset($_REQUEST['id'])){
            include_once("conexion.php");
            $id = $_REQUEST['id'];
            $consulta = $conexion -> query("select * from productos where id = '$id' ");

            while($row = $consulta->fetch_array()){ ?>
                <form action="" class="position-absolute top-50 start-50 translate-middle">
                    <h2 class="form_title">Información producto</h2>
                        <div class="form_container">
                            <div class="form_group">
                                <input type="number" name="id" id="id" class="form_input" placeholder=" " value="<?php echo $row['id']; ?>" disabled>
                                <label for="id" class="form_label">ID</label>
                                <span class="form_line"></span>
                            </div>
                            <div class="form_group">
                                <input type="text" name="nombre" id="nombre" class="form_input" placeholder=" " value="<?php echo $row['nombre']; ?>" disabled>
                                <label for="nombre" class="form_label">Nombre</label>
                                <span class="form_line"></span>
                            </div>
                            <div class="form_group">
                                <input type="text" name="costo" id="costo" class="form_input" placeholder=" " value="<?php echo $row['costo']; ?>" disabled>
                                <label for="costo" class="form_label">Costo</label>
                                <span class="form_line"></span>
                            </div>
                            <div class="form_group">
                                <input type="text" name="precio" id="precio" class="form_input" placeholder=" " value="<?php echo $row['precio']; ?>" disabled>
                                <label for="precio" class="form_label">Precio</label>
                                <span class="form_line"></span>
                            </div>
                            <div class="form_group">
                                <input type="text" name="cant_inventario" id="cant_inventario" class="form_input" placeholder=" " value="<?php echo $row['cant_inventario']; ?>" disabled>
                                <label for="cant_inventario" class="form_label">Cantidad inventario</label>
                                <span class="form_line"></span>
                            </div>
                            <div class="form_group">
                                <input type="text" name="descripcion" id="descripcion" class="form_input" placeholder=" " value="<?php echo $row['descripcion']; ?>" disabled>
                                <label for="descripcion" class="form_label">Cantidad inventario</label>
                                <span class="form_line"></span>
                            </div>
                        </div>
                        
                </form>

                <button href="principal.php"></button>
                
    <?php }
        
    } ?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>