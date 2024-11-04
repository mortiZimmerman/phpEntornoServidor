<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""></form>
<?php 
//expresion regular
$expresionRegular = "/^[A-Z][a-zA-Z]*$/";
//metodo de recogida de nombre de usuario
$nombreUsuario = $_GET['nombreUsuario'];
//metodo de recogida del pais seleccionado
$nombrePais = $_GET['Paises2'];
//Comprobacion de expresion regular y segun si está correcta filtra el nombre del pais recogido en el anterior formulario y no es valido aparece "nombre de usuario no valido"
if(preg_match($expresionRegular,$nombreUsuario)){
    
    switch($nombrePais){

        case "España":
        //poner array de ciudades
        break;
        case "Alemania":
            //poner array de ciudades
        break;
        case "Portugal":
        //poner array de ciudades
        break;
        case "Francia":
            //poner array de ciudades
        break;
        case "Noruega":
            //poner array de ciudades
        break;
        case "Suecia":
            //poner array de ciudades
        break;
        case "Italia":
            //poner array de ciudades
        break;
        case "Grecia":
            //poner array de ciudades
        break;
        case "Armenia":
            //poner array de ciudades
        break;
        case "Rumania":
            //poner array de ciudades
        break;
        case "Suiza":
            //poner array de ciudades
        break;
        case "Albania":
            //poner array de ciudades
        break;
        case "Andorra":
            echo "texto prueba";
        break;
    }

}else{
    echo "El nombre de usuario no es valido";
}
?>

</body>
</html>