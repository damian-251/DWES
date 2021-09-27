<?php
//221sumaAB.php: A partir del anterior, refactorizar para que funcione con inicio y fin.

$inicio = $_GET["inicio"];
$fin = $_GET["fin"];
$suma = 0;

for ($i = $inicio; $i <= $fin; $i++) {
    $suma += $i;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>221 suma A B</title>
</head>

<body>
    <p>La suma de los números del <?=$inicio?> al <?=$fin?>: <?=$suma?></p>
</body>

</html>