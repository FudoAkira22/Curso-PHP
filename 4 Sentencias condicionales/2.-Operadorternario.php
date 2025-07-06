<?php
//Operador condicional o operador ternario
$edad = 17;
$msg = "";
//(condicion)?si se cumple : si no se cumple;
$msg = ($edad>=18)?"Eres mayor de edad ":"Eres menor de edad";

//Tambien se puede impirmir asi print ($edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";
print $msg;

//Ternario anidado
/*$edad = 70;
$msg = ($edad < 18) ? "Menor de edad" : (($edad < 65) ? "Adulto" : "Adulto mayor");
print $msg;
*/
?>