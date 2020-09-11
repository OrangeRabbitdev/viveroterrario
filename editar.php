<?php include("comprobar_sesion.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViveroTerrario</title>
    <link rel="stylesheet" href="estilos/jade.css">
</head>
<body>

<?php

include("conexion.php");

$id = $_REQUEST['id'];

$consulta = "SELECT * FROM tbl_productos WHERE Id = '$id'";
$resultado = mysqli_query($conexion, $consulta);


$row = mysqli_fetch_assoc($resultado);



?>

    <main class="container">
    
       <!-- <ul>
            <li><button type="submit">Productos Destacados</button></li>
        </ul> -->



 
    <section class="forms">



        <form method = "post" class="Productos-form" enctype="multipart/form-data">

        <a href="index.php"></a>

        <h2 id="Producto-title">Editar este producto: <?php echo $row['Nombre'] ?></h2>

            <label for="Nombre">Nuevo nombre</label>
            <input type="text" id="Nombre" name="nombre">

            <label for="Precio">Nuevo precio</label>
            <input type="text" name="precio" id="Precio">

            <label for="Descripcion">Nueva descripción</label>
            <input type="text" name="descripcion" id="Descripcion">

            <label for="Cuidados">Nuevos cuidados</label>
            <input type="text" name="cuidados" id="Cuidados">

            <label for="Imagen" id="Label-image">Nueva imagen</label>
            <label for="Imagen" class="upload"></label>
                <div id="info"></div>
            <input type="file" name="imagen" id="Imagen">

            <input type="submit" name="enviar" id="Enviar" placeholder = "Enviar">
        </form>
    </section>


    </main>

<?php include("editar_backend.php") ?>

    <script src="js/upload_files.js"></script>
</body>
</html>