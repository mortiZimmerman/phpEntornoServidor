<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona una ciudad</title>
</head>
<body>
<?php 
// expresion regular para validar el nombre
$expresionRegular = "/^[A-Z][a-zA-Z]*$/";

// verificar que los parametros de nombre y pais estan definidos
if (!isset($_GET['nombreUsuario']) || !isset($_GET['Paises2'])) {
    // redirigir al usuario a la pagina principal si intenta acceder sin pasar por el formulario
    header("Location: index.php"); // cambia "index.php" a tu archivo principal
    exit;
}

// metodos de recogida de datos 
$nombreUsuario = $_GET['nombreUsuario'];
$nombrePais = $_GET['Paises2'];

// validacion del nombre del usuario
if (preg_match($expresionRegular, $nombreUsuario)) {
    
    // array asociativo de paises y ciudades
    $ciudadesPorPais = [
        "Espana" => ["Madrid", "Barcelona", "Valencia", "Sevilla", "Bilbao"],
        "Alemania" => ["Berlin", "Munich", "Hamburgo", "Franfkfort", "Colonia"],
        "Portugal" => ["Lisboa", "Oporto", "Braga", "Coimbra", "Funchal"],
        "Francia" => ["Paris", "Marsella", "Lyon", "Toulouse", "Niza"],
        "Noruega" => ["Oslo", "Bergen", "Trondheim", "Stavanger", "Kristiansand"],
        "Suecia" => ["Estocolmo", "Gotemburgo", "Malmo", "Uppsala", "Orebro"],
        "Italia" => ["Roma", "Milan", "Napoles", "Turin", "Palermo"],
        "Grecia" => ["Atenas", "Salonika", "Patras", "Heraklion", "Larisa"],
        "Armenia" => ["Erevan", "Gyumri", "Vanadzor", "Hrazdan", "Abovyan"],
        "Rumania" => ["Bucarest", "Cluj-Napoca", "Timisoara", "Iasi", "Constanza"],
        "Suiza" => ["Zurich", "Ginebra", "Basel", "Berna", "Lausana"],
        "Albania" => ["Tirana", "Durres", "Vlore", "Shkoder", "Fier"],
        "Andorra" => ["Andorra la Vieja", "Escaldes-Engordany", "Encamp", "Sant Julia", "La Massana"]
    ];

    // verificar que el pais seleccionado tenga ciudades en el array
    if (array_key_exists($nombrePais, $ciudadesPorPais)) {
        echo "<p>Hola, $nombreUsuario. Selecciona una ciudad en $nombrePais:</p>";
        
        echo "<form action='bienvenida.php' method='GET'>
        <input type='hidden' name='nombreUsuario' value='$nombreUsuario'>
        <input type='hidden' name='nombrePais' value='$nombrePais'>
        <label for='ciudad'>Ciudad:</label>
        <select name='ciudad' required>";
        
        // mostrar las ciudades como opciones en el formulario
        foreach ($ciudadesPorPais[$nombrePais] as $ciudad) {
            echo "<option value='$ciudad'>$ciudad</option>";
        }
        
        echo "</select><br><br>
             <input type='submit' value='Enviar'>
             </form>";
    } else {
        // mensaje si no hay ciudades disponibles para el pais seleccionado
        echo "<p>No hay ciudades disponibles para el pais seleccionado.</p>";
    }
    
} else {
    // mostrar mensaje de error si el nombre no es valido
    echo "<p style='color:red;'>El nombre de usuario no es valido</p>";
}
?>

</body>
</html>