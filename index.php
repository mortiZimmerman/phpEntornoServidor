<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Viajes MNO</title>
</head>
<body>
   <h1>Gestor de viajes MNO</h1>
   <form action="php.php" method="GET">
       <?php
        echo "Ingrese su nombre de usuario:  
        <input type='text' name='nombreUsuario' required><br>
        <label for='Paises2'>Seleccione el pais deseado:</label>
        <select name='Paises2' required>";

        // array de paises y ordenacion
        $paises = array("Espana","Alemania","Portugal","Francia","Noruega","Suecia","Italia","Grecia","Armenia","Rumania","Suiza","Albania","Andorra");
        sort($paises);
        
        // impresion de array paises
        foreach($paises as $p){
            echo "<option value='$p'>$p</option>";
        }

        echo "</select><br>";
        
        ?>
        <input type="submit" value="Enviar"><br>
   </form>

   <?php
   //validacion despues de enviar el formulario
   if (isset($_GET['nombreUsuario']) && isset($_GET['Paises2'])) {
       $nombreUsuario = $_GET['nombreUsuario'];
       $paisSeleccionado = $_GET['Paises2'];

       // expresion regular
       if (!preg_match("/^[A-Z][a-zA-Z]*( [A-Z][a-zA-Z]*)*$/", $nombreUsuario)) {
           echo "<p style='color:red;'>El nombre debe comenzar con mayuscula y no tener numeros o caracteres especiales.</p>";
       } else {
           // redirigir si el nombre es valido
           header("Location: php.php?nombreUsuario=$nombreUsuario&Paises2=" . urlencode($paisSeleccionado));
           exit;
       }
   }
   ?>
</body>
</html>