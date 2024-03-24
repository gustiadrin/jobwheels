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

  
  <?php if (count($data) == 0){?>
    <div>
        <h2>No hay empresas disponibles</h2>
    </div>
    <button class="btn btn-primary w-100 py-2" type="button" onclick="window.location.href='index.php?controlador=perfilConductor&accion=verPerfilConductor'">Volver</button>
   <?php }else{?>
    <main class="px-3">

    <h2>Empresas disponibles</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Email</th>
              <th scope="col">Ciudad</th>
              <th scope="col">Vehículos libres</th>
            </tr>
          </thead>
          <tbody>
            <?php 
                $i=0;

                while ($i < count($data)) {?>
                    <tr>
                    <td><?php echo $data[$i]["nombre_empresa"]?></td>
                    <td><?php echo $data[$i]["descripcion"]?></td>
                    <td><?php echo $data[$i]["telefono"]?></td>
                    <td><?php echo $data[$i]["email"]?></td>
                    <td><?php echo $data[$i]["ciudad"]?></td>
                    <td><?php echo $data[$i]["v_disponibles"]?></td>
                    </tr>
                <?php $i++;} ?>
          
          </tbody>
        </table>
        <button class="btn btn-primary w-100 py-2" type="button" onclick="window.location.href='index.php?controlador=perfilConductor&accion=verPerfilConductor'">Volver</button>
      </div>

  </main>
<?php } ?>

<?php
  
  include_once "./vistas/includes/footer.php";
  
  ?>