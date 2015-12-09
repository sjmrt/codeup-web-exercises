<?php

require 'model_config.php';
require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$delete = "TRUNCATE users;";

$dbc->exec($delete);
	
$users = [
	['first_name'       => 'Sara',            
    'last_name'   	    => 'Thompson', 
    'email'         	=> 'yes@yes.com',          
    'phone' 			=> '8308886666', 
    'street_address_1'  => '5453 Fake st', 
    'street_address_2'  => '',
    'city'      		=> 'Utopia',
    'state'      		=> 'TX',
    'zip'     			=> '78666',
    ],
    ['first_name'       => 'No',            
    'last_name'   	    => 'Pants', 
    'email'         	=> 'no@pants.com',          
    'phone' 			=> '1234567890', 
    'street_address_1'  => '123 Not Real blvd', 
    'street_address_2'  => 'Apt 25',
    'city'      		=> 'No',
    'state'      		=> 'NO',
    'zip'     			=> '44444',
    ]
];

$stmt = $dbc->prepare('INSERT INTO users (first_name, last_name, email, phone, street_address_1, street_address_2, city, state, zip) VALUES (:first_name, :last_name, :email, :phone, :street_address_1, :street_address_2, :city, :state, :zip)');

foreach($users as $user){
	$stmt->bindValue(':first_name', $user['first_name'], PDO::PARAM_STR);
	$stmt->bindValue(':last_name', $user['last_name'], PDO::PARAM_STR);
	$stmt->bindValue(':email', $user['email'], PDO::PARAM_STR);
	$stmt->bindValue(':phone', $user['phone'], PDO::PARAM_STR);
	$stmt->bindValue(':street_address_1', $user['street_address_1'], PDO::PARAM_INT);
	$stmt->bindValue(':street_address_2', $user['street_address_2'], PDO::PARAM_STR);
	$stmt->bindValue(':city', $user['city'], PDO::PARAM_STR);
	$stmt->bindValue(':state', $user['state'], PDO::PARAM_STR);
	$stmt->bindValue(':zip', $user['zip'], PDO::PARAM_STR);

	$stmt->execute();
}