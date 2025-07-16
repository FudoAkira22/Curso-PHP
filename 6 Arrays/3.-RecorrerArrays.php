<h1>Acceder arrays</h1>
<h3>Recorrer arrays mediante for</h3>

<?php
    $index_array = ["Banana","Aple","Cherry",];
$length = count($index_array);//Es para saber la cantidad de elementos que tiene 
    for($i = 0; $i < $length; $i++){
        echo $index_array[$i]."<br>";
    }
?>