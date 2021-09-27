<?php

$horas_i = $_GET["horas"];
$minutos_i = $_GET["minutos"];
$segundos_i = $_GET["segundos"];

$horas = $horas_i;
$minutos = $minutos_i;
$segundos = $segundos_i;

/*
Escribe un programa que funcione similar a un reloj, 
de manera que a partir de los valores de hora, minuto y 
segundo muestre la hora dentro de un segundo. 
Tras las 23:59:59 serán las 0:0:0. 
*/

if ($minutos == 59 && $segundos == 59) {

    $minutos = 0;
    $segundos = 0;
    if ($horas == 23) {
        $horas = 0;
    } else {
        $horas++; //$horas = $horas + 1;
    }
} else if ($segundos == 59) {
    $minutos++; //$minutos = $minutos + 1;
    $segundos = 0;
} else {
    $segundos++;
}


// Corrección.
$segundos++;
if ($segundos == 60) {
    $segundos = 0;
    $minutos++;
    if ($minutos == 60) {
        $horas++;
        $minutos = 0;
        if ($horas == 24) {
            $horas = 0;
        }
    }
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>211 Reloj</title>
</head>

<body>
    <p>Hora introducida: <?= $horas_i ?>:<?= $minutos_i ?>:<?= $segundos_i ?>.</p>
    <p>Dentro de un segudo: </p>
    <p><?= $horas ?>:<?= $minutos ?>:<?= $segundos ?>.</p>
</body>

</html>