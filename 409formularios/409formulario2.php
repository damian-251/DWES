<?php 

/* 409formulariosN.html: Haciendo uso de la la sesión, vamos a dividir el formulario del ejercicio 
402formulario.php en 2 subformularios:

409formulario1.php envía los datos (nombre y apellidos, email, url y sexo) a 409formulario2.php.
409formulario2.php lee los datos, los mete en la sesión, y luego muestra el resto de campos del 
formulario a rellenar (convivientes, aficiones y menú). Envía los datos a 409formulario3.php.
409formulario3.php se muestran todos los datos recuperados que están almacenados en la sesión.  */

session_start();

$_SESSION["nombre"] = $_POST["nombre"];
$_SESSION["apellidos"] = $_POST["apellidos"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["pagina"] = $_POST["pagina"];
$_SESSION["sexo"] = $_POST["sexo"];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Parte 2</title>
    <style>
        * {
            margin: .5em 0 0 .5em;
        }

        label,
        input {
            display: block;
        }

        label {
            margin-top: 1em;
        }

        input[type="radio"],
        input[type="checkbox"] {
            display: inline;
            margin-right: .5em;
        }
    </style>
</head>
<body>
<form action="409formulario3.php" method="post">
        <label for="convivientes">Número de convivientes: </label>
        <input type="number" name="convivientes" id="test" required>
        <label for="aficiones[]">Aficiones: </label>
            <input type="checkbox" name="aficiones[]" value="videojuegos">Videojuegos
            <input type="checkbox" name="aficiones[]" value="deporte">Deporte
            <input type="checkbox" name="aficiones[]" value="dormir">Dormir
            <input type="checkbox" name="aficiones[]" value="viajar">Viajar
        <label for="menu">Menú favorito: </label>
        <select name="menu[]" multiple="true" required>
            <option name="pizza4q" value="pizza4q">Pizza 4 Quesos</option>
            <option name="pizzaPine" value="pizzaPine">Pizza con Piña</option>
            <option name="macarronesBolo" value="macarronesBolo">Macarrones Boloñesa</option>
            <option name="verduraSalteado" value="verduraSalteado">Salteado de Verduras</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

