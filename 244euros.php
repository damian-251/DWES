<?php 
/* 
    Crea una biblioteca con dos funciones:

    peseta2euros: pasa de pesetas a euros
    euros2pesetas: pasa de euros a pesetas

Cada función debe recibir dos parámetros:

    La cantidad a transformar
    La cotización, con un parámetro por defecto con el factor de transformación

*/

declare(strict_types=1);


const CONVERSION = 166.386;

function peseta2euros (float $cantidad, float $cotizacion = 1/CONVERSION) : float{
    return round($cantidad * $cotizacion,2);
}

function euros2pesetas (float $cantidad, float $cotizacion = CONVERSION) : int {
    return intval(round($cantidad * $cotizacion, 0));
}
