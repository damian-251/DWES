<?php
// A partir de una frase, devuelve la cantidad de cada una de las vocales, y el total de ellas.
declare(strict_types=1);

function vocales(string $frase): array {
    $frase = strtolower($frase);
    $fraseVocales = ["a" => 0, "e" => 0, "i" => 0, "o" => 0, "u" => 0];
    foreach ($fraseVocales as $vocal => $cantidad) {
        for ($i = 0; $i < strlen($frase); $i++) {
            if ($frase[$i] == $vocal) {
                $fraseVocales[$vocal]++;
            }
        }
    }
    return $fraseVocales;
}
$frase = "HolA a ToDo El mUnDo, hOy es ViRrNeS";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>251 Vocales</title>
</head>

<body>
    <p><?=$frase?></p>
    <p><?php print_r(vocales($frase)) ?></p>
</body>

</html>