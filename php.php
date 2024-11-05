<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// expresion regular 
$expresionRegular = "/^[A-Z][a-zA-Z]*$/";

// metodos de recogida de datos 
$nombreUsuario = $_GET['nombreUsuario'];
$nombrePais = $_GET['Paises2'];

// validacion del nombre del usuario
    if (preg_match($expresionRegular, $nombreUsuario)) {
        
        // array asociativo
        $ciudadesPorPais = [
            "España" => ["Madrid", "Barcelona", "Valencia", "Sevilla", "Bilbao"],
            "Alemania" => ["Berlín", "Múnich", "Hamburgo", "Fráncfort", "Colonia"],
            "Portugal" => ["Lisboa", "Oporto", "Braga", "Coímbra", "Funchal"],
            "Francia" => ["París", "Marsella", "Lyon", "Toulouse", "Niza"],
            "Noruega" => ["Oslo", "Bergen", "Trondheim", "Stavanger", "Kristiansand"],
            "Suecia" => ["Estocolmo", "Gotemburgo", "Malmö", "Uppsala", "Örebro"],
            "Italia" => ["Roma", "Milán", "Nápoles", "Turín", "Palermo"],
            "Grecia" => ["Atenas", "Salónica", "Patras", "Heraclión", "Larisa"],
            "Armenia" => ["Ereván", "Gyumri", "Vanadzor", "Hrazdan", "Abovyan"],
            "Rumania" => ["Bucarest", "Cluj-Napoca", "Timișoara", "Iași", "Constanza"],
            "Suiza" => ["Zúrich", "Ginebra", "Basilea", "Berna", "Lausana"],
            "Albania" => ["Tirana", "Durrës", "Vlorë", "Shkodër", "Fier"],
            "Andorra" => ["Andorra la Vieja", "Escaldes-Engordany", "Encamp", "Sant Julià", "La Massana"]
        ];

        // v rificar que el pais seleccionado tenga ciudades en el array
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
            echo "<p>No hay ciudades disponibles para el país seleccionado.</p>";
        }
        
    } else {
        // mostrar mensaje de error si el nombre no es vaido
        echo "<p style='color:red;'>El nombre de usuario no es válido</p>";
    }
    ?>

</body>
</html>
