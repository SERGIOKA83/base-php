<?php

  echo 'Задание 1</br></br>';
  
  /*Задание 1. Напишите скрипт, которой для числа $x вычисляет значение $y, равное 
    1 – если $x положительно 
    0 – если $x равно 0 и 
    -1 – если $x отрицательно */
	
  echo 'Вариант 1</br>';
  $x = 2;

  //$y=;

  echo "Если х = $x, то y = ".($x <=> 0);
  
  
  
  
  
  echo '</br></br>Вариант 2</br>';
  
  $y=($x < 0)?-1:(($x > 0)?1:0); 
		
  echo "Если х = $x, то y = $y";
  
  
  
  

  echo '</br></br>Вариант 3</br>';
  
  if($x < 0) 
	  $y = -1;
  else
  {  
	if($x > 0)
	    $y = 1;
	else
	    $y = 0;	
  }
	  
  echo "Если х = $x, то y = $y";
    
?>