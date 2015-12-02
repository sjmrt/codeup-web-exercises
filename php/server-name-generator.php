<?php 
function pageController()
{
	$adjectives = ['Fluffy', 'Fuzzy', 'Sultry', 'Adorable', 'Gentle', 'Sexy', 'Classy', 'Charming', 'Foxy', 'Sightly', ];

	$nouns = ['Chainsaw', 'Screwdriver', 'Hacksaw', 'Lathe', 'Crusher', 'Impact Wench', 'Thickness Planer', 'Pneumatic Torch Wench', 'Alligator Shear', 'Biscuit Joiner'];

	$randomAdjectives = array_rand($adjectives);

	$randomNoun = array_rand($nouns);

	return array(
		'adjectives'       => $adjectives,
		'nouns'            => $nouns,
		'randomAdjectives' => $randomAdjectives,
		'randomNoun'       => $randomNoun
	);
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<title> What's your (server) name, what's your sign?</title>
</head>

<body>
	<div class="panel panel-info">
		<div class="panel-heading"><p>Name Your Server!</p></div>
		<div class="panel-body"><h1><?= $adjectives[$randomAdjectives] . " " . $nouns[$randomNoun] ?></h1></div>
	</div>
</body>

</html>


