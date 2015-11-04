<?php

$a = 2;

do { 
	echo ($a) . PHP_EOL;
	
	$a = $a*$a;

} while ($a < 1000000);

?>