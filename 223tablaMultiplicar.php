<?php

$numero = $_GET["numero"];


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>223 Tabla de Multiplicar </title>
    <style>
        td,
        th {
            border-bottom: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>a</th>
                <th>*</th>
                <th>b</th>
                <th>=</th>
                <th>a*b</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i; ?>
                <tr>
                    <td><?= $numero ?></td>
                    <td>x</td>
                    <td><?= $i ?></td>
                    <td>=</td>
                    <td><?= $resultado ?></td>
                </tr>
            <?php
            } ?>
        </tbody>
    </table>
</body>

</html>