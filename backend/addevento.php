<?php
//include '../static/header.php';
$nom = $_POST['nombre'];
$des = $_POST['descripcion'];
include_once 'conexion.php';

try {
    // Realizar la consulta a la base de datos
    $stmt = $conn->prepare("INSERT INTO eventos (nombre,descripcion) VALUES (?,?) ");
    $stmt->bind_param('ss', $nom,$des);
    $stmt->execute();
    if($stmt->affected_rows > 0) {
        $respuesta = array(
            'respuesta' => 'correcto',
            'id_insertado' => $stmt->insert_id,
            'nombre_grupo' => $nom
        );
        header("Location: ../frontend/eventos.php");
        
       
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
