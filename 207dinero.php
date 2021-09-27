<?php
/*
    207dinero.php: A partir de una cantidad de dinero, mostrar su 
    descomposición en billetes (500, 200, 100, 50, 20, 10, 5) y monedas (2, 1),
     para que el número de elementos sea mínimo. No se utilizar ninguna instrucción condicional.
      Por ejemplo, al introducir 139 debé mostrar

1 billete de 100
1 billete de 20
1 billete de 10
1 billete de 5
2 monedas de 2
    */

$cantidadInicial = $_GET["dinero"];
$cantidad = $cantidadInicial;


$billete500 = intdiv ($cantidad, 500);
$cantidad = $cantidad%500;

$billete200 = intdiv ($cantidad, 200);
$cantidad = $cantidad%200;

$billete100 = intdiv ($cantidad, 100);
$cantidad = $cantidad%100;

$billete50 = intdiv ($cantidad, 50);
$cantidad = $cantidad%50;

$billete20 = intdiv ($cantidad, 20);
$cantidad = $cantidad%20;

$billete10 = intdiv ($cantidad, 10);
$cantidad = $cantidad%10;

$billete5 = intdiv ($cantidad, 5);
$cantidad = $cantidad%5;

$moneda2 = intdiv ($cantidad, 2);
$cantidad = $cantidad%2;

$moneda1 = intdiv ($cantidad, 1);
$cantidad = $cantidad%1;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?=$billete500 ?> billetes de 500</p>
    <p><?=$billete200 ?> billetes de 200</p>
    <p><?=$billete100 ?> billetes de 100</p>
    <p><?=$billete50 ?> billetes de 50</p>
    <p><?=$billete20 ?> billetes de 20</p>
    <p><?=$billete10 ?> billetes de 10</p>
    <p><?=$billete5 ?> billetes de 5</p>
    <p><?=$moneda2 ?> monedas de 2</p>
    <p><?=$moneda1 ?> monedas de 1</p>
</body>

</html>