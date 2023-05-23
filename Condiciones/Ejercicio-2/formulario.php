<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label  class="mt-2 ms-2">Seleccione su turno</label>
        <br>
        <select name="turno" class="mt-2 ms-2 form-select form-select-sm w-25">
            <option selected></option>
            <option value="1">Diurno</option>
            <option value="2">Nocturno</option>
            <option value="3">Ambos</option>
        </select>
        <br>
        <label class="mt-2 ms-2">Ingrese las horas diurnas trabajadas</label>
        <input type="number" name="horas_diurnas" class="form-control form-control-sm w-25 mt-3 ms-2 ">
        <label class="mt-2 ms-2">Ingrese las horas nocturnas trabajadas</label>
        <input class="form-control form-control-sm w-25 mt-3 ms-2 " type="number" name="horas_nocturnas" id="">
        <br>
        <label class="mt-2 ms-2">¿Trabajó domingos y festivos?</label>
        <br>
        <label class="mt-2 ms-2 form-check-label" for="">Si</label>
        <input class="mt-2 ms-2 form-check-input" type="radio" name="festivos" value="Si" id="">
        <label for="">No</label>
        <input class="form-check-input" type="radio" name="festivos" value="No" id="">
        <br>
        <br>
        <input class="mt-2 ms-2 btn btn-primary" type="submit" value="Consultar">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>