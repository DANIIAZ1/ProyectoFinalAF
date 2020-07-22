<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProyectoAF</title>
    <link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Krub:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
    <nav>
        <a href="index.php">Inicio</a>
        <a href="frontend/grupos.php">Grupos</a>
        
    </nav>
    </div>
    
    <div class="hero">
        <div class="contenido-hero">
            <h1>Monitoreo de Actividad Física</h1>
            <p> <i class="fas fa-walking"></i></i> <strong>Haz siempre un esfuerzo total, aún cuando las probabilidades están en contra tuya. Arnold Palmer </strong> <i class="fas fa-running"></i></p>
            <a class="boton" href="frontend/login.html">Iniciar Sesión</a>
            <a class="boton" href="#contacto">Regístrate</a>
        </div>
    </div>
   
    <div class="contenedor">
        <main class="servicios">
            <h2>Nuestros Servicios</h2>
            <div class="servicios-contenedor">
                <div class="servicio">
                    <h3>Entrenamiento personalizado</h3>
                    <div class="iconos">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <p>El entrenamiento personalizado es ideal para aquellos que quieren ver cambios rápidos y efectivos. 
                        Con nuestros entrenadores expertos puedes transformar tu cuerpo mediante sesiones dinámicas y variadas que retan tu mente y cuerpo.</p>
                </div>
                <div class="servicio">
                    <h3>Fit Combat</h3>
                    <div class="iconos">
                        <i class="fas fa-fist-raised"></i>
                        <i class="fas fa-fist-raised"></i>
                    </div>
                    <p>Un entrenamiento retador y estimulante que mezcla técnicas de combate con ritmos coreografiados para que al sonar de la música
                     los asistentes participen de movimientos intensos basados en artes marciales.</p>
                </div>
                <div class="servicio">
                    <h3>Step </h3>
                    <div class="iconos">
                    <i class="fas fa-shoe-prints"></i>   
                    </div>
                    <p>Con el uso de un sencillo pero efectivo elemento de fitness logras aumentar tu condición cardiovascular y fuerza muscular.</p>
                </div>
            </div> <!--.servicios-->
        </main>

        <div id="contacto" class="contacto"> 
            <h2>Registro de usuario</h2>
            <form id="formulario" class=" caja-login" method="POST" action="backend/registrar.php"> 
                <legend>Diligencia todos los campos</legend>

                <div class="contenedor-campos">
                    <div class="campo">
                        <i class="fas fa-user-circle"></i>
                        <label for="usuario">&nbsp Usuario: </label>
                        <input type="text" name="usuario" id="usuario" placeholder="Usuario" required="required">
                    </div>
                    <div class="campo">
                        <i class="fas fa-key"></i>
                        <label for="password">&nbsp Password: </label>
                        <input type="password" name="password" id="password" placeholder="Password" required="required">
                    </div>
                    <div class="input-group row" >
                        <div class="col">
                            <label>cliente</label>
                            <input type="checkbox" id="chekbox1" >
                        </div>
                        <div class="col">
                            <label>Monitor</label>
                            <input type="checkbox" id="chekbox2" >
                        </div>
                        
                    </div>
                    <div class="enviar">
                        <input type="hidden" id="tipo" value="crear">
                        <input type="submit" class="boton" value="Crear cuenta">
                    </div>
                    <div class="enviar">
                        <a class="boton2" href="frontend/login.html">Iniciar Sesión</a>
                    </div>
                    
                </div><!--.contenedor-campos-->
               
            </form>
        </div>
           
    </div>

</body>
</html>