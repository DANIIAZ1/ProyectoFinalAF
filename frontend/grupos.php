<?php 
include '../static/header.php';
$user= $_SESSION['usuario'];
?> <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
</table>
  
    
</body>
</html>
