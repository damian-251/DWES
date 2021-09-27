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

$arrayAleatoria = array();

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 9; $j++) {

        do {
            $repetido = false;
            $numero = rand(100, 999);
            foreach ($arrayAleatoria as $fila) {
                if (in_array($numero, $fila)) {
                    $repetido = true;
                }
            }
        } while ($repetido);



        $arrayAleatoria[$i][$j] = $numero;
    }
}


$mayor = $arrayAleatoria[0][0];
$menor = $arrayAleatoria[0][0];
$filaMenor = 0;
$columnaMayor = 0;

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 9; $j++) {

        if ($arrayAleatoria[$i][$j] > $mayor) {
            $mayor = $arrayAleatoria[$i][$j];
            $columnaMayor = $j;
        }

        if ($arrayAleatoria[$i][$j] < $menor) {
            $menor = $arrayAleatoria[$i][$j];
            $filaMenor = $i;
        }
    }
}



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>238 Tabla Distintos</title>
    <style>
        th,
        td {
            border: 1px solid gray;
            padding: 1em;
            text-align: center;
        }

        .filaMenor {
            background-color: greenyellow;
        }

        .columnaMayor {
            background-color: aqua;
        }
    </style>
</head>

<body>
    <table>
        <?php for ($i = 0; $i < 6; $i++) { ?>
            <tr <?php if ($i == $filaMenor) {
                    print('class = "filaMenor"');
                } ?>>

                <?php for ($j = 0; $j < 9; $j++) { ?>

                    <td <?php if ($j == $columnaMayor) {
                            print('class="columnaMayor"');
                        } ?>>
                        <?= $arrayAleatoria[$i][$j] ?>
                    </td>
                <?php    } ?>

            <?php } ?>


            </tr>

    </table>
</body>

</html>