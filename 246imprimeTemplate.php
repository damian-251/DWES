<?php
include_once("244euros.php");
$cantidad = $_GET["cantidad"];

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




