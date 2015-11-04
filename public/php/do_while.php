<?php

$number = 100;

do { 
	if( $number % 5 == 0){
		echo $number.PHP_EOL;
	}
	$number--;

} while ($number >= -10);

?>