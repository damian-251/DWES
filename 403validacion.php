<?php

echo $_SERVER["QUERY_STRING"]."<br>"; 


/* $arrayMenu = [
    "pizza4q" => "Pizza 4 Quesos", "pizzaPine" => "Pizza con Piña", "macarronesBolo" => "Macarrones Boloñesa",
    "verduraSalteado" => "Salteado de Verduras"
]; */
/* $arrayAficiones = ["dormir" => "Dormir", "viajar" => "Viajar", "deporte" => "Deporte", "videojuegos" => "Videojuegos"];
 */


//Datos válidos de las opciones
$sexoValido = ["masculino", "femenino", "otro"];
$aficionesValidas = ["dormir", "viajar", "deporte", "videojuegos"];
$menusValidos = ["pizza 4 quesos", "pizza con piña", "macarrones boloñesa", "salteado de verduras"];



if (isset($_GET["email"])) {
    if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
        $email = $_GET["email"];
    } 
}
if (isset($_GET["pagina"])) {
    if (filter_var($_GET["pagina"], FILTER_VALIDATE_URL)) {
        $pagina = $_GET["pagina"];
    } 
}
if (isset($_GET["menu"])) {
    foreach ($_GET["menu"] as $menu) {
        if (in_array(strtolower($menu), $menusValidos)) {
            $menus[] = $menu; //añadimos solo los válidos
        }
    }
}

if (isset($_GET["sexo"])) {
    if (in_array($_GET["sexo"], $sexoValido)) {
        $sexo = $_GET["sexo"];
    } 
}

if (isset($_GET["aficiones"])) {
    foreach ($_GET["aficiones"] as $aficion) {
        if (in_array($aficion, $aficionesValidas)) {
            $aficiones[] = $aficion;
        } 
    }
}

if (isset($_GET["convivientes"])) {
    if (filter_var(intval($_GET["convivientes"]), FILTER_VALIDATE_INT)) {
        $convivientes = $_GET["convivientes"];
    } 
}

if (isset($_GET["nombre"])) {
    $nombre = $_GET["nombre"];
}

if (isset($_GET["apellidos"])) {
    $apellidos = $_GET["apellidos"];
}

$menuFavorito = implode("<br>", $menus);
$aficionesFav = implode("<br>", $aficiones);


//if ($validacion == false) {
    //include "402formulario.html";
/*} else { */ ?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resumen formulario</title>
        <style>
            table,
            tr,
            th,
            td {
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
                <td><?= $aficionesFav ?></td>
            </tr>
            <tr>
                <th>Menú favorito</th>
                <td><?= $menuFavorito ?></td>
            </tr>
        </table>
    </body>

    </html>

<?php  /*} ?> */