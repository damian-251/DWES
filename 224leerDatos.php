<?php

$cantidad = $_GET["cantidad"];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>224 Leer Datos</title>
</head>

<body>
    <form action="224sumarDatos.php" method="get">
        <?php
        for ($i = 1; $i <= $cantidad; $i++) {

        ?>
            <p><label for="numero">Numero: <?= $i ?> </label>
                <input type="number" name="numero<?= $i ?>" id="numero<?= $i ?>">


            <?php
        }
            ?>
            <input id="cantidad" name="cantidad" type="hidden" value="<?= $cantidad ?>">

            <p><input type="submit" value="Enviar"></p>
            </p>
    </form>

</body>

</html>