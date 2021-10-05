<?php
/* 
252analizador.php: A partir de una frase con palabras sólo separadas por espacios, devolver

    Letras totales y cantidad de palabras
    Una línea por cada palabra indicando su tamaño

*/

declare(strict_types=1);

$frase = "uno tres lunes martes a";

function analizador (string $frase) : array {
    $totalLetras = 0;
    $inicio = 0;
    $arrayPalabra = [];
    //Le añadimos un espacio al final para no tener que cambiar el código
    $frase .= " ";
    for ($i = 0 ; $i < strlen($frase); $i++) {
        if ($frase[$i] <strlen($frase)) {
            //Cortamos la palabra que hay antes de un espacio
            $palabra = substr($frase, $inicio, $i - $inicio);
            $totalLetras += strlen($palabra);
            array_push($arrayPalabra, $palabra);
            $inicio = $i +1 ;
        }
    }
    
    $resultado = [];
    $resultado["totalLetras"] = $totalLetras;
    $resultado["arrayPalabras"] = $arrayPalabra;

    return $resultado;
}

//

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
<?=$resultado["totalLetras"] ?>
<?= count($resultado["arrayPalabras"]) ?>

<?php
for ($i = 0 ; $i <count($arrayPalabra) ; $i++) {
    $resultado["arrayPalabras"][$i] . " = ";
}
?>

</body>

</html>