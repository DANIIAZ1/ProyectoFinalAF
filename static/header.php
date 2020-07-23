<?php
session_start();
$sss= $_SESSION['usuario'];
?>

<div class="header">
    <?php if($sss != null || $sss != '') { ?>
        <label><?php echo '<script type="text/javascript">
                console.log("inició sesión correctamente.");     
                </script>'; ?></label>

    <?php }else{ echo '<script type="text/javascript">
        alert("Por favor inicie sesión primero.");
        location.href="../frontend/log.php";
        </script>'; }?>

        <nav>
            <a href="../index.php">Inicio</a>
            <a href="../backend/grupos.php">Grupos</a>
            <a href="../backend/salir.php">Cerrar sesión</a>
        </nav>
    </div>