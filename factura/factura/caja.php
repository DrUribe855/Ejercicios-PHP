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
    <?php if(empty($_REQUEST)){ ?>
        <main>
            <section>
                <article>
                    <form action="" class="position-absolute top-50 start-50 translate-middle">
                        <div class="form_container">
                        <div class="form_group">
                                <select name="producto" id="producto" class="form_input" placeholder=" " required>
                                    <?php 
                                        // include_once("conexion.php");
                                        $productos = $conexion->query("select * from productos");
                                        while($row = $productos->fetch_array()){ ?>
                                            <option value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre']; ?></option>

                                    <?php } ?>
                                </select>
                                <label for="producto" class="form_label">Producto:</label>
                                <span class="form_line"></span>

                            </div>
                            <div class="form_group">
                                <input type="number" name="cantidad" id="cantidad" class="form_input" placeholder=" " required>
                                <label for="cantidad" class="form_label">Cantidad:</label>
                                <span class="form_line"></span>
                            </div>
                        </div>
                        <input type="submit" value="Continuar" class="form_submit mt-5 me-1">
                    </form>
                    <button class="btn btn-primary"><a href="principal.php">Volver</a></button>
                </article>
            </section>
        </main>
    <?php }else if(isset($_REQUEST['producto'])){
            $producto = $_REQUEST['producto']; 
            $cantidad = $_REQUEST['cantidad'];
        ?>
        <main>
            <section>
                <article>
                    <form action="factura.php" method="POST" class="position-absolute top-50 start-50 translate-middle">
                        <h2 class="form_title">CAJA</h2>
                        <div class="form_container">
                            <div class="form_group">
                                <input type="text" name="nombre" id="nombre" class="form_input" value="<?php echo "$producto"; ?>" placeholder=" " readonly>
                                <label for="nombre" class="form_label">Producto:</label>
                                <span class="form_line"></span>
                            </div>
                            <?php
                                $consulta = $conexion -> query("SELECT * FROM productos WHERE nombre = '$producto'");
                                while($row = $consulta -> fetch_array()){
                                    $cantidadInv = $row['cant_inventario'];
                                    $precio = $row['precio'];
                                }
                                if($cantidad <= 0){ ?>

                                    <div class="alert alert-danger mt-3" role="alert">
                                        Debe ingresar una cantidad mayor a 0.
                                    </div>
                            <?php }else{ 
                                    if($cantidad > $cantidadInv){ ?>
                                    <div class="alert alert-danger mt-3" role="alert">
                                        No hay suficiente cantidad en el inventario. Cantidad disponible: <?php echo $cantidadInv; ?>
                                    </div>
                               <?php }else{ ?>
                                <div class="form_group">
                                        <input type="number" value="<?php echo $precio; ?>" id="precio" name="precioP" class="form_input" readonly>
                                        <label for="precio" class="form_label">Precio</label>
                                        <span class="form_line"></span>
                                </div>
                                <div class="form_group">
                                    <input readonly type="number" name="cantidad" id="cantidad" class="form_input"  placeholder=" " value="<?php echo $cantidad; ?>" required>
                                    <label for="cantidad" class="form_label">Cantidad:</label>
                                    <span class="form_line"></span>
                                </div>
                                <div class="form_group">
                                    <?php $total = $cantidad*$precio ?>
                                    <input type="number" name="total" id="total" class="form_input"  placeholder=" " value="<?php echo $total ?>" required>
                                    <label for="total" class="form_label">Total a pagar</label>
                                    <span class="form_line"></span>
                                </div>
                                <div class="form_group">
                                    <input type="number" name="recibido" id="recibido" class="form_input"  placeholder=" " required>
                                    <label for="recibido" class="form_label">Recibe:</label>
                                    <span class="form_line"></span>
                                </div>

                                <input type="submit" value="Registrar" class="form_submit mt-3">

                               <?php } ?>
                                
                            <?php } ?> 


                        </div>
                    </form>
                    <button class="btn btn-primary"><a href="principal.php">Volver</a></button>
                    <input type="hidden" name="" value="">

                    
                </article>
            </section>
        </main>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>