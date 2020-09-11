<?php

    include("conexion.php");



    if(isset($_POST['enviar'])){

        if(!empty($_POST['usuario']) && !empty($_POST['contraseña'])){

            $usuario = $_POST['usuario'];
            $contraseña = $_POST['contraseña'];
    
            $consultar = "SELECT usuario contrasena FROM tbl_usuarios WHERE usuario = '$usuario' AND contrasena = '$contraseña'";
            $query = mysqli_query($conexion, $consultar) or die(mysqli_error($conexion));
    
            $row = mysqli_num_rows($query);
    
            if($row > 0){

                session_start();
                $_SESSION['usuario'] = $usuario;
                header("Location:jade.php");
        
            }else{

                ?>
                <h2 class="Error"> No existe el usuario, preguntar al piojito </h2>
                <?php


            }

            mysqli_free_result($query);
            mysqli_close($conexion);

        }else{
            ?>
            <h2 class="Error">Mamá, llene los cuadritos</h2>
            <?php
            
        }
        

    }
    

?>