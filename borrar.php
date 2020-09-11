
<?php

    include("conexion.php");

    $id = $_REQUEST['id'];

    $query = "DELETE FROM tbl_productos WHERE Id = '$id'";
    $resultado = mysqli_query($conexion, $query);

    header("Location:index.php");

?>