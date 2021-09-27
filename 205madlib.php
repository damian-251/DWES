<?php

$nombre = $_GET["nombre"];
$verbo = $_GET["verbo"];
$adjetivo = $_GET["adjetivo"];
$adverbio = $_GET["adverbio"];
 ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>¿Te gusta <?= $verbo ?> con tu <?= "$nombre $adjetivo $adverbio" ?>?</p>
</body>

</html>