

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
         
         
        echo "Ingrese su nombre de usuario:  <input type='text' name='nombreUsuario' required><br>
        <label for='Paises'>Seleccione el país deseado:</label>
        <select name='Paises' required>";
        
        $paises = array("España","Alemania","Portugal","Francia","Noruega","Suecia","Italia","Grecia","Armenia","Rumania","Suiza","Albania","Andorra");
        sort($paises);
        foreach($paises as $p){
            $pais = $p;
            echo "<option value='paises'>$p</option>";
        }
        //(^[A-Z])
        ?>
         </select>
         <br>
        <input type="submit" value="Enviar"><br>

   </form>
   
</body>
</html>

