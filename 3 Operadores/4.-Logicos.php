<?php
/**
 * and 0 &&
 * true && true = true
 * true && false = false
 * false && true = false
 * false && false = false
 * 
 * or o ||
 * true || true = true
 * true || false = true
 * false || true = true
 * false || false = false
 * 
 * xor
 * true xor true = false
 * true xor false = true
 * false xor true = true
 * false xor false = false
 * 
 * ! 
 * !$true = false
 * !$false = true
 */

$a = true;
$b = false;

var_dump($a && $b);   // false
print "<br>";

var_dump($a || $b);   // true
print "<br>";

var_dump(!$a);        // false
print "<br>";

var_dump($a and $b);  // false
print "<br>";

var_dump($a or $b);   // true
print "<br>";

var_dump($a xor $b);  // true
print "<br>";

?>