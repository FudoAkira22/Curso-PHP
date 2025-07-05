<?php
$name = 'Erick';
$lastname = 'Medina';
$age = 24;
//Se concatena con el .
print "mi nombre es ".$name." y mi apellido es ".$lastname;
echo "<hr>";
//Tambien se puede hacer esto
print "<br>mi nombre es $name y mi apellido es $lastname";

$todo = $name." su edad es ".$age." y su apellido ";
$todo .= $lastname;//Esto concatena al final la variable
print "<br>".$todo;
?>