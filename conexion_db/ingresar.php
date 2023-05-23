<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div>
        <form class="position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body-tertiary rounded p-5" action="insertarbd.php">
            <label class="m-2" for="">Nombre</label><br>
            <input class="m-2" type="text" name="nombre" required><br>
            <label class="m-1" for="">Apellidos</label><br>
            <input class="m-1" type="text" name="apellidos" required><br>
            <label class="m-1" for="">Cedula</label><br>
            <input class="m-1" type="number" name="cedula" required><br>
            <label class="m-1" for="">Correo electronico</label><br>
            <input class="m-1" type="email" name="correo" required><br>
            <label class="m-1" for="">Contraseña</label><br>
            <input class="m-1" type="password" name="contrasenia" required><br>
            <input class="m-1 btn btn-primary" type="submit" value="Registrar">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>