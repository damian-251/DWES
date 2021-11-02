<?php

//echo $_SERVER["QUERY_STRING"] . "<br>";


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

//array que almacenará los errores
$errores = [];

if (isset($_GET["email"])) {
    if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
        $email = $_GET["email"];
    } else {
        $errores[] = "Error en el formato de email";
    }
} else {
    $errores[] = "Email no encontrado";
}

if (isset($_GET["pagina"])) {
    if (filter_var($_GET["pagina"], FILTER_VALIDATE_URL)) {
        $pagina = $_GET["pagina"];
    } else {
        $errores[] = "Error en el formato de la página web";
    }
} else {
    $errores[] = "Página personal no encontrada";
}

$menuTemp=[];
if (isset($_GET["menu"])) {
    $menus = [];
    foreach ($_GET["menu"] as $menu) {
        if (in_array(strtolower($menu), $menusValidos)) {
            $menuTemp[] = $menu; //añadimos solo los válidos
        }
    }
    if (count($menuTemp) == 0) {
        //Ninguno es válido
        $errores[] = "Menú elegido no válido";
    } else {
        $menuTemp = $menus; //si tiene algún valor lo dirigimos a la variable que usaremos
    }
} else {
    $errores[] = "Menú favorito no encontrado";
}

if (isset($_GET["sexo"])) {
    if (in_array($_GET["sexo"], $sexoValido)) {
        $sexo = $_GET["sexo"];
    } else {
        $errores[] = "Error al elegir sexo";
    }
} else {
    $errores[] = "Opción sexo no marcada";
}

if (isset($_GET["aficiones"])) {
    $aficiones = [];
    foreach ($_GET["aficiones"] as $aficion) {
        if (in_array($aficion, $aficionesValidas)) {
            $aficionesTemp[] = $aficion;
        }
    }
    if (count($aficionesTemp) == 0) {
        $errores[] = "Aficiones no válidas";
    } else {
        $aficionesTemp = $aficiones;
    }
} else {
    $errores[] = "Ninguna afición ha sido seleccionada";
}

if (isset($_GET["convivientes"])) {
    if (filter_var(intval($_GET["convivientes"]), FILTER_VALIDATE_INT)) {
        $convivientes = $_GET["convivientes"];
    } else {
        $errores[] = "Error en el número de convivientes";
    }
} else {
    $errores[] = "No se ha seleccionado el número de convivientes";
}

if (isset($_GET["nombre"])) {
    $nombre = $_GET["nombre"];
} else {
    $errores[] = "Parámetro de nombre no encontrado";
}

if (isset($_GET["apellidos"])) {
    $apellidos = $_GET["apellidos"];
} else {
    $errores[] = "Parámetro de apellidos no encontrado";
}

//Si hay algún error los mostramos y mostramos de nuevo el formulario
if (count($errores) > 0) {
    include "402formulario.html";
    echo "<b>Errores encontrados</b><br>";
    foreach ($errores as $error) {
        echo $error . "<br>";
    }
} else {
    include "402formulario.php";
}
