<?php

$usu = $_GET["usuario"];
$contra = $_GET["password"];

$usuario = [
    "usuario" => "contrasenya",
    "usu" => "con",
    "1234" => "1234"
];



if (isset($usuario[$usu])) {
    if ($usuario[$usu] == $contra) {
        include "247ok.php";
    } else {
        $msjError = "Contraseña incorrecta";
        include "247ko.php";
    }
} else {
    $msjError = "Usuario inexistente";
    include "247ko.php";
}
