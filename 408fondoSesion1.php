<?php
/* 408fondoSesion1.php: Modifica el ejercicio anterior para almacenar el color de
 fondo en la sesión y no emplear cookies.
  Además, debe contener un enlace al siguiente archivo.
   408fondoSesion2.php: Debe mostrar el color y dar la posibilidad de volver a
    la página anterior mediante un enlace, y de vaciar la sesión y volver a la página anterior. */

session_start();

if (isset($_GET["vaciar"])) {
    session_destroy();
    session_start();
}

if (isset($_POST["fondo"])) {
    $fondo = $_POST["fondo"];
    $_SESSION["fondo"] = $fondo;
} else {
    if (isset($_SESSION["fondo"])) {
        $fondo = $_SESSION["fondo"];
    } else {
        $fondo = "";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondo sesión 1</title>
    <style>
        body {
            background-color: <?= $fondo ?>;
        }
    </style>
</head>

<body>
    <form action="./408fondoSesion1.php" method="post">
        <label for="fondo">Color de fondo</label>
        <select name="fondo">
            <option value="blue">Azul</option>
            <option value="yellow">Amarillo</option>
            <option value="red">Rojo</option>
            <option value="green">Verde</option>
            <option value="purple">Lila</option>
            <option value="magenta">Magenta</option>
        </select>
        <input type="submit" name="boton" value="Cambiar fondo" />
    </form>
    <p><a href="408fondoSesion2.php">Ir a fondo Sesión 2</a></p>
</body>