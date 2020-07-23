<?php
//include '../static/header.php';
$nom = $_POST['nombre'];
$mon = $_POST['monitor'];
$des = $_POST['descripcion'];
include_once 'conexion.php';

try {
    // Realizar la consulta a la base de datos
    $stmt = $conn->prepare("INSERT INTO grupos (nombre,monitor,descripcion) VALUES (?,?,?) ");
    $stmt->bind_param('sss', $nom,$mon,$des);
    $stmt->execute();
    if($stmt->affected_rows > 0) {
        $respuesta = array(
            'respuesta' => 'correcto',
            'id_insertado' => $stmt->insert_id,
            'nombre_grupo' => $nom
        );
        
       
     
        echo $nom.';'.$mon.';'.$des;
    }  else {
        $respuesta = array(
            'respuesta' => 'error'
        );
    }
    $stmt->close();
    $conn->close();
} catch(Exception $e) {
    // En caso de un error, tomar la exepcion
    $respuesta = array(
        'error' => $e->getMessage()
    );
}

?> 
