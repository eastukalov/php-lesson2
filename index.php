<?php
	$x = rand(0,100);
	echo "Число ".$x;
	$one=1;
	$two=1;

  while ($one < $x) {
  	$three=$one;
  	$one+=$two;
  	$two=$three;
  	echo '<br>', $one, PHP_EOL, $two;
  }
  
  if ($one==$x) {
  		echo '<br>Задуманное число входит в числовой ряд';
  	}
  else {	
  	echo '<br>Задуманное число НЕ входит в числовой ряд';
	}
?>