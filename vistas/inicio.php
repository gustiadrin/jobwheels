<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>JobWheels</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="assets/css/estilos.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
 
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

  <?php
  
  include_once "./vistas/includes/header.php";
  
  ?>


<!-- BIENVENIDO -->
  <main class="px-3">
    <h1>Bienvenido</h1>
    <p class="lead">¿Cómo desea iniciar sesión?</p>
    <div class="warning">
        <?php
          if(isset($data["errorLogin"])){
            echo $data["errorLogin"];
          }
        ?>
      </div>
    <p class="lead">
      <a href="index.php?controlador=loginEmpresa&accion=verLogin" class="btn btn-lg btn-light fw-bold border-white bg-white">Empresa</a>
      <a href="index.php?controlador=loginConductor&accion=verLogin" class="btn btn-lg btn-light fw-bold border-white bg-white">Conductor</a>
    </p>
    <p class="lead">¿Aún no tienes cuenta?</p>
    <p class="lead">
      <a href="index.php?controlador=registro&accion=verRegistro" class="btn btn-lg btn-light fw-bold border-white bg-white">Regístrate aquí</a>
    </p>
    
  <!-- BIENVENIDO -->
  </main>

<?php
  
  include_once "./vistas/includes/footer.php";
  
  ?>