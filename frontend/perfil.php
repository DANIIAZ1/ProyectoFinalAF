<?php 
include '../static/header.php';
$user= $_SESSION['usuario'];
?> <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <div class= perfil>
    <h2> Perfil</h2>
    <h4>El usuario <?php echo $user ?> ha iniciado sesión correctamente</h4>
    </div>

    <a href="../backend/salir.php">
            <input type="button" value="Cerrar sesión.">
    </a>
   
    
</body>
</html>
