
<a href="jade.php" id="icono-login"><img src="img/awacate.png" alt=""></a>

    <img src="img/mobile-menu.png" alt="" id="mobile-menu-icon">

    <nav class="mobile-menu" id="mobile-menu">
        <ul>
            <li><a href="index.php" class="mobile-link">INICIO</a></li>
            <li><a href="about.php" class="mobile-link">ACERCA DE</a></li>
            <li><a href="#" class="mobile-link" id="mobile-productos">PRODUCTOS</a>

                <ul class="mobile-submenu" id="mobilesubmenu">
                    <li><a href="ornamentales.php">ORNAMENTALES</a></li>
                    <li><a href="terrarios.php">TERRARIOS</a></li>
                    <li><a href="aromaticas.php">AROMÁTICAS</a></li>
                    <li><a href="arboles.php">ARBOLES NATIVOS</a></li>
                </ul>

            </li>
            <?php 
            
            if($_SESSION['usuario'] != '' || $_SESSION['usuario'] != null){?> 
            
            <li><a href="jade.php" class="mobile-link">PANEL ADMINISTRATIVO</a></li> 
            
            <?php } ?>
            
            
            <li id="mobile-contenedor-busqueda">
            
            <form action="resultado_busqueda.php" method = "POST" class="busqueda-container">

                <input type="submit" id="boton-buscar" value="">
                <input type="text" name = "buscar" id="mobile-barra-buscar">

            </form>
            
            
        </li>
            
        </ul>
    </nav>


<header class="Cabecera">

<a href="index.php"><img src="img/logo.png" alt="Logo Vivero Terrario" id="logo"></a>

<h2 class="alerta">Sitio web en construcción</h2>

<nav class="menu">
    <ul class="menu-principal">
        <li><a href="index.php" class="link">INICIO</a></li>
        <li><a href="about.php" class="link">ACERCA DE</a></li>
        <li><a href="#" class="link" id="productos">PRODUCTOS</a>
        
                <ul class="productos-menu" id="submenu">
                    <li><a href="ornamentales.php">ORNAMENTALES</a></li>
                    <li><a href="terrarios.php">TERRARIOS</a></li>
                    <li><a href="aromaticas.php">AROMÁTICAS</a></li>
                    <li><a href="arboles.php">ARBOLES NATIVOS</a></li>
                </ul>
                
        </li>

        <?php 
            
            if($_SESSION['usuario'] != '' || $_SESSION['usuario'] != null){?> 
            
            <li><a href="jade.php" class="mobile-link">PANEL ADMINISTRATIVO</a></li> 
            
        <?php } ?>

        <li id="contenedor-busqueda">
        
        <form action="resultado_busqueda.php" method = "POST" class="busqueda-container">

            <input type="submit" id="boton-buscar" value="">
            <input type="text" name="buscar" id="barra-buscar">

        </form>
        
        </li>
    </ul>
</nav>

</header>

