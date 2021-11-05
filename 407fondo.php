<?php
/* 
407fondo.php: Mediante el uso de cookies, crea una página con un desplegable con 
varios colores, de manera que el usuario pueda cambiar el color de fondo de la página
 (atributo bgcolor). Al cerrar la página, ésta debe recordar, al menos durante 24h,
  el color elegido y la próxima vez que se cargue la pagina, lo haga con el último color seleccionado.
*/

if (!isset($_COOKIE["fondo"])) {
    $fondo = "";
} else {
    
    if (isset($_POST["fondo"])) {
        $fondo = $_POST["fondo"];
        setcookie("fondo", $fondo, time() + 86400);
    } else {
        $fondo = $_COOKIE["fondo"];
    }
}




?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: <?= $fondo ?>;
        }
    </style>
</head>

<body>
    <form action="407fondo.php" method="post">
        <label for="fondo">Color de fondo</label>
        <select name="fondo">
            <option value="blue">Azul</option>
            <option value="yellow">Amarillo</option>
            <option value="red">Rojo</option>
            <option value="green">Verde</option>
            <option value="purple">Lila</option>
        </select>
        <input type="submit" name="boton" value="Cambiar fondo" />
    </form>
</body>

</html>