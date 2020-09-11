<?php include("comprobar_sesion.php");?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViveroTerrario</title>
    <link rel="stylesheet" href="estilos/formularios.css">
</head>
<body>


    <main class="container">
    
       <!-- <ul>
            <li><button type="submit">Productos Destacados</button></li>
        </ul> -->



 
    <section class="forms">
        <form method = "post" class="Productos-form" enctype="multipart/form-data">
        <a href="index.php"></a>
        <h2 id="Producto-title">Añadir un producto nuevo</h2>

            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="nombre">

            <label for="Precio">Precio</label>
            <input type="text" name="precio" id="Precio">

            <label for="Descripcion">Descripción</label>
            <input type="text" name="descripcion" id="Descripcion">

            <label for="Cuidados">Cuidados del producto</label>
            <input type="text" name="cuidados" id="Cuidados">
        
            <select name="categoria" id="Categoria">
                <option selected disabled>Seleccionar Categoría ▼</option>
                <option value="Destacado">Destacado</option>
                <option value="Arboles">Arboles</option>
                <option value="Terrarios">Terrarios</option>
                <option value="Ornamentales">Ornamentales</option>
                <option value="Aromaticas">Aromáticas</option>
            </select>

            <label for="Imagen" id="Label-image">Imagen</label>
            <label for="Imagen" class="upload"></label>
                <div id="info"></div>
            <input type="file" name="imagen" id="Imagen">

            <input type="submit" name="enviar" id="Enviar" placeholder = "Enviar">
        </form>
    </section>


    </main>

    <?php include("jade_backend.php") ?>

    <script src="js/upload_files.js"></script>
</body>
</html>