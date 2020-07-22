<?php
session_start();
$sss= $_SESSION['usuario'];
?>
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Krub:400,700" rel="stylesheet">
<link rel="stylesheet" href="../css/style.css">
<div class="header">
    <?php if($sss != null || $sss != '') { ?>
        <label><?php echo '<script type="text/javascript">
                console.log("inició sesión correctamente.");     
                </script>'; ?></label>

    <?php }else{ echo '<script type="text/javascript">
        alert("Por favor inicie sesión primero.");
        location.href="../frontend/login.html";
        </script>'; }?>

        <nav>
            <a href="../index.php">Inicio</a>
            <a href="grupos.php">Grupos</a>
            <a href="eventos.php">Eventos</a>
        </nav>
    </div>