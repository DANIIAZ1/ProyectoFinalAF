<?php 


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
  <div class="header">
  <nav>
      <a href="../index.php">Inicio</a>
      <a href="../frontend/perfil.php">Perfil</a>
      <a href="salir.php">Cerrar sesión</a>
  </nav>
  </div>
<div class= perfil>
    <h1 class="text-center">Grupos</h1>
    </div>
    <table id= "tablaReg" class="table">
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


<div id="formulario" class=" caja-login card"> 
    <legend>Diligencia todos los campos</legend>

    <div class="contenedor-campos">
        <div class="campo">
        <i class="fas fa-users"></i>
            <label for="nombre">&nbsp Nombre: </label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre del grupo" required="required">
        </div>
        <div class="campo">
        <i class="fas fa-user-circle"></i>
            <label for="monitor">&nbsp Monitor: </label>
            <input type="text" name="monitor" id="monitor" placeholder="Monitor" required="required">
        </div>
        <div class="campo">
        <i class="far fa-clock"></i>
            <label for="descripcion">&nbsp Info: </label>
            <input type="text-area" name="descripcion" id="descripcion" placeholder="Descripción" required="required">
        </div>
        
        <div class="enviar">
            <input type="hidden" id="tipo" value="crear">
            <input type="button" onClick="regGrupo();" class="boton" value="Crear grupo">
        </div>
    </div>
    
  </div>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  function regGrupo(){
    
    var nombre    = document.getElementById("nombre").value;
    var monitor   = document.getElementById("monitor").value;
    var desc      = document.getElementById("descripcion").value;
    var datainfo = { nombre: nombre, monitor:monitor, descripcion:desc };
    console.log("EnviarTXT: "+JSON.stringify(datainfo));
    

    $.ajax({
        method: "POST",
        url: "addgrupo.php",
        data: datainfo,
        success (res){
            console.log(res);
           var td=res.split(";");
           
           document.getElementById("tablaReg").insertRow(-1).innerHTML = 
          "<tr><th scope=\"row\">#</th><td>"+td[0]+"</td><td>"+td[1]+"</td><td>"+td[2]+"</td></th>";

        }
    });
    document.getElementById("nombre").value='';
    document.getElementById("monitor").value='';
    document.getElementById("descripcion").value='';
}

</script>


