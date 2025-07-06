<?php
//Ciclo For
$num = 1;
for($i = 0; $i < 10; $i++){
    print $num++."<br>";
}
/**
 * esto se repite mientras la condicion sea verdadera
 * for(var ; condicion; iteraciones){
 * accion a realizar esa cantidad de veces
 * }
 */
print "<hr>";
 for($i = 1; $i <= 5; $i++){
    for($e = 1;$e <= $i; $e++){
     print"*";   
    }
    print "<br>";
 }

?>