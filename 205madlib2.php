<?php

$nombre = $_GET["nombre"];
$verbo = $_GET["verbo"];
$lugar = $_GET["lugar"];
$adverbio = $_GET["adverbio"];
$verbo2 = $_GET["verbo2"];
$nombre2 = $_GET["nombre2"];
$adjetivo = $_GET["adjetivo"];
$adverbio2 = $_GET["adverbio2"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>205madlib 2</title>
</head>
<body>
    <p>Un/Una <?=$nombre ?> iba a <?=$verbo ?> por <?="$lugar $adverbio" ?>, cuando tuvo
que <?=$verbo2 ?> a un/una <?="$nombre2 $adjetivo $adverbio2" ?></p>
</body>
</html>