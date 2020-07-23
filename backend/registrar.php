<?php 

$password = $_POST['password'];
$usuario = $_POST['usuario'];

// hashear passwords
$opciones = array(
    'cost' => 10
);
$hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
// importar la conexion
include_once 'conexion.php';

try {
    // Realizar la consulta a la base de datos
    $stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?) ");
    $stmt->bind_param('ss', $usuario  , $hash_password);
    $stmt->execute();
    if($stmt->affected_rows > 0) {
        $respuesta = array(
            'respuesta' => 'correcto',
            'id_insertado' => $stmt->insert_id,
        );
        echo '<script type="text/javascript">
        alert("Registro exitoso!.");
        location.href="../frontend/log.php";
        </script>';
        //header("Location: ../frontend/log.php");
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
//echo json_encode($respuesta);