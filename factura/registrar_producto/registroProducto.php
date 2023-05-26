<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

    <?php if(empty($_REQUEST)){ ?>
        <main>
            <section>
                <article>
                    <form action="">
                        <label for="">ID</label>
                        <input type="number" name="id">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre">
                        <label for="">Costo</label>
                        <input type="number" name="costo">
                        <label for="">Precio</label>
                        <input type="number" name="precio">
                        <label for="">Cantidad inventario</label>
                        <input type="number" name="inventario">
                        <label for="">Descripcion</label>
                        <textarea name="descripcion" cols="30" rows="5"></textarea>
                        <input type="submit" value="Registrar">
                    </form>
                </article>
            </section>
        </main>
    <?php }else if(isset($_REQUEST['id'])){
        include_once("conexion.php");
        $conexion -> query("insert into productos(id,nombre,costo,precio,cant_inventario,descripcion) values ('$_REQUEST[id]','$_REQUEST[nombre]','$_REQUEST[costo]','$_REQUEST[precio]','$_REQUEST[inventario]','$_REQUEST[descripcion]')");
        echo "El usuario ha sido registrado en la base de datos";
    } ?>
</body>
</html>