<?php
/* 
262quinielas.php: Crea las siguientes funciones:

    quinigol() : array → Genera un array multidimensional con 6 resultados aleatorios con combinaciones [012M, 012M]
    quiniela() : array → Genera un array con una combinación de quiniela generada de manera aleatoria: 14 resultados con 1X2 y el pleno al quince con [012M, 012M]
    tabla(array $quiniela) : string → transforma un array de una quniela en una tabla HTML

*/
declare(strict_types=1);

function quinigol(): array
{
    $longitud = 6;
    $quiniArray = [[]];
    //poner rand (0,3) para que tengan las mismas posibilidades de salir
    for ($i = 0; $i < $longitud; $i++) {
        for ($j = 0; $j < 2; $j++) {
            $aleatorio = rand(0,3);
            if ($aleatorio == 3) {
                $quiniArray[$i][$j] = "M";
            } else {
                $quiniArray[$i][$j] = rand(0, 2);
            }
        }
    }
    return $quiniArray;
}

function quiniela(): array
{
    $longitud = 14;
    $arrayQuiniela = [];
    $combinacion = "";
    for ($i = 0; $i < $longitud; $i++) {
        $aleatorio = rand(0,2);
        if ($aleatorio == 2) {

            $combinacion .= "X" . " ";
        } else {
            $combinacion .= rand(1, 2) . " ";
        }
    }
    $combinacion = rtrim($combinacion);
    $arrayQuiniela["combinaciones"] = $combinacion;
    $arrayQuiniela["plenoQuince"] = quinigol()[rand(0, 5)];
    return $arrayQuiniela;
}

//print_r(quiniela());

function tabla(array $quiniela): string
{
    $cadenaHTML = "";
    $cadenaHTML .= "<table>";
    $cadenaHTML .= "<tr><th>Partido</th><th>Resultado</th></tr>";
    $arrayQuiniela = explode(" ", $quiniela["combinaciones"]);
    $i = 1;
    foreach ($arrayQuiniela as $valor) {
        $cadenaHTML .= "<tr> <td>Partido $i</td> <td>$valor</td> </tr>";
        $i++;
    }
    $cadenaHTML .= "<tr><th>Pleno al 15 </th><td>";
    foreach ($quiniela["plenoQuince"] as $valor) {
        $cadenaHTML .= $valor . " ";
    }
    $cadenaHTML = rtrim($cadenaHTML);
    $cadenaHTML .= "</td></tr>";
    $cadenaHTML .= "</table>";
    return $cadenaHTML;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>262 Quinielas</title>
</head>

<body>
    <?= tabla(quiniela()) ?>
</body>

</html>