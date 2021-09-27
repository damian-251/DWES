<?php
/*
    213ecuacion2g.php: Crea un programa que resuelva una ecuación de 2º grado del tipo 
    ax² + bx + c = 0. Ten en cuenta que puede tener 2, 1 o no 
    tener solución dependiendo del valor del discriminante b²-4ac.
    Tip: Para calcular la raíz cuadrada deberás utilizar la función sqrt()

    x^2 = -b±raiz(b^2-4*a*c)/(2*a)
*/
    $a= $_GET["a"];
    $b= $_GET["b"];
    $c= $_GET["c"];

    $radicando = $b**2-4*$a*$c;
    //echo $radicando;

    if ($radicando == 0) {
        //Hay una solución
        $x1 = -$b/(2*$a);
        $x2 = "Sólo hay una solución";

    }else if ($radicando > 0) {
        //Hay dos soluciones

        $x1 = (-$b + sqrt($radicando))/(2*$a); //b**2 es b^2 como pow en java
        $x2 = (-$b - sqrt($radicando))/(2*$a);

    }else {
        $x1 = "No tiene un número real como resultado";
        $x2 = "No tiene un número real como resultado";
    }
   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>213 Ecuación</title>
</head>
<body>
    <p>Ecuación: <?=$a?>x2 + <?=$b?>x + <?=$c?> = 0</p>
    <p>Solución 1: <?=$x1?>.</p>
    <p>Solución 2: <?=$x2?>.</p>
</body>
</html>