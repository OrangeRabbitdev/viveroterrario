
<?php

error_reporting(0);

include("conexion.php");


$id = $_REQUEST['id'];

if(isset($_POST['enviar'])){


    $nuevoNombre = $_POST['nombre'];
    $nuevoPrecio = $_POST['precio'];
    $nuevaDescripcion = $_POST['descripcion'];
    $nuevosCuidados = $_POST['cuidados'];
    $nuevaImagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

  
    if(!empty($nuevoNombre)){
        $queryNombre = "UPDATE tbl_productos SET Nombre = '$nuevoNombre' WHERE Id = '$id'";
        $resultadoNombre = mysqli_query($conexion, $queryNombre);
    }

    if(!empty($nuevoPrecio)){
        $queryPrecio = "UPDATE tbl_productos SET Precio = '$nuevoPrecio' WHERE Id = '$id'";
        $resultadoPrecio = mysqli_query($conexion, $queryPrecio);
    }

    if(!empty($nuevaDescripcion)){
        $queryDescripcion = "UPDATE tbl_productos SET Descripcion = '$nuevaDescripcion' WHERE Id = '$id'";
        $resultadoDescripcion = mysqli_query($conexion, $queryDescripcion);
    }

    if(!empty($nuevosCuidados)){
        $queryCuidados = "UPDATE tbl_productos SET Cuidados = '$nuevosCuidados' WHERE Id = '$id'";
        $resultadoCuidados = mysqli_query($conexion, $queryCuidados);
    }

    if(!empty($nuevaImagen)){
        $queryImagen = "UPDATE tbl_productos SET Imagen = '$nuevaImagen' WHERE Id = '$id'";
        $resultadoImagen = mysqli_query($conexion, $queryImagen);
    }

    if($resultadoNombre || $resultadoPrecio || $resultadoDescripcion || $resultadoCuidados || $resultadoImagen){
        ?> 
        <div class="OkContainer">
            <h2 class="Ok"> La vaca ha cambiado la cosita </h2>
            <a href="index.php" id="volver">Volver</a>
        </div>

         <?php
    }

  //  header("Location:index.php");

}

    

?>