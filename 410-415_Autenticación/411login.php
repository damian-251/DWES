<?php
/* 411login.php: hace de controlador, por lo que debe comprobar los datos recibidos
 (solo permite la entrada de usuario/usuario y si todo es correcto, ceder el control 
 a la vista del siguiente ejercicio. No contiene código HTML. */

// Comprobamos si ya se ha enviado el formulario
if (isset($_POST['enviar'])) {
    $usuario = $_POST['inputUsuario'];
    $password = $_POST['inputPassword'];

    // validamos que recibimos ambos parámetros
    if (empty($usuario) || empty($password)) {
        $error = "Debes introducir un usuario y contraseña";
        include "410index.html";
    } else {
        if ($usuario == "usuario" && $password == "usuario") {
            // almacenamos el usuario en la sesión
            session_start();
            $_SESSION['usuario'] = $usuario;
            //Cargamos las series y las películas de dicho usuario en el controlador
            if (!isset($_SESSION["peliculas"])) {
                $_SESSION["peliculas"][] = "Eternals";
                $_SESSION["peliculas"][] = "Venom: Let There Be Carnage";
                $_SESSION["peliculas"][] = "The Last Duel";
            }

            if (!isset($_SESSION["series"])) {
                $_SESSION["series"][] = "Black Mirror";
                $_SESSION["series"][] = "House of Cards";
                $_SESSION["series"][] = "Orange is the New Black";
            }
            // cargamos la página principal
            include "412peliculas.php";
        } else {
            // Si las credenciales no son válidas, se vuelven a pedir
            $error = "¡Usuario o contraseña no válidos!";
            include "410index.html";
        }
    }
}
