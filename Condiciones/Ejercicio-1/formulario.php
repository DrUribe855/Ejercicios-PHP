<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="POST">
        <label class="mt-2 ms-2">Ingrese la cantidad de ventas hechas en el mes</label>
        <br>
        <input type="number" name="valor_ventas" class="form-control form-control-sm w-25 mt-3 ms-2 ">
        <br>
        <label class="mt-2 ms-2">Seleccione el precio por el que vendió el producto</label>
        <br>
        <select name="precio_venta" class="mt-2 ms-2 form-select form-control-sm w-25">
            <option selected></option>
            <option value="1">Precio 1</option>
            <option value="2">Precio 2</option>
        </select>
        <input type="submit" value="Consultar" class="mt-2 ms-2 btn btn-primary">
        
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>