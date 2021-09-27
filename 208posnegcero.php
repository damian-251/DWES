<?php

$numero = $_GET["numero"];


if ($numero < 0) {
  $tipo="Negativo";
} else if ($numero > 0) {
  $tipo = "Positivo";
}  else {
  $tipo = "Cero";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>208 positivo negativo cero</title>
</head>
<body>
    <p>El número <?=$numero ?> es <?=$tipo ?>.</p>
</body>
</html>