<?php

$person1 = [
	'first_name' => 'Amy',
	'last_name' => 'Wong',
	'email' => 'marsprincess@hotmail.com',
	'phone' => '1800HOTLINEBLING'
];

$person2 = [
	'first_name' => 'Bob',
	'last_name' => 'Belcher',
	'email' => 'burgerbob@gmail.com',
	'phone' => '555-555-5555'
];

$person3 = [
	'first_name' => 'Tina',
	'last_name' => 'Belcher',
	'email' => 'ilovebutts@ymail.com',
	'phone' => '555-555-butt'
];

echo $person2['first_name'] . ' ' . $person2['last_name'];

$test = ['person1' => $person1, 'person2' => $person2];

var_dump($test);

$test['person3'] = $person3;

var_dump($test); 

?>