<?php
    $producto = $_REQUEST['nombre'];
    $precio = $_REQUEST['precioP'];
    $cantidad = $_REQUEST['cantidad'];
    $recibido = $_REQUEST['recibido'];
    $total = $cantidad*$precio;
    $devuelta = $recibido-$total;
    include_once("conexion4.php");
    $consulta = $conexion4 -> query("select * from productos where nombre = '$producto'");
    while($row = $consulta -> fetch_array()){
        $cantidadInv = $row['cant_inventario'];
    } ?>
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
            <section>
                <article>
                    <form action="" class="position-absolute top-50 start-50 translate-middle">
                        <h2 class="form_title">FACTURA</h2>
                            <div class="form_container">
                                <div class="form_group">
                                    <input type="text" name="nombre" id="producto" class="form_input" placeholder=" " value="<?php echo $producto ?>" disabled>
                                    <label for="producto" class="form_label">Nombre producto</label>
                                    <span class="form_line"></span>
                                </div>
                                <div class="form_group">
                                    <input type="number" name="precio" id="precio" class="form_input" placeholder=" " value="<?php echo $precio ?>" disabled>
                                    <label for="precio" class="form_label">Precio producto</label>
                                    <span class="form_line"></span>

                                </div>
                                <div class="form_group">
                                    <input type="number" name="cantidad" id="cantidad" class="form_input" placeholder=" " value="<?php echo $cantidad ?>" disabled>
                                    <label for="cantidad" class="form_label">Cantidad comprada</label>
                                    <span class="form_line"></span>

                                </div>
                                <div class="form_group">
                                    <input type="number" name="total" id="total" class="form_input" placeholder=" " value="<?php echo $total ?>" disabled>
                                    <label for="total" class="form_label">Total a pagar</label>
                                    <span class="form_line"></span>
                                </div>
                                <div class="form_group">
                                    <input type="number" name="recibido" id="recibido" class="form_input" placeholder=" " value="<?php echo $recibido ?>" disabled>
                                    <label for="recibido" class="form_label">Recibido</label>
                                    <span class="form_line"></span>
                                </div>
                                <?php if($recibido < $total){ ?>
                                    <div class="alert alert-danger mt-3" role="alert">
                                        El dinero recibido es menor al total.
                                    </div>  
                                <?php }else{ 
                                    include_once("conexion4.php");
                                    $conexion4 -> query("insert into ventas(nombre, precio, cantidad, total) values ('$producto','$precio','$cantidad','$total')"); ?>

                                <div class="form_group">
                                    <input type="number" name="devuelta" id="devuelta" class="form_input" placeholder=" " value="<?php echo $devuelta ?>" disabled>
                                    <label for="devuelta" class="form_label">Devuelta</label>
                                    <span class="form_line"></span>
                                </div>
                                <?php } ?>
                                
                            </div>
                           
                    </form>
                    <button class="btn btn-primary"><a href="principal.php">Volver</a></button>
                </article>
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
    </html>
  <?php  
   
?>
