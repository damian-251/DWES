<?php
/*
254palindromo.php: Escribe una función que devuelva un booleano indicando
 si una palabra es palíndroma (se lee igual de izquierda a derecha que de 
 derecha a izquierda, por ejemplo, “ligar es ser agil”).
*/

declare(strict_types=1);

function palindromo(string $frase): bool
{
    $fraseDerecha = str_replace(' ', '', $frase);
    $fraseInversa = "";
    for ($i = strlen($fraseDerecha) -1 ; $i >= 0; $i--) {
        $fraseInversa .= $fraseDerecha[$i];
    }
    if ($fraseDerecha == $fraseInversa) {
        return true;
    } else {
        return false;
    }
}

function esPalindromo (string $frase) : string {
    if (palindromo($frase)) {
        return "ES palíndromo.";
    }else {
        return "NO es palíndromo";
    }
}

$frase = "ligar es ser agil";
$frase2 = "Tengo sueño";

$esPalindromo = palindromo($frase);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>254 palindromo</title>
</head>

<body>
    <p><b><?= $frase ?></b></p>
    <p><?=esPalindromo($frase)?></p>
    <p><b><?= $frase2 ?></b></p>
    <p><?=esPalindromo($frase2)?></p>
</body>

</html>