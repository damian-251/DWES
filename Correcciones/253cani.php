<?php

function canizador(string $frase)
{
    $fraseCani = "";

    $fraseMay = strtoupper($fraseCani);
    $fraseMin = strtolower($fraseCani);

    for ($i = 0, $pos = 0; $i < strlen($frase); $i++) {
        if ($fraseCani[$i] != " ") { //Si no es espacio aumentamos la posición
            $pos++;
        }
        if ($pos % 2 == 0) {
            $fraseCani .= $fraseMay[$i];
        } else {
            $fraseCani .= $fraseMin[$i];
        }
    }
    return $fraseCani;
}

$frase = $_GET["frase"];
echo canizador($frase);

$frase = "Probando frase canizador";
