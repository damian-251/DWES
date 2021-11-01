<?php

/* $arrayMenu = [
    "pizza4q" => "Pizza 4 Quesos", "pizzaPine" => "Pizza con Piña", "macarronesBolo" => "Macarrones Boloñesa",
    "verduraSalteado" => "Salteado de Verduras"
]; */
/* $arrayAficiones = ["dormir" => "Dormir", "viajar" => "Viajar", "deporte" => "Deporte", "videojuegos" => "Videojuegos"];
 */
$menus = $_GET["menu"];
$aficiones = $_GET["aficiones"];
$nombre = $_GET["nombre"];
$apellidos = $_GET["apellidos"];
$sexo = $_GET["sexo"];
$email = $_GET["email"];
$pagina = $_GET["pagina"];
$convivientes = $_GET["convivientes"];

$menuFavorito = implode("<br>",$menus);
$aficionesFav = implode("<br>", $aficiones);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen formulario</title>
    <style>
        table,tr, th, td {
            border: 1px solid black;
            padding: .3em;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Nombre</th>
            <td><?= $nombre ?></td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td><?= $apellidos ?></td>
        </tr>
        <tr>
            <th>Correo electrónico</th>
            <td><?= $email ?></td>
        </tr>
        <tr>
            <th>Página personal</th>
            <td><?= $pagina ?></td>
        </tr>
        <tr>
            <th>Sexo</th>
            <td><?= $sexo ?></td>
        </tr>
        <tr>
            <th>Número de convivientes</th>
            <td><?= $convivientes ?></td>
        </tr>
        <tr>
            <th>Aficiones</th>
            <td><?=$aficionesFav?></td>
        </tr>
        <tr>
            <th>Menú favorito</th>
            <td><?=$menuFavorito?></td>
        </tr>
    </table>
</body>

</html>