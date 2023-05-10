<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php">
        <label for="">Ingrese el nombre del articulo</label>
        <input type="text" name="nombre">
        <br>
        <br>
        <label for="">Seleccione la clave</label>
        <select name="clave" id="">
            <option value="1">01</option>
            <option value="2">02</option>
        </select>
        <br>
        <br>
        <label for="">Ingrese el precio del producto</label>
        <input type="number" name="precio">
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>