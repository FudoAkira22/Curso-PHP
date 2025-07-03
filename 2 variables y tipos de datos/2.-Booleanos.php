<?php
/*
false = 0 = null = 0.0
true = 1
usarlas en minusculas
*/
//$isAdmin = false;
//Para forzar el tipo de dato en una variable
$isAdmin = (bool) 1;
//var_dump devuelve el tipo de la variable
echo var_dump($isAdmin);

if($isAdmin == true){
    echo "Bienvenido";
}else{
    echo "Quien eres?";   
}
?>