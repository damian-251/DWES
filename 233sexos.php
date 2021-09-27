<?php

$arraySexos = [];

for ($i = 0; $i < 100; $i++) {
    $aleatorio = rand(0, 1);

    if ($aleatorio ==0) {
        $sexo = "M";
    } else {
        $sexo = "F";
    }

    array_push($arraySexos, $sexo);
}

$resultado = ["M" => 0, "F" => 0];

foreach ($arraySexos as $sexo) {
    $resultado[$sexo]++;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>233 Sexos</title>
</head>

<body>
    <p>
        <?php
        foreach ($resultado as $genero => $cantidad) { ?>
            <?= $genero ?> ==> <?= $cantidad ?>
            </br>
        <?php
        } ?>
    </p>
</body>

</html>