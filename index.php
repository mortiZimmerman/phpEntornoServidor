<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   Gestor de viajes MNO
   <form action="http://localhost/actividadEvaluable1/php.php" method="GET">
         <?php

         
        echo "Ingrese su nombre de usuario:  
        <input type='text' name='nombreUsuario' required><br>
        <label for='Paises'>Seleccione el país deseado:</label>
        <select name='Paises2' required>";

        
        //Aquí estan el array de los paises
        $paises = array("España","Alemania","Portugal","Francia","Noruega","Suecia","Italia","Grecia","Armenia","Rumania","Suiza","Albania","Andorra");
        //con esto podemos ordenar los paises en orden alfabetico
        sort($paises);
        //aqui imprimimos por pantalla todos los paises del array en el formulario
        foreach($paises as $p){
            $pais = $p;
            echo "<option value='paises'>$p</option>";
        }
        // validacion del nombre en php
        if (isset($_GET['nombreUsuario']) && isset($_GET['Paises2'])) {
            $nombreUsuario = $_GET['nombreUsuario'];
                
        // comprobamos que el nombre cumple con los requisitos
        if (!preg_match("/^[A-Z][a-zA-Z]*$/", $nombreUsuario)) {
                
            echo "<p style='color:red;'>El nombre debe comenzar con mayúscula y no tener números o caracteres especiales.</p>";
        } else {
        // redirigir a la siguiente página si el nombre es válido
            header("Location: php.php?nombreUsuario=$nombreUsuario&Paises2=" . urlencode($_GET['Paises2']));
            exit;
            }
        }
        ?>
         </select>
         <br>
        <input type="submit" value="Enviar"><br>

   </form>
   
</body>
</html>

