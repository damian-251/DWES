<?php

/*
    222potencia.php: A partir de una base y exponente, mediante la acumulación
     de productos, calcula la potencia utilizando la instrucción for.

*/

$base = $_GET["base"];
$exponente = $_GET["exponente"];

$negativo = false;
if ($exponente == 0) {
    $potencia = 1;
} else if ($exponente > 0) {
    $potencia = 1;

    for ($i = 1; $i <= $exponente; $i++) {
        $potencia = $potencia * $base;        

    }

}else {
    $potencia = 1;
    for ($i = 1; $i <= -$exponente; $i++) {
        $potencia = ($potencia/$base);
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>222 potencia</title>
</head>

<body>
    <p><?= $base ?> elevado a <?= $exponente ?> es: <?= $potencia ?>.</p>
</body>

</html>