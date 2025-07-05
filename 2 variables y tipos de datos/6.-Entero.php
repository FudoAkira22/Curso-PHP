<?php
//Estos son literal solo enteros incluidos los negativos

$numero = 1;
print $numero;
//Tambien la notacion octal
$n2 = 0123;//=83
print $n2; 
//Tambien la notacion hexadecimal
$n3 = 0x1A;//=26
print "<br>".$n3;
//Tambien la notacion binaria
$a = 0b11111111;//255
print "<br> $a";
print "<hr>";
print PHP_INT_SIZE;//Este es para saber el tamaño en bits
print "<hr>";
print PHP_INT_MAX;//Este es para saber hasta que numero soporta

?>