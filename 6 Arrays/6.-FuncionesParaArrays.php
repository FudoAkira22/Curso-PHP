<h1>Funciones para errays</h1>
<?php
$frutas = ["Manzana","Pera","Platano"];
?>


<p><b>count():</b> Devuelve el numero de elementos de un array.</p>
<?php
echo count($frutas);
echo "<hr>";
?>

<p><b>array_push():</b> Inserta uno o mas elementos al final de un array.</p>
<?php
print_r($frutas);//Imprime informacion legibre para humanos sobre una variable
array_push($frutas,"Mango","Cebolla");
echo "<br>";
print_r($frutas);
echo "<hr>";
?>

<p><b>array_pop():</b> Elimina y devuelve el ultimo elemento de un array.</p>
<?php
print_r($frutas);
$elemento_final = array_pop($frutas);
print "<br>".$elemento_final."<br>";
print_r($frutas);
echo "<hr>";
?>

<p><b>array_shift(): </b> Elimina y devuelve el primer elemento de un array</p>
<?php
print_r($frutas);
$elemento_inicial = array_shift($frutas);
print "<br>".$elemento_inicial."<br>";
print_r($frutas);
echo "<hr>";
?>

<p><b>array_unshift(): </b> Inserta uno o mas elementos al inicio de un array</p>
<?php
print_r($frutas);
array_unshift($frutas,"Limones","Fresas");
print "<br>".$elemento_inicial."<br>";
print_r($frutas);
echo "<hr>";
?>

<p><b>array_mergeme(): </b> Combina uno o mas elementos en un solo array</p>
<?php
$frutas1 = ["Aguacate","Melon"];
$frutas2 = ["papaya","chamoy"];
$juntas = array_merge($frutas1,$frutas2);
print_r($juntas);
echo "<hr>";
?>

<p><b>array_slice(): </b> Devuelve una opcion de un array</p>
<?php
print_r($frutas);
//Estraer los primero tres elementos
$slice = array_slice($frutas,0,3);
print "<br>";
print_r($slice);
echo "<hr>";
?>

<p><b>array_reverse():</b> Invierte un array</p>
<?php
print_r($frutas);
$reverse = array_reverse($frutas);
print "<br>";
print_r($reverse);
echo "<hr>";
?>

<p><b>array_unique():</b> Elimina valores duplicados de un array</p>
<?php
print_r($frutas);
$unique = array_unique($frutas);
print "<br>";
print_r($unique);
echo "<hr>";
?>