<?php

/*
255codificar.php: Utilizando las funciones para trabajar con caracteres, a partir de una cadena y un desplazamiento:

    Si el desplazamiento es 1, sustituye la A por B, la B por C, etc.
    El desplazamiento no puede ser negativo
    Si se sale del abecedario, debe volver a empezar
    Hay que respetar los espacios, puntos y comas.

*/

$frase = $_GET["frase"];
$desplazamiento = intval($_GET["desplazamiento"]);

function codificar(string $frase, int $desplazamiento): string
{
    $fraseCodificada = "";
    $arrayCaracteres = [" ", ".", ","];
    for ($i = 0; $i < strlen($frase); $i++) {
        if (in_array($frase[$i], $arrayCaracteres)) {
            $fraseCodificada .= $frase[$i];
        } else {
            //es minúscula
            if (ord($frase[$i]) >= ord("a") && ord($frase[$i]) <= ord("z")) {
                if (ord($frase[$i]) + $desplazamiento > ord("z")) {
                    $fraseCodificada .= chr(ord($frase[$i]) - 26 + $desplazamiento);
                } else {
                    $fraseCodificada .= chr(ord($frase[$i]) + $desplazamiento);
                }
            } else { //es mayúscula
                if (ord($frase[$i]) + $desplazamiento > ord("Z")) {
                    $fraseCodificada .= chr(ord($frase[$i]) - 26 + $desplazamiento);
                } else {
                    $fraseCodificada .= chr(ord($frase[$i]) + $desplazamiento);
                }
            }
        }
    }
    return $fraseCodificada;
}

$fraseCodificada = codificar($frase, $desplazamiento);
echo $fraseCodificada;
echo "<br>";
echo $frase;

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>255 Codificar</title>
</head>

<body>

</body>

</html>