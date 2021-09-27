<?php
/*
236personas.php: Mediante un array bidimensional, almacena el nombre,
 altura y email de 5 personas. Para ello, crea un array de personas, 
 siendo cada persona un array asociativo:
  [ ['nombre'=>'Aitor', 'altura'=>182, 'email'=>'aitor@correo.com'],[…],… ] 
  Posteriormente, recorre el array y muéstralo en una tabla HTML.
*/

$personas = [
    ["nombre" => "Víctor Tazo", "altura" => 185, "email" => "victor@correo.com"],
    ["nombre" => "Leonor Tera", "altura" => 157, "email" => "leonor@correo.com"],
    ["nombre" => "Ester Colero", "altura" => 169, "email" => "ester@correo.com"],
    ["nombre" => "Óscar Naval", "altura" => 195, "email" => "oscar@correo.com"],
    ["nombre" => "Elsa Polindo", "altura" => 155, "email" => "elsa@correo.com"]
];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 236 personas</title>
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
            <th>Persona</th>
            <th>Altura \cm</th>
            <th>Correo electrónico</th>
        </tr>

        <?php foreach ($personas as $datos) { ?>
            <tr>
                <td><?= $datos["nombre"] ?></td>
                <td><?= $datos["altura"] ?></td>
                <td><?= $datos["email"] ?></td>
            <tr>
            <?php } ?>

    </table>
</body>

</html>