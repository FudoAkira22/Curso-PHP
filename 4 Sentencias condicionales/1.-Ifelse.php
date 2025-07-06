<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Comprobasion de datos</h1>

    <?php
    $edad = 69;
    $nombre  = "Erick";
    $registrado = true;

    if($edad >= 18 && $edad <= 69){
        echo "<p>Eres mayor de edad $nombre</p><br>";
        //Esto es un if dentro de un if
        if($registrado == true){
            echo "<p>Estas registrado puedes votar</p><br>";
        }else{
            echo "<p>No estas registrado</p><br>";
        }
    }elseif($edad >= 70){//Este es un elseif anidado
        echo "$nombre ya no deberias de votar";
    }else{
        echo "$nombre eres menor de edad no puedes votar";
    }

    //Forma alternativa de hacer un if
    echo "<hr>";

    if($registrado == true) print "<p>Bienvenido</p>";
    else print "<p>quien eres?</p>";

    /**
     * if():
     * accion a realizar
     * elseid():
     * accion
     * endif;
     */
    ?>
</body>
</html>