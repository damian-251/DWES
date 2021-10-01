<?php
// A partir de una frase, devuelve la cantidad de cada una de las vocales, y el total de ellas.
declare(strict_types=1);

function vocales(string $frase): array
{
    $fraseMinus = strtolower($frase);
    $arrayVocales = ["a" => 0, "e" => 0, "i" => 0, "o" => 0, "u" => 0];
    for ($i = 0; $i < strlen($fraseMinus); $i++) {
        if (isset($arrayVocales[$fraseMinus[$i]])) {
            $arrayVocales[$fraseMinus[$i]]++;
        }
    }
    return $arrayVocales;
}

$frase = "HolA a ToDo El mUnDo, hOy es VieRrNeS";

$vocalesFrase = vocales($frase);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>251 Vocales</title>
    <style>
        body {
            font-size: 1.5em;
        }
        table {
            width: 30%;
            border-collapse: collapse;
        }
        th,td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <caption><?= $frase ?></caption>
        <tr>
            <th>Vocal</th>
            <th>Cantidad</th>
        </tr>
        <?php foreach ($vocalesFrase as $vocal => $cantidad) { ?>
            <tr>
                <td><?=$vocal?></td>
                <td><?=$cantidad?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>