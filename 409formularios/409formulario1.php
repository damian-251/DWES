<!DOCTYPE html>


<!-- 409formulariosN.html: Haciendo uso de la la sesión, vamos a dividir el formulario del ejercicio 
402formulario.php en 2 subformularios:

409formulario1.php envía los datos (nombre y apellidos, email, url y sexo) a 409formulario2.php.
409formulario2.php lee los datos, los mete en la sesión, y luego muestra el resto de campos del 
formulario a rellenar (convivientes, aficiones y menú). Envía los datos a 409formulario3.php.
409formulario3.phpse muestran todos los datos recuperados que están almacenados en la sesión. 
-->


<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>402 Formulario</title>
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
    <form action="409formulario2.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="apellidos">Apellidos: </label>
        <input type="text" name="apellidos" id="apellidos" required>
        <label for="email">Correo electrónico: </label>
        <input type="email" name="email" id="email" required>
        <label for="pagina">Página personal: </label>
        <input type="url" name="pagina" id="pagina" required>
            <label for="sexo">Sexo: </label>
            <input type="radio" name="sexo" value="masculino" required>Masculino
            <input type="radio" name="sexo" value="femenino">Femenino
            <input type="radio" name="sexo" value="otro">Otro
        <input type="submit" value="Enviar">
    </form>
</body>

</html>