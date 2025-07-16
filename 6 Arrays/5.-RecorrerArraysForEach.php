<?php
//For each para indexado
$fruits = ["Manzana", "Pera", "Platano"];
foreach ($fruits as $fruta) {
    echo "$fruta <br>";
}
echo "<hr>";


//For each array asosicativo
$persona = [
    "Nombre" => "Jack",
    "Apellido" => "Sparrow"
];

foreach ($persona as $key => $value) {
    echo "$key : $value <br>";
}


echo "<hr>";

//Multidimensional
$multy = [
    ["Jack", "Gonzo", "Hulk"],
    [1, 2, 3, 4],
    [true]
];

$users = array(
    array("Nombre" => "Jack", "Apellido" => "Sparrow"),
    array("Nombre" => "Jack", "Apellido" => "Sparrow"),
    array("Nombre" => "Jack", "Apellido" => "Sparrow"),
);

foreach ($users as $user) {
    foreach ($user as $key => $value) {
        echo "$key : $value , ";
    }
    echo "<br>";
}

?>