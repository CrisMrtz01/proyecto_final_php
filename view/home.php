<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Proyecto PHP-MVC-MYSQL</title>

  <!-- CSS  -->
  <link href="img/favicon.png" type="image/png" rel="icon"/>
  <link href="css/icon.css" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav id="nav" class="azul-ast" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="?c=<?php echo base64_encode('Home'); ?>" class="brand-logo"><img src="img/logo.png" class="responsive-img" ></a>
    <!-- menú dispositivos grandes -->
      <ul class="right hide-on-med-and-down">
        <li><a href="?c=<?php echo base64_encode('Talla'); ?>">Talla</a></li>
        <li><a href="?c=<?php echo base64_encode('Color'); ?>">Color</a></li>
        <li><a href="?c=<?php echo base64_encode('Cliente'); ?>">Cliente</a></li>
        <li><a href="?c=<?php echo base64_encode('Usuario'); ?>">Usuario</a></li>

        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger btn naranja-ast tooltipped" data-position="bottom" data-tooltip="Usuario activo" href='#' data-target='dropdown1'><i class="material-icons">person_pin</i></a></li>

        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
          <li><a href="#" class="azul-ast white-text"><i class="material-icons white-text">menu</i>&nbsp;</a></li>
          <li><a href="?c=<?php echo base64_encode('Login'); ?>&a=<?php echo base64_encode('Salir'); ?>" class="naranja-ast-text"><i class="material-icons">exit_to_app</i>Salir</li></a>
          
          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaClave'); ?>" class="naranja-ast-text"><i class="material-icons">vpn_key</i>Nueva clave</a></li>
          
          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaPregunta'); ?>" class="naranja-ast-text"><i class="material-icons">live_help</i>Nueva pregunta</a></li>

          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('EditarDatos'); ?>" class="naranja-ast-text"><i class="material-icons">assignment</i>Mis datos</a></li>
        </ul>
      </ul>

      <!-- menú dispositivos móbiles -->      
      <ul id="nav-mobile" class="sidenav azul-ast">
        <li><a class="white-text" href="?c=<?php echo base64_encode('Home'); ?>"><i class="material-icons white-text">home</i>inicio</a></li>
        <li><a class=" white-text" href="?c=<?php echo base64_encode('Talla'); ?>"><i class="material-icons white-text">style</i>Talla</a></li>
        <li><a class=" white-text" href="?c=<?php echo base64_encode('Color'); ?>"><i class="material-icons white-text">color_lens</i>Color</a></li>
        <li><a class=" white-text" href="?c=<?php echo base64_encode('Cliente'); ?>"><i class="material-icons white-text">supervisor_account</i>Cliente</a></li>
        <li><a class=" white-text" href="?c=<?php echo base64_encode('Usuario'); ?>"><i class="material-icons white-text">account_circle</i>Usuario</a></li>

        <!-- Dropdown Trigger -->
        <li><a class="dropdown-trigger btn naranja-ast" href='#' data-target='dropdown2'><i class="material-icons white-text">person_pin</i> Usuario activo</a></li>

        <!-- Dropdown Structure -->
        <ul id='dropdown2' class='dropdown-content'>
          <li><a href="#" class="azul-ast white-text"><i class="material-icons white-text">menu</i>MENÚ</a></li>

          <li><a href="?c=<?php echo base64_encode('Login'); ?>&a=<?php echo base64_encode('Salir'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">exit_to_app</i>Salir</a></li>
          
          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaClave'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">vpn_key</i>Nueva clave</a></li>
          
          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('NuevaPregunta'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">live_help</i>Nueva pregunta</a></li>

          <li><a href="?c=<?php echo base64_encode('Usuario'); ?>&a=<?php echo base64_encode('EditarDatos'); ?>" class="naranja-ast-text"><i class="material-icons naranja-ast-text">assignment</i>Mis datos</a></li>
        </ul>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Proyecto final</h1>
      <div class="row center">
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
      </div>
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <footer id="footer" class="page-footer naranja-ast">
    <div class="container">
      <!-- floating button -->
      <div class="fixed-action-btn">
        <a class="btn-floating btn-large azul-ast">
          <i class="large material-icons">airplay</i>
        </a>
        <ul>
          <li><a href="#footer" class="btn-floating gris-ast"><i class="material-icons">arrow_downward</i></a></li>
          <li><a href="#nav" class="btn-floating gris-ast"><i class="material-icons">arrow_upward</i></a></li>
        </ul>
      </div>
      <!-- foot -->
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Proyecto final</h5>
          <p class="grey-text text-lighten-4">
            Proyecto final desarrollado en PHP, con la metodología MVC (Model - View - Controller) y MySQL como gestor de bases de datos. 
            Todas las vistas se crearon con el framework de diseño Materializecss basado en Material Design.
          </p>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contactos</h5>
          <ul>
            <li><a class="white-text" href="mailto:amakakeo@gmail.com">email: amakakeo@gmail.com</a></li>
            <li><a class="white-text" href="https://www.youtube.com/channel/UCdCd9f4XTh2sle8P3oT_xYg" target="_blank">Youtube: Armando Sánchez Trabajando</a></li>
            <li><a class="white-text" href="www.facebook.com/armandosanchez.trabajando" target="_blank">Facebook: Armando Sánchez Trabajando</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <img src="img/logo.png" alt="Logo" class="responsive-img">
        </div>
      </div>
    </div>
    <div class="footer-copyright gris-ast">
      <div class="container">
      by <a class="white-text" href="https://www.youtube.com/channel/UCdCd9f4XTh2sle8P3oT_xYg" target="_blank">Ing. Armando Sánchez | Docente de educación técnica y superior en computación.</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
