<?php

/* 
Muestra 3 frases, cada una en un párrafo utilizando las tres posibilidades 
que existen de mostrar contenido. Tras ello, introduce dos comentarios,
 uno de bloque y otro de una línea.
*/
$frase1 = "Primera frase";
$frase2 = "Segunda frase";
$frase3 = "Tercera frase";
/* Comentario
        de 
        bloque  */

// Comentario de línea
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 201</title>
</head>

<body>
    <p><?php echo $frase1 ?></p>
    <p><?php print($frase2) ?></p>
    <p><?= $frase3 ?></p>

</body>

</html>