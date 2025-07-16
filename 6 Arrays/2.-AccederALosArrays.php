<h1>Acceder a los arrays</h1>
<?php
$index_array = ["Apple","Banana","Cherry",1,2,3,true];
echo $index_array[2]."<br>";//Asi se accede a un array especifico
foreach ($index_array as $clave => $valor) {
    //$clave = index, $valor = a su contenido
    echo "$clave: $valor<br>";
}
echo "<hr>";
//-----------------------------------------------------------------
$assoc_array = [
    'name' => 'Erick',
    'lastname' => 'Medina',
    'age' => 23
];
echo "<br> Su nombre es ".$assoc_array['name']." su apellido es ".$assoc_array['lastname']." y su edad es ".$assoc_array['age']."<br>";
//-----------------------------------------------------------------
echo "<hr>";
echo "<br>";
$multi_array = [
    
        ["Apple","Banana","Cherry"],//[0][1] = Banana
        [True,false],//[1][1]=false
        [1,2,3,4,5]//[2][0]=1
];
echo $multi_array[0][1];
?>