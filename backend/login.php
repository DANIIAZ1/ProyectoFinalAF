<?php 
session_start();
$password = $_POST['password'];
$usuario = $_POST['usuario'];
// importar la conexion
include_once 'conexion.php';

try {
    // Seleccionar el administrador de la base de datos
    $stmt = $conn->prepare("SELECT usuario, id, password FROM usuarios WHERE usuario = ?");
    $stmt->bind_param('s', $usuario);
    $stmt->execute();
    // Loguear el usuario
    $stmt->bind_result($nombre_usuario, $id_usuario, $pass_usuario);
    $stmt->fetch();
    if($nombre_usuario){
        // El usuario existe, verificar el password
        if(password_verify($password,$pass_usuario )){
         
            // Login correcto
            $_SESSION['usuario'] = $nombre_usuario;
            $respuesta = array(
                'respuesta' => 'correcto',
                'nombre' => $nombre_usuario
                                
            );
            echo "<script>alert('Bienvenido!  Ha iniciado sesión correctamente')</script>";
            header("Location: ../frontend/perfil.php");// redirige a perfil

        } else {
            // Login incorrecto, enviar error
            $respuesta = array(
                    'resultado' => 'Password Incorrecto'
            );
        }

    } else {
        $respuesta = array(
            'error' => 'Usuario no existe'
        );
    }
    $stmt->close();
    $conn->close();
} catch(Exception $e) {
    // En caso de un error, tomar la exepcion
    $respuesta = array(
        'pass' => $e->getMessage()
    );
}

//var_dump(json_encode($respuesta));
//echo "<script>console.log(var_dump(json_encode($respuesta)))</script>"


?>
