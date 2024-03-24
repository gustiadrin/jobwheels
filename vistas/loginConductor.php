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

<!-- LOGIN -->
<form action="http://localhost/ProyectoDAW/jobwheels/index.php?controlador=loginConductor&accion=logearse" method="POST">
      <h1>Login</h1>
      <h1 class="h3 mb-3 fw-normal">Introduzca DNI y contraseña</h1>
  
      <div class="form-floating">
        <input type="text" class="form-control" name="dni" placeholder="DNI">
        <label for="floatingInput">DNI</label>
      </div>
      <div class="form-floating">
        <input type="contrasena" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
        <label for="floatingPassword">Contraseña</label>
      </div>
  
      <div class="form-check text-start my-3">
        <?php
          if(isset($data["errorLogin"])){
            echo $data["errorLogin"];
          }
        ?>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Aceptar</button>
      <button class="btn btn-primary w-100 py-2" type="button" onclick="window.location.href='index.php'">Cancelar</button>
    </form>
    
    
  <!-- LOGIN -->

  <?php
  
  include_once "./vistas/includes/footer.php";
  
  ?>