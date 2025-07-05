<?php
$a = 5;
$b = "5";
$c = 10;

//Este es el de igualdad
//Solo compara que los dos sean iguales
//Aunque no sean del mismo tipo de dato
var_dump($a == $b); //True
print "<br>";

//Identico
//Este compara incluso el tipo de dato
var_dump($a === $b);  // false
print "<br>";

//Diferente de
//Compara si a es diferente a c
var_dump($a != $c);   // true
print "<br>";

//Diferente
//tambien si son de diferente tipo de dato
var_dump($a !== $b);  // true
print "<br>";

//Menor que
//Si a es menor a c
var_dump($a < $c);    // true
print "<br>";

//mayor que 
//Si a es mayor a c
var_dump($a > $c);    // false
print "<br>";

//Menor igual que
//compara si a es menor o igual a 5
var_dump($a <= 5);    // true
print "<br>";

//Mayor igual que 
//Si a es mayor o igual a 6
var_dump($a >= 6);    // false
print "<br>";

//Combinado o spaceship
/**
    * -1 si el valor de la izquierda es menor que el de la derecha.
    *0 si los valores son iguales.
    *1 si el valor de la izquierda es mayor que el de la derecha.
 */
var_dump($a <=> $b);  // 0
print "<br>";

?>