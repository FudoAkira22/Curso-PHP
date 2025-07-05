<?php
//Fusion null o null coalescen

$a = null;
$b = "Valor definido";
//Si no tiene valor la variable pone por defecto 
$resultado1 = $a ?? "Por defecto";
$resultado2 = $b ?? "Por defecto";

print "Resultado 1: $resultado1 <br>";
print "Resultado 2: $resultado2 <br>";
?>