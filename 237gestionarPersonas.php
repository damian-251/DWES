<?php

$cantidad = $_GET["cantidad"];


for ($i = 0; $i < $cantidad; $i++) {
    $nombre = $_GET["nombre" . $i];
    $altura = $_GET["altura" . $i];
    $email = $_GET["email" . $i];
    $personas["persona" . $i] = ["nombre" => $nombre, "altura" => $altura, "email" => $email];
}

$mayor = $personas["persona0"];
$menor = $personas["persona0"];


for ($i = 0; $i < $cantidad; $i++) {

    if ($personas["persona" . $i]["altura"] > $mayor["altura"]) {
        $mayor = $personas["persona" . $i];
    } else if ($personas["persona" . $i]["altura"] < $menor["altura"]) {
        $menor = $personas["persona" . $i];
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>237 Gestionar Personas</title>
    <style>
        th,
        td {
            border: 1px solid gray;
            padding: 1em;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Altura</th>
            <th>Correo electrónico</th>
        </tr>
        <?php foreach ($personas as $persona) { ?>
            <tr>
                <td><?= $persona["nombre"] ?></td>
                <td><?= $persona["altura"] ?></td>
                <td><?= $persona["email"] ?></td>
            </tr>
        <?php } ?>
    </table>
    <p>La persona más alta es: <?= $mayor["nombre"] ?></p>
    <p>La persona más baja es: <?= $menor["nombre"] ?> </p>
</body>

</html>