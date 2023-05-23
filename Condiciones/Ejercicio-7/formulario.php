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
    <form action="index.php">
        <label class="mt-2 ms-2" for="">Ingrese el nombre del articulo</label>
        <input class="form-control form-control-sm w-25 mt-3 ms-2 " type="text" name="nombre">
        <br>
        <label class="mt-2 ms-2" for="">Seleccione la clave</label>
        <select class="mt-2 ms-2 form-select form-control-sm w-25" name="clave" id="">
            <option value="1">01</option>
            <option value="2">02</option>
        </select>
        <br>
        <label class="mt-2 ms-2" for="">Ingrese el precio del producto</label>
        <input class="form-control form-control-sm w-25 mt-3 ms-2 " type="number" name="precio">
        <br>
        <input class="mt-2 ms-2 btn btn-primary" type="submit" value="Registrar">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>