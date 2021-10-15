<?php
/* $persona["nombre"] = "Bruce Wayne";
$persona["telefonos"] = ["966 123 456", "636 636 636"]; // array de arrays ordinarios
$persona["profesion"] = ["dia" => "filántropo", "noche" => "caballero oscuro"]; // array de arrays asociativos

echo $persona['nombre']." por la noche trabaja de ".$persona['profesion']['noche'];

$persona["telefonos"][0] --> ["966 123 456", "636 636 636"]; */


$array = [[0,"M"],[1,2]];

for ($i = 0 ; $i < count($array) ; $i++) {
	for ($j = 0 ; $j < count($array[$i]) ; $j++) {
		echo $array[$i][$j];
	}
} 

/* salida --> $array[0][0] -> 0
salida --> $array[0][1] -> M
salida --> $array[1][0] -> 1
salida --> $array[1][1] -> 2
 */

echo "<br>";

foreach ($array as $arrayInterna) {
	foreach ($arrayInterna as $valor){
		echo $valor;
	}
}