<?php

/*
    206anyos.php: Tras leer la edad de una persona, 
    mostrar la edad que tendrá dentro de 10 años y hace 10 años. 
    Además, muestra qué año será en cada uno de los casos. 
    Finalmente, muestra el año de jubilación suponiendo que trabajarás 
    hasta los 65 años. En este caso, no hace falta que previamente crees un formulario, 
    puedes probar el ejercicio via URL: 206anyos.php?edad=33.

*/
//$edad = $_GET["edad"]?:25;

if (isset($_GET["edad"])) {
    $edad = $_GET["edad"];
}else {
    $edad = 25;
}

$anyoActual = date("Y");
const EDAD_JUBILACION = 65; //Mejor poner la constante que poner el 65 directamente.
//poner el isset para que no de error si no introducimos ningún dato.
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 206</title>

</head>

<body>
    <p>En diez años la persona tendrá <?= ($edad + 10) ?> años y el año será <?= ($anyoActual + 10) ?>. </p>
    <p>Hace diez años la persona tenía <?= ($edad - 10) ?> años y el año fue <?= ($anyoActual - 10) ?>.</p>
    <p>El año de jubilación será <?= ($anyoActual - $edad + EDAD_JUBILACION) ?>.</p>
    <!-- Aquí mejor solo mostrar las variables y nos las operaciones -->
</body>

</html>