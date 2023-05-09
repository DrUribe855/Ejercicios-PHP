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
        Documento: <input type="number" name="documento">
        <br>
        Nombre: <input type="text" name="nombre">
        <br>
        Apellido: <input type="text" name="apellido">
        <br>
        Edad: <input type="text" name="edad">
        <br>
        Correo: <input type="text" name="correo">
        <br>    
        Genero: <label for="">Masculino</label>
                <input type="radio" name="genero" value="masculino"> 
                <label for="">Femenino</label>
                <input type="radio" name="genero" value="femenino">
                <label for="">Prefiero no decirlo (gay)</label>
                <input type="radio" name="genero" value="gay jaja">
        
        <br>
        <br>
        
        Ciudad: <select name="ciudad" id="" >
            <option selected >Seleccione su ciudad</option>
            <option value="Pereira">Pereira</option>
            <option value="Armenia">Armenia</option>
            <option value="Manizales">Manizales</option>
            <option value="Bogotá">Bogotá</option>
        </select>

        <br>
        <br>

        Perfil: <textarea name="perfil" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="Registrar">

    </form>
</body>
</html>