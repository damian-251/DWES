<?php
/*
Rellena un array bidimensional de 6 filas por 9 columnas con números aleatorios 
comprendidos entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, 
es decir, no se puede repetir ninguno.
Muestra a continuación por pantalla el contenido del array de tal forma que:

    La columna del máximo debe aparecer en azul.
    La fila del mínimo debe aparecer en verde
    El resto de números deben aparecer en negro.

*/

const FILAS = 6;
const COLS = 9;

$arrayAleatorios = [];

// Creamos un array unidimensional / sencillo / simple / 1D
for ($i = 0; $i < FILAS * COLS; $i++) {
    $num = 0;
    do {
        $num = rand(100, 999);
    } while (in_array($num, $arrayAleatorios));

    array_push($arrayAleatorios, $num);
}

// Pasamos el array 1d a 2d
$array2d = [[]]; // creamos un array 2d vacio
$mayor = 100;
$menor = 999;
$colMayor = 0;
$filaMenor = 0;
for ($i = 0; $i < FILAS; $i++) {
    for ($j = 0; $j < COLS; $j++) {
        $array2d[$i][$j] = $arrayAleatorios[$i*COLS + $j];

        if ($array2d[$i][$j] > $mayor) {
            $mayor = $array2d[$i][$j];
            $colMayor = $j;
        } else if ($array2d[$i][$j] < $menor) {
            $menor = $array2d[$i][$j];
            $filaMenor = $i;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mayor {
            background-color: blue;
        }
        .menor {
            background-color: green;
        }
    </style>
</head>
<body>
    <table width="500" border="1">
    <?php
//      La columna del máximo debe aparecer en azul.
//      La fila del mínimo debe aparecer en verde
        for ($i = 0; $i < FILAS; $i++) {
            
            $claseFila = "";
            if ($i == $filaMenor) {
                $claseFila = "menor";
            }
            echo "<tr class='$claseFila'>";

            for ($j = 0; $j < COLS; $j++) {
                $claseCol = "";
                if ($j == $colMayor) {
                    $claseCol = "mayor";
                }
                echo "<td class='$claseCol'>".$array2d[$i][$j]."</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
    
</body>
</html>