<?php
// =====================================
// ⛔ BREAK – Terminar el bucle
// =====================================
echo "<br>⛔ Ejemplo de BREAK<br>";
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        echo "Interrumpimos en $i con break<br>";
        break;
    }
    echo "Valor: $i<br>";
}

/**
 * Break detiene el bucle completamente
 * útil para cortar bucles infinitos o salidas tempranas
 *
 */



 // =====================================
// ↪️ CONTINUE – Saltar a la siguiente iteración
// =====================================
echo "<br>↪️ Ejemplo de CONTINUE<br>";
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        echo "Saltamos el valor $i con continue<br>";
        continue;
    }
    //En el 3 omitira esto y iniciara de nuevo
    echo "Valor: $i<br>";
}

/**
 * Continue omite el resto del bloque
 * y pasa a la siguiente vuelta del bucle
 */
?>