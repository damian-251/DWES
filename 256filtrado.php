<?php

declare(strict_types=1);
$cadenaNumeros = $_GET["numeros"];

function numerosPares(string $numeros): array
{
    $numeros = trim($numeros);
    $arrayNumeros = explode(" ", $numeros);
    $contador = 0;
    $cadenaPar = "";
    foreach ($arrayNumeros as $numero) {
        if (intval($numero) % 2 == 0) {
            $cadenaPar .= $numero . " ";
            $contador++;
        }
    }
    $cadenaPar = rtrim($cadenaPar);
    $resultado["cadena"] = $cadenaPar;
    $resultado["cantidadPar"] = $contador;
    return $resultado;
}

$resultado = numerosPares($cadenaNumeros);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>256 Filtrado</title>
</head>

<body>
    <p>Los <?=$resultado["cantidadPar"]?> números pares son <?=$resultado["cadena"]?>. </p>
</body>

</html>