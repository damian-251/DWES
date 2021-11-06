<?php 

/* 409formulariosN.html: Haciendo uso de la la sesión, vamos a dividir el formulario del ejercicio 
402formulario.php en 2 subformularios:

409formulario1.php envía los datos (nombre y apellidos, email, url y sexo) a 409formulario2.php.
409formulario2.php lee los datos, los mete en la sesión, y luego muestra el resto de campos del 
formulario a rellenar (convivientes, aficiones y menú). Envía los datos a 409formulario3.php.
409formulario3.php se muestran todos los datos recuperados que están almacenados en la sesión.  */

$menusClave = ["pizza4q" => "pizza 4 quesos", "pizzaPine" => "pizza con piña", 
"macarronesBolo" => "macarrones boloñesa", "verduraSalteado" => "salteado de verduras"];

session_start();

$_SESSION["convivientes"] = $_POST["convivientes"];
$_SESSION["aficiones"] = $_POST["aficiones"];
$_SESSION["menu"] = $_POST["menu"];

$nombre = $_SESSION["nombre"];
$apellidos = $_SESSION["apellidos"];
$email = $_SESSION["email"];
$pagina = $_SESSION["pagina"];
$sexo = $_SESSION["sexo"];
$convivientes = $_SESSION["convivientes"];
$aficiones = $_SESSION["aficiones"];
$menus = $_SESSION["menu"];

$menusFavoritos = [];

foreach ($menus as $menu) {
    $menusFavoritos[] = $menusClave[$menu];
}

$menusFavoritosCadena = implode("<br>",$menusFavoritos);
$aficionesFav = implode("<br>", $aficiones);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos obtenidos</title>
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
            <td><?=$menusFavoritosCadena?></td>
        </tr>
    </table>
</body>
</html>


