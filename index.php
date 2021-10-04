<?php
    $frase = "Hola mundo desde Severo Ochoa";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$frase; ?></title> <!-- También se podría con print, echo -->
        <style>
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 80%;
            }
        </style>
    </head>
    <body>
        <h1><?php echo $frase; ?></h1>
        <p>Hoy estamos a 
        <?php
            echo date("d/m/Y");

            /* 
                Esto es un comentario
            */

            // poner comentarios en una línea 
            
        ?>
        </p>
        <img src="hello.gif" alt="Hola" class="center">
    </body>
</html>