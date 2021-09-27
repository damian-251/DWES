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
    <form action="237gestionarPersonas.php" method="get">
        <?php
        for ($i = 0; $i < $cantidad; $i++) {

        ?>
            <p><label for="nombre">Nombre: </label>
                <input type="text" name="nombre<?= $i ?>" id="nombre<?= $i ?>">
                <label for="altura">Altura: </label>
                <input type="number" name="altura<?= $i ?>" id="altura<?= $i ?>">
                <label for="email">Correo electrónico:</label>
                <input type="text" name="email<?= $i ?>" id="email<?= $i ?>">

            <?php
        }
            ?>
            <input id="cantidad" name="cantidad" type="hidden" value="<?= $cantidad ?>">

            <p><input type="submit" value="Enviar"></p>
            </p>
    </form>

</body>


</html>