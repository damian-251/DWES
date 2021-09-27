<?php

/*
 202 Escribe un programa que utilice las variables $x y $y.
  Asígnales los valores 166 y 999 respectivamente. 
  A continuación, muestra por pantalla el valor de cada variable,
   la suma, la resta, la división y la multiplicación. 
*/

$x=166;
$y=999;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>202 Cálculos</title>
</head>
<body>
    <p>El valor de x es <?php echo $x ?></p>
    <p>El valor de y es <?php echo $y ?></p></p>
    <p>El valor de la suma es <?php echo $x+$y ?></p>
    <p>El valor de la resta es <?php echo $x-$y ?></p>
    <p>El valor de la multiplicación es <?php echo $x*$y ?></p>
    <p>El valor de la división es <?php echo $x/$y ?></p>
</body>
</html>

