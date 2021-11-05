<?php 

session_start();
if (isset($_SESSION["fondo"])) {
    $fondo = $_SESSION["fondo"];
}else {
    $fondo = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?=$fondo?>;
        }
    </style>
</head>
<body>
    <p>Color seleccionado: <?=$fondo?></p>
    <p><a href="408fondoSesion1.php">Volver a la página anterior</a></p>
    <p><a href="408fondoSesion1.php?vaciar">Vaciar sesión y volver a la página anterior</a></p>
</body>
</html>