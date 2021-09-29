<?php

declare(strict_types=1);

$num = $_GET["numero"];
$tam = $_GET["size"];
$min = $_GET["min"];
$max = $_GET["max"];


function esPar(int $num): bool
{
    return $num % 2 == 0;
}

function arrayAleatorio(int $tam, int $min, int $max): array
{
    $arrayA = [];
    for ($i = 0; $i < $tam; $i++) {
        $num = rand($min, $max);
        array_push($arrayA, $num);
    }
    return $arrayA;
}

$randArray = arrayAleatorio($tam, $min, $max);

function arrayPares(array &$array): int
{
    $contador = 0;
    foreach ($array as $numero) {
        if ($numero % 2 ==  0) {
            $contador++;
        }
    }
    return $contador;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>240 arrayPar</title>
</head>

<body>
    <p>Función esPar: <?= esPar($num) ?></p>
    <p>Función arrayAleatorio: [<?php foreach ($randArray as $valor) {
                                    echo $valor . " ";
                                } ?>]</p>
    <p>Función arrayPares: <?php echo arrayPares($randArray); ?></p>
</body>

</html>