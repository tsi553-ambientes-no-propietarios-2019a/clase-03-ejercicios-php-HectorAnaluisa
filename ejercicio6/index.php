<?php

/**

Crear una función que determine si una palabra contiene las 5 vocales sin repetir ninguna. Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */



 //Héctor Analuisa 

 function buscaVocales(){
    $shalala = 'Ministerio';
    $buscaA = substr_count($shalala, 'a') + substr_count($shalala, 'A'); 
    $buscaE = substr_count($shalala, 'e') + substr_count($shalala, 'E'); 
    $buscaI = substr_count($shalala, 'i') + substr_count($shalala, 'I'); 
    $buscaO = substr_count($shalala, 'o') + substr_count($shalala, 'O'); 
    $buscaU = substr_count($shalala, 'u') + substr_count($shalala, 'U'); 
    $numeroTOTAL = strlen($shalala);
    echo "EL NUMERO TOTAL DE CARACTERES DE LA PALABRA ( $shalala ) es: $numeroTOTAL"; 
    echo "<br>"; 
    if($buscaA == 1 and $buscaE == 1 and $buscaI == 1 and $buscaO == 1 and $buscaU == 1){
        echo "La palabra ($shalala) contiene todas las vocales"; 
    }else{
        echo "La palabra ($shalala) NO contiene todas las vocales :(";
    }
}
    echo "<br>";
    buscaVocales(); 
    echo "<br>";

?>




?>