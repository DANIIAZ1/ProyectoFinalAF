<?php 
include '../static/header.php';
$user= $_SESSION['usuario'];

function obtenerProyectos() {
  include 'conexion.php';
  try {
      return $conn->query('SELECT * FROM grupos');
  } catch(Exception $e) {
      echo "Error! : " . $e->getMessage();
      return false;
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Krub:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Perfil</title>
</head>
<body>
<div class= perfil>
    <h1 class="text-center">Grupos</h1>
    </div>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Monitor</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead> 

  <div class="perfil">

  <ul id="grupos">
      <?php
          $proyectos = obtenerProyectos();
          if($proyectos) {
              foreach($proyectos as $proyecto) { ?>
                <tr>
                    <td><?php echo $proyecto['id'] ?></td>
                    <td><?php echo $proyecto['nombre'] ?></td>
                    <td><?php echo $proyecto['monitor'] ?></td>
                    <td><?php echo $proyecto['descripcion']; ?></td>
                </tr>
      <?php   }
          }
      ?>
  </ul>
</div>

</body>


