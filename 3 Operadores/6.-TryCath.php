<?php
/**
 * ================================================
 *      Apunte: Manejo de Excepciones en PHP
 * ================================================
 * El bloque try-catch permite capturar errores de ejecución
 * sin detener el programa por completo.
 * 
 * Estructura básica:
 * 
 * try {
 *     // Código que podría generar un error
 * } catch (Exception $e) {
 *     // Código para manejar el error
 * }
 * 
 * También se puede usar `finally`, que se ejecuta siempre.
 */
dividir(2,1);

 function dividir($a, $b){
    if($b == 0){
        //Lanzamos una excepcion peronalizada 
        throw new Exception("No se puede dividir entre 0");
    }
    return $a / $b;
 }

 try{
    echo "Intentando dividir... <br>";
    echo "Resultado: $resultado <br>";
 }catch(Exception $e){
 // Se ejecuta si hay un error (una excepción)
 echo "⚠️ Excepción capturada: " . $e->getMessage() ."<br>";
 }finally{
     // Se ejecuta siempre, haya o no error
    echo "Bloque finally ejecutado." . PHP_EOL;
 }

 /**
 * Cosas importantes:
 * - `throw`: lanza una excepción (objeto de tipo Exception)
 * - `catch`: captura la excepción (puedes tener varios catch)
 * - `finally`: bloque opcional que siempre se ejecuta
 * 
 * Puedes lanzar excepciones con tus propias clases personalizadas
 * extendiendo la clase Exception.
 */
?>