<?php

$inicio = $_GET["inicio"];
$fin = $_GET["fin"];

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>220 Pares AB</title>
</head>

<body>
    <ul><?php
    if($inico %2 == 1) {
        $inicio++;
    } 
        for ($i = $inicio; $i <= $fin; $i+=2) {
           
                echo "<li> $i </li>";
            
        }

        ?>
    </ul>
</body>

</html>