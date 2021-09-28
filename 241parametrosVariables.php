<?php
/*
    Una función que devuelva el mayor de todos los números recibidos como parámetros: 
    function mayor(...$numeros): int. No puedes usar la función max().
    Una función que concatene todos los parámetros recibidos separándolos 
    con un espacio: function concatenar(...$palabras) : string

*/

function mayor(...$numeros): int
{
    $mayor = 0;
    foreach ($numeros as $num) {
        if ($num > $mayor) {
            $mayor = $num;
        }
    }
    return $mayor;
}

function concatenar(...$palabras): string {
    $frase = "";
    foreach ($palabras as $palabra) {
        $frase =$frase."".$palabra." ";
    }

    return $frase;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>241 parámetros Variables</title>
</head>

<body>
<p><?php echo mayor (1,5,7,4,3,45,5,3,89,25) ?></p>   
<p><?php echo concatenar("Hola", "Adiós", "Buenas tardes", "Buenas noches"); ?></p>
</body>

</html>