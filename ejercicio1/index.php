<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */

echo '**********************************************************************************FOR'; 
echo '<br>'; 
//**********************************************************************************FOR

for ($i = 0; $i <= 10; $i= $i+2) {
   $multiplicacion = $i*2; 
   echo $i.' x '. 2 .' = '.$multiplicacion;
   echo '<br>';
}

echo '<br>';
echo '<br>'; 
echo '<br>'; 




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