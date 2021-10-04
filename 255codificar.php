<?php

/*
255codificar.php: Utilizando las funciones para trabajar con caracteres, a partir de una cadena y un desplazamiento:

    Si el desplazamiento es 1, sustituye la A por B, la B por C, etc.
    El desplazamiento no puede ser negativo
    Si se sale del abecedario, debe volver a empezar
    Hay que respetar los espacios, puntos y comas.

*/

$cadena = "Hola a todos zZ";
$desplazamiento = 10;
$fraseCodificada = "";

for ($i = 0; $i < strlen($cadena); $i++) {
    $arrayCaracteres = [" ", ".", ","];
    $arrayFin = [ord("y") + $desplazamiento, ord("Y") +$desplazamiento]; //aquí esta mal si hay más desplazamiento
    if (in_array($cadena[$i], $arrayCaracteres)) {
        $fraseCodificada .= $cadena[$i];
    } else if (ord(ord($cadena[$i]) + $desplazamiento) > ord("z") && ord($cadena[$i] < ord("a") )) {
        $fraseCodificada .= chr(ord($cadena[$i]) -26 + $desplazamiento);
    }else if (ord(ord($cadena[$i]) + $desplazamiento) > ord("Z") && ord($cadena[$i] > ord("A") )) {
        $fraseCodificada .= chr(ord($cadena[$i]) -26 + $desplazamiento);
    }
    
    else{
        $fraseCodificada .= chr(ord($cadena[$i]) + $desplazamiento);
    }
}

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
    <p>Frase original: <?=$cadena?></p>
    <p>Frase codificada: <?=$fraseCodificada?></p>
</body>

</html>