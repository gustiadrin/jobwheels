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
    <link href="./assets/css/estilos.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
 
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

<?php
  include_once "./vistas/includes/header.php";
  ?>

</header>


<!-- REGISTRO -->  
<form action="index.php?controlador=registro&accion=validarRegistro" method="POST">
    <h1>Registro</h1>
    <h3 class="h3 mb-3 fw-normal">Introduzca los siguientes datos</h3>

    <div class="form-floating">
      <input type="text" class="form-control" id="user" placeholder="Usuario" name="user">
      <label for="user">DNI/CIF</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass">
      <label for="pass">Contraseña</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" id="empresa" name="checkEmpresa">
      <label class="form-check-label" for="empresa">
        Empresa
      </label>
    </div>
    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" id="conductor" name="checkConductor">
      <label class="form-check-label" for="conductor">
        Conductor
      </label>
    </div>
    <div>
      <p class="warning" id="resultado">
        <?php
          if(isset($data["errorRegistro"])){
            echo $data["errorRegistro"];
          }
        ?>
      </p>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Crear</button>
  </form>
  <button class="btn btn-primary w-100 py-2" type="button" onclick="window.location.href='index.php'">Cancelar</button>
  <!-- REGISTRO -->

  
<?php
  
  include_once "./vistas/includes/footer.php";
  
?>