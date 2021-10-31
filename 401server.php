<?php
/* 401server.php: igual que el ejemplo visto en los apuntes, muestra los valores de $_SERVER
 al ejecutar un script en tu ordenador.
Prueba a pasarle parámetros por GET (y a no pasarle ninguno).
Prepara un formulario (401post.html) que haga un envío por POST y compruébalo de nuevo.
Crea una página (401enlace.html) que tenga un enlace a 401server.php y comprueba el valor de HTTP_REFERER. */

echo "PHP_SELF: " . $_SERVER["PHP_SELF"]."<br>"; // /u4/401server.php
echo "SERVER_SOFTWARE: " . $_SERVER["SERVER_SOFTWARE"]."<br>"; // Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.4.9
echo "SERVER_NAME: " . $_SERVER["SERVER_NAME"]."<br>"; // localhost

echo "REQUEST_METHOD: " . $_SERVER["REQUEST_METHOD"]."<br>"; // GET
echo "REQUEST_URI: " . $_SERVER["REQUEST_URI"]."<br>"; // /u4/401server.php?heroe=Batman
echo "QUERY_STRING: " . $_SERVER["QUERY_STRING"]."<br>"; // heroe=Batman
echo 'PATH_INFO: : ' . $_SERVER['PATH_INFO']."<br>";
echo 'REMOTE_HOST: ' . $_SERVER['REMOTE_HOST']."<br>";
echo 'REMOTE_ADDR: ' . $_SERVER['REMOTE_ADDR']."<br>";
echo 'AUTH_TYPE: ' . $_SERVER['AUTH_TYPE']."<br>";
echo 'REMOTE_USER: ' . $_SERVER['REMOTE_USER']."<br>";
echo 'HTTP_USER_AGENT: ' . $_SERVER['HTTP_USER_AGENT']."<br>";
echo 'HTTP_REFERER: ' . $_SERVER['HTTP_REFERER']."<br>";

/*


*/