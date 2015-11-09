<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

function humanizedList($physicistsArray)
{
	$output = '';

	while(count($physicistsArray) > 0)
	{
    	$output .= array_pop($physicistsArray);

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


$famousFakePhysicists = humanizedList($physicistsArray);

echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";
