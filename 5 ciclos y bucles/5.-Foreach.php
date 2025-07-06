<?php
// =====================================
// 🔁 FOREACH – Para recorrer arrays
// =====================================
echo "🔁 Ejemplo de FOREACH <br>";
$colores = ["Rojo", "Verde", "Azul"];
foreach ($colores as $color) {
    echo "Color: $color<br>";
}

/**
 * Foreach es ideal para recorrer arrays
 * Puedes obtener clave y valor si lo necesitas:
 */
echo "<br>🔑 Foreach con clave => valor<br>";
$persona = [
    "nombre" => "Erick",
    "edad" => 25,
    "ocupacion" => "Programador"
];

foreach ($persona as $clave => $valor) {
    echo "$clave: $valor<br>";
}
?>