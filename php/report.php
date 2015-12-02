<?php


	
// $reportArray = explode("\n", trim($reportString));

$filename = "report.txt";
$handle = fopen($filename, "r");
$lines = [];

if ($handle) 
{
    while (($line = fgets($handle)) !== false) 
    {
      if (length($lines) >=6) 
      {
        array_push($lines,$line);
      }
    }
    fclose($handle);
} else {
    echo "Error opening the file.";
} 

$strings = explode($lines,',');

var_dump($strings);



