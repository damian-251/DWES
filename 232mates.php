<?php
/* 
232mates.php: A partir del ejercicio 230, genera un array aleatorio de 33
 elementos con números comprendidos entre el 0 y 100 y calcula:
*/
const SIZE = 33;
$arrayAleatorio = [];

for ($i = 0; $i < SIZE; $i++) {
    $arrayAleatorio[$i] = rand(0, 100);
}

$mayor = $arrayAleatorio[0];
$menor = $arrayAleatorio[0];

$suma = 0;

foreach ($arrayAleatorio as $numero) {
    if ($mayor < $numero) {
        $mayor = $numero;
    }

    if ($menor > $numero) {
        $menor = $numero;
    }

    $suma += $numero;
}

$media = $suma/(count($arrayAleatorio));


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>232 mates</title>
</head>

<body>
    <ul>
        <?php
        foreach ($arrayAleatorio as $numero) { ?>
            <li> <?= $numero ?> </li>
        <?php
        }
        ?>
    </ul>

    <p>El número mayor es: <?=$mayor?>.</p>
    <p>El número menor es: <?=$menor?>.</p>
    <p>La media es: <?=$media?>.</p>
</body>

</html>