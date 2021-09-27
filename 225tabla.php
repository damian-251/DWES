<?php

$filas = $_GET["filas"];
$columnas = $_GET["columnas"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>225 Tabla </title>
</head>

<body>
    <table border="black">
        <tbody>
            <?php
            for ($i = 0; $i <= $filas - 1; $i++) { ?>
                <tr>
                    <?php for ($j = 0; $j <= $columnas - 1; $j++) { ?>
                        <td><?= $i ?>,<?= $j ?></td>
                    <?php
                    } ?>
                </tr>

            <?php
            } ?>

        </tbody>
    </table>
</body>

</html>