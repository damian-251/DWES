<?php

/*
    222potenciaWhile.php: Reescribe el ejercicio anterior haciendo uso sólo de while.

*/

$base = $_GET["base"];
$exponente = $_GET["exponente"];




if ($exponente == 0) {
    $potencia = 1;
} else {
    $i = 1;
    $potencia = 1;

    while ($i <= $exponente) {
        $potencia = $potencia * $base;
        $i++;
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>222 potencia while</title>
</head>

<body>
    <p><?= $base ?> elevado a <?= $exponente ?> es: <?= $potencia ?>.</p>
</body>

</html>