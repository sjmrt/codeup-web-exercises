<?php

function validateNumber($a, $b)
{
	return is_numeric($a) && is_numeric($b);
}

function validateNotZero($b)
{
	return $b == 0; 
}

function errorMessage($a, $b, $errortype)
{
	switch ($errortype) {
		case 'nonNumeric':
			echo "Error! You must enter two numbers, you entered {$a} and {$b} ";
			break;
		
		case 'divideByZero':
			echo "Error, you can't divide by zero! You entered {$a} and {$b} ";
			break;

		default:
			echo "Error not found!";
			break;
	}
}		

function add($a, $b)
{
    if(validateNumber($a, $b)){
    	return $a + $b;
    } else { 
    	errorMessage($a, $b, 'nonNumeric');
    }
}

function subtract($a, $b)
{
	if(validateNumber($a, $b)){
		return $a - $b;
	} else {
    	errorMessage($a, $b, 'nonNumeric');
    }
}

function multiply($a, $b)
{
	if(validateNumber($a, $b)){
		return $a*$b;
	} else {
    	errorMessage($a, $b, 'nonNumeric');
    }	
}

function divide($a, $b)
{
	if(!validateNumber($a, $b)){
		errorMessage($a, $b, 'nonNumeric');
	} else if(validateNotZero($b)){
		errorMessage($a, $b, 'divideByZero')
	} else {
    	return $a/$b;
    }
}

function modulus($a, $b)
{
	if(validateNumber($a, $b)){
		return $a%$b;
	} else {
    	errorMessage($a, $b, 'nonNumeric');
    }
}

//solve multiply function using add function and for loop
function addtwo($a, $b)
{
	if(validateNumber($a, $b)){
		$sum = 0;
		for($i = 0 ; $i<$b; $i++){
			$sum = $sum + $a;
		}
		return $sum;
	} else {
    	errorMessage($a, $b, 'nonNumeric');
    }
}

echo add(6,3) . PHP_EOL;

echo subtract(12,3) . PHP_EOL;

echo multiply(3,3) . PHP_EOL;

echo divide(18,2) . PHP_EOL;

echo modulus(19,10) . PHP_EOL;

echo addtwo(3,3) . PHP_EOL;

?>