<?php
   
  echo 'Задание 3</br>';
  
  /*Задание 2. Напишите скрипт, определяющий максимальное из четырех чисел 
  $a, $b, $c, $d. */
  
  $a = 4;
  $b = 3;
  $c = 2;
  $d = 1;
	
  if($a > $b)
	$max = $a;
  else
	$max = $b;
	
  if($max < $c)
	$max = $c;
	
  if($max < $d)
	 $max = $d;
 
  echo "</br>Из чисел $a, $b, $c, $d максимальное: $max";
  
  
?>