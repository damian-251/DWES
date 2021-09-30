<?php
//250fraseImpares.php: Lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares.
declare(strict_types=1);
function frasesImpares(string $frase ) : string {
    $fraseImpar="";
    for ($i = 1 ; $i < strlen($frase) ; $i+=2) {
        $fraseImpar .= $frase[$i];
    }

    return $fraseImpar;
}

$frase = "Hola buenos tardes";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>250 frasesImpares</title>
</head>
<body>
    <p><?=frasesImpares($frase)?></p>
</body>
</html>