<?php
$alturas = [
    "Persona A" => 155, "Persona B" => 220, "Persona C" => 115,
    "Persona D" => 175, "Persona E" => 185
];

$suma = 0;
$size = count($alturas);

//Siempre calcular arriba!!! aunque haya que reptir el bucle foreach

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>235 Alturas</title>
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

        <theader>
            <tr>
                <th>Nombre</th>
                <th>Altura \cm</th>
            </tr>
        </theader>

        <tbody>
            <?php foreach ($alturas as $nombre => $altura) {
                $suma += $altura; ?>
                <tr>
                    <td><?= $nombre ?></td>
                    <td><?= $altura ?></td>
                </tr>
            <?php }
            $media = $suma / $size ?>
        </tbody>

        <tfoot>
            <tr>
                <th>Media: </th>
                <td><?= $media ?></td>
            </tr>
        </tfoot>
    </table>

</body>

</html>