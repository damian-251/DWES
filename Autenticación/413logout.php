<?php

/* 413logout.php: vacía la sesión y nos lleva de nuevo al formulario de inicio de sesión. No contiene código HTML */

// Recuperamos la información de la sesión
session_start();

// Y la destruimos
session_destroy();
header("Location: 410index.html");
?>