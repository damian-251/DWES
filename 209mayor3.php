<?php

/*
    Sin hacer uso de condiciones compuestas, muestra el mayor de tres números (a, b y c)

*/



$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];

$mayor = $a;

if ($mayor<$b) {
    $mayor = $b;
}

if ($mayor < $c) {
    $mayor = $c;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>209 mayor3</title>
</head>

<body>

<p>El número mayor es <?=$mayor?>.</p>

</body>

</html>