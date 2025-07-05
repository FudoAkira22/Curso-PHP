<?php
/*
'' o ""
 */

$nombre = 'Erick';
$apellido = "Medina";
$title = "My site";

$content = " 'Lorem' ipsum dolor sit amet consectetur adipisicing elit. Quis placeat velit blanditiis pariatur quos. Sapiente exercitationem, error corporis, aut quidem molestias, voluptatem magni atque et eos numquam debitis blanditiis possimus.";
print <<<EOD
<header>$title</header>
<body>
$content
</body>
EOD;
print '<hr>';
print "El creador se llama $nombre";
?>