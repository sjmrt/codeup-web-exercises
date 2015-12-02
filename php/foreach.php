<?php

$things = array(
	'Sgt. Pepper', 
	"11", 
	null, 
	array(1,2,3), 
	3.14, 
	"12 + 7", 
	false, 
	(string) 11);

foreach($things as $value){
	if(is_scalar($value)){
		echo "$value" . PHP_EOL;
	} elseif(is_array($value)){
		foreach($value as $arrays){
			echo "$arrays" . PHP_EOL;
		}
	} elseif(is_null($value)){
		echo "NULL" . PHP_EOL;
	} elseif(is_bool($value)){
		echo "BOOLEAN" . PHP_EOL;
	}
}