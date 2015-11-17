<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

sort($physicistsArray);

function humanizedList($physicistsArray)
{
	$output = '';

	while(count($physicistsArray) > 0)
	{
    	$output .= array_shift($physicistsArray);

    	if(count($physicistsArray) > 1) 
    	{
      		$output .= ', ';
    	} 
    	elseif(count($physicistsArray) > 0) 
    	{
     		 $output .= ' and ';
    	}
 	}
 	return $output;
}


function humanizedlist($array, $sort = false)
{
	if($sort)
	{
	sort($array);
	}

	$lastItem = 'and ' . array_pop($array)
	
	array_push($array, $lastItem);
	$string = implode(', ', $array);
	return $string;
}


$famousFakePhysicists = humanizedList($physicistsArray);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";
