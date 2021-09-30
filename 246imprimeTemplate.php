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




