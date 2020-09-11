<?php 

include("conexion.php"); // 110425

error_reporting(0);
session_start(); 

    $this_page = "index.php";
    $categoria = "Destacado";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vivero Terrario</title>
    <link rel="stylesheet" href="estilos/main.css">
    <link rel="stylesheet" href="estilos/mobile.css">
</head>
<body>

    




    <?php include("header.php"); ?>
    
    <section class="contactar-container">

            
            <?php include("preguntar.php") ?>

        </section>

        <h2 id="title-index">Nuestros productos destacados</h2>

        <main class="container">


        <?php

//GESTION DE RESULTADOS X PAGINA

$resultados_x_pagina = 6;
$link_maximo = 6;

$sql = "SELECT * FROM tbl_productos WHERE categoria = '$categoria'";
$sql_resultado = mysqli_query($conexion, $sql);
$resultados_totales = mysqli_num_rows($sql_resultado);

$numero_de_paginas = ceil($resultados_totales / $resultados_x_pagina);


?>


<?php

// VALIDACIONES
    
        if(!isset($_GET['pagina'])){
            $pagina = 1;
            header("Location:" . $this_page . '?pagina=' . $pagina);
        }else{
            $pagina = $_GET['pagina'];
        }

        if($_GET['pagina'] > $numero_de_paginas){
            $pagina = $pagina - 1;
            header("Location:" . $this_page . '?pagina=' . $pagina);
        }

        if($_GET['pagina'] <= 0){
            $pagina = 1;
            header("Location:" . $this_page . '?pagina=' . $pagina);
        }

        if(strpos($_GET['pagina'], '|') || strpos($_GET['pagina'], '&') || strpos($_GET['pagina'], '/') || strpos($_GET['pagina'], '(') || strpos($_GET['pagina'], ')') || strpos($_GET['pagina'], '.') || strpos($_GET['pagina'], ',')){
            $pagina = 1;
            header("Location:" . $this_page . '?pagina=' . $pagina);
        }
       
    $primera_pagina_resultado = ($_GET['pagina'] - 1) * $resultados_x_pagina;

?>



        <?php 
        
        $consulta = "SELECT * FROM tbl_productos WHERE categoria = '$categoria' LIMIT " . $primera_pagina_resultado . ',' . $resultados_x_pagina;
        $resultado = mysqli_query($conexion, $consulta);

        $fila = mysqli_num_rows($resultado);

        while($row = mysqli_fetch_array($resultado)){
        ?>

            <article class="card">

                    <?php if($_SESSION['usuario'] != '' || $_SESSION['usuario'] != null){ ?>
                    
                        <div class="options">
                            <a href="editar.php?id=<?php echo($row['Id']); ?>" id="editar"></a>
                            <a href="borrar.php?id=<?php echo($row['Id']); ?>" id="eliminar"></a>
                        </div>

                        <?php } ?>

                    <div class="wrap-card cardhover" id="tarjeta">
                        
                        <div class="img-mask front">
                            <img src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>" alt="foto-producto">
                        </div>


                        <div class="back">
                            
                            <div class="img-back-mask">
                                <img src="img/jaye.jpg" alt="foto trasera">
                            </div>

                            <h2>Cuidados:</h2>
                             <p><?php echo($row['Cuidados']); ?></p>
                        </div>

                    </div>
                    
                    <div class="info-container">

                        <div class="wrap-info">
                            <div class="precio-container">
                            <h2 id="Titulo-producto"><?php echo($row['Nombre']); ?></h2>
                            <p id="Precio-producto"><?php echo($row['Precio']); ?></p>
                            </div>

                            <p id="DescripcionProducto"><?php echo($row['Descripcion']); ?></p>
                            
                           
                        </div>
                        <div class="link-contacto-container"><a href="contactar.php?id=<?php echo($row['Id']); ?>" id="contactar-link">Preguntar</a></div>
                    </div>
            </article>

        <?php
        }
        ?>

        </main>


        <nav class="pagination">
            <ul>
                <li id="after"><a class="<?php if($_GET['pagina'] <= 1){echo 'disabled';}else{echo '';} ?>" href="<?php $this_page ?>?pagina=<?php echo $_GET['pagina'] - 1?>"><</a></li>
                <?php

                if($fila > 0){
                    for($pagina = 1; $pagina <= $numero_de_paginas; $pagina++){

                        if($pagina < $link_maximo){
                            ?> 
                                <li><a class="<?php if($_GET['pagina'] == $pagina){ echo 'selected'; }else{ ''; } ?>" href="<?php $this_page ?>?pagina=<?php echo($pagina);?>"> <?php echo $pagina; ?> </a></li>
                            <?php
                        }
                    }?>
               <?php } ?>

                    
               
                <?php if($numero_de_paginas >= $link_maximo){
                    ?>
                        <li id="indicator">. . .</li>
                        <li><a  href="<?php $this_page ?>?pagina=<?php echo $pagina - 1;?>"> <?php echo $pagina - 1; ?> </a></li>
                    <?php
                } ?>
                
                <li id="before"><a class="<?php if($_GET['pagina'] >= $pagina - 1){echo 'disabled';}else{ echo '';} ?>" href="<?php $this_page ?>.php?pagina=<?php echo $_GET['pagina'] + 1 ?>">></a></li>
            </ul>
        </nav>

        <?php include("footer.php") ?>

    <script src="js/menu.js"></script>
    <script src="js/mobile-menu.js"></script>
    <script src="js/cards.js"></script>
</body>
</html>