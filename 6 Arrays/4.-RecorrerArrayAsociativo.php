<h1>Acceder arrays</h1>
<h3>Recorrer arrays asociativos mediante for</h3>
<?php
$assoc_array=[
    'Name' => 'Erick',
    'Lastname' => 'Medina',
    'age' => 24
];

// Obtener todas las claves del array asociativo y almacenarlas en un array
$keys = array_keys($assoc_array);

// Contar cuántas claves hay en el array
$length = count($keys);

// Recorrer todas las claves una por una
for ($i = 0; $i < $length; $i++) {
    // Obtener la clave actual
    $key = $keys[$i];

    // Imprimir el valor asociado a la clave actual del array asociativo
    echo $key." : ".$assoc_array[$key]."<br>";
}

?>