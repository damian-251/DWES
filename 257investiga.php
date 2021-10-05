<?php

/* 
Investiga las siguientes funciones de cadena (explica para qué sirven mediante comentarios,
 y programa un pequeño ejemplo de cada una de ellas): ucwords, strrev, str_repeat y md5.
*/

/*
ucwords -> Convierte a mayúsculas el primer caracter de cada palabra de una cadena
*/
$frase = "buenas tardes";
$fraseMayu = ucwords($frase);
echo $fraseMayu;
echo "<br>";

/*
strrev -> Invierte un string
*/

echo strrev($fraseMayu);
echo "<br>";
/* 
str_repeat -> Repite una cadena el número de veces que se le indique.
 */

echo str_repeat($frase ." ", 7);
echo "<br>";

/*
md5 -> calcula el hash md5 de una cadena
*/
$cadena = "severoOchoa";
$cadenamd5 = md5($cadena);
echo $cadenamd5;
echo "<br>";
echo md5($cadena, true);