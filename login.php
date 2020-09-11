<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViveroTerrario</title>
    <link rel="stylesheet" href="estilos/formularios.css">
</head>
<body>

    <section class="forms">
        <form method = "post" class="Productos-form" enctype="multipart/form-data">
        <a href="index.php"></a>
        <h2 id="Producto-title">Ingresar</h2>

            <label for="Usuario">Usuario</label>
            <input type="text" id="Usuario" name="usuario">

            <label for="Contraseña">Contraseña</label>
            <input type="password" name="contraseña" id="Contraseña">

            <input type="submit" name="enviar" id="Enviar" value = "Enviar">
        </form>
    </section>

    <?php include("login_backend.php") ?>
</body>
</html>