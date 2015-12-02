<?php

$random = mt_rand(1, 100);
$guesscount = 0;

do	{fwrite(STDOUT, 'Guess a number ');

	$guess = fgets(STDIN);

	if ($guess == $random){
		fwrite(STDOUT, "Correct! It took you {$guesscount} tries");
		} else if($guess > $random){
			fwrite(STDOUT, "Too High! ");
		} else if($guess < $random){
			fwrite(STDOUT, "Too Low! ");
		} 
	$guesscount+=1;

} while ($guess != $random);

?>