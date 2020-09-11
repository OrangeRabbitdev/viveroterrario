<?php

    session_start();

    $sesion = $_SESSION['usuario'];

    if($sesion == null || $sesion == ''){
        header("Location:login.php");
        die();
    }
?>