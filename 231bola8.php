<?php

$pregunta = $_GET["pregunta"];

$respuestas = [];

$respuestas[] = "Si";
$respuestas[] = "No";
$respuestas[] = "Quizás";
$respuestas[] = "Claro que sí";
$respuestas[] = "Por supuesto que no";
$respuestas[] = "No lo tengo claro";
$respuestas[] = "Seguro";
$respuestas[] = "Yo diría que sí";
$respuestas[] = "Ni de coña";
$respuestas[] = "Las perspectivas no son buenas";
$respuestas[] = "En mi opinión, sí";
$respuestas[] = "Muy dudoso";
$respuestas[] = "Mis fuentes dicen que no";
$respuestas[] = "No puedo predecirlo ahora";
$respuestas[] = "Pregunta en otro momento";
$respuestas[] = "Debes confiar en ello";
$respuestas[] = "Es cierto";
$respuestas[] = "Es decididamente así";
$respuestas[] = "Probablemente";
$respuestas[] = "Será mejor que no te lo diga ahora";
$respuestas[] = "Concéntrate y vuelve a preguntar";
$respuestas[] = "Buen pronóstico";


$size = count($respuestas);

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>231 Bola 8</title>
</head>
<body>

<p>Pregunta: <?=$pregunta?> </p>
<p>Respuesta: 
    <?=$respuestas[rand(0,$size -1)]?>
</p>
<?php include "231bola8form.php"; ?>
    
</body>
</html>