<?php
include_once("244euros.php");
$cantidad = $_GET["cantidad"];

//Lectura datos tiquet compra

/* 245imprimeTiquetCompra.php: Tras leer los datos del tiquet de compra, enumera en una tabla los productos, 
con su precio en euros y pesetas, y finalmente, en una última fila, totalizar en ambas monedas.  */

for ($i = 0; $i < $cantidad; $i++) {
    $nombre = $_GET["nombre".$i];
    $precio = $_GET["precio".$i];
    $tiquet[] = ["nombre" => $nombre, "precio" => $precio];
}

//Precio total
$total = 0;
foreach ($tiquet as $producto) {
    $total += $producto["precio"];
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>245 imprime Tiquet Compra</title>
    <style>
        th,
        td {
            border: 1px solid gray;
            padding: 1em;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>

        <tr>
            <th>Producto</th>
            <th>Precio (€)</th>
            <th>Precio (ptas)</th>
        </tr>

        <?php foreach ($tiquet as $producto) { ?>
            <tr>
                <td><?= $producto["nombre"] ?></td>
                <td><?= $producto["precio"] ?></td>
                <td><?= euros2pesetas($producto["precio"]) ?></td>
            </tr>
        <?php        } ?>

        <tr>
            <th>Total: </th>
            <td><?= $total ?></td>
            <td><?= euros2pesetas($total) ?></td>
            <!-- También podríamos poner un valor más en el array para que pase a pesetas y 
                llamar al valor directamente en la tabla en vez de pasar la función por ella. -->
        </tr>

    </table>
</body>

</html>