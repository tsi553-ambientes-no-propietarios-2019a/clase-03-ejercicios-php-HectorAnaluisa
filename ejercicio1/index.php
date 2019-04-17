<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */
 echo '**********************************************************************************Do While'; 
  echo '<br>'; 
  
	$cont = 0; 
do {
	$multiplicacion = $cont*2; 
    echo $cont.' x '. 2 .' = '.$multiplicacion;
	echo '<br>'; 
	$cont = $cont+ 2; 
	
 }while($cont <= 10);
 
 
 
 
 
 echo '<br>';
 echo '<br>'; 
 echo '<br>'; 
 echo '**********************************************************************************While'; 
 echo '<br>'; 
 
 $cont = 0; 
 
 
 while ($cont <= 10){
	$multiplicacion = $cont*2; 
    echo $cont.' x '. 2 .' = '.$multiplicacion;
	echo '<br>'; 
	$cont = $cont+ 2; 
 }
 
 
 
 echo '<br>'; 
 
 
 
?>