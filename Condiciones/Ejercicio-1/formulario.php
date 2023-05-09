<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="POST">
        <p>Ingrese la cantidad de ventas hechas en el mes</p>
        <input type="number" name="valor_ventas">
        <br>
        <br>
        <p>Seleccione el precio por el que vendió el producto</p>
        <select name="precio_venta" id="">
            <option selected></option>
            <option value="1">Precio 1</option>
            <option value="2">Precio 2</option>
        </select>
        <input type="submit" value="Consultar">
        
    </form>
    
</body>
</html>