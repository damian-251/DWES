<?php
function analizador(string $frase)
{
    $totalLetras = 0;
    $inicio = 0;
    $arrayPalabra = [];
    // Le añadimos un espacio al final, truquito de Giorgi y Mayuri - copyright 2021
    $frase .= " ";
    for ($i = 0; $i < strlen($frase); $i++) {
        if ($frase[$i] == " ") {
            // cortamos la palabra que hay antes de un espacio -> substr(frase, inicio, longitud)
            $palabra = substr($frase, $inicio, $i - $inicio);
            $totalLetras += strlen($palabra);
            array_push($arrayPalabra, $palabra);
            $inicio = $i + 1;
        }
    }
    $result = [];
    $result["totalLetras"] = $totalLetras;
    $result["arrayPalabras"] = $arrayPalabra;

    return $result;
}
$frase = $_GET["frase"];
$resultado = analizador($frase);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Hay un total de letras de <?= $resultado["totalLetras"] ?> y un
         total de palabras de <?= count($resultado["arrayPalabras"]) ?>
    </p>
    <?php
    for ($i = 0; $i < count($arrayPalabra); $i++) {
        echo "<br>" . $resultado["arrayPalabras"][$i] . " = " . strlen($resultado["arrayPalabras"][$i]) . " letras";
    }
    ?>
</body>
</html>