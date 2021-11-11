<?php
/* 414series.php: Añade un nueva vista similar a 412peliculas.php 
que muestra un "Listado de Series" con una lista desordenada con tres series. 
Tanto 412pelicuas.php como la vista recien creadas, deben tener un pequeño menú (sencillo, mediante enlaces) 
que permita pasar de un listado a otro. Comprueba que si se accede directamente a cualquiera de las vistas 
sin tener un usuario logueado via URL del navegador, no se muestra el listado. */

/*
Modifica tanto el controlador como las vistas para que:

    los datos los obtenga el controlador (almacena en la sesión un array de películas y otro de series)
    coloque los datos en la sesión
    En las vistas, los datos se recuperan de la sesión y se pintan en la lista desordenada
     recorriendo el array correspondiente.

*/

if (!isset($_SESSION)) {
    session_start();
}

// Y comprobamos que el usuario se haya autentificado
if (!isset($_SESSION['usuario'])) {
    die("Error - debe <a href='410index.html'>identificarse</a>.<br />");
}

$series = $_SESSION["series"];

/* echo var_dump($series);
echo var_dump($_SESSION["series"]); */

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de series</title>
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
    <h2>Listado de series</h2>
    <ul>
        <?php foreach ($series as $serie) { ?>
            <li><?= $serie ?></li>
        <?php } ?>

    </ul>
</body>

</html>