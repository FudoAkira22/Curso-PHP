<h1>Crear array</h1>
<?php
//Array vacio
$empy_array = array();

//Array indexado 
$index_array = array(1,2,3,4,5,true,"Hola mundo");

//Array asociativo
$assoc_array = [
    'name' => 'Erick',
    'lastname' => 'Medina',
    'age' => 23
];

//Inicializar un array vacio y agregar elementos
$dynamic_array = [];
$dynamic_array[] = "Manzana"; //De esta forma se agrega
$dynamic_array[] = "Pera";
$dynamic_array[] = false;

//Arrays multidimensiconales

$multi_array = [
    
        ["Apple","Banana","Cherry"],
        [True,false],
        [1,2,3,4,5]
];

$users = array(
    array("Nombre" => "Jack","Apellido" => "Sparrow"),
    array("Nombre" => "Jack","Apellido" => "Sparrow"),
    array("Nombre" => "Jack","Apellido" => "Sparrow"),
)
?>