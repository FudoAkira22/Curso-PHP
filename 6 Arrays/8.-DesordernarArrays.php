<?php
echo "<h1>Desordenar arrays</h1>";
echo "<p><b>shuffle()</b>: Reorganiza  aleatroriamente los elemento.</p>";
$frutas = ["Manzana", "Banana", "Pera", "Uva"];
shuffle($frutas);
print_r($frutas);
echo "<hr>";

echo "<p><b>array_rand()</b>: Solo trae un elemento random.</p>";

$colores = ["rojo", "azul", "verde", "amarillo"];
$claveAleatoria = array_rand($colores);
echo "$colores[$claveAleatoria]";  // Ejemplo: "verde"
echo "<hr>";

/**
 * Usa **shuffle()** si quieres desordenar todos los elementos del array.
*Usa **array_rand()** si solo necesitas uno o varios elementos aleatorios, pero sin tocar el array original. */

?>