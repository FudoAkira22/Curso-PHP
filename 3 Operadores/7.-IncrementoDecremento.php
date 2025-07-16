<?php
$a = 5;

//
echo "Pre-incremento: " . ++$a . "<br>"; // 6
echo "Post-incremento: " . $a++ . "<br>"; // 6, luego se vuelve 7
$a++;//8
echo "Incremento: " . $a . "<br>";
echo "Valor actual: $a" . "<br>";

echo "Pre-decremento: " . --$a . "<br>"; // 7
echo "Post-decremento: " . $a-- . "<br>"; // 6
$a--;//5
echo "Decremento: " . $a . "<br>";
echo "Valor final: $a" . "<br>";

?>