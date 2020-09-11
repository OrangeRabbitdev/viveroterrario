<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ViveroTerrario</title>
    <link rel="stylesheet" href="estilos/contactar.css">
</head>
<body>
    <main class="container-contacto">

    <a href="index.php" id="volver"><img src="img/regresar.png" alt=""></a>
    
        <h2>Formulario de contacto</h2>

        <form method = "POST">

        
            <div class="block">

                <label for="Nombre">Nombre</label>
                <input type="text" id="Nombre" name="nombre">

            </div class="block">
        
            
            <div class="block">

                <label for="Celular">Celular (opcional)</label>
                <input type="tel" id="Celular" name="celular">

            </div>
            
           <div class="block">

                <label for="Correo">Correo electrónico</label>
                <input type="email" id="Correo" name="correo">
           
           </div class="block">


            <div class="block">

                <label for="Comentario" id="title-comentario">Su duda o comentario</label>
                <textarea name="comentario" id="Comentario"></textarea>

            </div>

            <button type="submit" name="enviar">Enviar</button>
        </form>

        <?php include("contactar_backend.php") ?>
    
    </main>



</body>
</html>