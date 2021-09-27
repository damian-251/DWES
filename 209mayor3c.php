<?php

$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];


// if ($a > $b) {
//     if ($a > $c) {
//         $mayor = $a;
//     } else {
//         $mayor = $c;
//     }
// } else if ($b > $c) {
//     $mayor = $b;
// } else {
//     $mayor = $c;
// }

//mayor 3c

$mayor = $c;

if ($a > $b && $a > $c) {
    $mayor = $a;
}else if ($b > $a && $b > $c) {
    $mayor = $b;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>209 mayor de 3 compuesto</title>
</head>

<body>
    <p>El número mayor es <?= $mayor ?>.</p>
</body>

</html>