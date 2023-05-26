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
                        <label for="">Ingrese el ID del producto</label>
                        <input type="number" name="id">
                        <label for="">Cantidad</label>
                        <input type="number" name="cantidad">
                        <label for="">Precio</label>
                        <input type="number" name="precio">
                        <input type="submit" value="Registrar">
                    </form>
                </article>
            </section>
        </main>
    <?php }else if(isset($_REQUEST['id'])){
        $cantidad = $_REQUEST['cantidad'];
        $precio = $_REQUEST['precio'];

        $total = $precio*$cantidad;

        include_once("conexion3.php");
        $conexion3 -> query("insert into log_ventas(id,cantidad,precio) values ('$_REQUEST[id]','$_REQUEST[cantidad]','$_REQUEST[precio]')");
        echo "Registrado con éxito";
    } ?>
</body>
</html>