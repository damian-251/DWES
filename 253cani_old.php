<?php
/* 
253cani.php: EsCrIbE uNa FuNcIóN qUe TrAnSfOrMe UnA cAdEnA eN cAnI.

*/

declare(strict_types=1);

function cani(string $frase): string
{
    $resultado = "";
    $fraseMinus = strtolower($frase);
    for ($i = 0; $i < strlen($fraseMinus); $i++) {
        $resultado = $i % 2 == 0 ?  $resultado .= strtoupper($fraseMinus[$i]) :  $resultado .= $fraseMinus[$i];
    }
    return $resultado;
}
$frase = "Probando a ser un cani";

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