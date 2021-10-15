<?php
/* 
261generaContrasenya.php: Crea una función que a 
partir de un tamaño, genere una contraseña aleatoria compuesta de letras y dígitos de manera aleatoria.
*/

declare(strict_types=1);
include "260generador.php";
//$longitud = intval($_GET["longitud"]);

$longitud = intval($_GET["longitud"]) ? : 15;


function randomPassword(int $longitud): string
{
    $password = "";
    for ($i = 0; $i < $longitud; $i++) {
        $numeroLetra = rand(0, 1);
        if ($numeroLetra == 0) {
            $password .= generaLetra();
        } else {
            $password .= rand(0, 9);
        }
    }
    return $password;
}

$password = randomPassword($longitud);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>261 Genera Constraseña</title>
</head>

<body>
    <p><h2>Contaseña: <?= $password ?></h2></p>
</body>

</html>