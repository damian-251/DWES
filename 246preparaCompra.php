<?php

$cantidad = $_GET["cantidad"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>245 Prepara Tíquet de Compra</title>
</head>
<body>
    <?php include ("246cabeceraSuper.php") ?>
    <p>Lista de la compra</p>
<form action="246listaCompra.php" method="get">

        <?php
        for ($i = 0; $i < $cantidad; $i++) {

        ?>
            <p><label for="nombre">Nombre: </label>
                <input type="text" name="nombre<?= $i ?>" id="nombre<?= $i ?>">
                <label for="precio">Precio (€): </label>
                <input type="txt" name="precio<?= $i ?>" id="precio<?= $i ?>">
                
            <?php
        }
            ?>
            <input id="cantidad" name="cantidad" type="hidden" value="<?= $cantidad ?>">

            <p><input type="submit" value="Enviar"></p>
            </p>
    </form>
    <footer>
    <?php include ("246pieSuper.php") ?>
    </footer>
</body>

</html>