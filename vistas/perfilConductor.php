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



  <main class="px-3">

  <h2 class="display-6 text-center mb-4">Perfil Conductor</h2>

<div class="table-responsive">
  <table class="table text-center">
    <tbody>
      <tr>
        <th scope="row" class="text-start">Nombre: </th>
        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg><?php echo $data[0]["nombre"];?></td>
      </tr>
      <tr>

        <th scope="row" class="text-start">DNI</th>
        <td></td>
        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg><?php echo $data[0]["dni"];?></td>
      </tr>
    </tbody>

    <tbody>
      <tr>
        <th scope="row" class="text-start">Ciudad</th>
        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg><?php echo $data[0]["ciudad"];?></td>
      </tr>
      <tr>
        <th scope="row" class="text-start">Disponible</th>
        <td></td>
        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg><?php echo ($data[0]["disponible"]=(0) ? "Si" : "No");?></td>
      </tr>
      <tr>
        <th scope="row" class="text-start">Presentación</th>
        <td></td>
        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
        <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg><?php echo $data[0]["presentacion"];?></td>
      </tr>
    </tbody>
  </table>
  <button class="btn btn-primary w-100 py-2" type="button" onclick="window.location.href='index.php?controlador=actualizarConductor&accion=verActualizar'">Actualizar perfil</button>
  <button class="btn btn-primary w-100 py-2" type="button">Lista de empresas</button>
  <button class="btn btn-primary w-100 py-2" type="button" onclick="window.location.href='index.php'">Cerrar sesión</button>
</div>
  </main>

<?php
  
  include_once "./vistas/includes/footer.php";
  
  ?>