<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(empty($_REQUEST)){ ?>
        <main>
            <section>
                <article>
                    <form action="">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre">
                        <label for="">Dirección</label>
                        <input type="text" name="direccion">
                        <label for="">Télefono</label>
                        <input type="number" name="telefono">
                        <label for="">Producto</label>
                        <select name="producto">
                            <?php 
                                include_once("conexion.php");
                                $productos = $conexion->query("select * from productos");
                                while($row = $productos->fetch_array()){ ?>
                                    <option value="<?php echo $row['nombre']; ?>"><?php echo $row['nombre'] ?></option>

                                <?php } ?>
                        </select>
                        <input type="submit" value="Registrar">
                    </form>
                </article>
            </section>
        </main>

    <?php }else if(isset($_REQUEST['nombre'])){
        include_once("conexion2.php");
        $conexion2 -> query("insert into proveedores(nombre,direccion,telefono,producto) values ('$_REQUEST[nombre]','$_REQUEST[direccion]','$_REQUEST[telefono]','$_REQUEST[producto]')");
        echo "El proveedor se ha registrado con exito";
    } ?>
</body>
</html>