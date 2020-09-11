

<?php

    include("conexion.php");



        $buscar = $_POST['buscar'];

        $comparar = "SELECT * FROM tbl_productos WHERE Nombre LIKE '%".$buscar."%'";
        $resultadoComparar = mysqli_query($conexion, $comparar);
        


?>