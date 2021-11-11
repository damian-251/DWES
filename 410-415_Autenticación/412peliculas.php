<?php
/* 412peliculas.php: vista que muestra como título "Listado de Películas", y una lista desordenada con tres películas. */
// Recuperamos la información de la sesión
if (!isset($_SESSION)) {
    session_start();
}

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) {
    die("Error - debe <a href='index.php'>identificarse</a>.<br />");
}

$peliculas = $_SESSION["peliculas"];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de películas</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="412peliculas.php">Películas</a></li>
                <li><a href="414series.php">Series</a></li>
            </ul>
        </nav>
    </header>
    <h1>Bienvenido <?= $_SESSION['usuario'] ?></h1>
    <p>Pulse <a href="413logout.php">aquí</a> para salir</p>
    <p>Volver al <a href="412peliculas.php">inicio</a></p>
    <h2>Listado de películas</h2>
    <ul>
        <?php foreach ($peliculas as $pelicula) { ?>
            <li><?= $pelicula ?></li>
        <?php } ?>
    </ul>
</body>

</html>