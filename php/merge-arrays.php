<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam',];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$query = 'jack';


function searchArray($query, $names)
{
	if(array_search($query, $names) !== false){
		return "TRUE" . PHP_EOL;
	} else {
		return "FALSE" . PHP_EOL;
	} 
}

function compareArray($names, $compare) 
{
	$match = 0;
	foreach ($names as $name) {
		if(array_search($name, $compare) !== false)
		{
			$match++;
		}
	}	
	return $match;
}

function combine_arrays($names, $compare)
{
	$newArray = [];

	foreach ($names as $index => $name)
	{
		if(array_search($name, $compare) !== false)
		{
			array_push($newArray, $name);
		} else 
		{
			array_push($newArray, $name, $compare[$index]);
		}
	}
	return $newArray;
}

print_r(combine_arrays($names,$compare));

echo searchArray('Dana', $names) . PHP_EOL;

echo searchArray($query, $names) . PHP_EOL;

echo compareArray($names,$compare) . PHP_EOL;