<?php
 /* 
    210nombreEdad.php: A partir de una edad muestra por pantalla:

    bebé si tiene menos de 3 años
    niño si tiene entre 3 y 12 años
    adolescente entre 13 y 17 años
    adulto entre 18 y 66
    jubilado a partir de 67
 */

 $edad = $_GET["edad"];
 $tipo = "jubilado";

 if ($edad < 3) {
    $tipo = "bebé";
 }else if ($edad <= 12) {
     $tipo = "niño";
 }else if ( $edad <= 17) {
    $tipo = "adolescente";
 }else if ($edad <= 66){
    $tipo = "adulto";
 }
//Si se separan en segmentos se usa un solo operador de comparación.
//
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>210 nombre Edad</title>
 </head>
 <body>
     <p>Eres un <?=$tipo?>.</p>
 </body>
 </html>

 