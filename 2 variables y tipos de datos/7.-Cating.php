<?php
/**
 * Forzar que un dato tenga un tipo 
 * en especifico
 */

 $a = 3.3;
//Se forzara que tome el dato entero
//Esto es un cast
print (integer) $a."<br>";//Esto mandara solo 3
var_dump((integer)$a);
print "<hr>";
var_dump((string)$a);//Esto lo hara string
print "<hr>";
print (float)$a;
print "<hr>";
print (bool)$a;
print "<hr>";
//Esto es una funcion
//Puede  aceptar mas de un valor
var_dump(intval($a));//Esta forma tambien es parecida
//floatval, strval
print "<hr>";
settype($a,"integer");//Este ya lo trasforma
var_dump($a);
print "<hr>";
settype($a,"string");//Este ya lo trasforma
var_dump($a);
print "<hr>";
//Este solo trae el tipo de dato
print gettype($a);//string
?>