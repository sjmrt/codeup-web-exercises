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
	if (is_integer($value)){
		var_dump("{$value} is an integer." . PHP_EOL);
	} else if (is_float($value)){
		var_dump("{$value} is a float." . PHP_EOL);
	} else if (is_bool($value)){
		var_dump("{$value} is boolean." . PHP_EOL);
	} else if (is_array($value)){
		var_dump($value);
	} else if (is_null($value)){
		var_dump("{$value} is null." . PHP_EOL);
	} else if (is_string($value)){
		var_dump("{$value} is a string." . PHP_EOL);
	}
}