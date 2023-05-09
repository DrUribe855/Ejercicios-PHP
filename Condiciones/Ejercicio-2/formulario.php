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
        <p>Seleccione su turno</p>
        <select name="turno">
            <option selected></option>
            <option value="1">Diurno</option>
            <option value="2">Nocturno</option>
            <option value="3">Ambos</option>
        </select>
        <br>
        <br>
        <h4>Ingrese las horas diurnas trabajadas</h4>
        <input type="number" name="horas_diurnas">
        <h4 >Ingrese las horas nocturnas trabajadas</h4>
        <input type="number" name="horas_nocturnas" id="">
        <br>
        <h4>¿Trabajó domingos y festivos?</h4>
        <label for="">Si</label>
        <input type="radio" name="festivos" value="Si" id="">
        <label for="">No</label>
        <input type="radio" name="festivos" value="No" id="">

        <input type="submit" value="Consultar">
    </form>
</body>
</html>