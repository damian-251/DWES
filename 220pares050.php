<?php
const INICIO = 0;
const FIN = 50;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>220 Pares 0-50</title>
</head>
<body>
    <ul><?php
        for ($i = INICIO; $i <= FIN; $i+=2) {
        
                echo "<li> $i </li>";

        }
    
    ?>
    </ul>

</body>
</html>