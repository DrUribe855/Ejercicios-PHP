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
        <h1 class="mt-2 ms-2">Notas estudiantes</h1>
        <label class="mt-2 ms-2" for="">Ingrese la nota 1</label>
        <input class="form-control form-control-sm w-25 mt-3 ms-2 " type="number" step="any" name="nota1" id="">
        <br>
        <label class="mt-2 ms-2" for="">Ingrese la nota 2</label>
        <input class="form-control form-control-sm w-25 mt-3 ms-2 " type="number" step="any" name="nota2" id="">
        <br>
        <br>
        <label class="mt-2 ms-2"for="">Ingrese la nota 3</label>
        <input class="form-control form-control-sm w-25 mt-3 ms-2 " type="number" step="any" name="nota3" id="">
        <br>
        <input class="mt-2 ms-2 btn btn-primary" type="submit" value="Calcular">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>