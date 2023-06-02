<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(empty($_REQUEST)){
    ?>
    <main>
        <section>
            <form action="">
                <label for="">ID</label>
                <input type="number">
                <label for="">Nombre</label>
                <input type="text">
                <label for="">Descripcion</label>
                <textarea name="" id="" cols="30" rows="5"></textarea>
                <label for="">Costo</label>
                <input type="number" name="costo">
                <label for="">Precio</label>
                <input type="text" name="precio">
                <label for="">Cantidad inventario</label>
                <input type="number" name="inventario" id="">
            </form>
        </section>
    </main>
    <?php } ?>
</body>
</html>