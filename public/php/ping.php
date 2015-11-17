<?php

require_once('functions.php');

function pageController()
{
	if(inputHas('game-over')){
		$gameOver = inputGet('game-over');

		return [
		'gameOver' => $gameOver
		];
	}

	$counter = inputHas('counter') ? inputHas('counter') : 0;
	$hit = $counter + 1;
	$miss = $counter;

	return [
	'counter' => $counter,
	'hit' => $hit,
	'miss' => $miss
	];
	
}

extract(pageController());

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>PING</title>
</head>
<body>
	<?php if(isset($gameOver)): ?>
		<a href="pong.php"> New Game</a>
	<?php else: ?>
		<h2 class="counter">COUNTER:<?= $counter ?></h2>
		<a href="pong.php?counter=<?= $hit ?>"> HIT </a>
		<a href="pong.php?game-over=true">MISS</a>
	<?php endif ?>
</body>
</html>