<?php
/* 
    Vuelve a realizar el ejercicio 207, el de las monedas (500, 200, 100, 50, 20, 10, 5, 2, 1),
    pero haciendo uso de arrays y un bucle. Almacena el resultado en un array asociativo.
    Muestra el resultado en una lista desordenada únicamente con las cantidades que tienen 
    algún valor.
*/

$cantidad = $_GET["cantidad"];
$cantidadInicial = $cantidad;

//Creación Array Asociativo

$resultado = [
    "500" => 0, "200" => 0, "100" => 0, "50" => 0,
    "20" => 0, "10" => 0, "5" => 0, "2" => 0,
    "1" => 0
];

$arrayClaves = array_keys($resultado);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>234 Monedas</title>
</head>

<body>

    <?php foreach ($arrayClaves as $valor) {

        $unidades = intdiv($cantidad, $valor);
        $cantidad = $cantidad % ($valor);
        $resultado[$valor] = $unidades;

        if ($unidades == 1 && $valor >= 5) { ?>
            <p> <?= $unidades ?> Billete de <?= $valor ?>. </p>
        <?php
        } else if ($unidades != 0 && $valor >= 5) { ?>
            <p> <?= $unidades ?> Billetes de <?= $valor ?>. </p>
        <?php
        } else if ($unidades == 1) { ?>
            <p> <?= $unidades ?> Moneda de <?= $valor ?>. </p>
        <?php } else if ($unidades != 0) { ?>
            <p> <?= $unidades ?> Monedas de <?= $valor ?>. </p>
    <?php
        }
    } ?>

</body>

</html>