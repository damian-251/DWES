<?php


$cantidad = $_GET["cantidad"];
$suma = 0;
for ($i = 1 ; $i <= $cantidad ; $i++) {

    $cantidadNum = $_GET["numero".$i];
    $suma +=$cantidadNum; 

}



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>224 sumar Datos</title>
</head>
<body>
    <p>La suma de los números es: <?=$suma?></p>
</body>
</html>

