<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>

<?php
// recogida de datos
if (isset($_GET['nombreUsuario']) && isset($_GET['nombrePais']) && isset($_GET['ciudad'])) {
    $nombreUsuario = htmlspecialchars($_GET['nombreUsuario']);
    $nombrePais = htmlspecialchars($_GET['nombrePais']);
    $ciudad = htmlspecialchars($_GET['ciudad']);

    //mmostrar mensaje de bienvenida 
    echo "<h1>Bienvenido, $nombreUsuario</h1>";
    echo "<p>Has seleccionado $ciudad, una hermosa ciudad de $nombrePais.</p>";

    //enlace a wiki
    $enlaceWikipedia = "https://es.wikipedia.org/wiki/" . urlencode($ciudad);
    echo "<p>Para mas informacion sobre $ciudad, puedes visitar su pagina en Wikipedia: ";
    echo "<a href='$enlaceWikipedia' target='_blank'>$ciudad en Wikipedia</a></p>";
} else {
    echo "<p>Hubo un error al recibir los datos. Por favor, vuelve a la pagina de inicio.</p>";
}
?>

</body>
</html>