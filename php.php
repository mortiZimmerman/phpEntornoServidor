<?php 
//expresion regular
$expresionRegular = "/^{[A-Z][a-zA-Z]}\s[a-zA-Z]*$/";

$nombreUsuario = $_GET['nombreUsuario'];
if(preg_match($expresionRegular,$nombreUsuario)){
    echo "nombre de usuario valido";
}else{
    echo "El nombre de usuario no es valido";
}
?>
