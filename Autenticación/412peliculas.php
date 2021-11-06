<?php 
/* 412peliculas.php: vista que muestra como título "Listado de Películas", y una lista desordenada con tres películas. */
    // Recuperamos la información de la sesión
    if(!isset($_SESSION)) {
        session_start();
    }

    // Y comprobamos que el usuario se haya autentificado
    if (!isset($_SESSION['usuario'])) {
       die("Error - debe <a href='index.php'>identificarse</a>.<br />");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de películas</title>
</head>
<body>
    <h1>Bienvenido <?= $_SESSION['usuario'] ?></h1>
    <p>Pulse <a href="413logout.php">aquí</a> para salir</p>
    <p>Volver al <a href="412peliculas.php">inicio</a></p>
    <h2>Listado de películas</h2>
    <ul>
        <li>Eternals</li>
        <li>Venom: Let There Be Carnage</li>
        <li>The Last Duel</li>
    </ul>
</body>
</html>