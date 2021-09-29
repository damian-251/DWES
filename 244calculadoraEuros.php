<?php

declare(strict_types=1);
include_once("244euros.php");


$cotizacion = isset($_GET['cotizacion']) ? floatval($_GET['cotizacion']) : 0;
$cantidad = floatval(($_GET["cantidad"]));


if ($cotizacion == 0) {
    $resultado1 = peseta2euros($cantidad);
    $resultado2 = euros2pesetas($cantidad);
} else {
    $resultado1 = peseta2euros($cantidad, $cotizacion);
    $resultado2 = euros2pesetas($cantidad, $cotizacion);
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>244 calculadora Euros</title>
</head>

<body>
    <p>Pesetas a Euros: <?= $resultado1 ?>.</p>
    <p>Euros a Pesetas: <?= $resultado2 ?>.</p>

</body>

</html>