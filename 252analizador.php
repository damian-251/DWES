<?php
/* 
252analizador.php: A partir de una frase con palabras sólo separadas por espacios, devolver

    Letras totales y cantidad de palabras
    Una línea por cada palabra indicando su tamaño

*/

declare(strict_types=1);

function analizador(string $frase): array
{
    $arrayPalabras = [];
    $arrayPalabras["nPalabras"] = 0;
    $numeroLetras = 0;
    $letrasTotales = 0;
    $palabra = "";
    for ($i = 0; $i < strlen($frase); $i++) {
        $numeroLetras++;
        $letrasTotales++;
        $palabra .= $frase[$i];
        if ($frase[$i] == " " || $i == strlen($frase) - 1) {
            if ($frase[$i] == " ") {
                $numeroLetras--;
                $letrasTotales--;
            }
            $arrayPalabras["nPalabras"]++;
            $arrayPalabras[$palabra] = $numeroLetras;
            $numeroLetras = 0;
            $palabra = "";
        }
        $arrayPalabras["nLetras"] = $letrasTotales;
    }
    return $arrayPalabras;
}
$frase = "uno tres lunes martes a";

$arrayPalabras = analizador($frase);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>252 Analizador</title>
</head>

<body>
    <p><?= $frase ?></p>
    <table>
        <tr>
            <th>Palabra</th>
            <th>Longitud</th>
        </tr>
        <?php foreach ($arrayPalabras as $palabra => $valor){ ?>
            <tr>
                <td><?=$palabra ?></td>
                <td>
                    <?= $valor ?>
                </td>              
            </tr>
        <? } ?>    
    </table>
</body>

</html>