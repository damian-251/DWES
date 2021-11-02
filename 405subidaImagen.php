<?php

$anchura = $_POST["anchura"];
$altura = $_POST["altura"];


if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == 'Subir') {
    if (is_uploaded_file($_FILES['archivoEnviado']['tmp_name'])) {
        if (substr(mime_content_type($_FILES['archivoEnviado']['tmp_name']),0,5) == "image") {
            $nombre = $_FILES['archivoEnviado']['name'];
            move_uploaded_file($_FILES['archivoEnviado']['tmp_name'], "./uploads/{$nombre}");
            echo "<p>Archivo $nombre subido con éxito</p>";
        } else {
            echo "El formato tiene que ser Imagen";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen subida JPG</title>
</head>

<body>
    <?php if (isset($nombre)) { ?>
        <h1>Imagen subida</h1>
        <img src="./uploads/<?= $nombre ?>" height="<?= $altura ?>" width="<?= $anchura ?>" alt="Imagen subida">
    <?php } ?>
</body>

</html>