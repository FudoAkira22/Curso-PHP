<p><b>sort(): </b> Orden ascendente</p>
<?php
$numeros = [4, 2, 8, 1];
sort($numeros);  // Resultado: [1, 2, 4, 8]
print_r($numeros);
echo "<hr>";
?>


<p><b>rsort(): </b> Orden descendente </p>
<?php
$numeros = [4, 2, 8, 1];
rsort($numeros);  // Resultado: [1, 2, 4, 8]
print_r($numeros);
echo "<hr>";
?>


<p><b>asort(): </b> Ascendente</p>
<?php
$edades = ["Juan" => 30, "Ana" => 25, "Luis" => 35];
asort($edades);  // Ordena por valores: Ana, Juan, Luis
print_r($edades);
echo "<hr>";
?>

<p><b>arsort(): </b> Descendente </p>
<?php
$edades = ["Juan" => 30, "Ana" => 25, "Luis" => 35];
arsort($edades);  // Ordena por valores: Luis, Juan, Ana
print_r($edades);
echo "<hr>";
?>


<p><b>ksort(): </b> Ascendente </p>
<?php
$edades = ["Juan" => 30, "Ana" => 25, "Luis" => 35];
ksort($edades);  // Ordena por claves: Ana, Juan, Luis
print_r($edades);
echo "<hr>";
?>

<p><b>krsort(): </b> Descendente  </p>
<?php
$edades = ["Juan" => 30, "Ana" => 25, "Luis" => 35];
krsort($edades);  // Ordena por claves: Luis, Juan, Ana
print_r($edades);
echo "<hr>";
?>