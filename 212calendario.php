<?php
/* 
Escribe un programa similar a un calendario de manera que a partir de dia, 
mes y anyo muestre la fecha dentro de un día. 
Debes tener en cuenta que no todos los meses tienen 30 días. 
En este caso, no vamos a tener en cuenta los años bisiestos.
*/

/*

Meses con 30: 4,6,9,11
Mese con 31: 1,3,5,7,8,10,12
Meses con 28: 2

*/

$dia_inicial = $_GET["dia"];
$mes_inicial = $_GET["mes"];
$anyo_inicial = $_GET["anyo"];

$dia = $dia_inicial;
$mes = $mes_inicial;
$anyo = $anyo_inicial;


if (($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) && $dia == 30) {
        $dia = 1;
        $mes++;
    
} else if ($mes == 2 && $dia == 28) {    
        $dia = 1;
        $mes++;
} else if ($mes == 12 && $dia == 31) {
    $mes = 1;
    $dia = 1;
    $anyo++;
} else if ($dia == 31) {
    $dia = 1;
    $mes++;
}else {
    $dia++;
}


//Corección
//Es mejor empezar por el caso más restrictivo
$dia++;
if ($mes == 2) {
    if($dia > 28) {
        $dia = 1;
        $mes++;
    }
}else if ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11){
    if ($dia > 30) {
        $dia = 1;
        $mes++;
    }
}else {
    if ($dia > 31) {
        $dia = 1;
        $mes++;
        if ($mes == 13) {
            $mes = 1;
            $anyo++;
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
    <title>212 Calendario </title>
</head>

<body>
    <p>Fecha actual: <?= $dia_inicial ?>/<?= $mes_inicial ?>/<?= $anyo_inicial ?>.</p>
    <p>Dentro de un día: <?= $dia ?>/<?= $mes ?>/<?= $anyo ?>.</p>
</body>

</html>