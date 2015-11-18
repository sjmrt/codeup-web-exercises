<?php

require_once('../../Input.php');

function pageController()
{
	if(Input::has('game-over')){
		$gameOver = Input::get('game-over');

		return [
		'gameOver' => $gameOver
		];
	}

	$counter = Input::has('counter') ? Input::get('counter') : 0;
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
	<title>PONG</title>
</head>
<body>
	<?php if (isset($gameOver)): ?>
		<a href="ping.php"> New Game</a>
	<?php else: ?>
		<h2 class="counter">COUNTER:<?= $counter ?></h2>
		<a href="ping.php?counter=<?= $hit ?>"> HIT </a>
		<a href="ping.php?game-over=true">MISS</a>
	<?php endif ?>
</body>
</html>