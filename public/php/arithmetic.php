<?php

function add($a, $b)
{
	if(is_numeric($a) && is_numeric($b))
	{
    	return $a + $b;
    } else 
    {
    	return "Error! Both arguments must be numbers!";
    }
}

function subtract($a, $b)
{
	if(is_numeric($a) && is_numeric($b))
	{
		return $a - $b;
	} else 
    {
    	return "Error! Both arguments must be numbers!";
    }
}

function multiply($a, $b)
{
	if(is_numeric($a) && is_numeric($b))
	{
		return $a*$b;
	} else 
    {
    	return "Error! Both arguments must be numbers!";
    }	
}

function divide($a, $b)
{
	if(((is_numeric($a) && is_numeric($b))) && ($a != 0 && $b !=0))
	{
		return $a/$b;
	} else 
    {
    	return "Error! Both arguments must be numbers not equal to zero!";
    }
}

function modulus($a, $b)
{
	if(is_numeric($a) && is_numeric($b))
	{
		return $a%$b;
	} else 
    {
    	return "Error! Both arguments must be numbers!";
    }
}

//solve multiply function using add function and for loop
function addtwo($a, $b)
{
	if(is_numeric($a) && is_numeric($b))
	{
		$sum = 0;
		for($i = 0 ; $i<$b; $i++){
			$sum = $sum + $a;
		}
		return $sum;
	} else 
    {
    	return "Error! Both arguments must be numbers!";
    }
}

echo add(6,3) . PHP_EOL;

echo subtract(12,3) . PHP_EOL;

echo multiply(3,3) . PHP_EOL;

echo divide(18,2) . PHP_EOL;

echo modulus(19,10) . PHP_EOL;

echo addtwo(3,3) . PHP_EOL;

?>