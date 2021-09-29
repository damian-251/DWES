<?php

include("243biblioteca.php");
$a = $_GET["a"];
$b = $_GET["b"];


$funciones = ["sumar", "restar", "multiplicar", "dividir"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>243 Array Funciones</title>
</head>
<body>
    <p><?php foreach ($funciones as $funcion) { ?>
        <?=$funcion?> = <?=$funcion($a, $b)?>
        <br>
   <?php } ?></p>
</body>
</html>
