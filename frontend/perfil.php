<?php 
include '../static/header.php';
$user= $_SESSION['usuario'];

?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Krub:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Perfil</title>
</head>
<body>
    <div class= "sidenav">
    <h4> <strong>Perfil de <?php echo $user ?></strong></h4>
    <div class="enviar">
        <a class="boton" href="../backend/grupos.php">Listar grupos</a>
    </div>
    <div class="enviar">
        <a class="boton" href="eventos.php">Listar eventos</a>
    </div>
                    
    </div>
    <div id="ingresar" class="contacto2"> 
            <h2>Registro de Evento</h2>
            <form id="formulario" class=" caja-login" method="POST" action="../backend/addevento.php"> 
                <legend>Diligencia todos los campos</legend>

                <div class="contenedor-campos text-light">
                    <div class="campo">
                    <i class="fas fa-users"></i>
                        <label for="nombre">&nbsp Nombre: </label>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre del evento" required="required "class="form-control">
                    </div>
                    <div class="campo">
                    <i class="fas fa-info-circle"></i>
                        <label for="descripcion"> &nbsp Info: </label>
                        <input type="text-area" name="descripcion" id="descripcion" placeholder="Descripción" required="required" class="form-control">
                    </div>
                    
                    <div class="enviar">
                        <input type="hidden" id="tipo" value="crear">
                        <input type="submit" class="boton" value="Crear Evento">
                    </div>
                </div>
               
            </form>
    </div>

    
</body>
</html>
