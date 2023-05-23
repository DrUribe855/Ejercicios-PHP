<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <?php
        if(empty($_REQUEST)){
    ?> 
    <main class="container text-center">
        <section class="row">
            <article class="col-6">
                <form class="position-absolute top-50 start-20 translate-middle-y shadow-lg  bg-body-tertiary rounded p-5 p-3 mb-5 loginInicial" action="">
                    <h1 class="pb-3">Registro <br>
                        <span class="agroecologia">Agroecología</span> 
                    </h1>
                    <label class="ms-1" for="">Nombre</label><br>
                    <input class="form-control mt-2 inputRegistro" type="text" name="nombre" required><br>
                    <label class="ms-1" for="">Correo electronico</label><br>   
                    <input class="form-control mt-2 inputRegistro" type="email" name="correo" required><br>
                    <input class="btn btn-success registrar" type="submit" value="Registrar">
                </form>
            </article>
            <article class="col-6 mt-4 mb-4 divFoto">
                <img class="imgRegistro1 rounded shadow p-3 bg-body-tertiary rounded" src="img/fotoRegistro1.jpg" alt="" width="615em" height="602em">   
            </article>
        </section>
    </main>
    <?php
        }else if(isset($_REQUEST['correo'])){
            include_once("conexion1.php");
            $conexion1 ->query("insert into registro_inicial(nombre,correo) values ('$_REQUEST[nombre]','$_REQUEST[correo]')");
    ?>
        <section class="row slider">
            <article class="col-6">
                <div id="carouselExampleSlidesOnly" class="carousel slide shadow lg bg-body-tertiary rounded p-5 m2-3 mt-2 mb-2" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/campesino.jpg" class="d-block w-100" alt="..." height="505em">
                        </div>
                        <div class="carousel-item">
                            <img src="img/trabajador.jpg" class="d-block w-100" alt="..." height="500em">
                        </div>
                        <div class="carousel-item">
                            <img src="img/fotoRegistrar.jpg" class="d-block w-100" alt="..." height="500em">
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-6 container">
                <form class="position-absolute top-50 start-20 translate-middle-y shadow-lg  bg-body-tertiary rounded segundo-login p-5 p-3 mb-5">
                    <div>
                        <h1 class="pb-3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registro <br>
                            <span class="agroecologia">Agroecología</span> 
                        </h1>
                    </div>   
                    <div class="user-details">
                        <div class="input-box">
                        <label for="" class="mt-2">Cedula</label>
                        <input type="number" name="cedula" class="form-control mt-2 inputRegistro">
                    </div>
                    <div class="input-box">
                        <label for="" class="mt-2">Télefono</label>
                        <input type="number" name="telefono" class="form-control mt-2 inputRegistro">
                    </div>
                    <div class="input-box">
                        <label for="" class="mt-2">Dirección</label>
                        <input type="text" name="direccion" class="form-control mt-2 inputRegistro">
                    </div>
                    <div class="input-box">
                        <label for="" class="mt-2">Edad</label>
                        <input type="number" name="edad" class="form-control mt-2 inputRegistro">
                    </div>   
                    <div>
                        <input type="submit" value="Registrar" class="form-control mt-4 btn btn-success">
                    </div>
                </form>
                
            </article>
        </section>
    <?php
    }else{
        include_once("conexion2.php");
        $conexion2 ->query("insert into segundo_registro(cedula,telefono,direccion,edad) values('$_REQUEST[cedula]','$_REQUEST[telefono]','$_REQUEST[direccion]','$_REQUEST[edad]')");
        echo "el usuario se ha registrado con exito";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>