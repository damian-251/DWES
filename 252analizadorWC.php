<?php
/* 
 252analizadorWC.php: Investiga que hace la función str_word_count, y vuelve a hacer el ejercicio
    Especifica el valor devuelto de esta función. Los valores soportados actualmente son:

        0 - devuelve el número de palabras encontradas
        1 - devuelve un array que contiene todas las palabras encontradas dentro del string
        2 - devuelve un array asociativo, donde la clave es la posición numérica de una palabra dentro del string y el valor es la palabra en sí.
// str_word_count(string $string, int $format = 0, string $charlist = ?): mixed

*/

declare(strict_types=1);

function analizadorWC(string $frase): array
{
    $arrayPalabras = str_word_count($frase, 1);
    $numeroPalabras = str_word_count($frase, 0);
    $nCaracteres = 0;
    //Contamos los caracteres de cada palabra.
    foreach ($arrayPalabras as $palabra){
        $arrayAnalizador[$palabra] = strlen($palabra);
        $nCaracteres +=strlen($palabra);
        
    }
    $arrayAnalizador["nPalabras"] = $numeroPalabras;
    $arrayAnalizador["nCaracteres"] = $nCaracteres;

    return $arrayAnalizador;
}

$frase = "lunes martes miercoles";

$resultado = analizadorWC($frase);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>252 Analizador WC</title>
</head>
<body>
    <p><?=print_r($resultado)?></p>
    <p><?=$frase?></p>
</body>
</html>