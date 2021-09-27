<?php
//221suma110.php: Escribe un programa que sume los números 1 al 10.
$suma = 0;

for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>221 suma 110</title>
</head>

<body>
    <p>La suma de los diez primeros números es: <?=$suma?></p>
</body>

</html>