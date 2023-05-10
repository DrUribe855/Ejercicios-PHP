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
        <select name="actividad">
            <option value="1">Dormir</option>
            <option value="2">Sentado</option>
        </select>
        <br>
        <label for="">Ingrese la cantidad de minutos</label>
        <input type="number" step="any" name="minutos">
        <br>
        <input type="submit"  value="Calcular">
    </form>
</body>
</html>