<?php

date_default_timezone_set('America/Chicago');

$dayOfWeek = date('N');

switch($dayOfWeek) {
    case 1:
        echo "Monday" . PHP_EOL;
        break;
    case 2:
        echo "Tuesday" . PHP_EOL;
        break;
    case 3:
        echo "Wednesday" . PHP_EOL;
        break;
    case 4:
        echo "Thursday" . PHP_EOL;
        break;
    case 5:
        echo "Friday" . PHP_EOL;
        break;
    case 6:
        echo "Saturday" . PHP_EOL;
        break;
    case 7:
        echo "Sunday" . PHP_EOL;
        break;
    default:
    	echo "Everyday is Caturday" . PHP_EOL;
 }

 if($dayOfWeek == 1){
 	echo "Monday" . PHP_EOL;
 } else if($dayOfWeek == 2){
 	echo "Tuesday" . PHP_EOL;
 } else if($dayOfWeek == 3){
 	echo "Wednesday" . PHP_EOL;
 } else if($dayOfWeek == 4){
 	echo "Thursday" . PHP_EOL;
 } else if($dayOfWeek == 5){
 	echo "Friday" . PHP_EOL;
 } else if($dayOfWeek == 6){
 	echo "Saturday" . PHP_EOL;
 } else if($dayOfWeek == 7){
	echo "Sunday" . PHP_EOL;
 } else {
 	echo "Everyday is Caturday" . PHP_EOL;
 }