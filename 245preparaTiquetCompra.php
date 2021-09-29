<?php
/*
245preparaTiquetCompra.php: A partir de una cantidad de productos, leer el nombre 
y coste de la cantidad de productos indicados (similar al ejercicio 237, pero esta vez no
 hace falta crear
 el formulario con la cantidad, se recibe mediante un parámetro GET via URL).
*/
/* 
leo x nombres y x precios. poner campos con el nombre y el coste de los productos.
hay que usar las funciones que hemos hecho en el ejercicio anterior para mostrar de euros a pesetas.
el la última fila la suma de todos los valores.
*/
$cantidad = $_GET["cantidad"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>245 Prepara Tíquet de Compra</title>
</head>
<body>
    <p>Lista de la compra</p>
<form action="245imprimeTiquetCompra.php" method="get">

        <?php
        for ($i = 0; $i < $cantidad; $i++) {

        ?>
            <p><label for="nombre">Nombre: </label>
                <input type="text" name="nombre<?= $i ?>" id="nombre<?= $i ?>">
                <label for="precio">Precio (€): </label>
                <input type="txt" name="precio<?= $i ?>" id="precio<?= $i ?>">
                
            <?php
        }
            ?>
            <input id="cantidad" name="cantidad" type="hidden" value="<?= $cantidad ?>">

            <p><input type="submit" value="Enviar"></p>
            </p>
    </form>
</body>
</html>


