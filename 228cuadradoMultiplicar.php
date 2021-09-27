<?php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>228 Cuadrado Multiplicar</title>
    <style>
        table {
            width: 30%;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: center;
            border: 1px solid gray;
            width: 1.5em;
            height: 1.5em;
        }

        .top {
            color: white;
            background-color: blue;
        }

        .side {
            color: white;
            background-color: orange;
        }
    </style>
</head>

<body>
    <table>
        <tbody>
            <?php
            for ($i = 0; $i <= 11; $i++) { ?>
                <tr>
                    <?php for ($j = 0; $j <= 11; $j++) { ?>

                        <?php if ($i == 0 && $j == 0) { ?>
                            <th class="top">
                                <?= "x" ?>
                            </th>
                        <?php
                        } else if ($j == 0) { ?>
                            <th class="side">
                                <?= $i - 1 ?>
                            </th>
                        <?php
                        } else if ($i == 0) { ?>
                            <th class="top">
                                <?= $j - 1 ?>
                            </th>
                        <?php } else { ?>
                            <td>
                                <?= ($i - 1) * ($j - 1) ?>
                            </td>

                    <?php
                        }
                    } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>