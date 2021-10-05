<?php
$frase=$_GET["frase"];

function palindromo(string $frase){
    // quitamos espacios
    $frase=str_replace(" ","",$frase);
    // Pasamos a MAYUS
    $frase=strtoupper($frase);
    // Le damos la vuelta
    $alReves = strrev($frase);
    
    return $frase == $alReves;
}

echo palindromo($frase);