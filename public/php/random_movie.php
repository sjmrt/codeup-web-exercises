<?php
$inputFile = "movies.txt";
$outputFile = 'sorted_movies.txt';

// Read in a file, retur contents as an array
function readLines($inputFile)
{
	$handle = fopen($inputFile, 'r');

	$contents = fread($handle, filesize($inputFile));

	$lines = explode(PHP_EOL, trim($contents));

	fclose($handle);

	return $lines;
}

// Write contents of an array to a file
function writeLines($outputFile, $lines)
{
	$handle = fopen($outputFile, 'w')
	
	fwrite($handle, implode(PHP_EOL, $lines));

	fclose($handle);
}

// Pick a random movie from an array
function randomMovie()
{
	$key = array_rand($movies);

	return $movies[$key];
}

$movies = readLines($inputFile);

echo "Let's watch " . randomMovie($movies) . "!\n"; 

sort($movies);

writeLines($outputFile, $movies);