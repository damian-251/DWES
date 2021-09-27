<?php

$cantidad = $_GET["cantidad"];


for ($i = 0; $i < $cantidad; $i++) {
    $nombre = $_GET["nombre" . $i];
    $altura = $_GET["altura" . $i];
    $email = $_GET["email" . $i];
    $personas[] = ["nombre" => $nombre, "altura" => $altura, "email" => $email];
   // $personas[] = ["nombre" => $nombre, "altura" => $altura, "email" => $email];
   //así sería como el 236
}

$mayor = 0;
$menor = 0;
//Guardar la posición

//Empieza en 1 porque la 0 ya lo tenemos arriba y empezamos la comparación a partir de la posición 1
for ($i = 1; $i < $cantidad; $i++) {

    if ($personas[$i]["altura"] > $personas[$mayor]["altura"]) {
        $mayor = $i;
    }
   else  if ($personas[$i]["altura"] < $personas[$menor]["altura"]) {
        $menor = $i;
    } //Guardamos la posición donde está en lugar del elemento entero
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
    <p>La persona más alta es: <?= $personas[$mayor]["nombre"] ?></p>
    <p>La persona más baja es: <?= $personas[$mayor]["nombre"] ?> </p>
</body>

</html>