<?php
/* 
253cani.php: EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI.
*/

declare(strict_types=1);

function cani(string $frase): string
{
    $arrayEspacios = [];
    $palabraMinus = str_replace(" ", "", strtolower($frase));
    $resultado = "";

    for ($i = 0; $i < strlen($frase); $i++) {
        //Guradamos la posición de los espacios
        if ($frase[$i] == " ") {
            $arrayEspacios[] = $i;
        }
    }
    $j = 0;
    for ($i = 0; $i < strlen($palabraMinus); $i++) {
        if ($i % 2 == 0) {
            $resultado .= strtoupper($palabraMinus[$i]);
        } else {
            $resultado .= $palabraMinus[$i];
        }
        //Colocamos los espacios de nuevo
        if ($j < count($arrayEspacios)) {
            if ($arrayEspacios[$j] == $i + 1 + $j) {
                $resultado .= " ";
                $j++;
            }
        }
    }
    return $resultado;
}

$frase = "Probando a ser un cani reshulon morenikoh";
$fraseCani = cani($frase);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>253 Cani</title>
</head>

<body>
    <p><?= $frase ?></p>
    <p><?= $fraseCani ?></p>
</body>

</html>