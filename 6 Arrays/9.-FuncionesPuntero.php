<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Funciones de puntero en arrays</title>
</head>
<body>
    <h1>Funciones de puntero en arrays</h1>

    <p>
        En PHP, los arrays tienen un <strong>puntero interno</strong> que indica cuál es el "elemento actual".
        Podemos mover ese puntero para recorrer el array paso a paso, sin usar bucles.
        Esto es útil para navegar manualmente por los elementos.
    </p>

    <p>
        A continuación te mostramos las funciones principales para controlar ese puntero:
    </p>

    <ul>
        <li><strong>current()</strong>: Devuelve el valor del elemento actual (donde está el puntero).</li>
        <li><strong>next()</strong>: Mueve el puntero al siguiente elemento y devuelve su valor.</li>
        <li><strong>prev()</strong>: Retrocede el puntero al elemento anterior y devuelve su valor.</li>
        <li><strong>end()</strong>: Mueve el puntero al último elemento y devuelve su valor.</li>
        <li><strong>reset()</strong>: Mueve el puntero al primer elemento y devuelve su valor.</li>
    </ul>

    <h3>🧪 Ejemplo práctico con un array de frutas:</h3>

    <?php
    $frutas = ["apple", "banana", "cherry", "date"];

    echo "<strong>Array original:</strong> ";
    echo implode(", ", $frutas) . "<br><br>";

    echo "<strong>current():</strong> " . current($frutas) . " ← el puntero inicia aquí<br>";

    echo "<strong>next():</strong> " . next($frutas) . " ← avanza al siguiente elemento<br>";
    echo "<strong>next():</strong> " . next($frutas) . " ← avanza nuevamente<br>";

    echo "<strong>prev():</strong> " . prev($frutas) . " ← retrocede un elemento<br>";

    echo "<strong>end():</strong> " . end($frutas) . " ← va al último elemento<br>";

    echo "<strong>reset():</strong> " . reset($frutas) . " ← regresa al primero<br>";
    ?>
</body>
</html>
