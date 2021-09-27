<?php
/* 
Rellena un array con 50 números aleatorios comprendidos entre el 0 y el 99, 
y luego muéstralo en una lista desordenada. Para crear un número aleatorio, 
utiliza la función rand(inicio, fin).
*/
const SIZE = 50;
$arrayAleatorio = [];

for ($i = 0 ; $i < SIZE ; $i++) {
    $arrayAleatorio[$i] = rand(0,99);
}

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>230 Aleatorios</title>
</head>
<body>


<ul>
<?php 
foreach ($arrayAleatorio as $numero ) { ?>
    <li> <?=$numero?> </li>
<?php
}
?>
</ul>
 
</body>
</html>