<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Registro Agricultor</title>
</head>
<body>
    <?php if(empty($_REQUEST)){ ?>
        <nav class="navbar navegacion">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <h1>Agroecología</h1>
                </a>
            </div>
        </nav>
        <main>
            <article class="col-12 container">
                <section clas="position-absolute top-50 start-50 translate-middle">
                    <form class="shadow-lg  bg-body-tertiary rounded p-5 mb-5 registro">
                        <div>
                            <h1 class="pb-3 title">Registro <span class="agroecologia">Producto</span></h1>
                        </div>   
                        <div class="user-details">
                            <div class="input-box">
                            <label for="" class="mt-2 details">Nombre del producto</label>
                            <input type="text" name="nombre" class="form-control mt-2 inputRegistro">
                        </div>
                        <div class="input-box">
                            <label for="" class="mt-2 details">Precio</label>
                            <input type="number" name="precio" class="form-control mt-2 inputRegistro">
                        </div>
                        <div class="input-box">
                            <label for="" class="mt-2 details">Fecha de vencimiento</label>
                            <input type="date" name="vencimiento" class="form-control mt-2 inputRegistro">
                        </div>
                        <div class="input-box">
                            <label for="" class="mt-2 details">Categoria</label>
                            <select name="categoria" class="form-control mt-2 categoria">
                                <option value="" selected> --- </option>
                                <option value="frutos_secos">Frutos secos</option>
                            </select>
                        </div>   
                        <div class="input-box">
                            <label for="" class="mt-2 details">Descripcion</label>
                            <textarea name="descripcion" class="form-control" id="floatingTextarea2" cols="20" rows="6"></textarea>
                        </div>   
                        <div class="input-box">
                            <label for="" class="mt-2 details">Foto</label>
                            <input type="file" name="foto" class="form-control mt-5 inputRegistro">
                        </div>   
                        <div class="input-box">
                            <input type="submit" value="Registrar" class=" mt-3 btn btn-success button">
                        </div>
                    </form>
                </section>
            </article>
        </main>
        <?php }else if(isset($_REQUEST['nombre'])){
            include_once("conexion.php");
            $conexion -> query("insert into productos(nombre,precio,vencimiento,categoria,descripcion) values('$_REQUEST[nombre]',$_REQUEST[precio],'$_REQUEST[vencimiento]','$_REQUEST[categoria]','$_REQUEST[descripcion]')");
            echo "El agricultor ha sido registrado en la base de datos";
        } ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>