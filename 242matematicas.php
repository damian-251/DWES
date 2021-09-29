<?php
//Cómo cuentas los números
//Contar divisiones entre 10

function digitos(int $num): int
{
    $numero = $num;
    $contador = 0;
    while ($numero > 0) {
        $numero = intdiv($num, 10);
        $contador++;
    }

    return $contador;
}


// 24689
// 4 --> 8

//
function digitoN(int $num, int $pos): int
{
    $cantidadDigitos = digitos($num); //5

    $aux = $cantidadDigitos - $pos; //1

    $potencia10 = 10 ** $aux; // 10

    $resultado = intdiv($num, $potencia10) % 10; // 2468 así el resto es el 8

    return $resultado;
}

echo digitoN(987654321, 1);


function quitaPorDetras(int $num, int $cant): int
{
    return intval($num / 10 ** $cant);
}

echo "<br>";
echo quitaPorDetras(123456, 4);


function quitaPorDelante(int $num, int $cant): int
{
    $tam = digitos($num);
    return intval ($num % (10 ** ($tam - $cant)));
}




echo "<br>";
//echo quitaPorDelante(989798099, 2);

//
