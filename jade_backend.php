
<?php

    error_reporting(0);

    include("conexion.php");

    if(isset($_POST['enviar'])){

        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $cuidados = $_POST['cuidados'];
        $categoria = $_POST['categoria'];

        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    
        if(empty($nombre)){
             ?>
            <h2 class="Error">
                No puso el nombrecito :c
             </h2>
             <?php

        }else if(empty($precio)){
            ?>
            <h2 class="Error">
                No puso el precio ¿como vamos a hacer plata?
            </h2>
            <?php

        }else if(empty($imagen)){
            ?>
            <h2 class="Error">
                Mamá, la imagen
            </h2>
            <?php

        }else{
            $consulta = "INSERT INTO tbl_productos (Nombre, Precio, Descripcion, Imagen, Cuidados, categoria) VALUES('$nombre', '$precio', '$descripcion', '$imagen', '$cuidados', '$categoria')";
            $query = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
    
            if($query){
                ?> 
                    <div class="OkContainer">
                    <h2 class="Ok"> Todo nais </h2>
                    <a href="index.php" id="volver"> Ir al inicio </a>
                    </div>
                 <?php
            }
        }

    }

?>