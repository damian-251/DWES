<?php
/*
    203 Escribe un programa que almacene en variables tu nombre, primer apellido, 
    segundo apellido, email, año de nacimiento y teléfono. Luego muéstralos 
    por pantalla dentro de una tabla.
 */

$nombre = $_GET["nombre"];
$apellido1 = $_GET["apellido1"];
$apellido2 = $_GET["apellido2"];
$email = $_GET["email"];
$nacimiento = $_GET["year"];
$telefono = $_GET["telefono"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 203 Datos Personales</title>
    <style>
        tr,
        td, 
        th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table style="border: 1px solid black;">
        <tr>
            <th>Nombre</th>
            <td><?php echo $nombre ?></td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td><?php echo "$apellido1 $apellido2"; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <th>Año de nacimiento</th>
            <td><?php echo $nacimiento ?></td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td><?php echo $telefono ?></td>
        </tr>
    </table>
</body>

</html>