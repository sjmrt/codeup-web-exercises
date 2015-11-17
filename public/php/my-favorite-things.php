<?php
function pageController()
{
	$thingsIlike = [
		'Raindrops on Roses',
		'Whiskers on Kittens',
		'Bright Copper Kettles',
		'Warm Woolen Mittens',
		'Brown Paper Packages',
		'Cream Colored Ponies',
		'Crisp Apple Strudels',
	]

	return array(
		'thingsIlike' => $thingsIlike
	);
}

extract(pageController());
?>

<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<title>These are a few of my favorite things</title>
</head>
<body>
	<h2> These are a few of my favorite things </h2>
	<ul class="list-group">
	<?php foreach($thingsIlike as $favoriteThings): ?>
		<li class="list-group-item"><?= echo $favoriteThings; ?></li>
	<?php endforeach; ?>
	</ul>
</body>
</html>

