<?

/* 
406contadorVisitas.php: Mediante el uso de cookies, informa al usuario de si es su primera
 visita, o si no lo es, muestre su valor (valor de un contador).
 Además, debes permitir que el usuario reinicialice su contador de visitas.

 Para borrar la cokie. no es lo mismo que exista con en 0 que que no exista

 Hacen falta dos archivos, otro para cuando quiero borrar. Dirijo a que borre la cookie
 Así separamos las funcionalidades

 Uno que muestre y otro que borre.
*/

$accesosPagina = 0;
if (isset($_COOKIE['accesos'])) {
    $accesosPagina = $_COOKIE['accesos']; // recuperamos una cookie
    setcookie('accesos', ++$accesosPagina); // le asignamos un valor
} else {
    setcookie("accesos", 1);
    $primeraVisita = "Es tu primera Visita";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Visitas</title>
</head>

<body>
    <?php if (isset($primeraVisita)) { ?>
        <p>Es tu primera visita</p>
    <?php   } else { ?>
        <p>Es tu visita número : <?= $accesosPagina ?>.</p>
        <!-- Botón para reiniciar visitas -->
        <form action="406borrarCookie.php" method="post">
            <input type="submit" name="borrarCookie" value="Reiniciar contador" />
        </form>
    <?php } ?>

</body>

</html>