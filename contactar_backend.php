<?php

    include("conexion.php");

    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['comentario'])){


            $destinatario = "vivero.casaalejandra@gmail.com";
            $asunto = "Mensaje del Vivero";

            $nombre = $_POST['nombre'];
            $celular = $_POST['celular'];
            $correo = $_POST['correo'];
            $comentario = $_POST['comentario'];

            
            $mensaje = "Detalles del mensaje enviado:\n\n";
            $mensaje .= "Nombre: " .$nombre. "\n";
            $mensaje .= "Celular: " .$celular. "\n";
            $mensaje .= "Correo: " .$correo. "\n";
            $mensaje .= "Comentarios: " .$comentario. "\n\n";


            $enviar = mail($destinatario, $asunto, $mensaje);

            if($enviar){
               ?> <h2 class="Ok">¡Enviado!</h2> <?php 
            }else{
                ?> <h2 class="Error">Hubo un error, verifique los datos</h2> <?php
            }
            
        }else{
            ?> <h2 class="Error">Rellene los campos</h2> <?php
        }
    }
    

?>