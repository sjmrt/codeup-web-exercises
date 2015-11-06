<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
	return $a - $b;
}

function multiply($a, $b)
{
	return $a*$b;	
}

function divide($a, $b)
{
	return $a/$b;
}

function modulus($a, $b)
{
	return $a%$b;
}

//solve multiply function using add function and for loop
function addtwo($a, $b){
	$sum = 0;
	for($i = 0 ; $i<$b; $i++){
		$sum = $sum + $a;
	}
	return $sum;
}

echo add(3,5) . PHP_EOL;

echo subtract(5,1) . PHP_EOL;

echo multiply(3,5) . PHP_EOL;

echo divide(4,1) . PHP_EOL;

echo modulus(3,2) . PHP_EOL;

echo addtwo(4,5) . PHP_EOL;

?>