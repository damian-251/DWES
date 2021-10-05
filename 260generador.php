<?php
/*
260generador.php: Crea una función que permite generar
 una letra aleatoria, mayúscula o minúscula.
*/
declare (strict_types=1);

function generaLetra() : string {
    $letraMinuscula = rand(ord("a"), ord("z"));
    $letraMayusucula = rand(ord("A"), ord("Z"));
    $elegido = rand(0,1);
    if ($elegido == 0) {
        return chr($letraMinuscula);
    }else {
        return chr($letraMayusucula);
    }
}

 ?>